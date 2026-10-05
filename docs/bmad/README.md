---
<<<<<<< .merge_file_YDuj6D
<<<<<<< .merge_file_hwkA1b
title: "UI — BMAD Documentation Index"
type: note
tags: [bmad, ui, design-system, index]
created: 2026-09-26
updated: 2026-09-28
qmd: "UI bmad indice documentazione design system componenti Filament"
module: UI
related:
  - ./architecture.md
  - ./brainstorming.md
  - ./epics/module-roadmap.md
  - ./quick-reference.md
  - ./setup-guide.md
  - ../../../Xot/docs/bmad-method.md
=======
=======
>>>>>>> .merge_file_KmC9PY
title: "UI — BMAD Method Integration"
description: "BMAD workflow documentation per il modulo UI"
module: "UI"
alias: "ui"
documentation_date: "2026-05-27"
bmad_version: "6.2.0"
bmad_track: "design-system"
>>>>>>> .merge_file_OqVqDZ
---

# UI — BMAD Method Integration

> **SUMMARY**: indice dei documenti BMAD del modulo UI (design system: colonne Tabella, campi Form, blocchi Blade, widget Filament, contratti `Map`/`Geocoding`), con l'inventario reale di `app/` (121 file PHP) e `tests/` (77 file PHP) verificato sul repository.

## Scopo BMAD per UI

`module.json` dichiara: *"Sistema di componenti UI riutilizzabili e design system per interfacce utente coerenti"* (alias `ui`, keyword `tailwind`). Il modulo non contiene CRUD di dominio: espone primitive UI consumate dagli altri moduli.

## Indice documenti BMAD

### Canonici

- [architecture.md](architecture.md) — mappa reale del modulo e indice degli shard
- [brainstorming.md](brainstorming.md) — decisioni aperte/chiuse e indice degli shard
- [epics/module-roadmap.md](epics/module-roadmap.md) — roadmap epic A–D
- [epics/epic-1-design-system-components.md](epics/epic-1-design-system-components.md) — Epic 1: parità Form/Table e layout
- [quick-reference.md](quick-reference.md) — comandi rapidi del workflow
- [setup-guide.md](setup-guide.md) — setup e verifica minima

### Shard

- [architecture/module-boundary.md](architecture/module-boundary.md) — confini, inventario, gate
- [brainstorming/module-opportunities.md](brainstorming/module-opportunities.md) — domande ad alto valore e rischi
<<<<<<< .merge_file_TDG0SS

### Conversione widget Livewire → Filament

- [livewire-widget-product-brief.md](livewire-widget-product-brief.md)
- [livewire-widget-project-context.md](livewire-widget-project-context.md)
- [livewire-widget-prd.md](livewire-widget-prd.md)
- [livewire-widget-ux.md](livewire-widget-ux.md)
- [livewire-widget-architecture.md](livewire-widget-architecture.md)
- [livewire-widget-conversion.md](livewire-widget-conversion.md)
- [livewire-widget-decision-log.md](livewire-widget-decision-log.md)
- [livewire-widget-epics.md](livewire-widget-epics.md)
- [livewire-widget-tech-spec.md](livewire-widget-tech-spec.md)
- [livewire-widget-brainstorming.md](livewire-widget-brainstorming.md)
- [livewire-inventory.md](livewire-inventory.md)

### Stories

- [stories/module-bmad-audit-20260928.story.md](stories/module-bmad-audit-20260928.story.md)
- [stories/root-hygiene-conflict-markers.story.md](stories/root-hygiene-conflict-markers.story.md)
- [stories/ensures-ui-database-schema-trait-unused.story.md](stories/ensures-ui-database-schema-trait-unused.story.md)
- [stories/git-status-fleet-merge-markers-ui.story.md](stories/git-status-fleet-merge-markers-ui.story.md)
- [stories/continuazione-domani.story.md](stories/continuazione-domani.story.md)
- [stories/STORY-UI-TABLE-LAYOUT-ENUM-TRANSLATIONS.md](stories/STORY-UI-TABLE-LAYOUT-ENUM-TRANSLATIONS.md)

## Inventario verificato

