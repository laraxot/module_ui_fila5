---
title: "UI — Design system e componenti condivisi"
description: "Documentazione tecnica del modulo UI: componenti Blade, widget e customizzazioni Filament condivisi da tutto l'ecosistema Laraxot."
module: UI
tags: [ui, blade, filament, design-system, componenti]
status: active
updated: 2026-09-17
---

# UI — Design system e componenti condivisi

## Scopo

Il modulo **UI** fornisce i componenti Blade, i widget e le customizzazioni Filament condivisi da tutti gli altri moduli e temi dell'ecosistema Laraxot. Non contiene logica di dominio: è il layer di presentazione riutilizzabile che garantisce coerenza visiva senza che ogni modulo debba reimplementare gli stessi pattern.

## Cosa offre

- **Componenti Blade** (`resources/views/components/ui/`) — building block come `button`, `card`, `input`, `modal`, `badge`, `accordion`, `tab`, `toggle`, `hero`, `checkbox`, `cookiebar`, `light-dark-switch`, oltre a un set `marketing/` (breadcrumbs, header, page-header) per le pagine pubbliche.
- **Widget Filament** (`app/Filament/Widgets/`) — `StatsOverviewWidget`, `StatWithIconWidget`, `UserCalendarWidget`, `HeroWidget`, `GroupWidget`, `RowWidget`, `DarkModeSwitcherWidget`, tra gli altri.
- **Campi form e colonne Filament custom** (`app/Filament/Forms/Components/`, `app/Filament/Tables/Columns/`) — ad esempio `AddressField`, `OpeningHoursField`, `RadioCollection`, `SelectState`, `IconPicker`, `TreeField`, `IconColumn`, `IconStateSplitColumn`: estendono i componenti Filament base senza introdurre logica di dominio.
- **Blocchi** (`app/Filament/Blocks/`) — building block per contenuti strutturati (page builder).
- **Enum di supporto** (`app/Enums/`) — `TableLayoutEnum` (toggle lista/griglia per le tabelle Filament), `FieldTypeEnum`, `CornerPositionEnum`.
- **Actions** (`app/Actions/`) — logica isolata per Block, Datetime, Icon, Panel.

## Struttura dei componenti Blade

I componenti vivono sotto `Modules/UI/resources/views/components/ui/` e sono esposti con il namespace `ui::`, registrato automaticamente da `XotBaseServiceProvider` (vedi `UIServiceProvider::getComponentViewPath()`):

```
resources/views/components/ui/
├── button.blade.php
├── card.blade.php
├── input.blade.php
├── modal.blade.php
├── badge.blade.php
├── accordion.blade.php
├── app/
│   └── header.blade.php
└── marketing/
    ├── breadcrumbs.blade.php
    ├── header.blade.php
    └── page-header.blade.php
```

Utilizzo tipico:

```blade
<x-ui::button variant="primary">
    Salva
</x-ui::button>

<x-ui::card>
    Contenuto
</x-ui::card>
```

## TableLayoutEnum

`Modules\UI\Enums\TableLayoutEnum` standardizza il toggle lista/griglia nelle tabelle Filament. Usa `EnumTrait` (di `Modules\Xot\Traits`, non `TransTrait`) per le traduzioni via `transClass()`, ed espone `toggle()`, `isGridLayout()`, `getTableContentGrid()` e `getTableColumns()`. Guida completa: [table-layout-enum-complete-guide.md](./table-layout-enum-complete-guide.md).

## Regole fondamentali

1. **MAI posizionare componenti nella root** `resources/views/components/` — solo in `Modules/UI/resources/views/components/ui/`.
2. **MAI usare `->label()`** direttamente su colonne/azioni Filament: le label sono gestite dal sistema di traduzioni automatico (`transClass()` / chiavi in `lang/`).
3. **PHPDoc completo** per ogni componente ed Enum.
4. **Nessuna logica di dominio**: UI resta un layer di presentazione; la logica applicativa vive nei moduli che la consumano (vedi anche [geo-boundary.md](./geo-boundary.md) per il confine col dominio geografico).

## Documentazione correlata

- [Indice documentazione](./00-index.md)
- [Architecture](./architecture.md)
- [Philosophy](./philosophy.md)
- [Blade Components](./blade-components.md)
- [Filament Components](./filament-components.md) · [Uso](./filament-components-usage.md)
- [Componenti](./components.md)
- [Widget](./widgets.md)
- [Best Practices](./best-practices.md)
- [PHPStan Compliance](./phpstan-compliance.md)
- [Testing](./testing.md)
- [Roadmap](./roadmap.md)

## Moduli collegati

- [Xot](../../Xot/docs/README.md) — framework core, `XotBaseResource`/`XotBasePage`/`XotBaseWidget`
- [User](../../User/docs/README.md) — gestione utenti
- [Lang](../../Lang/docs/README.md) — traduzioni
- [Cms](../../Cms/docs/README.md) — layout e blocchi di contenuto

---

*Modulo `UI` · Laraxot ecosystem · Project-agnostic*
