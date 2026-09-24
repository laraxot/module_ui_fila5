<<<<<<< .merge_file_K5PPsa
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_8DCzYF
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_vccF0q
=======
=======
>>>>>>> 804451c (Lint)
---
title: "Enum Select Component"
type: concept
tags: [enum, select, component]
created: 2026-07-14
updated: 2026-07-14
qmd: "enum-select-component enum select component"
<<<<<<< HEAD
<<<<<<< .merge_file_8DCzYF
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
issues: ["https://github.com/provtv/base_ptv_fila5/issues/124"]
discussions: ["https://github.com/provtv/base_ptv_fila5/discussions/1"]
<<<<<<< HEAD
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
=======
=======
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< HEAD
=======
issues: ["https://github.com/provtv/base_ptv_fila5/issues/124"]
discussions: ["https://github.com/provtv/base_ptv_fila5/discussions/1"]
issues: ["https://github.com/provtv/<nome repository>/issues/124"]
discussions: ["https://github.com/provtv/<nome repository>/discussions/1"]
>>>>>>> .merge_file_vccF0q
=======
>>>>>>> 804451c (Lint)
related:
  - "./auth-register-focus-loss-overlay.md"
  - "./block-rendering-and-optional-services.md"
  - "./claude-audit-static.md"
  - "./code-redundancy-ui.md"
  - "./context-overflow-prevention.md"
  - "./enum-select-best-practices.md"
  - "./enum-select-contract-and-false-friends.md"
  - "./enum-select-usage.md"
---

<<<<<<< HEAD
<<<<<<< .merge_file_8DCzYF
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_vccF0q
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_0s7fGd
## EnumSelect Component Specification

A reusable Iron Select for PHP-backed enums in Filament v5.

**Key Features:**
- : Enums via `->enum(MyEnum::class)`
- : Handles HasLabel/HasIcon interfaces
- : Fallback labels/icons via case name
- : HTML support in labels
- : Tom Select compatibility

**Usage Example:**
```php
use Modules\UI\Filament\Forms\Components\EnumSelect;

EnumSelect::make('type_id')
    ->enum(TicketTypeEnum::class)
    ->required()
    ->searchable()
```

... (continued in next file)
