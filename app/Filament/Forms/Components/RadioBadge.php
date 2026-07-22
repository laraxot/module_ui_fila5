<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Modules\Xot\Filament\Forms\Components\XotBaseRadio;

class RadioBadge extends XotBaseRadio
{
    protected string $view = 'ui::filament.forms.components.radio-badge';

    protected string $defaultColor = 'gray-200';

    protected string $selectedColor = 'blue-500';

    /**
     * Get enum value from string value.
     *
     * @return (\BackedEnum&HasColor&HasIcon)|null
     */
    public function getEnumValue(string $value): ?\BackedEnum
    {
        if (! \is_string($this->options)) {
            return null;
        }
        if (! enum_exists($this->options)) {
            return null;
        }
        /** @var class-string<\UnitEnum> $enumClass */
        $enumClass = $this->options;

        if (! is_subclass_of($enumClass, \BackedEnum::class)) {
            return null;
        }

        if (! is_subclass_of($enumClass, HasColor::class) || ! is_subclass_of($enumClass, HasIcon::class)) {
            return null;
        }

        /* @var class-string<\BackedEnum&HasColor&HasIcon> $enumClass */
        return $enumClass::tryFrom($value);
    }

    public function getColorForOption(string $value): string
    {
        $enum = $this->getEnumValue($value);
        if ($enum instanceof HasColor) {
            $color = $enum->getColor();
            if (null === $color) {
                return $this->selectedColor;
            }

            if (is_array($color)) {
                $first = reset($color);

                return is_string($first) && '' !== $first ? $first : $this->selectedColor;
            }

            if ('' !== $color) {
                return $color;
            }

            return $this->selectedColor;
        }

        return $this->selectedColor;
    }

    public function getIconForOption(string $value): ?string
    {
        $enum = $this->getEnumValue($value);
        if (! $enum instanceof HasIcon) {
            return null;
        }
        $icon = $enum->getIcon();

        if (null === $icon) {
            return null;
        }

        if (\is_string($icon)) {
            return $icon;
        }

        if (method_exists($icon, '__toString')) {
            return (string) $icon;
        }

        return null;
    }

    public function defaultColor(string $color): static
    {
        $this->defaultColor = $color;

        return $this;
    }

    public function selectedColor(string $color): static
    {
        $this->selectedColor = $color;

        return $this;
    }
}
