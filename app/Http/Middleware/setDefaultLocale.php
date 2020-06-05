<?php

namespace App\URL;
namespace App\Http\Middleware;

use Closure;

class setDefaultLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        URL::defaults(['locale' => $request->app()->locale]);

        return $next($request);
    }
}
