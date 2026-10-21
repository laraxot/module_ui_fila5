---
title: "PHPStan cluster B 2026-10-21 — UI"
type: story
status: done
module: UI
epic: quality-fleet
story_id: "ui-phpstan-clusterB-20261021"
track: quality/fleet
created: 2026-10-21
updated: 2026-10-21
tags: [phpstan, swarm, cluster-b, location-selector, geo-boundary, dead-code, bmad]
qmd: "phpstan cluster b ui locationselector geo boundary dead code rimosso 36 errori zero 20261021"
related:
  - ../../../../Xot/docs/bmad/stories/phpstan-modules-swarm-20261021.story.md
  - ../../stories/ui-filament-contract-and-livewire-retire.story.md
  - ../../wiki/actions/generic-ui-building-blocks.md
  - ../filament-blueprint.md
---

# PHPStan cluster B 2026-10-21 — UI

Fase BMAD: Implement/Verify. Subagent `swarm-clusterB`, lock modulo
`phpstan-clusterB-20261021`.

## Obiettivo

0 errori PHPStan level max su `Modules/UI`, correggendo alla sorgente e senza
soppressioni, nel perimetro dello swarm 2026-10-21.

## Misura

| Momento | Errori | File |
| --- | --- | --- |
| Prima | 36 | solo `app/Filament/Forms/Components/LocationSelector.php` |
| Dopo | 0 | — |

Comando: `cd laravel && php -d memory_limit=2G ./vendor/bin/phpstan analyse
Modules/UI --no-progress --error-format=table`.

Tutti i 36 errori erano `method.nonObject` / `offsetAccess.nonOffsetAccessible`
/ `argument.type` prodotti dalla classe dinamica
`$model = '\\Modules\\Geo\\Models\\Comune'`: senza `class-string<Model>`
PHPStan tipizza `$model::query()` come `mixed`, quindi ogni `where()`,
`select()`, `get()`, `pluck()` a valle perde il contratto `Builder`/`Collection`.

## Perché rimozione e non tipizzazione

`LocationSelector` in UI è una copia risorta (untracked, non presente in
`HEAD`: `git cat-file -e HEAD:...` fallisce), con **zero chiamanti** nel repo
(`rg 'Forms\\Components\\LocationSelector'`), che importa per stringa un
modulo `Geo` assente dal checkout. La regola di dipendenza è Geo -> UI, mai
il contrario; la versione canonica vive in
`Modules\Geo\Filament\Forms\Components\LocationSelector` con chiavi
`geo::location_selector.*`.

La decisione di rimuoverla era già esplicita nelle docs del modulo:

- `docs/bmad/stories/continuazione-domani.md` ricorda la rimozione in story 7.14
  "per decisione utente esplicita";
- `docs/stories/ui-filament-contract-and-livewire-retire.story.md` la elenca tra
  le copie risorte dal pull con acceptance criteria
  `ls Modules/UI/app/Filament/Forms/Components/LocationSelector.php*` fallisce;
- `docs/wiki/actions/generic-ui-building-blocks.md` vieta di ricrearla come
  null-adapter o stub.

Tipizzare il file avrebbe solo reso verde un dead code fuori confine e
contraddetto le docs. Rimozione applicata:

- `app/Filament/Forms/Components/LocationSelector.php` (untracked, backup
  temporaneo fuori repo in `/tmp/opencode/LocationSelector.ui-resurrected.php`);
- `app/Filament/Forms/Components/LocationSelector.php.lock` (residuo del
  subagent `phpstan-ui-l10`, PID morto; modulo UI risultava libero).

Nessun altro file UI è stato toccato: le `lang/*/location_selector.php` non
esistevano già più.

## Verifica

```bash
cd laravel && ./vendor/bin/phpstan analyse Modules/UI --no-progress
# [OK] No errors
git cat-file -e HEAD:laravel/Modules/UI/app/Filament/Forms/Components/LocationSelector.php
# fallisce: il file non era in HEAD, la rimozione ripristina HEAD
rg -n 'Forms\\Components\\LocationSelector' laravel/Modules
# nessun chiamante
```

Pest: tentato `Modules/UI/tests/Unit/Widgets/BaseCalendarWidgetTest.php`
(`--no-coverage`), abortito in 19s dal `TestDatabaseGuard` di Xot perché le
connessioni configurate puntano a database reali (`ptv_lara`, `ptv_user`,
`ptv_incentivi`, ...) e non a database `*_test`. Skip documentato: nessun
codice eseguibile è stato modificato (rimozione di file morto non referenziato).

## Residui

- `docs/wiki/actions/generic-ui-building-blocks.md` contiene ancora marker di
  conflitto (`<<<<<<<`/`=======`/`>>>>>>>`): preesistenti, fuori dal perimetro
  PHPStan; da sanare in una story docs.
- `docs/bmad/architecture.md:61` cita ancora `LocationSelector.php.old` e
  `.to_geo` come "versioni non attive", mentre la tabella di verifica allo
  stesso file (riga 143) e il filesystem dicono che non esistono. Doppia
  affermazione già nota, non riscritta qui.
- Notify e Job non sono stati toccati: lock attivi di un altro subagent con
  phpstan vivo sul modulo.
