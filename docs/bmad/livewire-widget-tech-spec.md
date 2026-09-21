---
title: "Tech spec — UI ritiro HTTP"
type: tech-spec
module: UI
related:
  - ./livewire-widget-prd.md
---

# Tech spec UI

Grep prima del delete: `DarkModeSwitcher` HTTP vs Widget vs View Component. Tenere Widget + View\Components. Delete `app/Http/Livewire/DarkModeSwitcher.php` e vista `livewire/dark-mode/switcher`. Aggiornare `UiGapCloser100Test` al widget.

Toast: la condizione originale era "grep `ui::livewire.toast`; se solo self, delete classe+vista". Quel grep cercava solo il nome della vista, non il tag di montaggio. Ripetuto correttamente con `grep -rn "<livewire:toast" --include="*.blade.php" .`, il risultato non è "solo self": `Modules/UI/resources/views/components/layouts/main.blade.php:28` monta `<livewire:toast />`. La condizione di cancellazione non si verifica: **non cancellare** `Toast`, resta in scope. Dettaglio: [livewire-inventory.md](./livewire-inventory.md).

Non toccare `phpstan.neon`.
