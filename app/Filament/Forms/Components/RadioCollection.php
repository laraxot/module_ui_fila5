<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Forms\Components;

use Illuminate\Support\Collection;
use Modules\Xot\Actions\Cast\SafeStringCastAction;
use Modules\Xot\Filament\Forms\Components\XotBaseField;

final class RadioCollection extends XotBaseField
{
    protected string $view = 'ui::filament.forms.components.radio-collection';

    /**
     * Callback per ottenere gli studi.
     */
    /** @var \Closure|Collection<int|string, mixed>|null */
    protected \Closure|Collection|null $options = null;

    protected string $itemView;

    protected string $valueKey = 'id';

    /**
     * Set the options collection for the radio buttons.
     */
    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param \Closure|Collection<int|string, mixed>|null $options
=======
<<<<<<< .merge_file_9fWvdO
     * @param  \Closure|Collection<int|string, mixed>|null  $options
=======
<<<<<<< HEAD
     * @param  \Closure|Collection<int|string, mixed>|null  $options
=======
<<<<<<< HEAD
     * @param \Closure|Collection<int|string, mixed>|null $options
=======
     * @param  \Closure|Collection<int|string, mixed>|null  $options
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_apVJ8r
>>>>>>> laraxot/dev
=======
     * @param \Closure|Collection<int|string, mixed>|null $options
>>>>>>> laraxot/dev
=======
     * @param \Closure|Collection<int|string, mixed>|null $options
>>>>>>> laraxot/dev
     */
    public function options(\Closure|Collection|null $options): static
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Set the custom item view template.
     */
    public function itemView(string $view): static
    {
        $this->itemView = $view;

        return $this;
    }

    /**
     * Set the key to use as the value for each option.
     */
    public function valueKey(string $key): static
    {
        $this->valueKey = $key;

        return $this;
    }

    /**
     * Get the options collection.
     *
     * @return Collection<int|string, mixed>
     */
    public function getOptions(): Collection
    {
        $optionsRaw = $this->evaluate($this->options);

        if ($optionsRaw instanceof Collection) {
            return $optionsRaw;
        }

        return collect([]);
    }

    /**
     * Get the item view template path.
     */
    public function getItemView(): string
    {
        return $this->itemView ?? 'ui::filament.forms.components.radio-collection-item';
    }

    /**
     * Get the value key for options.
     */
    public function getValueKey(): string
    {
        return $this->valueKey;
    }

    /**
     * Comparazione type-safe per determinare se un'opzione è selezionata.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_9fWvdO
<<<<<<< HEAD
=======
<<<<<<< .merge_file_lwkCNS
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
     *
     * @param mixed $stateOverride stato esplicito (test/offline senza container Livewire)
>>>>>>> .merge_file_Zz6H4R
>>>>>>> .merge_file_apVJ8r
=======
>>>>>>> laraxot/dev
     */
    public function isOptionSelected(mixed $option, mixed $stateOverride = null): bool
    {
<<<<<<< .merge_file_lwkCNS
        $state = SafeStringCastAction::cast($this->getState());
        $currentValue = (string) $state;
<<<<<<< HEAD
<<<<<<< .merge_file_9fWvdO
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
>>>>>>> .merge_file_apVJ8r
     *
     * @param  mixed  $stateOverride  stato esplicito (test/offline senza container Livewire)
     */
    public function isOptionSelected(mixed $option, mixed $stateOverride = null): bool
    {
        $state = $stateOverride ?? $this->getState();
        $currentValue = (string) SafeStringCastAction::cast($state);
<<<<<<< .merge_file_9fWvdO
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $state = $stateOverride ?? $this->getState();
        $currentValue = SafeStringCastAction::cast($state);
>>>>>>> .merge_file_Zz6H4R
>>>>>>> .merge_file_apVJ8r
=======
     */
    public function isOptionSelected(mixed $option): bool
    {
        $state = SafeStringCastAction::cast($this->getState());
        $currentValue = (string) $state;
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev

        // PHPStan L10: data_get restituisce mixed, SafeStringCastAction accetta mixed
        $optionData = data_get($option, $this->getValueKey());
        $optionValue = SafeStringCastAction::cast($optionData);

        return $currentValue === $optionValue;
    }
}
