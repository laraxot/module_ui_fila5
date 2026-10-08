---
title: "case conflicts"
type: note
tags: [documentation]
created: 2026-09-26
updated: 2026-09-26
qmd: "case conflicts"
issues: []
discussions: []
---

# Case-Insensitive File Conflicts

File duplicati rilevati nel modulo `UI`:

- `Modules/UI/.github`: `CONTRIBUTING.md`, `contributing.md`
- `Modules/UI/.github`: `SECURITY.md`, `security.md`
- `Modules/UI/docs`: `README.md`, `readme.md`
- `Modules/UI/docs/filament`: `ListRecords.md`, `listrecords.md`

Uniformare ciascuna coppia scegliendo un'unica versione (in genere `README.md`, `CONTRIBUTING.md`, ecc.) e rimuovere i duplicati.
