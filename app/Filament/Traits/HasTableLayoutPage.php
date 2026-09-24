<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Traits;

use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutTrait;

/**
 * Sincronizza la proprietà Livewire layoutView con la preferenza in sessione.
 *
 * @property TableLayoutEnum $layoutView
<<<<<<< .merge_file_wOhwDG
<<<<<<< HEAD
=======
 *
 * Usato da: Modules\Xot\Filament\Traits\HasXotTable (cross-module, PHPStan non rileva il consumer analizzando solo UI)
>>>>>>> laraxot/dev
=======
 *                                       <<<<<<< .merge_file_1pMHrW
 *                                       <<<<<<< HEAD
 *                                       =======
 *                                       <<<<<<< HEAD
 *
 * Usato da: Modules\Xot\Filament\Traits\HasXotTable (cross-module, PHPStan non rileva il consumer analizzando solo UI)
 * =======
 *                                       <<<<<<< HEAD
 *                                       =======
 *
 * Usato da: Modules\Xot\Filament\Traits\HasXotTable (cross-module, PHPStan non rileva il consumer analizzando solo UI)
 * >>>>>>> laraxot/dev
 * >>>>>>> laraxot/dev
 * >>>>>>> laraxot/dev
 * =======
 *
 * Usato da: Modules\Xot\Filament\Traits\HasXotTable (cross-module, PHPStan non rileva il consumer analizzando solo UI)
 * >>>>>>> .merge_file_rIbaVK
>>>>>>> .merge_file_l0tNSc
 */
trait HasTableLayoutPage
{
    use TableLayoutTrait;

    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    public function mountTableLayoutFromSession(
        string $identifier = 'default',
    ): void {
        $this->layoutView = $this->getCurrentLayout($identifier);
    }

    public function applyLayoutView(TableLayoutEnum $layout): void
    {
        $this->layoutView = $layout;
    }

    public static function isLayoutCapable(object $livewire): bool
    {
        $uses = class_uses_recursive($livewire::class);

        return in_array(self::class, $uses, true);
    }

    public static function readLayoutFrom(object $livewire): ?TableLayoutEnum
    {
        if (! self::isLayoutCapable($livewire)) {
            return null;
        }

        $layout = data_get($livewire, 'layoutView');

        return $layout instanceof TableLayoutEnum ? $layout : null;
    }

    public static function applyLayoutTo(
        object $livewire,
        TableLayoutEnum $layout,
    ): void {
        if (! self::isLayoutCapable($livewire)) {
            return;
        }

        data_set($livewire, 'layoutView', $layout);
    }
}
