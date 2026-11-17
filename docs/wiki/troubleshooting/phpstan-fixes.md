---
title: "PHPStan Fixes UI"
type: troubleshooting
sources:
  - "/tmp/phpstan_ptvx_fila5/modules/UI.json"
confidence: verified
created: 2026-05-06
updated: 2026-11-16
tags: [phpstan, ui, filament, component, geo-boundary]
qmd: "UI phpstan fixes LocationSelector AuditCoverage ThemeMetadataData GroupColumn zero"
---

# PHPStan Fixes — UI

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
