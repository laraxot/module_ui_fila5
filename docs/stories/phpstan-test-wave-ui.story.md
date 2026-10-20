---
title: PHPStan lane ui, test riespansi dal pull del 2026-10-20
type: story
module: UI
phase: implementazione, quality gate
status: done
created: 2026-10-20
updated: 2026-10-20
related:
  - ../../../Xot/docs/stories/phpstan-test-wave-regression.story.md
  - services-to-actions-ui.story.md
---

# PHPStan lane ui: test riespansi dal pull

Lane `ui` del run descritto nella [story di coordinamento](../../../Xot/docs/stories/phpstan-test-wave-regression.story.md).
Config PHPStan root immutata, nessun ignore, nessuna baseline, nessun commit.

## Misura

- Prima (baseline 2026-10-20 09:00, rimisurata con PHPStan sui file prima di toccarli): **720 errori in 40 file**
  (1 produzione, 39 test). Corrisponde alla somma del bucket `ui`.
- Dopo: **0 errori** sugli stessi 40 file (5 batch da 8 file, `--error-format=raw`, exit 0).
- `php -l` pulito su tutti i file toccati. Pest non eseguito: i test UI richiedono il database `ui`, che non esiste.

## Causa unica per 719 errori su 720

La storia del modulo (repo `Modules/UI`) mostra il merge `25803d34` (2026-10-20 09:09) tra l'auto-commit post-pull `294bbc20`
(genitori `f1085ef6` locale e `ea6a1c50` upstream) e la punta di `laraxot/dev` `afbc8d79`. Tredici file di test e `tests/Pest.php`
sono tornati alla forma scaffold di upstream. I loro blob pre-pull sono identici a quelli dell'8 ottobre (`f598da8a`),
quando il modulo era a 0 errori.

Scopo dei file prima del pull, per cluster:

| Cluster | Cosa garantiva | Cosa aveva portato il pull |
|---|---|---|
| `Pest.php` | Bootstrap vuoto con le regole del repo: Pest legge `Pest.php` solo dalla root, quindi funzioni libere qui sono codice morto; ogni test dichiara il proprio `uses(TestCase::class)` | `uses()->in('Feature','Unit')` globale (26 `pest.config.redundantLocalUse` sui file con `uses` locale), tre `expect()->extend` e sei funzioni helper su `Theme`/`Component`/`Asset` inesistenti (38 errori) |
| `UIBusinessLogicTest`, `WidgetBusinessLogicTest` | Regole di business sui modelli reali (`Category`, `Collection`) tramite `CategoryFactory::new()` e `CollectionFactory::new()` | Specifica per `Modules\UI\Models\{Theme,Component,Asset}` e `Services\{ComponentService,ThemeService}`: nessuna di queste classi esiste, nessuna migration crea le tabelle (241 + 76 errori) |
| `BaseCalendarWidgetTest` | Contratto del widget calendario con un widget anonimo tipizzato | Versione con `mixed` ovunque (145 errori) |
| `InlineDatePickerTest` | `InlineDatePicker` reale in `Modules\UI\Filament\Forms\Components` | Namespace inventato `Filament\Forms\Forms\Components\InlineDatePicker` (73 errori) |
| `DarkModeToggleTest`, `CategoryTabsComponentTest`, `KalshiHeroComponentTest`, `StatsOverviewWidgetTest`, `RowWidgetTest`, `StatWithIconWidgetTest`, `ComponentTest`, `TableLayoutEnumTest` | Test dei Blade component, dei widget e dell'enum | `file_get_contents`/`preg_replace` non-Safe, `view()` con stringa al posto di `view-string`, `RowWidget` astratto istanziato, `getHeading()` protetto chiamato dall'esterno, `assertIsString` su stringa (42+13+12+10+9+9+6+3 errori) |

## Cosa e' stato fatto

