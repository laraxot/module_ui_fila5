---
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_N7ypMU
=======
<<<<<<< .merge_file_kjrjlB
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
title: "Rimando a schema.md"
description: "Documento unificato: il contenuto canonico vive in schema.md."
status: merged
tags: [merge, duplicato, case-only]
---

# Documento unificato

Questo file era un duplicato esatto che differiva solo per maiuscole/minuscole, in violazione della regola no-case-only-variations. Il contenuto canonico si trova in [schema.md](./schema.md).
=======
>>>>>>> .merge_file_ibZbu5
>>>>>>> .merge_file_0AwxD9
=======
>>>>>>> laraxot/dev
title: Wiki Schema
description: Schema e convenzioni per la manutenzione della wiki
tags:
  - schema
  - conventions
  - llm-instructions
created: 2026-04-15
---

# Wiki Schema - UI

<<<<<<< HEAD
<<<<<<< .merge_file_N7ypMU
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0AwxD9
title: "Rimando a schema.md"
description: "Documento unificato: il contenuto canonico vive in schema.md."
status: merged
tags: [merge, duplicato, case-only]
---

# Documento unificato

<<<<<<< HEAD
Questo file era un duplicato esatto che differiva solo per maiuscole/minuscole, in violazione della regola no-case-only-variations. Il contenuto canonico si trova in [schema.md](./schema.md).
=======
<<<<<<< .merge_file_N7ypMU
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0AwxD9
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
Istruzioni per l'LLM su come mantenere questa wiki.

## Struttura

```
docs/
├── wiki/
│   ├── index.md           # Catalogo
│   ├── log.md             # Registro
<<<<<<< HEAD
<<<<<<< HEAD
│   ├── SCHEMA.md          # Questo file
=======
<<<<<<< HEAD
<<<<<<< .merge_file_N7ypMU
=======
│   ├── SCHEMA.md          # Questo file
=======
<<<<<<< HEAD
│   ├── schema.md          # Questo file
>>>>>>> 92912795 (.)
=======
<<<<<<< HEAD
>>>>>>> .merge_file_0AwxD9
│   ├── SCHEMA.md          # Questo file
=======
│   ├── schema.md          # Questo file
>>>>>>> 92912795 (.)
>>>>>>> laraxot/dev
<<<<<<< .merge_file_N7ypMU
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0AwxD9
=======
│   ├── SCHEMA.md          # Questo file
>>>>>>> laraxot/dev
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
<<<<<<< HEAD
<<<<<<< .merge_file_N7ypMU
=======
<<<<<<< .merge_file_kjrjlB
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> .merge_file_0AwxD9
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
<<<<<<< .merge_file_N7ypMU
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_ibZbu5
>>>>>>> laraxot/dev
>>>>>>> .merge_file_0AwxD9
=======
>>>>>>> laraxot/dev
