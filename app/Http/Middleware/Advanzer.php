<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Advanzer
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
        if (!Session::has('user'))
        {
            return redirect()->guest('auth/google');
        }
        
        return $next($request);
    }
}
