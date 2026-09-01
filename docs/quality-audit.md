---
title: "Audit di qualita: modulo UI"
type: report
module: UI
updated: 2026-09-01
qmd: "audit qualita ui phpstan phpmd phpinsights pest coverage soppressioni collisioni case"
---

# Audit di qualita — modulo UI

Misurato il 1 settembre 2026 a tree fermo. Ogni numero viene da un comando
eseguito, non da una stima; i comandi sono in fondo, cosi la misura si puo
rifare e contestare.

## Stato misurato

| Metrica | Valore |
|---|---:|
| File PHP | 692 |
| Righe di codice | 46305 |
| File di test `*Test.php` | 41 |
| Casi di test | 304 |
| Casi di test per file PHP | 0.44 |
| `@phpstan-ignore` nel codice | 48 |
| Rilievi PHPMD su `app/` | 67 |
| PHPInsights — Code | 92.9 % |
| PHPInsights — Complexity | 100.0 % |
| PHPInsights — Architecture | 92.9 % |
| PHPInsights — Style | 91.4 % |
| File `.md` sotto `docs/` | 961 |
| `TODO`/`FIXME`/`HACK` | 2 |
| Test con casi che non girano (senza suffisso `Test.php`) | 0 |
| Collisioni di case nel codice | 0 |
| Collisioni di case nei docs | 0 |
| Marker di conflitto | 0 |
| File `.lock` committati | 0 |
| File `.code-workspace` | 1 |

PHPStan su tutto `Modules/` e a **0 errori, exit 0**, con `ignoreErrors` vuoto in
`phpstan.neon` e `reportUnmatchedIgnoredErrors: true`. Quello zero pero non copre le
soppressioni scritte nel codice come commenti `@phpstan-ignore`: quelle non passano
da `ignoreErrors` e non vengono contate da nessun gate.

## Cosa non va

### 48 soppressioni per tre modelli che non esistono

`tests/Unit/Models/ThemeModelTest.php` (24 `@phpstan-ignore`),
`AssetModelTest.php` (12) e `ComponentModelTest.php` (12) sono scritti contro
`Modules\UI\Models\Theme`, `Asset` e `Component`. Nessuna delle tre classi esiste:
`app/Models/` contiene `BaseModel`, `Category`, `Collection`, `FieldOption` e `Policies`.

Le soppressioni dicono la verita nel loro stesso commento — «Theme model absent from
artifact set (test skipped at runtime)» — e sono il 56 % di tutte le
soppressioni del progetto. Sono test che non testano niente, tenuti verdi da un
commento. Le due uscite oneste sono: creare i modelli, oppure cancellare i tre file.
Tenerli cosi e' la sola opzione che non va bene, perche' costa manutenzione e
mente al gate.

## Coverage

La misura sta in [`coverage.md`](./coverage.md), che va aggiornato a ogni run e non
sostituito.

## Cosa questa misura non vede

- **Il database di test non risponde.** `10.100.200.53:3306` e irraggiungibile: i
  test che scrivono vengono saltati, non falliti. Un conteggio di test verdi qui
  dentro non dice quanti test hanno davvero girato.
- **PHPStan e a zero, ma le soppressioni inline non sono contate da nessun gate.**
  `reportUnmatchedIgnoredErrors` controlla `ignoreErrors` nel neon, non i commenti
  `@phpstan-ignore` sparsi nel codice.
- **PHPMD misurato su `app/`, non sulla root del modulo.** Puntandolo alla root,
  una singola classe anonima nei test fa abortire tutta l'analisi e stampare zero
  rilievi. Uno zero PHPMD sulla root non e una prova di pulizia.
- **I file sotto `tests/` senza suffisso `Test.php` non sono tutti test.** Una
  prima passata ne aveva contati 62 come "test che non girano": verificati uno a uno,
  47 sono stub, fake, helper e classi base che correttamente non hanno il suffisso.
  Il conteggio qui sopra riporta solo i file che contengono davvero casi di test.
- **PHPInsights `Complexity 100 %` su tutte e 22 le unita.** Un valore identico
  ovunque non sta discriminando niente: va trattato come non informativo finche
  non se ne capisce la configurazione.

## Come rifare la misura

```bash
cd laravel
php -d memory_limit=-1 ./vendor/bin/phpstan analyse Modules/UI
./tools/phpmd.sh Modules/UI/app          # non la root: aborta sulle classi anonime
./tools/phpinsights.sh Modules/UI
XDEBUG_MODE=coverage ./vendor/bin/pest Modules/UI/tests -c Modules/UI/phpunit.xml --coverage --min=0
grep -rc "@phpstan-ignore" --include=*.php Modules/UI | grep -v ":0$"
```

Prima di fidarsi di qualunque numero: verificare che nessun altro agente stia
scrivendo sul tree, altrimenti la misura e falsa e diversa a ogni run.

```bash
/usr/bin/find Modules -newermt '-70 seconds' -type f | wc -l   # deve dare 0
```

Audit complessivo e confronto fra tutte le unita: [`docs/quality-audit.md`](../../../../docs/quality-audit.md) nella root del progetto.

