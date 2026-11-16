---
title: "Direttive Filament nel layout UI (PTVX senza Cms)"
type: story
status: done
module: UI
updated: 2026-11-16
qmd: "Filament layout @filamentStyles @filamentScripts UI main master notifications no Cms"
related:
  - ../../../../../../docs/wiki/memories/filament5-layout-contract-shared-modules.md
  - ../../../Xot/docs/bmad/stories/module-portfolio-topology-no-cms-in-ptvx.story.md
---

# Direttive Filament nel layout UI

## Religione portfolio

`Cms` **non** sta in `base_ptvx_fila5` e non va introdotto. Il contratto
Filament 5 si impara dai progetti FO che hanno `Cms` (`head`/`foot`), e si
applica ai layout **reali** di questo progetto: `UI` e `User`.

Fonte: [Configuring your layout](https://filamentphp.com/docs/5.x/introduction/installation#configuring-your-layout).

Obblighi (stessi di `cms::head` / `cms::foot` altrove):

1. `@filamentStyles` in `<head>` (prima del CSS Vite del tema/app).
2. `@livewire('notifications')` a fine body **senza** `@auth`.
3. `@filamentScripts` a fine `<body>`.

## Layout owner in PTVX

- `Modules/UI/.../layouts/main.blade.php` e `master.blade.php`
- `Modules/User/.../layouts/main.blade.php`

## Acceptance criteria

- [x] Nessun `Modules/Cms` nel checkout PTVX.
- [x] Layout UI/User: Styles + Scripts + notifications nudo.
- [x] Pest `FilamentLayoutDirectivesTest` verde (file-read, no DB).
- [x] Memoria portfolio aggiornata col mapping Cms→UI.
