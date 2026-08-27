<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< .merge_file_gx5t9G
use Filament\Schemas\Components\Component;
=======
<<<<<<< HEAD
=======
use Filament\Schemas\Components\Component;
>>>>>>> laraxot/dev
>>>>>>> .merge_file_6uDsYB
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class TestWidget extends XotBaseSchemaWidget
{
    protected ?string $heading = 'Test Widget';

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
