<?php

declare(strict_types=1);

/**
 * @see https://github.com/awcodes/overlook/blob/2.x/src/Widgets/OverlookWidget.php
 */

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class OverlookWidget extends XotBaseSchemaWidget
=======
use Modules\Xot\Filament\Widgets\XotBaseWidget;

final class OverlookWidget extends XotBaseWidget
>>>>>>> 6e44b7d5 (.)
{
    public string $icon = 'heroicon-o-envelope';

    public string $title = '';

    /*
     * public array $grid = [
     * 'default' => 6,
     * 'sm' => 6,
     * 'md' => 6,
     * 'lg' => 6,
     * 'xl' => 6,
     * '2xl' => null,
     * ];
     */

<<<<<<< HEAD
    /** @var array<int, array<string, mixed>> */
=======
>>>>>>> 6e44b7d5 (.)
    public array $stats = [];

    protected string $view = 'ui::filament.widgets.overlook';

    protected int|string|array $columnSpan = 1;

<<<<<<< HEAD
    /**
     * @return array<string, mixed>
     */
=======
>>>>>>> 6e44b7d5 (.)
    public function getFormSchema(): array
    {
        return [];
    }

    /*
     * public function mount(array $filter): void
     * {
     * $this->filter = $filter;
     *
     * $this->data = $this->getData();
     * // dddx($this->data);
     * if (empty($this->grid)) {
     * $this->grid = [
     * 'default' => 2,
     * 'sm' => 2,
     * 'md' => 3,
     * 'lg' => 3,
     * 'xl' => 3,
     * '2xl' => null,
     * ];
     * }
     * }
     */
}