| Area | Path | Contenuto |
|------|------|-----------|
| Provider | `app/Providers/` | `UIServiceProvider.php`, `RouteServiceProvider.php`, `EventServiceProvider.php`, `Filament/AdminPanelProvider.php` |
| Modelli | `app/Models/` | `BaseModel.php`, `Category.php`, `Collection.php`, `FieldOption.php`, `Policies/UiBasePolicy.php` |
| Colonne Tabella | `app/Filament/Tables/Columns/` | 15 colonne (Address, Group, Icon, IconState, SortableId, Timestamp, Tree, …) |
| Campi Form | `app/Filament/Forms/Components/` | Address, Children, EnumSelect, IconPicker, InlineDatePicker, OpeningHours, OrderColumn, ParentSelect, PersonSection, Radio*, SelectState, TreeField, YearSelect, `Field/QrReader.php` |
| Blocchi | `app/Filament/Blocks/` | Category, Contact, Heading, Hero, Image(sGallery), Navigation, Page, Paragraph, Post, Slider, Title, VideoSpatie |
| Widget Filament | `app/Filament/Widgets/` | DarkModeSwitcher, Group, Hero, Overlook, Redirect, Row, StatWithIcon, StatsOverview, TestChart, Test, UserCalendar |
| Action | `app/Actions/` | `GetAllBlocksAction`, `ResolveLocalizedBlockDataAction`, `GetDaysMappingAction`, `GetUserDataAction`, `GetAllIconsAction`, `Panel/ApplyCalendarToPanelAction` |
| Contratti | `app/Contracts/` | `HasTableLayout.php`, `MapServiceContract.php`, `GeocodingServiceContract.php` |
| Enum | `app/Enums/` | `CornerPositionEnum`, `FieldTypeEnum`, `TableLayout`, `TableLayoutEnum` |
| Dati | `app/Datas/`, `app/Data/` | `SliderData`, `SliderDataCollection`, `ThemeMetadataData`, `UserData` |
| Servizi | `app/Services/` | `UIService`, `ComponentService`, `ThemeService`, `Map/NullMapService`, `Map/NullGeocodingService` |
| Adattatori | `app/Adapters/Map/` | `NullMapServiceAdapter`, `NullGeocodingServiceAdapter` |
| Regole | `app/Rules/` | `OpeningHoursRule.php` |
| View component | `app/View/Components/` | BreadLink, DarkModeSwitcher, Logo, Navbar, Sidebar, Std, Svg, `Page/WithSidebar`, `Render/Block`, `Render/Blocks`, `Blocks/Hero/Simple` |
| Config | `config/` | `config.php`, `laravel-localization.php`, `laravellocalization.php` |
| Traduzioni | `resources/lang/{it,en}/` | `auth.php`, `blocks.php`, `datepicker.php`, `ui.php` |
| Database | `database/` | `factories/`, `migrations/`, `seeders/` |
| Test | `tests/` | 18 file in `Feature/`, il resto in `Unit/` (widgets, componenti, enums, coverage) |

=======

### Conversione widget Livewire → Filament

- [livewire-widget-product-brief.md](livewire-widget-product-brief.md)
- [livewire-widget-project-context.md](livewire-widget-project-context.md)
- [livewire-widget-prd.md](livewire-widget-prd.md)
- [livewire-widget-ux.md](livewire-widget-ux.md)
- [livewire-widget-architecture.md](livewire-widget-architecture.md)
- [livewire-widget-conversion.md](livewire-widget-conversion.md)
- [livewire-widget-decision-log.md](livewire-widget-decision-log.md)
- [livewire-widget-epics.md](livewire-widget-epics.md)
- [livewire-widget-tech-spec.md](livewire-widget-tech-spec.md)
- [livewire-widget-brainstorming.md](livewire-widget-brainstorming.md)
- [livewire-inventory.md](livewire-inventory.md)

### Stories

- [stories/module-bmad-audit-20260928.story.md](stories/module-bmad-audit-20260928.story.md)
- [stories/root-hygiene-conflict-markers.story.md](stories/root-hygiene-conflict-markers.story.md)
- [stories/ensures-ui-database-schema-trait-unused.story.md](stories/ensures-ui-database-schema-trait-unused.story.md)
- [stories/git-status-fleet-merge-markers-ui.story.md](stories/git-status-fleet-merge-markers-ui.story.md)
- [stories/continuazione-domani.story.md](stories/continuazione-domani.story.md)
- [stories/STORY-UI-TABLE-LAYOUT-ENUM-TRANSLATIONS.md](stories/STORY-UI-TABLE-LAYOUT-ENUM-TRANSLATIONS.md)

