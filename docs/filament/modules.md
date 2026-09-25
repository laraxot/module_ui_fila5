---
title: Moduli Filament
description: Moduli Filament
extends: _layouts.documentation
section: content
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_4tavdw
=======
=======
<<<<<<< .merge_file_NWzAZk
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_BGMBgj
>>>>>>> .merge_file_recmyA
related:
  - "./automatic-translations.md"
  - "./best-practices.md"
  - "./component-icon-support.md"
  - "./component-methods-compatibility.md"
  - "./filament-4-components-guide.md"
  - "./filament-4-migration-guide.md"
  - "./filament-4-migration-summary.md"
  - "./filament-4-migration-sumy.md"
<<<<<<< .merge_file_4tavdw
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_NWzAZk
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_BGMBgj
>>>>>>> .merge_file_recmyA
=======
>>>>>>> laraxot/dev
---

# Moduli Filament {#moduli-filament}

Url di riferimento https://github.com/savannabits/filament-modules
Installare il pacchetto di savannabits
```php
composer require coolsam/modules
```
Al suo interno si avrà già inglobato nwidart/laravel-modules.

Per creare un modulo eseguire i comandi artisan di nwidart
url di riferimento https://nwidart.com/laravel-modules/v6/advanced-tools/artisan-commands
```php
php artisan module:make NomeModulo
```
Per creare l'AdminPanelProvider di filament nel modulo eseguire
```php
php artisan module:make-filament-panel admin NomeModulo # php artisan module:make-filament-panel [id] [module]
```
Sostituire il codice generato con
```php
<?php

declare(strict_types=1);

namespace Modules\NomeModulo\Providers\Filament;

use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'NomeModulo';
}

```
