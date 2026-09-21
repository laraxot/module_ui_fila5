---
title: "Architecture — UI widget"
type: architecture
module: UI
related:
  - ./livewire-widget-prd.md
---

# Architecture UI

```
Tema Blade DarkModeSwitcher → DarkModeSwitcherWidget
Http/Livewire/DarkModeSwitcher → delete
Toast HTTP → resta: montato in components/layouts/main.blade.php:28, non è orfano
filament/widgets/group|row → già FQCN
```

ADR: gemello esistente batte classe nuova (stesso di User SocialLogin).

**Correzione 2026-09-21:** la riga "Toast HTTP → delete (orfano)" era sbagliata. `Toast` è montato con `<livewire:toast />` in `Modules/UI/resources/views/components/layouts/main.blade.php:28`, layout radice ereditato da tutti i layout front-office del modulo e da pagine fuori modulo. Dettaglio e citazioni complete: [livewire-inventory.md](./livewire-inventory.md).
