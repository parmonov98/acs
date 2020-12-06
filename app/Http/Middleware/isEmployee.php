<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isEmployee
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
        if (\Auth::user()->role == 'employee') {
            return $next($request);
        }

        return redirect()->back()->with('error', 'Sizda yatarli huquqlar mavjud emas!');
    }
}
