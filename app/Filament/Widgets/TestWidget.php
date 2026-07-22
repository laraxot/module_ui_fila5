<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class TestWidget extends XotBaseSchemaWidget
{
    protected ?string $heading = 'Test Widget';

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return array<string, mixed>
     */
=======
>>>>>>> dfac49d (.)
=======
    /**
     * @return array<string, mixed>
     */
>>>>>>> dfbb8305 (.)
    public function getFormSchema(): array
    {
        return [];
    }
}
