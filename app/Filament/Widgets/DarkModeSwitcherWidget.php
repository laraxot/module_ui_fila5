<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Schemas\Components\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class DarkModeSwitcherWidget extends XotBaseSchemaWidget
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_pWUNYF
=======
    public ?array $data = [];
>>>>>>> laraxot/dev
=======
    public ?array $data = [];
=======
<<<<<<< HEAD
    public ?array $data = [];
=======
<<<<<<< HEAD
=======
    public ?array $data = [];
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> .merge_file_SaihbT

    public bool $darkMode = false;

    /** @phpstan-var view-string */
    /** @phpstan-ignore property.defaultValue */
    protected string $view = 'ui::filament.widgets.dark-mode-switcher';
=======
=======
>>>>>>> laraxot/dev
    public ?array $data = [];

    public bool $darkMode = false;

    /** @var view-string */
    protected string $view;

    public function __construct()
    {
        /** @var view-string $view */
        $view = 'ui::filament.widgets.dark-mode-switcher';
        $this->view = $view;

        parent::__construct();
    }
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev

    public function mount(): void
    {
        $this->darkMode = filter_var(request()->cookie('dark_mode', 'false'), FILTER_VALIDATE_BOOLEAN);
    }

    public function toggleDarkMode(): void
    {
        $this->darkMode = ! $this->darkMode;

        // Set cookie for persistence
        Cookie::queue('dark_mode', $this->darkMode ? 'true' : 'false', 60 * 24 * 30);

        // Dispatch event for frontend to handle theme switching
        $this->dispatch('darkModeUpdated', ['darkMode' => $this->darkMode]);
    }

    /**
     * Schema del form per la configurazione del widget.
     *
     * @return array<int, Component>
     */
    public function getFormSchema(): array
    {
        return [];
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< .merge_file_pWUNYF
<<<<<<< HEAD
=======
=======
<<<<<<< .merge_file_XHDFt3
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_4zuboB
>>>>>>> .merge_file_SaihbT
    /**
     * Disabilitabile via config per temi/test (default: visibile).
     */
    public static function canView(): bool
    {
        return (bool) config('ui.dark_mode_switcher.enabled', true);
    }

<<<<<<< .merge_file_pWUNYF
>>>>>>> laraxot/dev
=======
<<<<<<< .merge_file_XHDFt3
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_4zuboB
>>>>>>> .merge_file_SaihbT
=======
>>>>>>> laraxot/dev
=======
>>>>>>> laraxot/dev
    public function render(): View
    {
        return view($this->view, [
            'darkMode' => $this->darkMode,
        ]);
    }
}
