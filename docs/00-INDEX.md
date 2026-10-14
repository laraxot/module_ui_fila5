---
title: "UI module documentation index"
type: index
status: active
updated: 2026-10-14
module: UI
tags: [ui, module, documentation]
qmd: "UI module documentation index"
---

# UI - indice canonico

Ingresso unico del `docs/` di `laravel/Modules/UI`, secondo il
[contratto docs](../../../../bmad-output/docs-architecture/module-theme-docs-contract.md).
Identita', cosa contiene il codice, quick start e limiti: [README](README.md). Non esiste `index.md` alla radice di `docs/`
e non va creato: gli altri indici con nome simile stanno in `wiki/` e `bmad/` e sono elencati sotto come legacy.

## Leggere per primi

| Documento | Perche' |
|---|---|
| [README](README.md) | ownership, conteggi del codice, quick start, limiti (verificati 2026-10-14) |
| [wiki/purpose.md](wiki/purpose.md) | scopo del modulo e confini; in coda una verifica datata dei numeri |
| [wiki/scope.md](wiki/scope.md) | scopo in una riga |
| [bmad/architecture.md](bmad/architecture.md) | mappa del codice per area; in coda le correzioni del 2026-10-14 |
| [bmad/architecture/module-boundary.md](bmad/architecture/module-boundary.md) | confini e inventario |
| [decision-log](decision-log.md) | decisioni indipendenti del modulo |
| [wiki/log](wiki/log.md) | registro cronologico |

## Directory

| Directory | Classe | File `.md` | Nota |
|---|---|---|---|
| `wiki/` | canonica | 64 (15 nella radice) | [concepts/](wiki/concepts/) (2 regole + indici), [standards/](wiki/standards/), [AGENTS.md](wiki/AGENTS.md); `schema/`, `decisions/`, `index/` contengono solo `.gitkeep` |
| `stories/` | canonica | 7 | cronologia BMAD del modulo, [ui-audit](stories/ui-audit.md), [services to actions](stories/2026-10-08-services-to-actions-ui.story.md), [PHPStan cleanup](stories/2026-10-06-phpstan-cleanup-ui.story.md) |
| `bmad/` | canonica solo per `architecture.md` e `architecture/` | 51 | il resto e' misto: epic ([epics/](bmad/epics/)), brainstorming, 13 story in `bmad/stories/`, copie di documenti del wiki |
| `investigation/` | evidence | 1 | [ui-investigation.md](investigation/ui-investigation.md) |
| `phpstan*.md` (radice) | evidence | 8 | rapporti di correzione PHPStan (5 con corpo, es. [phpstan-patterns.md](phpstan-patterns.md)); 3 sono stub da 16 righe (`phpstan.md`, `phpstan-fixes-sumy.md`, `phpstan-corrections-sumy.md`) con `canonical:` verso `Themes/docs/shared-components/`, cartella che non esiste |
| `prd.json`, `Config.bak/` | evidence | 4 file in `Config.bak/` | non usare come fonte |
| `_archive/` | legacy | 148 | include un `INDEX.md` generato con 891 link non risolti |
| `archive/`, `legacy/`, `root-md-files/` | legacy | 3, 8, 1 | non usare come fonte |

## Ingressi duplicati o non canonici

- `wiki/00-INDEX.md`, `wiki/00-index.md`, `wiki/INDEX.md`, `wiki/index.md`, `wiki/readme.md` e `bmad/00-INDEX.md`, `bmad/00-index.md`,
  `bmad/README.md`, `bmad/readme.md`: indici precedenti, non canonici. `wiki/00-index.md` dichiara "PHPStan Level 10 Compliant" e
  "Module Version 2.3.0": una versione non e' dichiarata da `module.json` ne' da `composer.json`. `wiki/index.md` ha un titolo che
  descrive una sessione di lavoro, non la cartella.
- `bmad/purpose.md` e `wiki/purpose.md` hanno lo stesso corpo (verificato con `diff`): vale quello in `wiki/`.
- `README.md`, `ARCHITECTURE.md`, `GETTING_STARTED.md` nella radice del modulo (fuori da `docs/`): il primo ha marker di merge non
  risolti, gli altri segnaposto `$MOD`; non sono riferimenti.

## Stato misurato (2026-10-14)

- `phpstan analyse Modules/UI`: exit 0.
- `pest Modules/UI/tests` con sqlite in memoria: 218 passati, 16 falliti, 1 risky, 109 saltati.
- Link non risolti in `docs/`: 1522 eventi in 159 file; per causa: 1255 file del modulo che non esistono, 122 verso docs di altri
  moduli o temi, 84 verso `docs/` della radice del repo, 47 fuori dal modulo, 14 verso directory inesistenti.
- Story del giorno: [2026-10-14-docs-ui-studio-e-ingressi](stories/2026-10-14-docs-ui-studio-e-ingressi.story.md).
