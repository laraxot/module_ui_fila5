---
title: "PHPStan Fixes UI"
type: troubleshooting
sources:
  - "/tmp/phpstan_ptvx_fila5/modules/UI.json"
  - "/tmp/phpstan-wave/UI.tsv"
confidence: verified
created: 2026-05-06
updated: 2026-11-17
tags: [phpstan, ui, filament, component, geo-boundary, view-string]
qmd: "UI phpstan fixes LocationSelector AuditCoverage ThemeMetadataData GroupColumn zero view-string"
---

# PHPStan Fixes — UI

## 2026-11-17 — Modules/UI → 0 (inventario 198 stale → live 14 → 0)

Inventario wave: `/tmp/phpstan-wave/UI.tsv` (198, non aggiornato). Misura live prima del fix: **14** errori, tutti `view-string`.

Causa: Larastan tipizza `$view` come `view-string`; un default letterale su property (`property.defaultValue`) e `view('ui::…')` diretto (`argument.type`) non passano senza narrowing.

Fix (pattern già in `OverlookWidget` / `PasswordStrengthField`):

1. Widget Filament: property senza default + `__construct()` con `/** @var view-string $view */` poi `parent::__construct()`.
2. Form Radio: `setUp()` + `$this->view($viewString)`.
3. Blade/test: variabile locale `/** @var view-string */` prima di `view()`.

File: `RadioIcon`, `RadioImage`, `DarkModeSwitcherWidget`, `ToastWidget`, `RowWidget`, `UserCalendarWidget`, `RedirectWidget`, `DarkModeSwitcher`, `Render/Block`, `ComponentTest`.

Verifica: `phpstan analyse Modules/UI Modules/Gdpr --error-format=raw` → **0**.

## 2026-11-16 — Modules/UI → 0 (112 → 0)

Inventario: `/tmp/phpstan_ptvx_fila5/modules/UI.json`.

Decisioni:

1. `LocationSelector` rimosso (confine Geo; vedi [geo-boundary.md](../../geo-boundary.md)).
2. `tests/AuditCoverage/` rimosso (74 `assertTrue` senza TestCase).
3. `ThemeMetadataData`: `@throws \InvalidArgumentException`.
4. `GroupColumnTest`: variabile `$fields` inutilizzata rimossa.

Story: [phpstan-modules-zero.story.md](../../bmad/stories/phpstan-modules-zero.story.md).

Verifica: `phpstan analyse Modules/UI` → `[OK] No errors`.

## Issue storica: IconPicker

PHPStan riportava `varTag.variableNotFound` su `$packsOptions` — ghost / mismatch versione.

## Issue storica: InlineDatePicker

`getViewData()` / `generateCalendarData()`: `array` vs `array<string, mixed>` a level max.
Strategia: assertion di forma array, non ignore.
