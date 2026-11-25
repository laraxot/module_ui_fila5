---
type: epic-story
title: UI Module BMAD Setup
status: ready-for-dev
links:
  github_issue: 0
  module: UI
qmd: "ui bmad setup story"
---
# UI Module BMAD Setup

## Context and Problem Statement

Problema e obiettivo sono descritti nel Decision Outcome (migrazione automatica a MADR).

## Decision Drivers

- Richiesta utente / acceptance criteria della story
- Vincoli BMAD, second brain, Pest gate e dati sacri

## Considered Options

- Status quo (non fare)
- Implementare come descritto nel Decision Outcome

## Decision Outcome

Scelta: **implementare**, perché i driver sopra.

## Overview
Initial BMAD documentation setup for the UI module.

## Acceptance Criteria
- [ ] All BMAD docs created in `Modules/UI/docs/`
- [ ] decision-log.md updated
- [ ] PHPStan passes on UI module
- [ ] Pint --dirty passes

## Standing claim (2026-11-24)

- Merge markers cleared in `app/` + `routes/` (8 entrypoints) so PHPStan can parse the module.
- Routes are empty stubs; no `require` of `Modules/Xot/routes/empty.php`.
- Kept `@contract` docs and Cms `class_exists` guard in `GetLocalizedBlockDataAction`.
- Inventory: [git-merge-conflict-inventory](../wiki/troubleshooting/git-merge-conflict-inventory.md).

## Notes
Module has 1 Controller and 5 Service directories that may need refactoring.


### Consequences

- Buono, perché chiude il gap descritto nel Context
- Cattivo, perché richiede write-back docs, lock e quality gate

### Confirmation

Aggiungere prova ripetibile (Pest exit code + conteggio, PHPStan, o skip host documentato).
