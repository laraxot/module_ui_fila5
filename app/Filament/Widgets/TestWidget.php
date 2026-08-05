<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class TestWidget extends XotBaseSchemaWidget
{
    protected ?string $heading = 'Test Widget';

    /**
     * @return array<string, mixed>
     */
<<<<<<< HEAD
=======
=======
use Modules\Xot\Filament\Widgets\XotBaseWidget;

final class TestWidget extends XotBaseWidget
{
    protected ?string $heading = 'Test Widget';

>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    public function getFormSchema(): array
    {
        return [];
    }
}
