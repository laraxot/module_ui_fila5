# Code Coverage: UI

## 2026-09-04 — app/Services to QueueableAction (no-services-rule)

Task: convert every file under `app/Services/` to `Spatie\QueueableAction\QueueableAction` under `app/Actions/`, no exceptions on destination folder.

**Census** (`find Modules/UI/app/Services -name "*.php"`): exactly one active file, `app/Services/UIService.php` (plus pre-existing `.bak` archives from an earlier, never-fully-executed migration attempt on 2026-07-13/07-16 — `ComponentService.php.bak`, `ThemeService.php.bak`, `UIService.php.bak`, `Map/NullMapService.php.bak`, `Map/NullGeocodingService.php.bak` — out of scope, not `.php`, left untouched).

| File | Kind | Classification reasoning | Action taken |
|---|---|---|---|
| `app/Services/UIService.php` | A (already-thin-facade) | Single static method `asset(string $asset): string` whose entire body was `return app(AssetAction::class)->execute($asset);` — a 1:1 passthrough to the already-existing `Modules\Xot\Actions\File\AssetAction`. Grep across the whole `Modules/` and `Themes/` trees (`UIService::asset`, `Modules\UI\Services\UIService`, `use Modules\UI\Services`) found **zero call sites** anywhere in production code. Matches the task's own "already thin facade" carve-out (per `Modules/Tenant/app/Services/TenantService.php` precedent): the hard work (real logic already lives in `AssetAction`) was done; there is no logic left to move into a new UI-owned Action, and creating a wrapper Action whose `execute()` body is only `app(AssetAction::class)->execute(...)` would just recreate a redundant pass-through one level down. This exact reasoning had already been reached (but never actually executed — the file was still live) in `Modules/UI/docs/wiki/concepts/ui-services-support-to-actions.md` and `no-app-support-queueable-actions.md`. | Deleted via `git rm app/Services/UIService.php`. No callers to update. Any future caller should use `app(\Modules\Xot\Actions\File\AssetAction::class)->execute($path)` directly. |

Note: `UIServiceProvider` (in `app/Providers/`) is a Laravel `ServiceProvider` subclass, an unrelated framework construct, not an `app/Services/*Service` business-logic class — out of scope for this rule.

- PHPStan (`Modules/UI`, `clear-result-cache` before each run): baseline **0 errors** → final **0 errors**.
- PHPMD (`./tools/phpmd.sh Modules/UI text ../docs/phpmd.ruleset.xml`): crashes on the whole module with `No node to visit provided for visitAnonymousClass` — pre-existing, documented tooling limitation (see `quality-tooling-real-commands` memory), not caused by this change. No new PHP file was added to scope for a per-file retry (deletion only).
- Pest (`./vendor/bin/pest Modules/UI/tests -c Modules/UI/phpunit.xml --no-coverage`): 197 passed, 8 failed, 1 risky, 109 skipped. All 8 failures are pre-existing and unrelated to `UIService`/`AssetAction` (`TestCase::expectMethod()` Mockery `CompositeExpectation` type mismatch, a missing `ui::components.render.blocks.ui::empty` view, an `OpeningHoursColumn` assertion) — none reference the removed class.

Story: `docs/stories/ui-services-to-actions.story.md`.

---

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

---

## 2026-09-04 — Quality gate closure (phpmd MissingImport cleanup)

**Task:** BMAD quality-gate closure pass for `Modules/UI` (Build+Measure): phpstan baseline,
phpmd fixes, pest run, coverage doc. `Modules/UI/docs/stories/quality-gate-2026-09-04-ui.story.md`.

### php -l sweep

`find Modules/UI -name "*.php" -exec php -l {} \;` → clean, zero syntax errors across the
whole module.

### PHPStan

