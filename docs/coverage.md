# Code Coverage: UI

## Update 2026-09-08 — story 5.79 Task 5 (swarm ui-agent)

Fix mirato: rimossi due commenti `# @phpstan-ignore-next-line` orfani (identifier
`ignore.unmatchedLine`), presenti come modifiche non committate su:

- `tests/Unit/UiCoverageBoostTest.php:20` (riga `$schema = FieldTypeEnum::getFormSchema();`)
- `tests/Unit/UiFilamentComponentsCoverageTest.php:64` (stessa riga)

Causa: `FieldTypeEnum::getFormSchema()` è ereditato da `Modules\Xot\Traits\EnumTrait`
e ha firma tipizzata `@return array<string, TextInput>` — non genera più alcun
errore PHPStan su quella riga, quindi l'ignore non aveva più nulla da sopprimere.
Nessun errore reale è emerso dopo la rimozione.

Gate eseguiti su tutto il modulo (non solo i due file):

- **PHPStan** (`analyse Modules/UI --memory-limit=2G`, level max, tmpDir isolata
  per evitare corruzione da run concorrenti): **0 errori** (404 file analizzati).
- **PHPMD** (`tools/phpmd.sh Modules/UI`): crash noto e preesistente —
  `No node to visit provided for visitAnonymousClass.` Il modulo contiene
  numerose classi anonime nei test (`UiHighestMissCoverageTest.php`,
  `UiGapCloser100Test.php`, `UiFilamentComponentsCoverageTest.php:96`,
  `RowWidgetTest.php`, migrations, ecc.) che mandano in crash il parser PHPMD
  prima ancora di produrre un report parziale — non riconducibile alla modifica
  di questo task (vedi memoria `feedback-phpmd-zero-on-module-root-means-it-died.md`).
- **PHPInsights** (`tools/phpinsights.sh Modules/UI`): eseguito, nessun errore
  bloccante. Score: Code 90.6, Complexity 100, Architecture 92.9, Style 93.8.
  Findings elencati sono preesistenti in `app/` e fuori scope (style/architecture
  su file non toccati da questo task).
- **Pest** (`vendor/bin/pest Modules/UI/tests/Unit/UiCoverageBoostTest.php
  Modules/UI/tests/Unit/UiFilamentComponentsCoverageTest.php`): **saltato** —
  DB di test `10.100.200.53:3306` non raggiungibile (`nc -z` fallisce), run
  in timeout/hang. Coerente con memoria
  `project-test-db-unreachable-drives-skips.md`.

---

# Code Coverage: UI

**Date:** 2026-01-17
**Lines Coverage:** N/A (Failed to parse)
**Test Exit Code:** 2

## Output

```text
endor/laravel/framework/src/Illuminate/Container/Container.php:1415
    1411▕         } else {
    1412▕             $message = "Target [$concrete] is not instantiable.";
    1413▕         }
    1414▕ 
  ➜ 1415▕         throw new BindingResolutionException($message);
    1416▕     }
    1417▕ 
    1418▕     /**
    1419▕      * Throw an exception for an unresolvable primitive.

      [2m+8 vendor frames [22m
  9   Modules/Xot/app/Filament/Widgets/XotBaseWidget.php:233
  10  Modules/Xot/app/Filament/Widgets/XotBaseWidget.php:69

  ──────────────────────────────────────────────────────────────────────────────────────  
   FAILED  Modules\UI\tests\Unit\Widgets\BaseCalendarWidge…  BindingResolutionException   
  Target [Illuminate\Contracts\View\Factory] is not instantiable.

  at vendor/laravel/framework/src/Illuminate/Container/Container.php:1415
    1411▕         } else {
    1412▕             $message = "Target [$concrete] is not instantiable.";
    1413▕         }
    1414▕ 
  ➜ 1415▕         throw new BindingResolutionException($message);
    1416▕     }
    1417▕ 
    1418▕     /**
    1419▕      * Throw an exception for an unresolvable primitive.

      [2m+8 vendor frames [22m
  9   Modules/Xot/app/Filament/Widgets/XotBaseWidget.php:233
  10  Modules/Xot/app/Filament/Widgets/XotBaseWidget.php:69

  ──────────────────────────────────────────────────────────────────────────────────────  
   FAILED  Modules\UI\tests\Unit\Widgets\BaseCalendarWidge…  BindingResolutionException   
  Target [Illuminate\Contracts\View\Factory] is not instantiable.

  at vendor/laravel/framework/src/Illuminate/Container/Container.php:1415
    1411▕         } else {
    1412▕             $message = "Target [$concrete] is not instantiable.";
    1413▕         }
    1414▕ 
  ➜ 1415▕         throw new BindingResolutionException($message);
    1416▕     }
    1417▕ 
    1418▕     /**
    1419▕      * Throw an exception for an unresolvable primitive.

      [2m+8 vendor frames [22m
  9   Modules/Xot/app/Filament/Widgets/XotBaseWidget.php:233
  10  Modules/Xot/app/Filament/Widgets/XotBaseWidget.php:69

  ──────────────────────────────────────────────────────────────────────────────────────  
   FAILED  Modules\UI\tests\Unit\Widgets\BaseCalendarWidge…  BindingResolutionException   
  Target [Illuminate\Contracts\View\Factory] is not instantiable.

  at vendor/laravel/framework/src/Illuminate/Container/Container.php:1415
    1411▕         } else {
    1412▕             $message = "Target [$concrete] is not instantiable.";
    1413▕         }
    1414▕ 
  ➜ 1415▕         throw new BindingResolutionException($message);
    1416▕     }
    1417▕ 
    1418▕     /**
    1419▕      * Throw an exception for an unresolvable primitive.

      [2m+8 vendor frames [22m
  9   Modules/Xot/app/Filament/Widgets/XotBaseWidget.php:233
  10  Modules/Xot/app/Filament/Widgets/XotBaseWidget.php:69


  Tests:    76 failed, 1 risky, 39 skipped, 42 passed (90 assertions)
  Duration: 33.74s


```
