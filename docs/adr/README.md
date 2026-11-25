---
title: "ADR — UI"
type: index
owner: UI
updated: 2026-11-25
qmd: "UI ADR architecture decision record MADR formato blocchi IDColumn mandatory"
---

# ADR — UI

Un ADR del modulo UI registra una scelta difficile da invertire, sorprendente o frutto di un trade-off reale sul layer di presentazione condiviso. Ogni affermazione ha un file di prova. Template condiviso: [0000-template](../../../Xot/docs/adr/0000-template.md); standard: [Xot ADR](../../../Xot/docs/adr/README.md).

## Formato MADR

Frontmatter (`title`, `type: decision`, `status`, `created`, `updated`, `decision-makers`, `module`, `qmd`) e sezioni nell'ordine: `## Contesto`, `## Driver della decisione`, `## Alternative scartate`, `## Decisione`, `## Conseguenze`, `## Conferma`. Nome file in kebab-case senza data né numero.

## ADR presenti

Elenco con stato: [index.md](index.md). Ultima decisione: [idcolumn-mandatory-on-tables](idcolumn-mandatory-on-tables.md) (`IDColumn` prima colonna di ogni tabella Filament). Altre: [ui-blocks-use-cms-localization](ui-blocks-use-cms-localization.md); confine dominio in [ui-does-not-authorize-domain-data](ui-does-not-authorize-domain-data.md).

Policy trasversale su dati sacri e test isolati: [0013-dati-sacri-migrazioni-e-test](../../../Xot/docs/adr/0013-dati-sacri-migrazioni-e-test.md).
