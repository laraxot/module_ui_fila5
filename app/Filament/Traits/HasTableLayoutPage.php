<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Traits;

use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutTrait;

/**
 * Sincronizza la proprietà Livewire layoutView con la preferenza in sessione.
 *
 * @property TableLayoutEnum $layoutView
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
 *
 * Usato da: Modules\Xot\Filament\Traits\HasXotTable (cross-module, PHPStan non rileva il consumer analizzando solo UI)
 */
/** @phpstan-ignore trait.unused */
<<<<<<< HEAD
=======
 */
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
trait HasTableLayoutPage
{
    use TableLayoutTrait;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    public function mountTableLayoutFromSession(
        string $identifier = 'default',
    ): void {
        $this->layoutView = $this->getCurrentLayout($identifier);
    }

    public function applyLayoutView(TableLayoutEnum $layout): void
<<<<<<< HEAD
=======
    public function mountTableLayoutFromSession(string $identifier = 'default'): void
    {
        $this->layoutView = $this->getCurrentLayout($identifier);
    }

    public function setLayoutView(TableLayoutEnum $layout): void
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
    {
        $this->layoutView = $layout;
    }

    public static function isLayoutCapable(object $livewire): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $uses = class_uses_recursive($livewire::class);

        return in_array(self::class, $uses, true);
=======
        return in_array(self::class, class_uses_recursive($livewire::class), true);
>>>>>>> dfac49d (.)
=======
        $uses = class_uses_recursive($livewire::class);

        return in_array(self::class, $uses, true);
>>>>>>> dfbb8305 (.)
    }

    public static function readLayoutFrom(object $livewire): ?TableLayoutEnum
    {
        if (! self::isLayoutCapable($livewire)) {
            return null;
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dfbb8305 (.)
        $layout = data_get($livewire, 'layoutView');

        return $layout instanceof TableLayoutEnum ? $layout : null;
    }

    public static function applyLayoutTo(
        object $livewire,
        TableLayoutEnum $layout,
    ): void {
<<<<<<< HEAD
=======
        return (function (): TableLayoutEnum {
            return $this->layoutView;
        })->call($livewire);
    }

    public static function applyLayoutTo(object $livewire, TableLayoutEnum $layout): void
    {
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
        if (! self::isLayoutCapable($livewire)) {
            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        data_set($livewire, 'layoutView', $layout);
=======
        (function (TableLayoutEnum $layout): void {
            $this->layoutView = $layout;
        })->call($livewire, $layout);
>>>>>>> dfac49d (.)
=======
        data_set($livewire, 'layoutView', $layout);
>>>>>>> dfbb8305 (.)
    }
}
