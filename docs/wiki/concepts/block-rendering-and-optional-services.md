---
title: "Block rendering e servizi opzionali"
type: concept
tags: [ui, blocks, livewire, phpstan, geo, cms]
created: 2026-06-15
<<<<<<< HEAD
<<<<<<< .merge_file_U5fzcP
updated: 2026-06-15
qmd: "UI block render InteractiveMap MapServiceContract ResolveLocalizedBlockDataAction GetAllBlocksAction"
=======
<<<<<<< HEAD
updated: 2026-07-21
qmd: "UI block render MapServiceContract ResolveLocalizedBlockDataAction GetAllBlocksAction geo-boundary"
>>>>>>> .merge_file_x1fUns
=======
updated: 2026-07-21
qmd: "UI block render MapServiceContract ResolveLocalizedBlockDataAction GetAllBlocksAction geo-boundary"
>>>>>>> dfbb8305 (.)
related:
  - "./auth-register-focus-loss-overlay.md"
  - "./claude-audit-static.md"
  - "./code-redundancy-ui.md"
  - "./context-overflow-prevention.md"
  - "./enum-select-best-practices.md"
  - "./enum-select-component.md"
  - "./enum-select-contract-and-false-friends.md"
  - "./enum-select-usage.md"
<<<<<<< HEAD
<<<<<<< .merge_file_U5fzcP
=======
  - "../../geo-boundary.md"
=======
updated: 2026-06-15
qmd: "UI block render InteractiveMap MapServiceContract ResolveLocalizedBlockDataAction GetAllBlocksAction"
related:
  - ./phpstan-dynamic-array-normalization.md
  - ../../../../../docs/wiki/patterns/phpstan-optional-contracts.md
  - ../log.md
>>>>>>> dfac49d (.)
>>>>>>> .merge_file_x1fUns
=======
  - "../../geo-boundary.md"
>>>>>>> dfbb8305 (.)
---

# Block rendering e servizi opzionali

## Scopo

<<<<<<< HEAD
<<<<<<< .merge_file_U5fzcP
Il modulo **UI** fornisce componenti Blade/Livewire riusabili per pagine marketing e admin. Due filiere distinte:

1. **Block CMS** — composizione pagina da blocchi JSON (Filament Blocks).
2. **Mappa interattiva** — widget Livewire con marker e filtri (opzionale senza modulo Geo).
=======
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
Il modulo **UI** fornisce componenti Blade/Livewire riusabili per pagine marketing e admin.

1. **Block CMS** — composizione pagina da blocchi JSON (Filament Blocks).
2. **Contratti mappa/geocoding** — solo interfacce + null object in UI; implementazione Livewire mappa = dominio **Geo** (vedi [geo-boundary](../../geo-boundary.md)).
<<<<<<< HEAD
=======
Il modulo **UI** fornisce componenti Blade/Livewire riusabili per pagine marketing e admin. Due filiere distinte:

1. **Block CMS** — composizione pagina da blocchi JSON (Filament Blocks).
2. **Mappa interattiva** — widget Livewire con marker e filtri (opzionale senza modulo Geo).
>>>>>>> dfac49d (.)
>>>>>>> .merge_file_x1fUns
=======
>>>>>>> dfbb8305 (.)

## Catena di utilizzo — Block

```mermaid
flowchart LR
  A[Filament Blocks in Modules/*/Filament/Blocks] --> B[GetAllBlocksAction]
  B --> C[ComponentFileData collection]
  D[x-render.blocks v1/v2] --> E[x-render.block]
  E --> F[Render\Block]
  F --> G[ResolveLocalizedBlockDataAction]
  G --> H{Modulo Cms presente?}
  H -->|sì| I[Cms ResolveLocalizedBlockDataAction]
  H -->|no| J[pass-through view data]
  F --> K[view Blade del blocco]
```

