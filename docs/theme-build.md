---
title: "theme build"
type: note
tags: [documentation]
created: 2026-09-26
updated: 2026-09-26
qmd: "theme build"
issues: []
discussions: []
status: draft
---

# Theme Build & Publish Guide

## Installazione dipendenze

All'interno di `Themes/One`, installa i plugin necessari per Filament 3.x con:
```bash
npm install tailwindcss@3 @tailwindcss/forms @tailwindcss/typography postcss postcss-nesting autoprefixer --save-dev
```

Per aggiornare il tema **One**, eseguire i seguenti passi all'interno della cartella del tema:

```bash
cd Themes/One

# 1. Compilare asset (Tailwind, JavaScript, CSS):
npm run build

<<<<<<< .merge_file_IaxQuJ
# 2. Pubblicare asset nella cartella pubblica:
=======
# 2. Niente copia: public_html/themes/<Tema> e' un symlink a Themes/<Tema>/public
#    (php artisan xot:theme-link, una volta per installazione)
>>>>>>> .merge_file_B7Obfx
```

> **Requisito:** Filament 3.x supporta solo **Tailwind CSS 3.x**. Verificare in `package.json` di avere `"tailwindcss": "^3.x"` come dipendenza.

Se è la prima volta, verificare di aver eseguito `npm install` per le dipendenze.
