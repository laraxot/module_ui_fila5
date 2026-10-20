---
title: "UI — Indice canonico docs"
status: canonical
module: UI
updated: 2026-10-20
---

> Indice canonico. Indici storici alternativi: `00-INDEX.md` (4.6 KB), `00-index.md` (300 byte, 2026-10-20), `index.md` (61 byte, 2026-08-24), `README.md`, `_archive/` (148 file con INDEX.md generato). Nessun file storico cancellato (in particolare `_archive/` intatto).

> Convenzione: [Docs Organization — Modules & Themes](../../Xot/docs/conventions/docs-organization.md)

# UI — Indice docs

Modulo UI (componenti Blade, filamenti avanzati, form, block, autenticazione, layout, design system, widget e componenti personalizzati per Filament e frontend).

## Panoramica
- [README.md](./README.md) — identità, ownership, quick start, limiti (verificati 2026-10-14)
- [wiki/purpose.md](./wiki/purpose.md) / [wiki/scope.md](./wiki/scope.md) — scopo e confini
- [decision-log.md](./decision-log.md) — decisioni indipendenti

## Architettura
- [bmad/](./bmad/) — dossier BMAD (architecture.md, 00-INDEX.md, 51 file: architecture/, epics/, stories/)
- [architecture/](./architecture/) — architettura generale del modulo
- [components/](./components/) — componenti disponibili
- [blocks/](./blocks/) — blocchi UI
- [blade/](./blade/) — componenti Blade, icone, data handling
- [actions/](./actions/) — azioni UI
- [core/](./core/) — core componente
- [development/](./development/) — sviluppo
- [filament/](./filament/) — integrazione Filament
- [filament-components/](./filament-components/) — componenti Filament
- [layout/](./layouts/) — layout
- [themes/](./themes/) — tema

## PHPStan / Qualità
- [phpstan.md](./phpstan.md) — stato PHPStan
- [phpstan-patterns.md](./phpstan-patterns.md) — pattern
- [phpstan-fixes-sumy.md](./phpstan-fixes-sumy.md) — correzioni (stub con `canonical:` verso `Themes/docs/shared-components/`, non esistente)
- [stories/phpstan-wave-coord.story.md](./stories/phpstan-wave-coord.story.md) — wave PHPStan
- [stories/phpstan-test-wave-ui.story.md](./stories/phpstan-test-wave-ui.story.md) — test wave

State misurato 2026-10-20: `phpstan analyse Modules/UI` → exit 0; 218 passati, 16 falliti, 1 risky, 109 saltati (pest, sqlite).

## BMAD / Stories
- [bmad/](./bmad/) — dossier BMAD
- [stories/](./stories/) — storie feature (ui-audit, merge-conflict, docs-ui-studio, cookiebar, inbound-content, phpstan-test-wave)
- [wiki/](./wiki/) — wiki; ingresso `wiki/index.md`; duplicati `wiki/00-INDEX.md`, `wiki/index.md`, `wiki/INDEX.md`

## Struttura (sottocartelle)
- `bmad/` — dossier BMAD
- `stories/` — storie feature
- `concepts/` — (vuota; concetti in `wiki/concepts/` e `bmad/`)
- `wiki/` — wiki (64 file)
- `best-practices/` — best practices
- `testing/` — test (linee guida, prestazioni, reale-vs-mock)
- `archive/` / `legacy/` — legacy (148 file); `_archive/` non toccato
- `root-md-files/` — file radice storici

## Duplicati storici mantenuti
- `00-INDEX.md` — indice operativo canonico (2026-10-20)
- `00-index.md` — mantenuto
- `index.md` (61 byte, 2026-08-24) — mantenuto
- `_archive/` — mantenuto intatto (148 file, include INDEX.md generato con 891 link non risolti)
- `README.md` / `ARCHITECTURE.md` / `GETTING_STARTED.md` — mantenuti (possono contenere marker di merge non risolti; usare con cautela)
- `archive/`, `legacy/` — mantenuti

---
*Aggiornato: 2026-10-20 — conforme a `docs-organization.md`; `_archive/` preservato; `00-INDEX.md` resta ingresso operativo; `INDEX.md` nuovo canonico; nessun file cancellato o rinominato.*