## Inventario verificato

### Schema.org

- `OrganizationSection` / `OrganizationColumn`: editor and table projection
  for `schema.org/Organization`.
- `EventSection` / `EventColumn`: editor and table projection for the common
  `schema.org/Event` properties, with configurable field subsets.
- `PersonSection` / `PersonColumn`: existing person projection.
- `AddressField` / `AddressColumn`: existing postal-address projection.

| Area | Path | Contenuto |
|------|------|-----------|
| Provider | `app/Providers/` | `UIServiceProvider.php`, `RouteServiceProvider.php`, `EventServiceProvider.php`, `Filament/AdminPanelProvider.php` |
| Modelli | `app/Models/` | `BaseModel.php`, `Category.php`, `Collection.php`, `FieldOption.php`, `Policies/UiBasePolicy.php` |
| Colonne Tabella | `app/Filament/Tables/Columns/` | 15 colonne (Address, Group, Icon, IconState, SortableId, Timestamp, Tree, …) |
| Campi Form | `app/Filament/Forms/Components/` | Address, Children, EnumSelect, IconPicker, InlineDatePicker, OpeningHours, OrderColumn, ParentSelect, PersonSection, Radio*, SelectState, TreeField, YearSelect, `Field/QrReader.php` |
| Blocchi | `app/Filament/Blocks/` | Category, Contact, Heading, Hero, Image(sGallery), Navigation, Page, Paragraph, Post, Slider, Title, VideoSpatie |
| Widget Filament | `app/Filament/Widgets/` | DarkModeSwitcher, Group, Hero, Overlook, Redirect, Row, StatWithIcon, StatsOverview, TestChart, Test, UserCalendar |
| Action | `app/Actions/` | `GetAllBlocksAction`, `ResolveLocalizedBlockDataAction`, `GetDaysMappingAction`, `GetUserDataAction`, `GetAllIconsAction`, `Panel/ApplyCalendarToPanelAction` |
| Contratti | `app/Contracts/` | `HasTableLayout.php`, `MapServiceContract.php`, `GeocodingServiceContract.php` |
| Enum | `app/Enums/` | `CornerPositionEnum`, `FieldTypeEnum`, `TableLayout`, `TableLayoutEnum` |
| Dati | `app/Datas/`, `app/Data/` | `SliderData`, `SliderDataCollection`, `ThemeMetadataData`, `UserData` |
| Servizi | `app/Services/` | `UIService`, `ComponentService`, `ThemeService`, `Map/NullMapService`, `Map/NullGeocodingService` |
| Adattatori | `app/Adapters/Map/` | `NullMapServiceAdapter`, `NullGeocodingServiceAdapter` |
| Regole | `app/Rules/` | `OpeningHoursRule.php` |
| View component | `app/View/Components/` | BreadLink, DarkModeSwitcher, Logo, Navbar, Sidebar, Std, Svg, `Page/WithSidebar`, `Render/Block`, `Render/Blocks`, `Blocks/Hero/Simple` |
| Config | `config/` | `config.php`, `laravel-localization.php`, `laravellocalization.php` |
| Traduzioni | `resources/lang/{it,en}/` | `auth.php`, `blocks.php`, `datepicker.php`, `ui.php` |
| Database | `database/` | `factories/`, `migrations/`, `seeders/` |
| Test | `tests/` | 18 file in `Feature/`, il resto in `Unit/` (widgets, componenti, enums, coverage) |

>>>>>>> .merge_file_H0DnXd
## Workflow BMAD (fasi)

1. **Analysis** — `architecture/module-boundary.md` + `brainstorming/module-opportunities.md`.
2. **Planning** — `quick-reference.md` per i comandi, `epics/module-roadmap.md` per le priorità.
3. **Solutioning** — `architecture.md` (mappa reale) e `epics/epic-1-design-system-components.md`.
4. **Implementation** — ogni story in `stories/`, con lock su `bashscripts/lock/lock.sh` ed esito in `docs/sprint-status.yaml`.

Agenti usati nel modulo (mapping presente nei documenti shard): ux-designer per i componenti, dev per l'implementazione, qa per i test.

## Vedi Anche

- [Metodo BMAD in Laraxot](../../../Xot/docs/bmad-method.md)
- [quick-reference](quick-reference.md)
- [setup-guide](setup-guide.md)
