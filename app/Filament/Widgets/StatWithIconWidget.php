<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Illuminate\Contracts\Support\Htmlable;
<<<<<<< HEAD
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class StatWithIconWidget extends XotBaseSchemaWidget
=======
use Modules\Xot\Filament\Widgets\XotBaseWidget;

final class StatWithIconWidget extends XotBaseWidget
>>>>>>> 6e44b7d5 (.)
{
    protected ?string $heading = 'Stat With Icon';

    protected string|Htmlable $label;

<<<<<<< HEAD
    protected string|int|float|bool|Htmlable|\Closure $value;
=======
    /**
     * @var scalar|Htmlable|\Closure
     */
    protected $value;
>>>>>>> 6e44b7d5 (.)

    public function getFormSchema(): array
    {
        return [];
    }

<<<<<<< HEAD
    /**
     * @return array<string, mixed>
     */
    protected function getData(): array
    {
        return [
            'label' => $this->label,
            'value' => $this->value,
        ];
=======
    protected function getData(): array
    {
        dddx($this->label);

        return [];
>>>>>>> 6e44b7d5 (.)
    }
}
