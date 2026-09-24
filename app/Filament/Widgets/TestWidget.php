<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< .merge_file_ExBo9H
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
<<<<<<< HEAD
=======
use Filament\Schemas\Components\Component;
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Filament\Schemas\Components\Component;
>>>>>>> .merge_file_cpaCem
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class TestWidget extends XotBaseSchemaWidget
{
    protected ?string $heading = 'Test Widget';

<<<<<<< .merge_file_ExBo9H
<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * @return array<string, Component>
     */
=======
<<<<<<< HEAD
=======
    /**
     * @return array<string, Component>
     */
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    /**
     * @return array<string, Component>
     */
>>>>>>> .merge_file_cpaCem
    public function getFormSchema(): array
    {
        return [];
    }
}
