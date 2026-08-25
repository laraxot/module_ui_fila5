---
title: "Confine UI e Geo"
type: rule
module: UI
created: 2026-07-06
updated: 2026-08-18
related:
  - "./second-brain.md"
  - "./00-index.md"
  - "./filosofia-modulo-ui.md"
  - "./wiki/concepts/ui-geo-boundary-contracts.md"
  - "./actions/generic-ui-building-blocks.md"
---

# Confine UI e Geo

## Perché

`UI` = design system: componenti visuali generici e riusabili.

Mappe, geocoding, marker, regioni/province/CAP, `Comune`, export GeoJSON/KML = **dominio geografico**.
Quel dominio vive in `Modules/Geo` (quando il progetto lo include), **mai** in `UI`.

Direzione dipendenze: **Geo → UI** (Geo può usare primitive UI). Mai il contrario.

## Ownership della classe (Action / Component)

Una classe PHP appartiene al modulo delle **dipendenze di dominio** che importa, non alla cartella in cui è comoda.

- Importa `Modules\Geo\Models\*`, `Geo\Services\*`, `Geo\Actions\*` → è una classe **Geo**.
- Le operazioni Geo sono `Spatie\QueueableAction` con `execute()` **dentro Geo** (`GetMapMarkersAction`, geocoding, CAP, …). Non si avvolgono in un componente UI per “nascondere” l’import.
- Le Action UI (`GetDaysMappingAction`, `GetAllIconsAction`, `GetAllBlocksAction`, …) restano primitive di design system: zero namespace Geo.
- Suffisso `.to_geo` su un file UI = “questa classe non è UI, va in Geo o si cancella”. Non è un backup da tenere.

In questo repo `modules_statuses.json` ha `"Geo": false` e `laravel/Modules/Geo` **non esiste**. Quelle classi non si tengono spente in UI e non si rimpiazzano con contract+null-adapter. Si **cancellano**.

## Vietato in UI

- Namespace `Modules\Geo\*`
- `app/Adapters/Location/`, `app/Adapters/Map/`
- Contratti `LocationDataProviderContract`, `MapServiceContract`, `GeocodingServiceContract`
- `LocationSelector`, `InteractiveMap` (e view/lang correlate)
- Service/adapter null-object di mappa/geocoding
- Action UI che chiamano Geo

## Storia

2026-07-22: rimossi da UI adapter/contract/`LocationSelector` attivo e `bindIf` nel provider.

2026-08-18: `LocationSelector.php` non era tornato in `app/` (già assente). Era tornato `InteractiveMap.php` con `use Modules\Geo\Services\{MapService,GeocodingService}` — stessa violazione. Cancellati componente, `.old`, Blade e `lang/*/location_selector.php`. Niente `docs/archive/`: la history git basta.

Se in un altro monorepo servirà geografia: implementare in `Modules/Geo` (Action + Livewire/Filament lì), non ricopiare in UI.

## Verifica

```bash
cd laravel/Modules/UI
test ! -d app/Adapters
test ! -f app/Filament/Forms/Components/LocationSelector.php
test ! -f app/Livewire/Components/Map/InteractiveMap.php
git grep -n 'Modules\\Geo' -- app || true
```

## Cross-reference

- [second-brain.md](./second-brain.md)
- [filosofia-modulo-ui.md](./filosofia-modulo-ui.md)
- [ui-geo-boundary-contracts.md](./wiki/concepts/ui-geo-boundary-contracts.md)
- [memoria root](../../../../docs/wiki/memories/ui-no-map-adapters-geo-absent.md)
