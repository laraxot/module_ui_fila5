---
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
<<<<<<< .merge_file_8iG8r2
│   ├── SCHEMA.md          # Questo file

=======
<<<<<<< .merge_file_OnoyFK
│   ├── SCHEMA.md          # Questo file

=======
<<<<<<< HEAD
=======
│   ├── SCHEMA.md          # Questo file

>>>>>>> laraxot/dev
>>>>>>> .merge_file_UutJKS
>>>>>>> .merge_file_GLt8pR
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

## Contenuto assorbito da `SCHEMA.md`

# Documento unificato

Questo file era un duplicato esatto che differiva solo per maiuscole/minuscole, in violazione della regola no-case-only-variations. Il contenuto canonico si trova in [schema.md](./schema.md).
