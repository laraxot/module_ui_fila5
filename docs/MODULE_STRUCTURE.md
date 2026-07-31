# UI Module — Structure & Discipline

## Module Root (PascalCase)

```
Modules/UI/
├── app/              # Domain logic (components, resources, providers)
├── config/           # Laravel config (lowercase)
├── database/         # Migrations, seeders (lowercase)
├── resources/        # Views, CSS, JS assets (lowercase)
├── routes/           # Routes (lowercase)
├── tests/            # Tests (lowercase)
├── docs/             # Module documentation (THIS FOLDER)
└── composer.json     # Module metadata
```

## ✅ What Belongs Here

- **Filament Resources & Panels** — UI module is responsible for Filament admin structure
- **Components** — Blade/view components specific to UI
- **Providers** — ServiceProviders that bootstrap UI infrastructure

## What Does NOT Belong Here

### ❌ rector.php

**Rector is a global project tool.** All refactoring is configured in `laravel/rector.php` only.

If UI needs special refactoring rules:
1. Add conditional logic in `laravel/rector.php`
2. Document the requirement here
3. Never create `UI/rector.php`

### ❌ phpstan.neon, ci.yml

These belong in project root. Module-level overrides break type-checking and CI/CD orchestration.

## Internal Discipline

- **Files**: `UserPanel.php`, `AdminPanel.php`, `EditUserResource.php` (PascalCase)
- **Directories**: `panels/`, `resources/`, `components/`, `traits/` (lowercase)
- **Namespaces**: `Modules\UI\...` (PascalCase only at root)

## Documentation

```
docs/
├── MODULE_STRUCTURE.md      # This file
├── FILAMENT_PATTERNS.md     # Filament resource patterns
├── API.md                   # Public interfaces
└── DECISIONS.md             # Architectural choices
```

## See Also

- [Project Module Discipline](../../../docs/rules/module-root-configuration-discipline.md)
- `laravel/rector.php` — Global refactoring configuration
- `laravel/phpstan.neon` — Global type-checking configuration
