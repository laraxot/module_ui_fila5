---
title: Ripristinare cartella vendor
description: Ripristinare cartella vendor
extends: _layouts.documentation
section: content
related:
  - "./automatic-translations.md"
  - "./best-practices.md"
  - "./component-icon-support.md"
  - "./component-methods-compatibility.md"
  - "./Filament-5-components-guide.md"
  - "./Filament-5-migration-guide.md"
  - "./Filament-5-migration-summary.md"
  - "./Filament-5-migration-sumy.md"
---

# Ripristinare la cartella vendor

Per ripristinare la cartella laravel\resources\views\vendor dove si trovano tutti i file di filament eseguire:  

```bash
php artisan vendor:publish
```
digitare il numero 0 e premere invio

NB: La cartella non la sovrascrive perciò bisogna prima spostarla
