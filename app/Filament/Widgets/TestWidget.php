<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

<<<<<<< .merge_file_oCUIQ7
<<<<<<< HEAD
<<<<<<< .merge_file_ExBo9H
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
=======
use Filament\Schemas\Components\Component;
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
use Filament\Schemas\Components\Component;
>>>>>>> .merge_file_cpaCem
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_qNYqOR
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class TestWidget extends XotBaseSchemaWidget
{
    protected ?string $heading = 'Test Widget';

<<<<<<< .merge_file_oCUIQ7
<<<<<<< HEAD
<<<<<<< .merge_file_ExBo9H
<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * @return array<string, Component>
     */
=======
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
=======
    /**
     * @return array<string, Component>
     */
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
    /**
     * @return array<string, Component>
     */
>>>>>>> .merge_file_cpaCem
=======
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_qNYqOR
    public function getFormSchema(): array
    {
        return [];
    }
}
