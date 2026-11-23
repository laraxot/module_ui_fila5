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
│   ├── schema.md          # Questo file
<<<<<<< .merge_file_gqoUCE
<<<<<<< .merge_file_o9slTe
│   ├── SCHEMA.md          # Questo file
=======
│   ├── schema.md          # Questo file
>>>>>>> .merge_file_pIM7Qf
=======
<<<<<<< .merge_file_GnxmKU
│   ├── SCHEMA.md          # Questo file
=======
│   ├── schema.md          # Questo file
>>>>>>> .merge_file_rHHfRb
>>>>>>> .merge_file_rz4GXw
│   ├── schema.md          # Questo file
│   ├── schema.md          # Questo file
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


---

<<<<<<< .merge_file_gqoUCE
<<<<<<< .merge_file_o9slTe
## Contenuto assorbito da `SCHEMA.md`
=======
## Contenuto assorbito da `schema.md`
>>>>>>> .merge_file_pIM7Qf
=======
<<<<<<< .merge_file_GnxmKU
## Contenuto assorbito da `SCHEMA.md`
=======
## Contenuto assorbito da `schema.md`
>>>>>>> .merge_file_rHHfRb
>>>>>>> .merge_file_rz4GXw

# Documento unificato

Questo file era un duplicato esatto che differiva solo per maiuscole/minuscole, in violazione della regola no-case-only-variations. Il contenuto canonico si trova in [schema.md](./schema.md).
