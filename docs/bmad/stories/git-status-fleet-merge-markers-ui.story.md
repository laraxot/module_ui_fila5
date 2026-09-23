---
title: "Story — bonifica marker merge residui modulo UI"
type: story
module: UI
epic: quality
status: done
related:
  - ../../../Xot/docs/bmad/stories/merge-marker-fleet-residue.story.md
---

# git-status-fleet-merge-markers-ui

Bonifica dei marker di merge conflict committati da "laraxot" nel modulo `laravel/Modules/UI`
(`<<<<<<<`, `=======`, `>>>>>>>`, varianti diff3 `||||||||`), secondo la strategia canonica
della story Xot/merge-marker-fleet-residue:

- HEAD pulito → `git checkout HEAD -- file`
- HEAD sporco → restore blob dell'ultimo commit pulito in history
- nessuna versione pulita → MANUAL

Tool: `bashscripts/tools/resolve-merge-markers.sh` (detection: marker fuori dai code fence ```` ``` ````).

## Stato iniziale

- Branch: `dev`, up to date con `laraxot/dev`, worktree pulito (0 dirty, 0 unmerged).
- `.gitattributes`: già pulito, nessun marker (nessuna copia template necessaria).
- Lock: `bashscripts/lock/git-status-fleet-UI.lock` (preso dal fleet orchestrator).

## Risultati

| Metrica | Valore |
|---|---|
| File candidati (grep marker) | 453 |
| restored_head | 0 |
| restored_hist | 438 |
| manual | 0 (2 fallback manuali, vedi sotto) |
| skipped (marker solo dentro fence / file assenti) | 15 |
| File modificati finali (`git status --porcelain`) | 438 |
| Marker residui fuori fence dopo apply | **0** |

## Fallback manuali (pathspec mancante nel commit "pulito")

Lo script ha individuato come "ultimo commit pulito" `7a96868c`, ma in quel commit il path
non esiste (`git show` falliva → blob considerato pulito per errore → `git checkout` con
`error: pathspec did not match`). Risolti a mano cercando il commit pulito più recente in cui
il path esiste davvero:

| File | Commit restore | Nota |
|---|---|---|
| `docs/phpstan-corrections.md` | `3ac71f6d` | Contenuto "Gennaio 2025" del lato theirs già presente in `phpstan-corrections-gennaio.md` / `phpstan-corrections-january.md` → nessuna perdita |
| `docs/components/legacy/full-calendar.md` | `5d04da30` | Blob pulito completo (259 righe) |

Nessun file MANUAL/MANUAL_UNTRACKED irrisolto.

## Verifica campionaria (commits_reverted più alti)

Max `commits_reverted` = 5 (`docs/architecture-patterns.md`); nessun file >5.

- `docs/architecture-patterns.md` (5): unica perdita = 19 righe di link duplicati
  `- **Architecture Overview**` / `- **Index**` (spazzatura di merge). OK.
- `docs/README.md` (4): persa solo riga footer duplicata "Documento generato…". OK.
- `docs/filament/file-upload-component.md` (4): perse righe frontmatter duplicate con
  placeholder `<nome repository>` (lato scartato). OK.

## Esito verifica finale

- Zero marker fuori code fence in tutto il modulo (awk detection identica allo script).
- 438 file modificati nel worktree, **nessun commit eseguito** (da committare a valle del fleet).

## Nota Pest / test

Solo file `docs/*.md` toccati: nessun comportamento di codice modificato → test Pest skippati
per scelta (non pertinenti a bonifica documentale).

## Note operative

- Lo script è terminato con un falso `syntax error` a EOF (file riletto/shifted durante
  l'esecuzione): tutti i 438 apply erano già completati; verificato a posteriori.
- Bug minore del tool segnalato: `blob_has_markers` tratta "path assente nel commit" come
  "pulito" → `git checkout` fallisce con pathspec error. Workaround applicato manualmente.
