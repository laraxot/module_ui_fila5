<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Modules\Xot\Filament\Forms\Components\XotBaseRadio;

final class RadioImage extends XotBaseRadio
{
    /** @phpstan-var view-string */
    /** @phpstan-ignore property.defaultValue */
    protected string $view = 'ui::filament.forms.components.radio-image';
}
