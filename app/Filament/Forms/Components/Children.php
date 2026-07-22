<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
use Modules\Xot\Filament\Forms\Components\XotBaseViewField;

// use Filament\Support\Components\ViewComponent;

final class Children extends XotBaseViewField
<<<<<<< HEAD
=======
use Filament\Forms\Components\ViewField;

// use Filament\Support\Components\ViewComponent;

final class Children extends ViewField
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
{
    protected string $view = 'ui::filament.forms.components.navigation-builder';

    /*
     * public static function make($livewire): static
     * {
     * $result = app(static::class, ['livewire' => $livewire]);
     * $result->configure();
     * return $result;
     * }
     */
}
