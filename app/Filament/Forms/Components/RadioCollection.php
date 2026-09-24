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
     * @param \Closure|Collection<int|string, mixed>|null $options
<<<<<<< .merge_file_95Cokg
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  \Closure|Collection<int|string, mixed>|null  $options
=======
<<<<<<< HEAD
     * @param \Closure|Collection<int|string, mixed>|null $options
=======
     * @param  \Closure|Collection<int|string, mixed>|null  $options
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
     * @param  \Closure|Collection<int|string, mixed>|null  $options
>>>>>>> 804451c (Lint)
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_D5fiA3
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
<<<<<<< .merge_file_95Cokg
<<<<<<< HEAD
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
=======
>>>>>>> .merge_file_D5fiA3
     */
    public function isOptionSelected(mixed $option): bool
    {
        $state = SafeStringCastAction::cast($this->getState());
        $currentValue = (string) $state;
<<<<<<< .merge_file_95Cokg
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
=======
<<<<<<< HEAD
     */
    public function isOptionSelected(mixed $option): bool
    {
        $state = SafeStringCastAction::cast($this->getState());
        $currentValue = (string) $state;
=======
>>>>>>> 804451c (Lint)
     *
     * @param  mixed  $stateOverride  stato esplicito (test/offline senza container Livewire)
     */
    public function isOptionSelected(mixed $option, mixed $stateOverride = null): bool
    {
        $state = $stateOverride ?? $this->getState();
        $currentValue = (string) SafeStringCastAction::cast($state);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $state = $stateOverride ?? $this->getState();
        $currentValue = SafeStringCastAction::cast($state);
>>>>>>> .merge_file_Zz6H4R
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_D5fiA3

        // PHPStan L10: data_get restituisce mixed, SafeStringCastAction accetta mixed
        $optionData = data_get($option, $this->getValueKey());
        $optionValue = SafeStringCastAction::cast($optionData);

        return $currentValue === $optionValue;
    }
}
