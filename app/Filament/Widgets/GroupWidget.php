<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class GroupWidget extends XotBaseSchemaWidget
{
    protected static ?string $heading = 'Group Widget';

    /**
     * @return array<string, mixed>
     */
<<<<<<< HEAD
=======
=======
use Modules\Xot\Filament\Widgets\XotBaseWidget;

final class GroupWidget extends XotBaseWidget
{
    protected static ?string $heading = 'Group Widget';

    #[\Override]
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
    public function getFormSchema(): array
    {
        return [];
    }
}
