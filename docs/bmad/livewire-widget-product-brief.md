---
title: "Product brief — ritiro Livewire UI"
type: product-brief
module: UI
related:
  - ./livewire-inventory.md
---

# Brief

Un solo switcher tema: `DarkModeSwitcherWidget`. HTTP `DarkModeSwitcher` esce. `Toast` **non** è orfano (montato in `components/layouts/main.blade.php:28`, chrome del front-office) e resta fuori da questa campagna: vedi [livewire-inventory.md](./livewire-inventory.md). Metrica corretta: `app/Http/Livewire` contiene solo `Toast.php` dopo il ritiro, non è vuoto.
