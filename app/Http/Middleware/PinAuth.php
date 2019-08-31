<?php

namespace App\Http\Middleware;

use Closure;

class PinAuth
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
        if (session()->has(["mobile"])) {
            return $next($request);
        } else {
            return redirect(route("login.index"));
        }
    }
}