- Baseline (`clear-result-cache` then `analyse Modules/UI --no-progress`): **[OK] No errors**.
- After the 5 fixes below: **[OK] No errors** (0 → 0, no regression).
- Mid-session one `analyse` invocation crashed at the Laravel bootstrap step (`Typed property
  Modules\Xot\Datas\ComponentFileData::$name must not be accessed before initialization`,
  raised from `Modules\Xot\Actions\Blade\RegisterBladeComponentsAction`). Root-caused (not
  fixed, out of scope — a different module, no lock held on it) to a concurrent, uncommitted
  session actively rewriting `Modules/Xot/app/View/Components/_components.json` at that exact
  moment: the file's mtime moved twice during this session (legacy `class_name/comp_name/comp_ns`
  schema instead of the current `name/class/ns` schema at one point), and `git status --short`
  in `Modules/Xot` showed hundreds of unrelated modified files at the same time. Re-running
  `analyse Modules/UI` ~3 minutes later, after that file's mtime stabilized, was clean again.
  Not a `Modules/UI` regression; not touched or worked around (no edits made outside `Modules/UI`).

### PHPMD

`./tools/phpmd.sh Modules/UI/app text ../docs/phpmd.ruleset.xml`: **64 → 58 findings** (real
fixes below; the remaining 58 were read individually and are either framework-mandated
signatures, external-data-key naming, or parent-class-inherited property names — see notes).

**Fixed (5× `MissingImport`, mechanical, zero behavior change — FQCN `throw new \X(...)` /
`new \X(...)` replaced with a `use` import + unqualified name):**

- `app/Actions/Block/ResolveLocalizedBlockDataAction.php:48` — `\UnexpectedValueException`.
- `app/Actions/Icon/GetAllIconsAction.php:25` — `\ReflectionClass` (this edit also
  incidentally dropped `execute()`'s reported CyclomaticComplexity 16→13 and NPath 4260→612 —
  a PHPMD counting artifact of one fewer FQCN token, not a real logic change).
- `app/Datas/ThemeMetadataData.php:36` — `\InvalidArgumentException`.
- `app/Filament/Forms/Components/EnumSelect.php:202,206` — `\InvalidArgumentException` (both
  occurrences, one `use`).
- `app/Filament/Forms/Components/InlineDatePicker.php:275` — `\RuntimeException`.

**Left undone, documented (not a suppression — no `@SuppressWarnings` added anywhere):**

- `CyclomaticComplexity`/`NPathComplexity`/`ExcessiveMethodLength`/`ExcessiveClassComplexity`
  on `GetUserDataAction::execute()`, `GetAllIconsAction::execute()`,
  `IconStateColumn::setUp()`, `IconStateGroupColumn::stateClass()`, `IconStateSplitColumn`,
  `SelectStateColumn::setUp()`, `SelectState::setUp()`, `InlineDatePicker::generateCalendarData()`:
  pre-existing debt already documented in `docs/chat/module-ui-sync-and-quality-validation.md`
  and `docs/chat/quality-gates-03-exec-coordination.md` (previous sessions, not introduced by
  any recent diff). A real fix needs a deliberate extract-method refactor of each `setUp()`/
  `execute()` body with dedicated behavior-preserving tests as a safety net; `IconStateColumn`,
  `IconStateGroupColumn`, `IconStateSplitColumn`, `SelectStateColumn` have **no existing test
  file** (checked: only `GetUserDataAction`, `GetAllIconsAction`, `InlineDatePicker` do), so a
  same-session mechanical complexity refactor without first writing characterization tests
  would violate "verification before done" — out of scope for this pass, flagged for a
  dedicated follow-up story.
- `UnusedFormalParameter`/`CamelCaseParameterName` on `$_context`, `$_livewire`, `$_component`,
  `$_state`, `$_ability`, `$_attribute` (blocks/columns/policy/rule): underscore-prefixed is
  this codebase's existing convention for "required by a Filament/framework callback signature,
  intentionally unused" — removing the parameter breaks the interface, renaming away from the
  underscore contradicts the convention. Not a real defect.
