# Regole di Dipendenza — Modulo UI

> **Creato**: 2026-07-06
> **Stato**: ATTIVO — regola vincolante

---

## Principio Fondamentale

Il modulo **UI è una dipendenza condivisa** di tutti gli altri moduli. Il suo scopo è fornire componenti UI generici (Filament, Blade, Livewire) senza conoscere il dominio applicativo di nessun modulo specifico.

```
Xot ← UI ← (tutti gli altri moduli: Geo, User, Tenant, Activity, ecc.)
```

**La freccia indica "dipende da".**

---

## Regola: UI NON dipende da moduli domain-specific

| Modulo        | Può dipendere da UI? | UI può dipendere da? |
|---------------|----------------------|----------------------|
| Geo           | ✅ Sì                | ❌ No                 |
| User          | ✅ Sì                | ✅ Sì (solo per UserData) |
| Tenant        | ✅ Sì                | ✅ Sì (multi-tenancy) |
| Activity      | ✅ Sì                | ❌ No                 |
| Xot           | ✅ Sì                | ✅ Sì (base classes)  |
| Media         | ✅ Sì                | ❌ No                 |

---

## Componenti Geo: dove devono stare

I componenti che richiedono funzionalità geografiche **appartengono al modulo Geo**, non al modulo UI.

### Componenti disabilitati in UI (rinominati `.old`)

| File                                                                        | Motivo                                          | Dove va            |
|-----------------------------------------------------------------------------|-------------------------------------------------|--------------------|
| `app/Livewire/Components/Map/InteractiveMap.php.old`                        | Dipende da dati geografici (Geo module)         | `Modules/Geo/`     |
| `app/Filament/Forms/Components/LocationSelector.php.old`                    | Usa `Modules\Geo\Models\Comune` direttamente    | `Modules/Geo/`     |
| `resources/views/livewire/components/map/interactive-map.blade.php.old`     | View del componente Geo disabilitato            | `Modules/Geo/`     |

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_qT1RUn
=======
<<<<<<< .merge_file_a4zsjo
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
### Contratti / Adapter Map-Location — **non** accettabili in UI

Rimossi il 2026-07-22 (vedi [geo-boundary.md](./geo-boundary.md)): anche i contratti/null-adapter erano dominio geografico.

| Rimosso | Motivo |
|---------|--------|
| `app/Adapters/Location/`, `app/Adapters/Map/` | Dominio Geo, non design system |
| `LocationDataProviderContract`, `MapServiceContract`, `GeocodingServiceContract` | Stesso dominio |
| `LocationSelector.php` attivo | Selettore geografico |

Se serve geografia: modulo `Geo` (quando presente), mai ricopiare in UI.
=======
>>>>>>> .merge_file_OvPl19
>>>>>>> .merge_file_91DP7y
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
### Contratti e Null Services (accettabili in UI)

I seguenti file sono **accettabili** nel modulo UI perché definiscono interfacce astratte senza dipendere da classi Geo concrete:

| File                                            | Motivo                                                    |
|-------------------------------------------------|-----------------------------------------------------------|
| `app/Contracts/GeocodingServiceContract.php`    | Interfaccia astratta — nessuna dipendenza da Geo          |
| `app/Contracts/MapServiceContract.php`          | Interfaccia astratta — nessuna dipendenza da Geo          |
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_a4zsjo
<<<<<<< HEAD
| `app/Services/Map/NullGeocodingService.php`     | Null Object pattern — fallback quando Geo non è installato |
| `app/Services/Map/NullMapService.php`           | Null Object pattern — fallback quando Geo non è installato |
=======
| `app/Adapters/Map/NullGeocodingServiceAdapter.php` | Null Object pattern — fallback quando Geo non è installato |
| `app/Adapters/Map/NullMapServiceAdapter.php`       | Null Object pattern — fallback quando Geo non è installato |
>>>>>>> laraxot/dev
=======
| `app/Adapters/Map/NullGeocodingServiceAdapter.php` | Null Object pattern — fallback quando Geo non è installato |
| `app/Adapters/Map/NullMapServiceAdapter.php`       | Null Object pattern — fallback quando Geo non è installato |
>>>>>>> .merge_file_OvPl19
=======
| `app/Adapters/Map/NullGeocodingServiceAdapter.php` | Null Object pattern — fallback quando Geo non è installato |
| `app/Adapters/Map/NullMapServiceAdapter.php`       | Null Object pattern — fallback quando Geo non è installato |
>>>>>>> laraxot/dev
=======
| `app/Adapters/Map/NullGeocodingServiceAdapter.php` | Null Object pattern — fallback quando Geo non è installato |
| `app/Adapters/Map/NullMapServiceAdapter.php`       | Null Object pattern — fallback quando Geo non è installato |
>>>>>>> laraxot/dev

### Documentazione archiviata

| File                                        | Motivo                              |
|---------------------------------------------|-------------------------------------|
| `docs/map-integration-guide.md.old`         | Descriveva componenti Geo nel UI    |

---

## LocationSelector: già disabilitato

`LocationSelector` importava direttamente `Modules\Geo\Models\Comune` — violazione della regola.
È stato rinominato `LocationSelector.php.old` in data 2026-07-06.

Se in futuro si vuole un selettore regione/provincia/CAP nel modulo UI, deve usare **solo contratti astratti** (es. `GeocodingServiceContract`) e ricevere i dati via dependency injection, senza importare classi concrete di Geo.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_qT1RUn
=======
=======
<<<<<<< .merge_file_a4zsjo
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_91DP7y
### Contratti / Adapter Map-Location — **non** accettabili in UI

Rimossi il 2026-07-22 (vedi [geo-boundary.md](./geo-boundary.md)): anche i contratti/null-adapter erano dominio geografico.

| Rimosso | Motivo |
|---------|--------|
| `app/Adapters/Location/`, `app/Adapters/Map/` | Dominio Geo, non design system |
| `LocationDataProviderContract`, `MapServiceContract`, `GeocodingServiceContract` | Stesso dominio |
| `LocationSelector.php` attivo | Selettore geografico |

Se serve geografia: modulo `Geo` (quando presente), mai ricopiare in UI.
<<<<<<< .merge_file_qT1RUn
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_OvPl19
>>>>>>> .merge_file_91DP7y
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev

---

## Come aggiungere componenti mappa nel progetto

1. Il modulo Geo crea il componente (es. `Modules\Geo\Livewire\InteractiveMap`)
2. Il modulo Geo può usare componenti UI generici (form fields, layout, ecc.)
3. Il modulo Geo registra il suo service provider che carica i componenti Livewire
4. Le viste del tema usano `<livewire:geo::components.map.interactive-map />`

---

## Violazioni da correggere

Cercare periodicamente:

```bash
grep -r "Modules\\\\Geo" laravel/Modules/UI/app/
grep -r "use Modules\\\\Geo" laravel/Modules/UI/
```

Nessun risultato = modulo UI pulito.
