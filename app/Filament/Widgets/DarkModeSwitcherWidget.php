<?php

declare(strict_types=1);

namespace Modules\UI\Filament\Widgets;

use Filament\Schemas\Components\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;
use Modules\Xot\Filament\Widgets\XotBaseSchemaWidget;

final class DarkModeSwitcherWidget extends XotBaseSchemaWidget
{
<<<<<<< .merge_file_O2YyQK
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> .merge_file_OXHRTo
    public ?array $data = [];

    public bool $darkMode = false;

<<<<<<< .merge_file_O2YyQK
    /** @phpstan-var view-string */
    /** @phpstan-ignore property.defaultValue */
=======
=======
    public ?array $data = [];
>>>>>>> laraxot/dev

    public bool $darkMode = false;

>>>>>>> 804451c (Lint)
    protected string $view = 'ui::filament.widgets.dark-mode-switcher';
=======
    /** @var view-string */
    protected string $view;

    public function __construct()
    {
        /** @var view-string $view */
        $view = 'ui::filament.widgets.dark-mode-switcher';
        $this->view = $view;

        parent::__construct();
    }
>>>>>>> .merge_file_OXHRTo

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

<<<<<<< .merge_file_O2YyQK
<<<<<<< HEAD
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
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)
    /**
     * Disabilitabile via config per temi/test (default: visibile).
     */
    public static function canView(): bool
    {
        return (bool) config('ui.dark_mode_switcher.enabled', true);
    }

<<<<<<< HEAD
<<<<<<< .merge_file_XHDFt3
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> .merge_file_4zuboB
=======
>>>>>>> laraxot/dev
>>>>>>> 804451c (Lint)
=======
>>>>>>> .merge_file_OXHRTo
    public function render(): View
    {
        return view($this->view, [
            'darkMode' => $this->darkMode,
        ]);
    }
}
