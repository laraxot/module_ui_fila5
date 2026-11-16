---
id: UI/module-bmad-audit-20260928
title: "UI: baseline BMAD e analisi completa"
status: ready-for-dev
module: UI
epic: module-governance
priority: P1
created: 2026-09-28
references:
  - ../architecture/module-boundary.md
  - ../brainstorming/module-opportunities.md
  - ../epics/module-roadmap.md
type: story
updated: 2026-11-16
tags: [docs, ui, bmad]
qmd: "story   ui: baseline bmad ui"
---
# Story: UI: baseline BMAD

Come manutentore del modulo UI, voglio una baseline BMAD verificabile, così da poter pianificare lavoro senza confondere ipotesi, WIP e comportamento osservato.

## Acceptance criteria

- [ ] Confermare API pubblica e confini con riferimenti a codice reale.
- [ ] Inventariare i flussi critici e collegarli a test Pest.
- [ ] Misurare PHPStan/Pest nel contesto stabile del modulo.
- [ ] Registrare dipendenze, rischi e decisioni nel modulo.
- [ ] Aggiornare lo stato reale in `docs/sprint-status.yaml`.

## Task

- [ ] Revisione architettura.
- [ ] Brainstorming con stakeholder.
- [ ] Decomposizione epic in story più piccole.
- [ ] Quality gate e second-brain write-back.

## Audit 2026-11-16

Audit statico completo del modulo UI (design system: Filament Blocks, Widgets Livewire→Filament, Temi). PHPStan level max: **0 errori**.

### Conteggi

- Modelli: 5 file in `app/Models`. Actions: 6. Services: 5 (`UIService`, `ThemeService`, `ComponentService`, `Map/NullMapService`, `Map/NullGeocodingService`).
- Filament: 76 file PHP (12 Widget, 3 Page, Blocks, Actions, Tables/Columns custom); nessuna `*Resource.php` (UI espone componenti, non risorse).
- Migrazioni: 3. Routes: `api.php`, `web.php`.
- Test: 87 file, ~348 test Pest; 2 TestCase PHPUnit.
- Lang: `it` 123 file, `en` 70 file — gap EN rilevante.
- `docs/bmad/`: 45 file; `docs/` contiene 55 `.md` con data/timestamp nel nome (es. `bugfix-table-layout-action-2025-01-27.md`); esiste `docs-archive/` e `phpstan-baseline.neon` a livello modulo.

### Findings

1. **[Convention] Services invece di Actions**: `UI/app/Services/` contiene 5 classi Service, contro la convenzione "logica di business in Spatie Queueable Action". `UIService::asset()` è un semplice delegato a `AssetAction` (wrapper inutile); `NullMapService`/`NullGeocodingService` sono null-object (accettabili come adapter), `ThemeService`/`ComponentService` da rivalutare come candidati Action.
2. **[Filament] Label/placeholder/helperText hardcoded**: 37 occorrenze `->label()` (molte con `__()` tradotto, ma la regola no-filament-labels le vieta comunque), 3 `->placeholder()`, 20 `->helperText()` in `app/`. Le colonne `placeholder('—')` per valori vuoti sono quelle più difendibili ma andrebbero centralizzate.
3. **[Quality] `mixed` diffuso**: 34 file in `app/` contengono `mixed`; 2 TODO/FIXME; `property_exists()` presente solo in commenti (corretto, usa `isset()` su magic properties Livewire — vedi `TableLayoutToggleHeaderAction`, `IconStateColumn`, `GetUserDataAction`).
4. **[Docs] File .md con date**: 55 file in `docs/` (fuori da `bmad/`) violano la regola di naming kebab-case senza timestamp; presenza di `phpstan-baseline.neon` nel modulo (la baseline root è 0 errori — verificare se il file è ancora referenziato o dead config).
5. **[i18n] Gap EN**: 70 file `en` vs 123 `it`; file en-only anomali come `table_layout.php` e `table-layout.php` coesistenti (duplicato case/kebab) insieme a `corner-position.php`/`corner_position` varianti — segno di duplicazioni non consolidate.
6. **[Filament] Base Xot OK**: 58 classi estendono base Xot; nessun `Filament\Forms\Form` legacy; nessun merge marker.

### Rischi

- Medio: UI è il design system — le violazioni `->label()` si propagano a tutti i moduli che riusano Blocks/Widget UI; il gap lang EN impatta esperienze non-italiane.

### Next steps (priorizzati)

1. Decidere sorte di `UI/app/Services/`: migrare `ThemeService`/`ComponentService` ad Action o documentare eccezione; rimuovere `UIService` delegato.
2. Piano di rimozione progressiva `->label()/->placeholder()/->helperText()` (priorità ai componenti riusati: Blocks Post/Category, TableLayoutToggle).
3. Consolidare duplicati lang (`table_layout` vs `table-layout`, `corner-position` vs `corner_position`) e colmare gap EN.
4. Spostare/archiviare i 55 `.md` datati in `docs/` e verificare `phpstan-baseline.neon` di modulo.


