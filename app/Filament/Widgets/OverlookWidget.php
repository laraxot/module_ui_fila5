<?php

declare(strict_types=1);
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> laraxot/dev
=======

>>>>>>> laraxot/dev
/**
 * @see https://github.com/awcodes/overlook/blob/2.x/src/Widgets/OverlookWidget.php
 */

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_pS5m0R
=======
<<<<<<< .merge_file_Ppqbpj
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
>>>>>>> .merge_file_JpxdKA
<<<<<<< HEAD
=======
use Filament\Schemas\Components\Component;
>>>>>>> laraxot/dev
<<<<<<< .merge_file_pS5m0R
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Filament\Schemas\Components\Component;
>>>>>>> .merge_file_i5w7yF
>>>>>>> .merge_file_JpxdKA
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class OverlookWidget extends XotBaseSchemaWidget
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

    /** @var array<int, array<string, mixed>> */
    public array $stats = [];

<<<<<<< HEAD
<<<<<<< HEAD
    /** @phpstan-var view-string */
    /** @phpstan-ignore property.defaultValue */
    protected string $view = 'ui::filament.widgets.overlook';

    protected int|string|array $columnSpan = 1;

<<<<<<< .merge_file_pS5m0R
=======
<<<<<<< .merge_file_Ppqbpj
<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * @return array<string, Component>
     */
=======
>>>>>>> .merge_file_JpxdKA
<<<<<<< HEAD
=======
    /**
     * @return array<string, Component>
     */
>>>>>>> laraxot/dev
<<<<<<< .merge_file_pS5m0R
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    /**
     * @return array<string, Component>
     */
>>>>>>> .merge_file_i5w7yF
>>>>>>> .merge_file_JpxdKA
=======
=======
>>>>>>> laraxot/dev
    /** @var view-string */
    protected string $view;

    public function __construct()
    {
        /** @var view-string $view */
        $view = 'ui::filament.widgets.overlook';
        $this->view = $view;

        parent::__construct();
    }

    protected int|string|array $columnSpan = 1;

<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
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
