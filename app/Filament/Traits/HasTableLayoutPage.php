<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Traits;

use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutTrait;

/**
 * Sincronizza la proprietà Livewire layoutView con la preferenza in sessione.
 *
 * @property TableLayoutEnum $layoutView
 */
trait HasTableLayoutPage
{
    use TableLayoutTrait;

<<<<<<< HEAD
    public function mountTableLayoutFromSession(string $identifier = 'default'): void
    {
        $this->layoutView = $this->getCurrentLayout($identifier);
    }

    public function setLayoutView(TableLayoutEnum $layout): void
=======
    public TableLayoutEnum $layoutView = TableLayoutEnum::LIST;

    public function mountTableLayoutFromSession(
        string $identifier = 'default',
    ): void {
        $this->layoutView = $this->getCurrentLayout($identifier);
    }

    public function applyLayoutView(TableLayoutEnum $layout): void
>>>>>>> laraxot/dev
    {
        $this->layoutView = $layout;
    }

    public static function isLayoutCapable(object $livewire): bool
    {
<<<<<<< HEAD
        return in_array(self::class, class_uses_recursive($livewire::class), true);
=======
        $uses = class_uses_recursive($livewire::class);

        return in_array(self::class, $uses, true);
>>>>>>> laraxot/dev
    }

    public static function readLayoutFrom(object $livewire): ?TableLayoutEnum
    {
        if (! self::isLayoutCapable($livewire)) {
            return null;
        }

<<<<<<< HEAD
        return (function (): TableLayoutEnum {
            return $this->layoutView;
        })->call($livewire);
    }

    public static function applyLayoutTo(object $livewire, TableLayoutEnum $layout): void
    {
=======
        $layout = data_get($livewire, 'layoutView');

        return $layout instanceof TableLayoutEnum ? $layout : null;
    }

    public static function applyLayoutTo(
        object $livewire,
        TableLayoutEnum $layout,
    ): void {
>>>>>>> laraxot/dev
        if (! self::isLayoutCapable($livewire)) {
            return;
        }

<<<<<<< HEAD
        (function (TableLayoutEnum $layout): void {
            $this->layoutView = $layout;
        })->call($livewire, $layout);
=======
        data_set($livewire, 'layoutView', $layout);
>>>>>>> laraxot/dev
    }
}
