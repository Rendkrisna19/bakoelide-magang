<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Symfony\Component\HttpFoundation\Response;

class TranslateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $lang = $request->query('lang', session('applocale', 'en'));

        // Simpan ke session jika ada parameter lang di URL
        if ($request->has('lang')) {
            session()->put('applocale', $lang);
        }

        app()->setLocale($lang);
        View::share('translator', new GoogleTranslate($lang));

        return $next($request);
    }
}
