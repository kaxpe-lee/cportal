<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Obtiene el idioma guardado en session, o usa el idioma por defecto si no hay uno
        $locale = Session::get('locale', config('app.locale'));

        //Asegura que el idioma esté disponible
        if (!in_array($locale, ['es','en','fr','nl','de'])) {
            $locale = config('app.locale'); //fallback seguro
        }

        //Aplica el idioma a la app
        App::setLocale($locale);
        
        return $next($request);
    }
}
