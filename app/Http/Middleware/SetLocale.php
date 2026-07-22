<?php

declare(strict_types=1);

namespace Modules\UI\Http\Middleware;

<<<<<<< HEAD
=======
use Closure;
>>>>>>> dfac49d (.)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
<<<<<<< HEAD
=======
use RuntimeException;
>>>>>>> dfac49d (.)
use Symfony\Component\HttpFoundation\Response;

final class SetLocale
{
    /**
     * Handle an incoming request.
     */
<<<<<<< HEAD
    public function handle(Request $request, \Closure $next): Response
=======
    public function handle(Request $request, Closure $next): Response
>>>>>>> dfac49d (.)
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
            throw new \RuntimeException('Middleware must return a Response instance');
=======
            throw new RuntimeException('Middleware must return a Response instance');
>>>>>>> dfac49d (.)
        }

        return $response;
    }
}
