---
qmd: "ui bmad stories ui guest header ux story md"
title: "UI guest header e layout pubblico"
type: story
module: UI
status: done
track: ux/guest-auth
---
# Story

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

## Obiettivo funzionale

Le pagine pubbliche devono essere navigabili senza sessione autenticata. Il
header non deve leggere dati utente o mostrare link protetti ai guest; deve
offrire CTA chiare per Login e Register.

## Correzioni

- `header.blade.php`: navigazione protetta solo per utenti autenticati;
  dropdown profilo solo sotto `@auth`; CTA guest Login/Register; attributi
  ARIA sul menu e sul toggle.
- Homepage Four: usa il layout guest invece del layout app autenticato.

## Verifica

- `php artisan view:cache`: OK.
- `GET /it`: HTTP 200 senza `Attempt to read property`.
- Regola second brain applicata: layout guest per pagine pubbliche, app per
  pagine autenticate.


### Consequences

- Buono, perché chiude il gap descritto nel Context
- Cattivo, perché richiede write-back docs, lock e quality gate

### Confirmation

- `php artisan view:cache`: OK.
- `GET /it`: HTTP 200 senza `Attempt to read property`.
- Regola second brain applicata: layout guest per pagine pubbliche, app per
  pagine autenticate.
