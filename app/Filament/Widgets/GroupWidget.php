<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< .merge_file_E9eo2P
use Filament\Schemas\Components\Component;
=======
<<<<<<< HEAD
=======
use Filament\Schemas\Components\Component;
>>>>>>> laraxot/dev
>>>>>>> .merge_file_U1uRVA
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class GroupWidget extends XotBaseSchemaWidget
{
    protected static ?string $heading = 'Group Widget';

    /**
<<<<<<< HEAD
     * @return array<string, mixed>
=======
     * @return array<string, Component>
>>>>>>> laraxot/dev
     */
    public function getFormSchema(): array
    {
        return [];
    }
}
