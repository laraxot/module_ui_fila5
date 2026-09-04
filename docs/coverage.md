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

---

## 2026-09-04 — Mixed type reduction

**Task:** reduce native `mixed` type-hint usage in `Modules/UI` where a more specific type
is genuinely knowable, per project convention ("dove possibile", best-effort, not 100%).

### Scope surveyed

- `grep -rnE '\bmixed\b' Modules/UI --include="*.php"` (excluding `tests/`): 36 files, 103
  occurrences (native type-hints + docblocks).
- Most occurrences are legitimately `mixed` and were left untouched:
  - Filament closure contracts (`formatStateUsing`, `afterStateHydrated`,
    `dehydrateStateUsing`, `beforeStateUpdated`) — the callback signature is dictated by
    Filament/vendor code (`Closure(mixed $state): ...`); narrowing would fight the framework
    contract, not add safety.
  - `Illuminate\Contracts\Validation\ValidationRule::validate(string $attribute, mixed
    $value, Closure $fail)` in `OpeningHoursRule` — vendor interface signature.
  - Docblock `array<string, mixed>` / `array<int, array<string,mixed>>` for genuinely
    heterogeneous payloads: Blade view-data arrays, Filament form/block/state config,
    `Spatie\LaravelData` `UserData::$settings`, icon-set config read via reflection from
    `BladeUI\Icons\Factory` (`GetAllIconsAction`), dynamically-resolved per-model calendar
    Action results (`UserCalendarWidget::normalizeEventsArray/normalizeFormSchema` — the
    concrete Action class is resolved at runtime from `$this->type`, so its return shape is
    not statically knowable).
  - `app/Filament/Forms/Components/LocationSelector.php` and
    `app/Livewire/Components/Map/InteractiveMap.php` were skipped entirely: both are under
    the active `docs/chat/ui-geo-boundary-lock.md` coordination lock (do-not-touch).

### Changes made (4 files, 5 occurrences)

- `app/Filament/Forms/Components/SelectState.php`: `combineStateOptions()` key-mapper
  closure narrowed from `fn (mixed $key): string` to `fn (int|string $key): string` —
  the input is `array_keys($states)`, and PHP array keys are always `int|string`, never
  truly `mixed`.
- `app/Filament/Tables/Columns/SelectStateColumn.php`: same `array_keys()` key-mapper
  narrowing in `combineStateOptions()`.
- `app/Filament/Forms/Components/IconPicker.php`: same `array_keys($optsRaw)` key-mapper
  narrowing.
- `app/Forms/Components/RadioCardSelector.php`: `normalizeCardRow()` docblock
  `@param array<mixed, mixed> $item` corrected to `@param array<array-key, mixed> $item`
  (array keys are never `mixed`; only `int|string`/`array-key`).

Value-side closures over `array_values($states)` etc. were deliberately left as `mixed`
where the array's value type is itself genuinely heterogeneous (Filament state values can
be scalars, enums, or model-derived data) — confirmed by reading each call site before
touching it, per the "no unjustified narrowing" rule.

### PHPStan

- Baseline (before any edit): `./vendor/bin/phpstan analyse Modules/UI --no-progress
  --error-format=table` → **[OK] No errors**.
- After edits: **[OK] No errors** (unchanged, 0 → 0).

### PHPMD (informational)

`./tools/phpmd.sh <4 changed files> text ../docs/phpmd.ruleset.xml` →
`CyclomaticComplexity`/`NPathComplexity` on `SelectState::setUp()` and
`SelectStateColumn::setUp()` — pre-existing debt on the whole `setUp()` method body, not
introduced by this diff (only a closure parameter type changed, no logic/branches added).

### Pest

`./vendor/bin/pest Modules/UI/tests -c Modules/UI/phpunit.xml --no-coverage` →
**8 failed, 1 risky, 109 skipped, 197 passed (645 assertions)**, 160.77s. All 8 failures
are pre-existing and unrelated to this diff: `Modules\UI\Tests\TestCase::expectMethod()`
`TypeError` (`Mockery\CompositeExpectation` vs `Mockery\Expectation`, a test-harness
signature mismatch in `tests/TestCase.php:47`, unrelated to any file touched here) and a
`View [ui::components.render.blocks.ui::empty] not found` error in `UiGapCloser100Test`
(pre-existing view-resolution issue in `Blocks.php`, not touched by this diff). None of the
failing tests exercise `SelectState`, `SelectStateColumn`, `IconPicker`, or
`RadioCardSelector`.

Note: this run's counts (8 failed/197 passed) differ from the earlier 2026-01-17 dump above
(76 failed/42 passed) — different date, different pre-existing suite state; not a
regression caused by this task (verified no file touched by this diff appears in the
failure list).

### Coordination note

`git status --short` at task start showed a large pre-existing dirty working tree (removal
of leftover `<<<<<<< HEAD` / `>>>>>>> laraxot/dev` merge-conflict markers across ~300 docs
files and ~25 `app/` files, e.g. `GetUserDataAction.php`), not related to this task and not
made by this session. Per the "var-override-before-git-log-check" / live-WIP guidance,
those pre-existing changes were left untouched (not reverted, not staged) and only the
files listed above were touched/committed by this session.
