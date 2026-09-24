---
title: "No Services / No Support — QueueableAction only"
type: concept
module: UI
tags: [ui, services, support, actions, queueable-action, migration]
created: 2026-07-13
updated: 2026-07-13
qmd: "UI module Services and Support banned use app Actions QueueableAction policy"
related:
<<<<<<< HEAD
  - "./auth-register-focus-loss-overlay.md"
  - "./block-rendering-and-optional-services.md"
  - "./claude-audit-static.md"
  - "./code-redundancy-ui.md"
  - "./context-overflow-prevention.md"
  - "./enum-select-best-practices.md"
  - "./enum-select-component.md"
  - "./enum-select-contract-and-false-friends.md"
=======
  - no-app-support-queueable-actions.md
  - ui-services-support-to-actions.md
  - ../../../Xot/docs/wiki/concepts/queueable-action-trait-mandatory.md
>>>>>>> laraxot/dev
---

# UI — Services/Support vietati: solo Actions

## Regola

- **Mai** creare file in `app/Services/` o `app/Support/`
- **Sempre** `app/Actions/{Contexto}/FooAction.php`
- **Trait**: `use Spatie\QueueableAction\QueueableAction;`
- **Entrypoint**: unico metodo `execute(...)`
- **Chiamata**: `app(FooAction::class)->execute(...)`
- **Gruppi**: sottocartelle per attore/contesto

## Conversione

Vedi [ui-services-support-to-actions.md](ui-services-support-to-actions.md) per mapping dettagliato.
