<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isCitizen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (\Auth::user()->role == 'citizen') {
            return $next($request);
        }
        return $next($request);
    }
}
