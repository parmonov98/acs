<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isOperator
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
        if (\Auth::user()->role == 'operator') {
            return $next($request);
        }
        return $next($request);
    }
}
