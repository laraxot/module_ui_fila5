---
title: "UI ADR — prefisso NNNN + template MADR harness"
type: story
status: done
module: UI
epic: docs-second-brain
created: 2026-11-25
updated: 2026-11-25
related:
  - ../../adr/0002-idcolumn-mandatory-on-tables.md
  - ../../adr/id-column-mandatory-on-tables.md
  - ../../adr/README.md
  - ../../adr/index.md
  - ../../adr/0000-template.md
qmd: "UI ADR numbered NNNN MADR harness template 0002 idcolumn stub superseded"
---

# UI ADR — prefisso NNNN + template MADR harness

## Context and Problem Statement

Regola utente: ogni `docs/adr` segue il template harness e il basename
`NNNN-slug.md` (eccezioni: README, INDEX/index, 0000-template). Il contenuto
canonico IDColumn viveva in `id-column-mandatory-on-tables.md` senza prefisso.
Come allineare gli ADR UI a `NNNN-slug.md` + sezioni MADR inglesi senza
toccare PHP?

## Decision Drivers

- Basename obbligatorio `NNNN-` (nessun ADR kebab-only non numerato, salvo stub
  superseded / eccezioni naming).
- SSoT content: contenuto canonico IDColumn → `0002-idcolumn-mandatory-on-tables.md`.
- No PHP: solo docs ADR + story + sprint-status.
- Template harness + sezioni MADR inglesi in README / `0000-template.md`.

## Considered Options

- Lasciare ADR UI non numerati / «senza numero» ammessi in README
- Migrare a `NNNN-slug.md` + stub superseded per il vecchio path + template MADR

## Decision Outcome

Scelta: **prefisso `NNNN-` + template MADR harness**, perché è la regola utente
e rende discoverabili gli ADR UI via indice numerato.

- `0002-idcolumn-mandatory-on-tables.md` = ADR canonico
- `id-column-mandatory-on-tables.md` = stub `superseded by 0002-…`
- README / index / `0000-template.md` allineati all'upstream harness

### Consequences

- Buono, perché basename e sezioni MADR sono coerenti col resto del fleet
- Cattivo, perché i link al path non numerato devono passare dallo stub

### Confirmation

Sprint `UI/adr-numbered-madr-template` e checklist Acceptance Criteria.

## Acceptance Criteria

- [x] `0002-idcolumn-mandatory-on-tables.md` è ADR canonico (frontmatter harness + sezioni inglesi MADR)
- [x] `id-column-mandatory-on-tables.md` è stub `superseded by 0002-…` (puntatore only)
- [x] `README.md` richiede prefisso `NNNN-` (nessun «senza numero»); link template harness + locale; elenca sezioni MADR inglesi
- [x] `index.md` elenca solo `0001`…`0006` con link corretti
- [x] `0000-template.md` allineato all'upstream harness + nota basename `NNNN-slug.md` (+ `qmd` opzionale)
- [x] Nessun ADR UI non numerato salvo stub superseded / eccezioni naming

## Esito

Done 2026-11-25. Sprint: `UI/adr-numbered-madr-template`.
