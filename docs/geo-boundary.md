---
title: "Confine UI e Geo"
type: rule
module: UI
created: 2026-07-06
updated: 2026-07-21
related:
  - "./00-index-1.md"
  - "./00-index.md"
  - "./04-datas.md"
  - "./advanced-form-components-1.md"
  - "./advanced-form-components.md"
  - "./agent-confidence-discipline.md"
  - "./agent-confidence-protocol.md"
  - "./agent-edit-discipline.md"
---

# Confine UI e Geo

## Regola

Il modulo `UI` non deve dipendere dal modulo `Geo`.

`UI` fornisce componenti visuali generici e riusabili. La logica geografica, mappe interattive, geocoding, marker, export GeoJSON/KML e integrazioni GIS appartengono al dominio `Geo`.

## Dipendenze consentite

- `Geo` puo' dipendere da `UI` per usare primitive visuali.
- `UI` non deve importare namespace `Modules\Geo\*`.
- `UI` non deve contenere service geografici, geocoder o map service.
- Componenti con dominio geografico vanno rimossi dall'autoload PHP (o backup locale `.old`, gitignored).

## Caso LocationSelector

<<<<<<< HEAD
`app/Filament/Forms/Components/LocationSelector.php` non appartiene a `UI` (importava `Modules\Geo\Models\Comune`, poi il contratto `LocationDataProviderContract`, comunque dominio Geo).

Rimosso definitivamente dal repo il 2026-07-22, archiviato forward-only in `docs/archive/Filament/Forms/Components/LocationSelector.php.old`.
=======
`app/Filament/Forms/Components/LocationSelector.php` non appartiene a `UI` (importa `Modules\Geo\Models\Comune`).

Rimosso dal repo il 2026-07-08; backup locale opzionale `LocationSelector.php.old` (`*.old` in `.gitignore`).
>>>>>>> dfbb8305 (.)

Se servira' un selettore geografico, crearlo in `Modules/Geo/` usando contratti UI o primitive generiche.

## Caso InteractiveMap

`app/Livewire/Components/Map/InteractiveMap.php` e la relativa view Blade non appartengono a `UI`.

<<<<<<< HEAD
Rimosso definitivamente dal repo il 2026-07-22, archiviato forward-only in `docs/archive/Livewire/Map.old/InteractiveMap.php.old`.

Non riattivarlo in `UI`. Se in futuro servira' una mappa, crearla nel modulo `Geo` e usare eventuali componenti UI solo come base visuale.

## Caso Contracts/Adapters (LocationDataProviderContract, MapServiceContract, GeocodingServiceContract)

Anche il pattern contract + null-object-adapter (`app/Contracts/{LocationDataProviderContract,MapServiceContract,GeocodingServiceContract}.php`, `app/Adapters/{Location,Map}/Null*Adapter.php`) introdotto per disaccoppiare `LocationSelector`/`InteractiveMap` da `Modules\Geo` è dominio geografico, non generico: non doveva vivere in `UI` nemmeno nella forma disaccoppiata.

Rimosso dal repo il 2026-07-22, archiviato forward-only in `docs/archive/Contracts/*.old` e `docs/archive/Adapters/*.old`. `UIServiceProvider::register()` non fa più `bindIf` di questi contratti.

=======
Rimosso dal repo il 2026-07-08; backup locale opzionale `InteractiveMap.php.old` (`*.old` in `.gitignore`).

Non riattivarlo in `UI`. Se in futuro servira' una mappa, crearla nel modulo `Geo` e usare eventuali componenti UI solo come base visuale.

>>>>>>> dfbb8305 (.)
## Motivazione

Questa separazione evita dipendenze inverse, classi mancanti e accoppiamento tra design system e dominio geografico.

<<<<<<< HEAD
## Progetto base_quaeris_fila5

`laravel/Modules/Geo` **è presente e abilitato** in questo progetto (`"Geo": true` in `modules_statuses.json`), ma questo non autorizza `UI` a contenere logica/contratti geografici: la direzione delle dipendenze resta Geo → UI, mai il contrario.
=======
## Progetto base_ptvx_fila5

`laravel/Modules/Geo` **non è presente** — `"Geo": false` in `modules_statuses.json`. Per mappe/geocoding usare altro progetto o installare `laraxot/module_geo_fila5` solo se serve.
>>>>>>> dfbb8305 (.)

## Verifica

```bash
<<<<<<< HEAD
grep -r "Modules\\\\Geo" app/ --include="*.php" | grep -v '\.old'
test ! -f app/Livewire/Components/Map/InteractiveMap.php
test ! -f resources/views/livewire/components/map/interactive-map.blade.php
test ! -f app/Filament/Forms/Components/LocationSelector.php
test ! -d app/Contracts/../Adapters
test ! -f app/Contracts/LocationDataProviderContract.php
test ! -f app/Contracts/MapServiceContract.php
test ! -f app/Contracts/GeocodingServiceContract.php
=======
grep -r "Modules\\\\Geo" app/ --include="*.php" | grep -v '\.old' | grep -v '\.to_geo'
test ! -f app/Livewire/Components/Map/InteractiveMap.php
test ! -f resources/views/livewire/components/map/interactive-map.blade.php
test ! -f app/Filament/Forms/Components/LocationSelector.php
>>>>>>> dfbb8305 (.)
```

## Handoff sessione

- [git-multi-org-sync-handoff.md](./git-multi-org-sync-handoff.md) (STORY-003)
