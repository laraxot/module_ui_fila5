---
qmd: "README"
issues: []
discussions: []
title: "UI module documentation"
type: documentation
tags: [module, documentation]
bmad_status: active
scope: UI-module-docs
created: 2026-06-05
updated: 2026-10-07
---

# Modulo UI - componenti condivisi e documentazione attiva

## Overview

Il modulo **UI** fornisce componenti Blade, widget Filament, campi form, colonne tabella e asset condivisi per tutti i moduli e temi. Questa cartella contiene la documentazione attiva (componenti Filament, widget Livewire, design system, BMAD, wiki). Le note obsolete stanno in `archive/` e `_archive/`.

## Sezioni della cartella docs

- `bmad/`: specifiche BMAD, epic, story, architettura
- `wiki/`: riferimento attivo (actions, concepts, integration, standards)
- `stories/`: story del modulo (vedi [Stories](#stories))
- `legacy/`: note legacy
- `archive/` e `_archive/`: documenti storici
- file `.md` in root: PHPStan fixes, PRD, stato del modulo

## Struttura componenti Blade

Il codice vive in `resources/views/components/`. I componenti con prefisso `ui` stanno in `components/ui/`:

```
resources/views/components/
├── ui/
│   ├── button.blade.php, card.blade.php, input.blade.php, modal.blade.php, ...
│   ├── app/header.blade.php
│   └── marketing/{breadcrumbs,header,page-header}.blade.php
├── buttons/, dropdown/, headernav/, layouts/, logo/, menu/, page/
├── accordion.blade.php, stepper.blade.php, avatar.blade.php, icon.blade.php
└── blocks/, filament/, render/, std/, svg/
```

Elenco aggiornato nella [guida componenti](./components.md) e in [PROJECT-STRUCTURE](./PROJECT-STRUCTURE.md).

## Utilizzo

```blade
<x-ui::ui.button type="primary">
    Salva
</x-ui::ui.button>

<x-ui::ui.card>
    Contenuto
</x-ui::ui.card>
```

## Widget Filament

Widget disponibili in `app/Filament/Widgets/`: `DarkModeSwitcherWidget`, `GroupWidget`, `HeroWidget`, `OverlookWidget`, `RedirectWidget`, `RowWidget`, `StatWithIconWidget`, `StatsOverviewWidget`, `ToastWidget`, `UserCalendarWidget` (piu' i widget di test `TestWidget` e `TestChartWidget`). Dettagli in [widgets.md](./widgets.md).

I widget estendono le basi Xot (`XotBaseWidget`, `XotBaseSchemaWidget`), mai Filament direttamente.

## TableLayoutEnum

`Modules\UI\Enums\TableLayoutEnum` ha i case `LIST` (default via `init()`) e `GRID`; le etichette vengono dai file `lang/<locale>/table_layout_enum.php` sotto la chiave `values`.

- [TableLayoutEnum guide](./table-layout-enum-complete-guide.md)
- [Filament components](./filament-components.md)

## Regole fondamentali

1. **MAI posizionare componenti in root**: usare le cartelle di `Modules/UI/resources/views/components/`.
2. **Prefisso obbligatorio**: usare `<x-ui::ui.componente />`.
3. **PHPDoc completo** per ogni componente.

## Stato qualita'

- PHPStan Level 10: `phpstan analyse Modules` termina con exit 0 (verifica del 2026-10-07)
- Licenza: MIT
- Conteggi (2026-10-07): 247 file Blade sotto `resources/views/components/`, 12 file in `app/Filament/Widgets/`

## Stories

- [2026-10-06 PHPStan cleanup UI](./stories/2026-10-06-phpstan-cleanup-ui.story.md) · [dev](./stories/2026-10-06-phpstan-cleanup-ui.dev.md)
- [19.UI Risoluzione marker di merge `HEAD` vs `laraxot/dev`](./stories/19.UI-merge-conflict-resolution.story.md)
- Elenco completo: [`00-INDEX.md`](./00-INDEX.md)

## Collegamenti

- [Regole posizionamento componenti](../../../../bashscripts/ai/wiki/rules/ui-components-rules.md)
- [Xot module](../../Xot/docs/) - framework core
- [User module](../../User/docs/) - gestione utenti
- [Lang module](../../Lang/docs/) - traduzioni

## Documentazione correlata

- [On-Demand Pattern](./ON-DEMAND-PATTERN.md): pattern per caricamento efficiente
- [QMD Setup](./QMD-SETUP.md): configurazione ricerca locale
- [Performance](./PERFORMANCE-OPTIMIZATION.md): metriche e best practice
- [Project Structure](./PROJECT-STRUCTURE.md): directory layout

## AI workflows

- [AI Methodologies](./ai-methodologies.md)

## Standard rules and workflow

- [BMAD Method](../../../../docs/wiki/concepts/bmad-method.md)
- [Context Engineering](../../../../docs/wiki/concepts/context-engineering.md)
- [LLM Wiki Governance](../../../../docs/wiki/concepts/llm-wiki-governance.md)
