---
title: "no app/Support — business logic in QueueableAction"
type: concept
tags: [ui, actions, queueable-action, support, refactor, adapter]
created: 2026-07-12
updated: 2026-07-12
qmd: "UI module no app Support NullMap NullGeocoding Adapter"
issues:
  - "https://github.com/laraxot/base_fixcity_fila5/issues/372"
discussions:
  - "https://github.com/laraxot/base_fixcity_fila5/discussions/273"
related:
  - block-rendering-and-optional-services.md
  - ../../../../docs/wiki/rules/queueable-action-trait-mandatory.md
---

# no `app/Support/` — business logic in QueueableAction

## Scopo

Nel modulo UI **non** esiste più `app/Support/`.

## Migrazione (2026-07-12)

| Legacy `app/Support/` | Destinazione |
|-----------------------|--------------|
| `Map/NullMapService` | `app/Adapters/Map/NullMapServiceAdapter` |
| `Map/NullGeocodingService` | `app/Adapters/Map/NullGeocodingServiceAdapter` |

## Eccezione: contratti multi-metodo

I fallback mappa/geocoding **implementano** `MapServiceContract` / `GeocodingServiceContract` con più metodi pubblici. Per religione Laraxot vivono in `app/Adapters/`, non in `app/Actions/`.

Binding in `UIServiceProvider::register()`.

## Collegamenti

- [block-rendering-and-optional-services.md](block-rendering-and-optional-services.md)
- [queueable-action-trait-mandatory](../../../../docs/wiki/rules/queueable-action-trait-mandatory.md)
