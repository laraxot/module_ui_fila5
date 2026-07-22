<?php

declare(strict_types=1);

namespace Modules\UI\Http\Middleware;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Closure;
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use RuntimeException;
>>>>>>> dfac49d (.)
=======
>>>>>>> dfbb8305 (.)
use Symfony\Component\HttpFoundation\Response;

final class SetLocale
{
    /**
     * Handle an incoming request.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function handle(Request $request, \Closure $next): Response
=======
    public function handle(Request $request, Closure $next): Response
>>>>>>> dfac49d (.)
=======
    public function handle(Request $request, \Closure $next): Response
>>>>>>> dfbb8305 (.)
    {
        // Recupera la lingua dalla sessione o usa quella predefinita
        $locale = Session::get('locale', config('app.locale'));
        if (! is_string($locale)) {
            $locale = Config::string('app.locale');
        }
        // Imposta la lingua
        App::setLocale($locale);

        $response = $next($request);
        if (! $response instanceof Response) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new \RuntimeException('Middleware must return a Response instance');
=======
            throw new RuntimeException('Middleware must return a Response instance');
>>>>>>> dfac49d (.)
=======
            throw new \RuntimeException('Middleware must return a Response instance');
>>>>>>> dfbb8305 (.)
        }

        return $response;
    }
}
