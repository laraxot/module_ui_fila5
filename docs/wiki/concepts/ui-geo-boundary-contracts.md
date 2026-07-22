---
title: "ui geo boundary contracts"
type: concept
module: UI
tags: [ui, geo, contracts, adapters, interactive-map, location-selector]
created: 2026-07-22
updated: 2026-07-22
qmd: "UI Geo boundary LocationDataProviderContract MapServiceContract GeocodingServiceContract InteractiveMap null adapter bindIf"
issues:
  - https://github.com/laraxot/base_quaeris_fila5/issues/122
discussions:
  - https://github.com/laraxot/base_quaeris_fila5/discussions/124
related:
  - ./block-rendering-and-optional-services.md
  - ./no-services-no-support-queueable-actions.md
  - ../../../../../../docs/chat/module-ui-geo-dependency-removal.md
  - ../../../../../../docs/chat/phpstan-modules-status.md
---

# UI ↛ Geo — confini via Contract + Adapter

## Perché

`Modules\UI` è riusabile: non deve importare `Modules\Geo\*`. Geo (o altro modulo) fornisce dati/mappa **solo** registrando implementazioni nel container.

## Contratti (SSoT UI)

| Contract | Uso |
|----------|-----|
| `LocationDataProviderContract` | regioni/province/CAP (`LocationSelector`) |
| `MapServiceContract` | marker/stats/export (`InteractiveMap`) |
| `GeocodingServiceContract` | geocode + suggerimenti (`InteractiveMap`) |

## Null-object

`app/Adapters/Map/*` e `app/Adapters/Location/*` — binding default con `bindIf` in `UIServiceProvider::register()`.

**Vietato:** `app/Services/` (duplicati rimossi 2026-07-22).

## Verifica

```bash
rg 'use Modules\\Geo\\' Modules/UI --glob '*.php'   # deve essere vuoto
cd laravel && ./vendor/bin/phpstan analyse Modules/UI
```
