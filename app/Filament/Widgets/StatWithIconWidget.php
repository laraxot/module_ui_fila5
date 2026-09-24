<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Illuminate\Contracts\Support\Htmlable;
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class StatWithIconWidget extends XotBaseSchemaWidget
{
    protected ?string $heading = 'Stat With Icon';

    protected string|Htmlable $label;

    protected string|int|float|bool|Htmlable|\Closure $value;

    public function getFormSchema(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getData(): array
    {
<<<<<<< HEAD
<<<<<<< .merge_file_dL3wYL
=======
>>>>>>> 804451c (Lint)
<<<<<<< HEAD
        dddx($this->label);

        return [];
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        dddx($this->label);

        return [];
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uIMbAH
=======
>>>>>>> 804451c (Lint)
        return [
            'label' => $this->label,
            'value' => $this->value,
        ];
<<<<<<< HEAD
<<<<<<< .merge_file_dL3wYL
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_uIMbAH
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
    }
}
