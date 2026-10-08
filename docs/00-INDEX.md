---
title: "00 INDEX"
type: note
tags: [documentation]
created: 2026-09-26
updated: 2026-10-07
qmd: "00 INDEX"
issues: []
discussions: []
---

# Indice documentazione modulo UI

**Status**: PHPStan Level 10 compliant (`phpstan analyse Modules` exit 0 al 2026-10-07)
**Module version**: 2.3.0

## Story e followups aperti

- [19.UI-merge-conflict-resolution](./stories/19.UI-merge-conflict-resolution.story.md): risoluzione dei marker del merge `HEAD` vs `laraxot/dev` (commit `e7e667b11`), con 23 followups ordinati per priorita' (sicurezza output Blade, coerenza story 12.1 e trait `EnsuresUiDatabaseSchema`, chiavi lang mancanti, pulizia codice).
- Story precedenti sullo stesso problema: [5.8](./stories/5.8.merge-conflict-markers-cleanup.story.md), [5.12](./stories/5.12.merge-markers-regressione-c89696dc.story.md).
- Altre story del modulo: [stories/](./stories/) e [bmad/stories/](./bmad/stories/).
- [2026-10-08 Services -> Actions (residui riapparsi)](./stories/2026-10-08-services-to-actions-ui.story.md)
- Decisioni aperte di consolidamento: [bmad/brainstorming.md](./bmad/brainstorming.md) (D1-D6) e [bmad/epics/epic-1-design-system-components.md](./bmad/epics/epic-1-design-system-components.md).
- Log del wiki: [wiki/log.md](./wiki/log.md).

## Ponytail audit

- [ponytail-audit-over-engineering.md](./ponytail-audit-over-engineering.md)
- [wiki/concepts/ponytail-audit.md](./wiki/concepts/ponytail-audit.md)

## Lettura essenziale

1. [README.md](./readme.md) - design system e overview componenti (mappa della cartella: [README.md](./README.md)).
2. [roadmap.md](./roadmap.md) - evoluzione 2026: Tailwind v4 e Flux UI integration, piu' il piano 2025 storico.
3. [philosophy.md](./philosophy.md) - "La Bellezza e' Funzionale": filosofia del design in Laraxot.

## Core design system

- [Layouts and themes](./layouts-and-themes.md) - gestione dei temi per tenant e dark mode.
- [Architecture rules](./architecture.md) - regole per la creazione di nuovi componenti UI.
- [Icon system](./icon-system.md) - integrazione di Blade Icons e set personalizzati.

## Componenti e widget

- [Blade components](./blade-components.md) - libreria di componenti atomici riutilizzabili.
- [Filament components](./filament-components-usage.md) - custom columns, fields e widgets per l'Admin Panel.
- [Location selector](./filament-components-location-studio.md) - componente avanzato per la selezione geografica.
- [Design Comuni FAQ components](./design-comuni-faq-components.md) - componenti UI per pagina FAQ (Accordion, Hero, Breadcrumb, Search).

## Design Comuni Italia: replica

### Documentazione UI

- [FAQ components](./design-comuni-faq-components.md) - componenti UI per pagina FAQ
- [Blocks system](./blocks-system.md) - sistema blocchi universali
- [Design system](./design-system.md) - design tokens e pattern

### Link bidirezionali: tema Sixteen

- [All pages analysis](../../../Themes/Sixteen/docs/design-comuni/ALL_PAGES_ANALYSIS.md) - analisi 54 pagine
- [Progress report](../../../Themes/Sixteen/docs/design-comuni/PROGRESS_REPORT.md)
- [Argomenti analisi](../../../Themes/Sixteen/docs/design-comuni/ARGOMENTI_ANALISI.md)
- [Risultati ricerca](../../../Themes/Sixteen/docs/design-comuni/RISULTATI_RICERCA_ANALISI.md)
- [FAQ HTML analysis](../../../Themes/Sixteen/docs/design-comuni/DOMANDE_FREQUENTI_HTML_ANALYSIS.md)
- [FAQ implementazione](../../../Themes/Sixteen/docs/design-comuni/DOMANDE_FREQUENTI_IMPLEMENTAZIONE.md)
- [FAQ analisi visiva](../../../Themes/Sixteen/docs/design-comuni/DOMANDE_FREQUENTI_ANALISI_VISIVA.md)
- [FAQ report finale](../../../Themes/Sixteen/docs/design-comuni/DOMANDE_FREQUENTI_REPORT_FINALE.md)
- [Master index tema](../../../Themes/Sixteen/docs/design-comuni/00-index.md)

### Link bidirezionali: modulo Cms

- [Cms Design Comuni index](../../Cms/docs/DESIGN_COMUNI_INDEX.md) - index completo modulo Cms
- [Cms FAQ](../../Cms/docs/design-comuni-faq.md) - architettura pagina FAQ
- [Cms homepage](../../Cms/docs/design-comuni-homepage.md) - analisi homepage

### Link bidirezionali: master index

- [Master index globale](../../../../docs/design-comuni/MASTER_INDEX.md)

### Stato implementazione

| Componente | HTML | CSS | JS | Totale |
|-----------|------|-----|----|--------|
| Accordion | 95% | 90% | 90% | 92% |
| Hero | 100% | 95% | N/A | 98% |
| Breadcrumb | 100% | 100% | N/A | 100% |
| Search | 100% | 90% | 0% | 65% |

Nota: una versione precedente della tabella riportava Accordion JS al 0% (totale 62%); i valori sopra sono quelli piu' recenti.

## Integrazioni tecniche

- [Tailwind v4 upgrade](./filament-v4-theme-upgrade.md) - guida alla migrazione verso l'ultima versione di Tailwind.
- [Folio and Volt themes](./struttura-themes-folio.md) - gestione dei temi nelle pagine Folio.
- [Table layout enum](./table-layout-enum-complete-guide.md) - standardizzazione dei layout tabelle.
- [Dependency intelligence](./dependency-intelligence.md)

## Qualita' e sviluppo

- [PHPStan analysis](./phpstan-level-10-cleanup.md) - report di conformita' Level 10.
- [Testing UI](./testing.md) - test di regressione visuale e componenti.

## Manutenzione

- [Cleanup plan](./consolidation-plan.md) - strategia per ridurre i 280+ file di documentazione.
- Duplicati noti nell'area: [00-index.md](./00-index.md) (copia in minuscolo di questo indice, superseded), [bugfix-icons-missing.md](./bugfix-icons-missing.md) e [archive/bugfix-icons-missing.md](./archive/bugfix-icons-missing.md), [mcp_integration.md](./mcp_integration.md) e [archive/mcp_integration.md](./archive/mcp_integration.md).

## Pacchetti Composer

- `owenvoke/blade-fontawesome` - icone FontAwesome
- I riferimenti globali ai pacchetti (`composer-packages-reference.md`, inventario dei 312 pacchetti) non sono presenti nel repository al 2026-10-07; vedi [composer-dependencies.md](../../../../docs/composer-dependencies.md).

## Moduli correlati

- [Xot](../../Xot/docs/readme.md) - base framework per i widget.
- [Cms](../../Cms/docs/README.md) - layout dei contenuti e blocchi.

---

*Documentazione conforme agli standard Laraxot - DRY + KISS + SOLID*
