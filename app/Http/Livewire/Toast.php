<?php

declare(strict_types=1);
<<<<<<< HEAD
=======

>>>>>>> 0dadab4 (Lint)
/**
 * @see https://github.com/bezhanSalleh/filament-language-switch/blob/main/src/Http/Livewire/FilamentLanguageSwitch.php
 */

namespace Modules\UI\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

final class Toast extends Component
{
    public function render(): View
    {
<<<<<<< HEAD
        $view = 'ui::livewire.toast';
<<<<<<< .merge_file_RFzo3p
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/dev
=======
        /** @phpstan-var view-string */
        $view = 'ui::livewire.toast';
>>>>>>> 0dadab4 (Lint)
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> laraxot/dev
        $viewParams = [
            'view' => $view,
        ];

        return view($view, $viewParams);
<<<<<<< HEAD
=======
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
        $viewParams = [
            'view' => $view,
        ];

        return view($view, $viewParams);
>>>>>>> .merge_file_0dXZFZ
=======
>>>>>>> 0dadab4 (Lint)
    }
}