- `UnusedFormalParameter` on `UserCalendarWidget`'s `$start/$end/$allDay/$view/$resource` and
  `AddressField`'s `$key`: framework-required event-handler/callback signatures (FullCalendar
  JS event bridge, Filament state-hydration callback) — same reasoning.
- `UnusedFormalParameter $calendarClass` on `ApplyCalendarToPanelAction::execute()`: already
  self-documented in the class docblock as an intentional no-op stub during the Filament v4
  migration (`Saade\FilamentFullCalendar` not yet v4-compatible) — real fix is an external
  package upgrade, out of scope here.
- `CamelCaseParameterName`/`CamelCasePropertyName`/`LongVariable` on `SliderData`'s
  `desktop_thumbnail`/`mobile_thumbnail`/`*_webp`/`short_description`/`action_text`,
  `SliderDataCollection::$slider_data`, `TestChartWidget::$max_height`: verified these
  snake_case names are read by exact name in Blade views (`swiper.blade.php`,
  `notifications_list.blade.php`) and in named-constructor-argument test calls
  (`tests/Unit/Datas/UIDatasCoverageTest.php`) — renaming is a real API change requiring
  coordinated edits to every call site plus (per Spatie Data mapping semantics) `#[MapInputName]`
  attributes if any JSON/DB source still supplies snake_case keys; out of scope for a
  quality-gate pass, flagged for a dedicated follow-up story if desired.
- `CamelCasePropertyName` on `RouteServiceProvider`/`UIServiceProvider`'s `$module_dir`/
  `$module_ns`: verified these are declared with the exact same snake_case names in the parent
  `Modules\Xot\Providers\XotBaseRouteServiceProvider` (a different module/repo, not locked by
  this task) — they are property overrides, not free naming choices; renaming here would just
  create new unrelated properties instead of overriding the parent's.
- `BooleanArgumentFlag` on `EnumSelect::icons()/htmlLabels()` and
  `LocationSelector::required()/searchable()`: standard Filament fluent-builder boolean-toggle
  method pattern (`->icons(false)`, mirrors dozens of vendor Filament components) — not a real
  SRP violation in this idiom, changing it breaks the established fluent API convention used
  throughout the module.
- `ElseExpression` (3 occurrences) and `ShortVariable $to` (`RedirectWidget`, already carries a
  pre-existing `@SuppressWarnings("PHPMD.ShortVariable")` docblock that PHPMD is not honoring
  for properties in this ruleset/version — pre-existing, not this session's doing, `$to` is a
  public config key read by name from JSON block config, same external-key-naming reasoning
  as `SliderData` above): stylistic, low value/high risk to touch without dedicated tests.

phpinsights is **not installed** in this repo (removed — incompatible with Pest 5, see
second-brain memory `pest5-incompatible-con-phpinsights`); not run, not available.

### Pest

`./vendor/bin/pest -c Modules/UI/phpunit.xml --no-coverage` → **8 failed, 1 risky, 109
skipped, 197 passed (645 assertions)**, 211.62s — identical counts to the same-day baseline
recorded above (2026-09-04 — Mixed type reduction entry): confirms no regression from the
`MissingImport` fixes. The 8 failures are the same pre-existing ones already catalogued above
(`BindingResolutionException` on `Illuminate\Contracts\View\Factory`/`translator` in
`GroupColumnTest`, a locale-format mismatch in `OpeningHoursColumnTest`, 3×
`TestCase::expectMethod()` Mockery type mismatch, 1 missing-view error in
`UiGapCloser100Test`) — none reference any of the 5 files touched by this session.

No coverage-raising test was added: the 5 fixes were mechanical FQCN→`use`-import
substitutions with zero behavior change (verified via identical pest pass/fail counts
before/after), so there is no real gap or dead code this pass uncovered to justify a new
test per the "no fake tests just to move the number" rule. Coverage baseline stands as
documented in the entry above (no driver installed — pass/fail counts are the tracked proxy
in this module, same as prior entries).
