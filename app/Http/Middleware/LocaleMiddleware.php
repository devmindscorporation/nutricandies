<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocaleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
    

        if ($request->session()->has('locale')) {
            app()->setLocale($request->session()->get('locale'));
        }


        return $next($request);
    }
}