| Artefatto | Ruolo | Consumer noti |
|-----------|-------|---------------|
| `GetAllBlocksAction` | Scansiona `Modules/*/Filament/Blocks/*.php` e produce catalogo `ComponentFileData` | Inventario componenti (`_components.json`); tooling admin (nessun caller PHP diretto nel mono attuale) |
| `View\Components\Render\Block` | Risolve view del singolo blocco + dati localizzati | `resources/views/components/render/blocks/v1.blade.php`, `v2.blade.php`; `User/resources/views/filament/pages/home.blade.php` (`<x-render.block>`) |
| `ResolveLocalizedBlockDataAction` | Bridge verso Cms opzionale | Solo `Render\Block::render()` |
| `Filament/Blocks/*` | Definizione schema blocchi (Page, Post, Contact, …) | Filament page builder cross-modulo |

<<<<<<< HEAD
<<<<<<< .merge_file_U5fzcP
## Catena di utilizzo — Mappa
=======
<<<<<<< HEAD
## Catena di utilizzo — Mappa (solo contratti in UI)
>>>>>>> .merge_file_x1fUns

| Artefatto | Ruolo | Consumer noti |
|-----------|-------|---------------|
| `InteractiveMap` (Livewire) | Marker, filtri, export, geocoding | `resources/views/livewire/components/map/interactive-map.blade.php`; integrazione documentata in `docs/map-integration-guide.md` |
| `MapServiceContract` | Contratto marker/stats/export | Registrato in `UIServiceProvider` → `NullMapService` di default |
| `GeocodingServiceContract` | Contratto ricerca indirizzi | `NullGeocodingService` di default |
| `NullMapService` / `NullGeocodingService` | Fallback quando Geo assente | Container Laravel (singleton) |

<<<<<<< .merge_file_U5fzcP
Quando il modulo **Geo** sarà installato, sostituire il binding in `UIServiceProvider` senza toccare `InteractiveMap`.
=======
`InteractiveMap` **non** appartiene a UI: va in `Modules/Geo` (su ptvx Geo non è installato). Non riattivarlo qui.
=======
## Catena di utilizzo — Mappa

| Artefatto | Ruolo | Consumer noti |
|-----------|-------|---------------|
| `InteractiveMap` (Livewire) | Marker, filtri, export, geocoding | `resources/views/livewire/components/map/interactive-map.blade.php`; integrazione documentata in `docs/map-integration-guide.md` |
| `MapServiceContract` | Contratto marker/stats/export | Registrato in `UIServiceProvider` → `NullMapService` di default |
| `GeocodingServiceContract` | Contratto ricerca indirizzi | `NullGeocodingService` di default |
| `NullMapService` / `NullGeocodingService` | Fallback quando Geo assente | Container Laravel (singleton) |

Quando il modulo **Geo** sarà installato, sostituire il binding in `UIServiceProvider` senza toccare `InteractiveMap`.
>>>>>>> dfac49d (.)
>>>>>>> .merge_file_x1fUns
=======
## Catena di utilizzo — Mappa (solo contratti in UI)

| Artefatto | Ruolo | Note |
|-----------|-------|------|
| `MapServiceContract` | Contratto marker/stats/export | Binding in `UIServiceProvider` → `NullMapService` |
| `GeocodingServiceContract` | Contratto ricerca indirizzi | `NullGeocodingService` di default |
| `NullMapService` / `NullGeocodingService` | Fallback quando Geo assente | Container Laravel (singleton) |

`InteractiveMap` **non** appartiene a UI: va in `Modules/Geo` (su ptvx Geo non è installato). Non riattivarlo qui.
>>>>>>> dfbb8305 (.)

## Regola PHPStan

- Non importare `Modules\Geo\*` o `Modules\Cms\*` nel consumer UI.
- Usare contratti/action locali + `class_exists()` per delega opzionale.
- Array dinamici: normalizzare chiavi stringa prima del passaggio a servizi tipizzati (vedi [phpstan-dynamic-array-normalization](./phpstan-dynamic-array-normalization.md)).

## Verifica

```bash
cd laravel && ./vendor/bin/phpstan analyse Modules/UI
```
