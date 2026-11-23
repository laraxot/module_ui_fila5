---
qmd: "ui wiki schema md"
title: Wiki Schema
description: Schema e convenzioni per la manutenzione della wiki
tags:
  - schema
  - conventions
  - llm-instructions
created: 2026-04-15
---

# Wiki Schema - UI

Istruzioni per l'LLM su come mantenere questa wiki.

## Struttura

```
docs/
├── wiki/
│   ├── index.md           # Catalogo
│   ├── log.md             # Registro
<<<<<<< .merge_file_8y0FR6
<<<<<<< .merge_file_q8NJ86
│   ├── SCHEMA.md          # Questo file
=======
│   ├── schema.md          # Questo file
>>>>>>> .merge_file_D2ypJh
=======
<<<<<<< .merge_file_xTrFsw
│   ├── SCHEMA.md          # Questo file
=======
│   ├── schema.md          # Questo file
>>>>>>> .merge_file_FZjygB
>>>>>>> .merge_file_XPKHvd
│   ├── concepts/          # Pattern, architettura
│   ├── entities/          # Modelli, azioni
│   ├── sources/           # Doc esterna
│   └── comparisons/       # Tabelle comparative
└── raw/                   # Sorgenti immutable
```

## Convenzioni

- File: kebab-case (es. `entity-user.md`)
- Frontmatter: title, description, tags, created
- Cross-ref: `[Link](../concepts/name.md)`
- NON modificare mai `docs/raw/`