1. **Ripristino dei blob pre-pull** (scritti con `git show f1085ef6:<path>` su file, sotto gate lock+mtime; nessun checkout):
   `tests/Pest.php`, `tests/Feature/{UIBusinessLogicTest,WidgetBusinessLogicTest,InlineDatePickerTest,DarkModeToggleTest,CategoryTabsComponentTest,KalshiHeroComponentTest}.php`,
   `tests/Feature/Filament/Widgets/StatsOverviewWidgetTest.php`, `tests/Unit/Widgets/BaseCalendarWidgetTest.php`,
   `tests/Unit/Components/ComponentTest.php`, `tests/Unit/Enums/TableLayoutEnumTest.php`,
   `tests/Unit/Filament/Widgets/{RowWidgetTest,StatWithIconWidgetTest}.php`.
   Rev di origine: commit `f1085ef6` del repo `Modules/UI` (stessi blob dell'8 ottobre). I corpi scaffold restano in `HEAD` (`25803d34`) e
   in `afbc8d79` (upstream). Il ripristino di `Pest.php` elimina da solo le 26 `redundantLocalUse` dei file con `uses` locale.
2. **`LocationSelector` (produzione, 17 errori)**: `$labels` e `$placeholders` tipizzati `array<string, string>` (spariscono i 6 `mixed` passati a
   `label()`/`placeholder()` e 2 `missingType`; il terzo e' il ritorno di `validate()`); rimossi 5 `@phpstan-ignore-next-line` non piu' necessari (`ignore.unmatchedLine`) e 5 `@phpstan-ignore offsetAccess`
   sostituiti da un narrowing `is_array($state)` in `validate()` e `getGeographicData()` (stesso comportamento: con stato non array
   prima si accedeva a offset di `null` e non si produceva nulla); il triplo `array_map`/`array_combine` con cast di `mixed` ripetuto in
   tre metodi e' diventato un helper privato `toStringMap()`; `validate()` annotato `array<int, string>`.
3. Il resolver factory di Xot (nota di user-b) non e' stato necessario: i test ripristinati non usano `::factory()`.

## Cosa resta fuori dal bucket (decisioni per l'utente)

- **`LocationSelector` in UI e' uno zombie**: nessun chiamante nel repo, Geo ha la versione canonica
  (`Modules/Geo/app/Filament/Forms/Components/LocationSelector.php`). Il 2026-10-08 `0ecaedc4` lo aveva cancellato (con `.to_geo`, `.old` e
  `lang/*/location_selector.php`); il pull lo ha riportato (`294bbc20`). Corretto sul posto perche' una cancellazione riapparirebbe al
  pull successivo. Decisione aperta: cancellarlo davvero e togliere anche `LocationSelector.php.to_geo` e le lang.
- **`app/Services/UIService.php` riapparso** con lo stesso pull (cancellato da `db03c36b`, ricomparso in `294bbc20`): zero chiamanti, violava la
  regola no-services e rendeva falsa la frase di `docs/README.md` su `app/Services`. Rimosso; non serviva creare un wrapper Action.
- **Pull successivo**: `laraxot/dev` contiene ancora gli scaffold. Al prossimo `pull submoduli` i 14 file torneranno in conflitto o
  riespansi. Servono una decisione upstream o un `git merge -s ours` per quei path (non eseguiti: niente commit/reset in lane).
- `tests/Feature/GroupColumnTest.php` e `tests/Fixtures/UiPhpstanTraitProbes.php` sono stati cancellati dal merge (non nel bucket,
  0 errori). `docs/README.md` elenca ancora `GroupColumnTest` tra i test falliti del 2026-10-14.

## Nota su git

`docs/.gitignore` riga 214 (`phpstan*`) ignora questa story (`git check-ignore` la conferma): senza una riga `!stories/phpstan-test-wave-ui.story.md`
o un `git add -f` non entrera' nel repo del modulo. Il `.gitignore` non e' stato modificato (fuori dal perimetro della lane). Il link da
`docs/00-INDEX.md` punta quindi a un file locale finche' la regola non cambia.
