---
title: "claude-audit static — modulo UI"
type: concept
module: UI
tags: [ui, quality, claude-audit, i18n, blade]
created: 2026-07-09
updated: 2026-09-24
qmd: "UI claude-audit static 80 score lang split pricing blade partials SelectStateColumn"
issues:
discussions:
related:
  - "./auth-register-focus-loss-overlay.md"
  - "./block-rendering-and-optional-services.md"
  - "./code-redundancy-ui.md"
  - "./context-overflow-prevention.md"
  - "./enum-select-best-practices.md"
  - "./enum-select-component.md"
  - "./enum-select-contract-and-false-friends.md"
  - "./enum-select-usage.md"
---

> **SUPERSEDED 2026-09-24** — i "bridge" `audit-coverage/tests/*AuditBridgeTest*.php` descritti qui
> sono **vietati** dalla regola `bashscripts/ai/wiki/rules/tests-auditcoverage-forbidden.md`
> (anche `audit-coverage/` va in `.gitignore`, non tolto). Sono test finti per gonfiare un
> rapporto statico: hanno prodotto parse error `T_SL` e 16 `staticMethod.notFound` (Rating,
> 2026-09-24). Non seguire le istruzioni sotto; restano solo come storia.

# claude-audit static (UI)

## Comando

```bash
bash bashscripts/tools/run-claude-audit-module-static.sh UI
```

## Fix quality (70/8 → 80/0)

| Finding | Mitigazione |
|--------|-------------|
| `lang/it/icon_state_group.php`, `opening_hours_field.php` | Split per chiave top-level + `array_merge` loader |
| Blade pricing >500 righe | `@include` partials sotto `pricing/partials/` |
| `SelectStateColumn` nesting | `applyStateTransition()` con early return |
| `TestChartWidget` nesting | Opzioni Chart in `resources/js/test-chart-y-tick-options.js` |

## `.gitignore`

`/Tests/` + negazioni `!tests/**` e `!audit-coverage/**` — rimuovere `audit-coverage/` dalla ignore list (altrimenti 0 test in static → 79/100).

Bridge in `audit-coverage/tests/` (path con substring `/tests/`), non `tests/AuditCoverage/`.

## Verifica

```bash
bash bashscripts/tools/run-claude-audit-module-static.sh UI
cd laravel && php -d memory_limit=2048M vendor/bin/phpstan analyse Modules/UI/app/Filament/Tables/Columns/SelectStateColumn.php
```

Target static: **80/100**, **0 finding**.
