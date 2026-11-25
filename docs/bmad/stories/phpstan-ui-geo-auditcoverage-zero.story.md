---
title: "UI: PHPStan Geo/AuditCoverage zero (puntatore)"
type: story
module: UI
status: superseded
created: 2026-11-16
updated: 2026-11-16
tags: [phpstan, ui, bmad, pointer]
qmd: "UI phpstan geo auditcoverage pointer superseded by phpstan-modules-zero"
canonical: ./phpstan-modules-zero.story.md
---
# Puntatore

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

Sostituita da [phpstan-modules-zero.story.md](./phpstan-modules-zero.story.md)
(nome canone richiesto dallo swarm PHPStan moduli).


### Consequences

- Buono, perché chiude il gap descritto nel Context
- Cattivo, perché richiede write-back docs, lock e quality gate

### Confirmation

Aggiungere prova ripetibile (Pest exit code + conteggio, PHPStan, o skip host documentato).
