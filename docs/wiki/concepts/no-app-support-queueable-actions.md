---
title: "no app/Support — business logic in QueueableAction"
type: concept
tags: [ui, actions, queueable-action, support, refactor, adapter]
created: 2026-07-12
<<<<<<< .merge_file_y1sbFy
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Gewcg7
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_sMdSyi
updated: 2026-07-13
qmd: "UI module no app Support NullMap NullGeocoding Adapter"
issues:
  - "https://github.com/laraxot/base_fixcity_fila5/issues/372"
discussions:
  - "https://github.com/laraxot/base_fixcity_fila5/discussions/273"
related:
  - block-rendering-and-optional-services.md
  - ../../../../docs/wiki/rules/queueable-action-trait-mandatory.md
<<<<<<< .merge_file_y1sbFy
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_7oi7LE
=======
>>>>>>> 804451c (Lint)
updated: 2026-07-22
qmd: "UI module no app Support queueable action no map adapters"
issues:
discussions:
related:
  - "./auth-register-focus-loss-overlay.md"
  - "./block-rendering-and-optional-services.md"
  - "./claude-audit-static.md"
  - "./code-redundancy-ui.md"
  - "./context-overflow-prevention.md"
  - "./enum-select-best-practices.md"
  - "./enum-select-component.md"
  - "./enum-select-contract-and-false-friends.md"
<<<<<<< HEAD
<<<<<<< .merge_file_Gewcg7
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
=======
updated: 2026-07-13
qmd: "UI module no app Support NullMap NullGeocoding Adapter"
issues:
  - "https://github.com/laraxot/base_fixcity_fila5/issues/372"
discussions:
  - "https://github.com/laraxot/base_fixcity_fila5/discussions/273"
related:
  - block-rendering-and-optional-services.md
  - ../../../../docs/wiki/rules/queueable-action-trait-mandatory.md
>>>>>>> .merge_file_7oi7LE
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_sMdSyi
---

# no `app/Support/` — business logic in QueueableAction

## Scopo

Nel modulo UI **non** esiste più `app/Support/`.

<<<<<<< .merge_file_y1sbFy
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_Gewcg7
=======
<<<<<<< HEAD
=======
## Migrazione (2026-07-12 → 2026-07-22)

`app/Support/` e `app/Services/` eliminati. I null-object Map/Location **non** restano in UI: dominio Geo — vedi [geo-boundary.md](../../geo-boundary.md).

| Legacy | Esito |
|--------|--------|
| `Support/Map/Null*` / `Services/Map/Null*` / `Adapters/Map/*` | **Eliminati** da UI (2026-07-22) |
| `UIService::asset()` | `AssetAction` (Xot) |
| `ThemeService`, `ComponentService` | Eliminati |
=======
>>>>>>> .merge_file_7oi7LE
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_sMdSyi
## Migrazione (2026-07-12)

| Legacy `app/Support/` | Destinazione |
|-----------------------|--------------|
| `Map/NullMapService` | `app/Adapters/Map/NullMapServiceAdapter` |
| `Map/NullGeocodingService` | `app/Adapters/Map/NullGeocodingServiceAdapter` |

## Eccezione: contratti multi-metodo

I fallback mappa/geocoding **implementano** `MapServiceContract` / `GeocodingServiceContract` con più metodi pubblici. Per religione Laraxot vivono in `app/Adapters/`, non in `app/Actions/`.

Binding in `UIServiceProvider::register()`.

## Pulizia `app/Services/` (2026-07-13)

Rimosso l'intera cartella `app/Services/` — duplicati o wrapper inutili:

| Legacy `app/Services/` | Destinazione / azione |
|------------------------|------------------------|
| `UIService::asset()` | `app(Xot\Actions\File\AssetAction::class)->execute($asset)` |
| `ThemeService`, `ComponentService` | Eliminati (classi vuote) |
| `Map/NullMapService` | Già in `Adapters/Map/NullMapServiceAdapter` |
| `Map/NullGeocodingService` | Già in `Adapters/Map/NullGeocodingServiceAdapter` |
<<<<<<< .merge_file_y1sbFy
<<<<<<< HEAD
<<<<<<< .merge_file_Gewcg7
=======
>>>>>>> laraxot/dev
=======
=======
>>>>>>> 804451c (Lint)
## Migrazione (2026-07-12 → 2026-07-22)

`app/Support/` e `app/Services/` eliminati. I null-object Map/Location **non** restano in UI: dominio Geo — vedi [geo-boundary.md](../../geo-boundary.md).

| Legacy | Esito |
|--------|--------|
| `Support/Map/Null*` / `Services/Map/Null*` / `Adapters/Map/*` | **Eliminati** da UI (2026-07-22) |
| `UIService::asset()` | `AssetAction` (Xot) |
| `ThemeService`, `ComponentService` | Eliminati |
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_7oi7LE
=======
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_sMdSyi

## Collegamenti

- [block-rendering-and-optional-services.md](block-rendering-and-optional-services.md)
- [queueable-action-trait-mandatory](../../../../docs/wiki/rules/queueable-action-trait-mandatory.md)
