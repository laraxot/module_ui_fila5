# Task: Migliorare LocationSelector Type Safety - UI

**Modulo**: UI
**Priorita'**: Media
**Completamento**: 30%
<<<<<<< HEAD
<<<<<<< .merge_file_asfcV2
=======
<<<<<<< HEAD
**Data**: 2026-01-30
=======
<<<<<<< HEAD
=======
**Data**: 2026-01-30
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
**Data**: 2026-01-30
=======
>>>>>>> .merge_file_VpW3rE
>>>>>>> laraxot/dev

---

## Descrizione

LocationSelector e InteractiveMap hanno 24 suppressioni combinate. Questi componenti gestiscono dati geografici con tipi mixed.

## Azioni

- [ ] Definire LocationData DTO per coordinate
- [ ] Tipizzare parametri lat/lng come float
- [ ] Usare Geo module DTOs per consistenza
- [ ] Rifattorizzare InteractiveMap con tipi espliciti

## Criteri di Completamento

- [ ] LocationSelector: max 2 suppressioni
- [ ] InteractiveMap: max 2 suppressioni
- [ ] Funzionalita' mappa preservata
