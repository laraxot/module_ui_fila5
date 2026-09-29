---
title: "custom theme 1"
type: note
tags: [documentation]
created: 2026-09-26
updated: 2026-09-26
qmd: "custom theme 1"
issues: []
discussions: []
---

https://blog.jpat.dev/build-custom-components-inside-a-filament-v3-panel-with-livewire-and-tailwindcss


php artisan make:filament-theme admin

add resources/css/filament/admin/theme.css entry to vite.config.js

in app/Providers/Filament/AdminPanelProvider.php
->viteTheme('resources/css/filament/admin/theme.css')


