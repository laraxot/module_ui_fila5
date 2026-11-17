---
title: "PHPStan Status — UI Module"
type: status
module: UI
updated: 2026-11-16
tags: [phpstan, ui, status]
qmd: "UI phpstan status zero modules analyse"
---

# PHPStan Status — UI Module

## Current Status: PASSED

- **Level**: max (root `laravel/phpstan.neon`)
- **Errors**: **0**
- **Last Checked**: 2026-11-16
- **Story**: [bmad/stories/phpstan-modules-zero.story.md](bmad/stories/phpstan-modules-zero.story.md)

## Measure

```bash
cd laravel && php -d memory_limit=2G ./vendor/bin/phpstan analyse Modules/UI
# [OK] No errors
```

Inventario di partenza swarm: 112 `file_errors` → 0.

## Perché

UI è design system (componenti Filament, blocchi, theme helpers). Il gate a zero
impedisce reimport di dipendenze Geo e stub AuditCoverage morti.

## Related

- [geo-boundary.md](geo-boundary.md)
- [wiki/troubleshooting/phpstan-fixes.md](wiki/troubleshooting/phpstan-fixes.md)
