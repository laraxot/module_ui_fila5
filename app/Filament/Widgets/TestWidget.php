<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class TestWidget extends XotBaseSchemaWidget
{
    protected ?string $heading = 'Test Widget';

    /**
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    public function getFormSchemaOld(): array
=======
    public function getFormSchema(): array
>>>>>>> laraxot/dev
    {
        return [];
    }
}
