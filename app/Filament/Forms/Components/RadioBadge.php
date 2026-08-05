<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Modules\Xot\Filament\Forms\Components\XotBaseRadio;

class RadioBadge extends XotBaseRadio
<<<<<<< HEAD
=======
=======
use Filament\Forms\Components\Radio;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;

class RadioBadge extends Radio
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
{
    protected string $view = 'ui::filament.forms.components.radio-badge';

    protected string $defaultColor = 'gray-200'; // gray-200

    protected string $selectedColor = 'blue-500'; // '#3b82f6'; // blue-500

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

        // Verifica che sia un BackedEnum
        if (! is_subclass_of($enumClass, \BackedEnum::class)) {
            return null;
        }

        // Verifica che implementi le interfacce richieste
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
<<<<<<< HEAD
            if (null === $color) {
=======
<<<<<<< HEAD
            if (null === $color) {
=======
            if ($color === null) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                return $this->selectedColor;
            }

            if (is_array($color)) {
                $first = reset($color);

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
                return is_string($first) && '' !== $first ? $first : $this->selectedColor;
            }

            // PHPStan L10: $color è già verificato come non-array e non-null, quindi è string
            if ('' !== $color) {
<<<<<<< HEAD
=======
=======
                return is_string($first) && $first !== '' ? $first : $this->selectedColor;
            }

            // PHPStan L10: $color è già verificato come non-array e non-null, quindi è string
            if ($color !== '') {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
                return $color;
            }

            return $this->selectedColor;
        }

        return $this->selectedColor;
    }

    public function getIconForOption(string $value): ?string
    {
        $enum = $this->getEnumValue($value);
<<<<<<< HEAD
        if (! $enum instanceof HasIcon) {
=======
<<<<<<< HEAD
        if (! $enum instanceof HasIcon) {
=======
        if (! ($enum instanceof HasIcon)) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            return null;
        }
        $icon = $enum->getIcon();

        // getIcon() può restituire Htmlable|string|null, ma dobbiamo restituire solo string|null
<<<<<<< HEAD
        if (null === $icon) {
=======
<<<<<<< HEAD
        if (null === $icon) {
=======
        if ($icon === null) {
>>>>>>> 6e44b7d5 (.)
>>>>>>> laraxot/dev
            return null;
        }

        if (\is_string($icon)) {
            return $icon;
        }

        // PHPStan L10: $icon è BackedEnum|Htmlable dopo is_string(), quindi è sempre object
        // Se è Htmlable, convertilo a string
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
