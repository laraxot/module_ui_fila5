<?php

declare(strict_types=1);
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
/**
 * @see https://github.com/awcodes/overlook/blob/2.x/src/Widgets/OverlookWidget.php
 */

namespace Modules\UI\Filament\Widgets;

use Filament\Schemas\Components\Component;
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

abstract class RowWidget extends XotBaseSchemaWidget
{
    /** @var array<string, int|string> */
    public array $grid = [];

    /** @var array<int, class-string> */
    public array $widgets = [];

<<<<<<< HEAD
    /** @phpstan-var view-string */
    /** @phpstan-ignore property.defaultValue */
    protected string $view = 'ui::filament.widgets.row';
=======
    /** @var view-string */
    protected string $view;

    public function __construct()
    {
        /** @var view-string $view */
        $view = 'ui::filament.widgets.row';
        $this->view = $view;

        parent::__construct();
    }
>>>>>>> laraxot/dev

    protected int|string|array $columnSpan = 'full';

    /**
     * @return array<int|string, Component>
     */
    public function getFormSchema(): array
    {
        return [];
    }

    protected function getColumns(): int
    {
        return 3;
    }
}
