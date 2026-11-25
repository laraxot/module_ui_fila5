---
qmd: "ui stories docs index audit story md"
title: Audit indice documentazione modulo UI
slug: docs-index-audit
status: done
scope: module:UI
---
# Audit indice documentazione modulo UI

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

Rigenerato `Modules/UI/docs/index.md` come indice unico e organizzato per argomento/cartella dei 1030 file `.md` sotto `docs/`, senza spostare, rinominare o cancellare alcun file esistente.
Individuati 77 cluster di varianti duplicate in root (collisioni case-insensitive o copie `-1`/`-2`) e le cartelle `archive/`, `legacy/`, `prior_cycles/`, `root-md-files/`, `root-txt-files/` (186 + 181 file totali), raggruppate in "Storico / da consolidare" con nota, non toccate.
`00-index.md` e `README.md` segnalati come indici/contenuti legacy fusi (merge case-insensitive pregressi) da consolidare in futuro, ma lasciati intatti.
Verifica: tutti i 1035 link relativi generati puntano a file esistenti (controllo automatico, zero broken link).


### Consequences

- Buono, perché chiude il gap descritto nel Context
- Cattivo, perché richiede write-back docs, lock e quality gate

### Confirmation

Aggiungere prova ripetibile (Pest exit code + conteggio, PHPStan, o skip host documentato).
