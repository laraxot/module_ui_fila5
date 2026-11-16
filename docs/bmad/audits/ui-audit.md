---
title: "Audit approfondito modulo UI"
type: audit
status: review
updated: 2026-11-16
module: UI
qmd: "audit approfondito UI inventario PHPStan Pest policy Filament Actions"
---

# Audit approfondito — UI

## Metodo

Source-first (2026-11-16): inventario filesystem, `rg` su policy/marker/label,
lettura purpose esistente, PHPStan globale Modules già a 0 errori. Nessuna UI
inventata. Pest dichiarato solo se eseguito.

## Inventario misurato

| Area | Conteggio |
|---|---:|
| PHP in `app/` | 133 |
| Test PHP | 87 |
| Models (`app/Models/*.php`) | 4 |
| Policy files (approx) | 2 |
| Resource Filament | 0 |
| Actions | 6 |
| Services | 5 |
| Migration | 3 |
| Lang IT files | 246 |
| Marker conflitto | 0 |
| Occorrenze `return true` in Policy | 2 |
| Ratio test/app | 0.65 |

## Scopo (da docs esistenti / codice)

## Lo scopo in una frase **UI e' il vocabolario visivo condiviso: fa si' che la stessa cosa abbia lo stesso aspetto e lo stesso comportamento in tutti i moduli, senza che nessuno debba

## Finding preliminari (da inventario)

- **P1** `5` file sotto `app/Services/`: verificare migrazione ad Actions Queueable (convenzione PTVX).

## Finding approfonditi (codice)

- **P1** `ThemeService` / `ComponentService` stub vuoti; `UIService` thin wrap di AssetAction.
- **P2** Null Map/Geocoding duplicati Services+Adapters; doppia cartella config.

## Gate

```bash
cd laravel
php -d memory_limit=2G ./vendor/bin/phpstan analyse Modules/UI
# Pest solo fuori da 10.100.200.15 e con DB testing raggiungibile
./vendor/bin/pest Modules/UI/tests --no-coverage
```

PHPStan `Modules` (2026-11-16): **0 errori** sul tree completo.

## Piano

Vedi [piano-miglioramento.md](../piano-miglioramento.md).

## Riferimenti

- [audit.md](../audit.md)
- [ECC](../../ecc/ui-ecc-audit.md)
- [Story](../stories/module-bmad-audit.story.md)
