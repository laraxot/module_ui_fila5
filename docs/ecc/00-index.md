---
title: "ECC — indice operativo UI"
type: index
status: in-progress
updated: 2026-11-25
module: UI
qmd: "ECC indice UI verification gates esito IDColumn renderAnchor"
---

# ECC — modulo UI

Collega le verifiche ECC al workflow PTVX (BMAD → lock → fix → PHPStan/Pest → docs).

| Controllo | Stato | Evidenza |
|---|---|---|
| Inventario statico | verificato (2026-11-16) | [audit](../bmad/audits/ui-audit.md) |
| PHPStan `Modules/UI` | 0 errori | `phpstan analyse Modules/UI` |
| Pest | skip documentato / parziale | DB test spesso irraggiungibile; `IDColumnAnchorTest` green in lane IDColumn |
| Security review | aperto | P2-UI4: `UiBasePolicy` senza abilità (nessuna Resource oggi → nessuna esposizione) |
| Docs pack | aggiornato | audit, epics, decision-log, brainstorming, story |
| IDColumn mandatory + fragment `#record-N` | **done** 2026-11-25 | ADR [0002-idcolumn-mandatory-on-tables](../adr/0002-idcolumn-mandatory-on-tables.md); `renderAnchor` = `<a href=#record-id>` copyable; Pest `IDColumnAnchorTest` |

Dettaglio: [ui-ecc-audit.md](./ui-ecc-audit.md)
