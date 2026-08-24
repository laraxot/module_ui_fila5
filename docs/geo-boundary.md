---
title: "Confine UI e Geo"
type: rule
module: UI
created: 2026-07-06
<<<<<<< HEAD
updated: 2026-07-22
=======
updated: 2026-08-18
>>>>>>> laraxot/dev
related:
  - "./second-brain.md"
  - "./00-index.md"
  - "./filosofia-modulo-ui.md"
<<<<<<< HEAD
=======
  - "./wiki/concepts/ui-geo-boundary-contracts.md"
  - "./actions/generic-ui-building-blocks.md"
>>>>>>> laraxot/dev
---

# Confine UI e Geo

<<<<<<< HEAD
## Perché (religione)

`UI` = design system: componenti visuali generici e riusabili.

Mappe, geocoding, marker, regioni/province/CAP, export GeoJSON/KML = **dominio geografico**.
=======
## Perché

`UI` = design system: componenti visuali generici e riusabili.

Mappe, geocoding, marker, regioni/province/CAP, `Comune`, export GeoJSON/KML = **dominio geografico**.
>>>>>>> laraxot/dev
Quel dominio vive in `Modules/Geo` (quando il progetto lo include), **mai** in `UI`.

Direzione dipendenze: **Geo → UI** (Geo può usare primitive UI). Mai il contrario.

<<<<<<< HEAD
## Questo progetto (`base_ptvx_fila5`)

`laravel/Modules/Geo` **non esiste** e **non deve essere reintrodotto** senza decisione esplicita.
Quindi in UI non devono restare neanche fallback/null-object “per quando Geo manca”: senza Geo non serve il layer.
=======
## Ownership della classe (Action / Component)

Una classe PHP appartiene al modulo delle **dipendenze di dominio** che importa, non alla cartella in cui è comoda.

- Importa `Modules\Geo\Models\*`, `Geo\Services\*`, `Geo\Actions\*` → è una classe **Geo**.
- Le operazioni Geo sono `Spatie\QueueableAction` con `execute()` **dentro Geo** (`GetMapMarkersAction`, geocoding, CAP, …). Non si avvolgono in un componente UI per “nascondere” l’import.
- Le Action UI (`GetDaysMappingAction`, `GetAllIconsAction`, `GetAllBlocksAction`, …) restano primitive di design system: zero namespace Geo.
- Suffisso `.to_geo` su un file UI = “questa classe non è UI, va in Geo o si cancella”. Non è un backup da tenere.

In questo repo `modules_statuses.json` ha `"Geo": false` e `laravel/Modules/Geo` **non esiste**. Quelle classi non si tengono spente in UI e non si rimpiazzano con contract+null-adapter. Si **cancellano**.
>>>>>>> laraxot/dev

## Vietato in UI

- Namespace `Modules\Geo\*`
- `app/Adapters/Location/`, `app/Adapters/Map/`
- Contratti `LocationDataProviderContract`, `MapServiceContract`, `GeocodingServiceContract`
<<<<<<< HEAD
- `LocationSelector`, `InteractiveMap` (e view correlate)
- Service/adapter null-object di mappa/geocoding

## Come è stato corretto (2026-07-22)

**Problema:** in UI restavano adapter/contract/selector geografici anche se `Geo` non esiste in questo monorepo — violazione del confine (dominio in design system).

**Fix (forward-only, niente `git restore`):**

1. Eliminati `app/Adapters/Location/` e `app/Adapters/Map/` (e la cartella `app/Adapters/` se vuota).
2. Eliminati i contratti `LocationDataProviderContract`, `MapServiceContract`, `GeocodingServiceContract`.
3. Eliminato `LocationSelector.php` attivo (non reintrodurre come “null-adapter”).
4. Rimosso da `UIServiceProvider` il `bindIf` / registrazione verso null-adapters Geo.
5. Canon aggiornato qui + [second-brain.md](./second-brain.md) + [wiki/concepts/ui-geo-boundary-contracts.md](./wiki/concepts/ui-geo-boundary-contracts.md).
6. Push dual-remote (`laraxot` + `provtv`) a tip `b874935` — vedi [wiki/troubleshooting/git-push-lfs-missing-objects.md](./wiki/troubleshooting/git-push-lfs-missing-objects.md) e [multi-org-sync-laraxot-provtv.md](./multi-org-sync-laraxot-provtv.md).

**Anti-pattern:** ricreare contract+null in UI “perché Geo manca”. Senza Geo non serve il layer.

## Storia (forward-only)

Rimosso il 2026-07-22 da UI (git history = archivio; **no** `docs/archive/`):

- `app/Adapters/Location/`, `app/Adapters/Map/`
- contratti Location/Map/Geocoding
- `LocationSelector.php` attivo
- `bindIf` in `UIServiceProvider` verso null-adapters

Se in un altro monorepo servirà geografia: implementare in `Modules/Geo`, non ricopiare in UI.
=======
- `LocationSelector`, `InteractiveMap` (e view/lang correlate)
- Service/adapter null-object di mappa/geocoding
- Action UI che chiamano Geo

## Storia

2026-07-22: rimossi da UI adapter/contract/`LocationSelector` attivo e `bindIf` nel provider.

2026-08-18: `LocationSelector.php` non era tornato in `app/` (già assente). Era tornato `InteractiveMap.php` con `use Modules\Geo\Services\{MapService,GeocodingService}` — stessa violazione. Cancellati componente, `.old`, Blade e `lang/*/location_selector.php`. Niente `docs/archive/`: la history git basta.

Se in un altro monorepo servirà geografia: implementare in `Modules/Geo` (Action + Livewire/Filament lì), non ricopiare in UI.
>>>>>>> laraxot/dev

## Verifica

```bash
cd laravel/Modules/UI
test ! -d app/Adapters
<<<<<<< HEAD
test ! -f app/Contracts/LocationDataProviderContract.php
test ! -f app/Contracts/MapServiceContract.php
test ! -f app/Contracts/GeocodingServiceContract.php
test ! -f app/Filament/Forms/Components/LocationSelector.php
grep -R "Modules\\\\Geo" app/ --include="*.php" || true
=======
test ! -f app/Filament/Forms/Components/LocationSelector.php
test ! -f app/Livewire/Components/Map/InteractiveMap.php
git grep -n 'Modules\\Geo' -- app || true
>>>>>>> laraxot/dev
```

## Cross-reference

- [second-brain.md](./second-brain.md)
- [filosofia-modulo-ui.md](./filosofia-modulo-ui.md)
<<<<<<< HEAD
=======
- [ui-geo-boundary-contracts.md](./wiki/concepts/ui-geo-boundary-contracts.md)
- [memoria root](../../../../docs/wiki/memories/ui-no-map-adapters-geo-absent.md)
>>>>>>> laraxot/dev
