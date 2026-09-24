<?php

declare(strict_types=1);

namespace Modules\UI\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class LanguageController extends Controller
{
    /**
     * Cambia la lingua dell'applicazione.
     */
    public function switch(string $locale): RedirectResponse
    {
        // Usa configurazione per ottenere le lingue supportate
        $supportedLocales = Config::array('app.supported_locales', ['en', 'it']);

        if (! in_array($locale, $supportedLocales, strict: true)) {
            $locale = Config::string('app.locale', 'en');
        }

        session()->put('locale', $locale);
        app()->setLocale($locale);

<<<<<<< HEAD
<<<<<<< HEAD
        return redirect()->back();
=======
<<<<<<< HEAD
        return redirect()->back();
=======
<<<<<<< HEAD
=======
>>>>>>> 804451c (Lint)
        $previous = url()->previous();
        $fallback = url('/');

        if (! is_string($previous) || ! str_starts_with($previous, $fallback)) {
            return redirect()->to($fallback);
        }

        return redirect()->to($previous);
=======
        return redirect()->back();
>>>>>>> laraxot/dev
<<<<<<< HEAD
>>>>>>> laraxot/dev
>>>>>>> laraxot/dev
=======
>>>>>>> 804451c (Lint)
    }
}
