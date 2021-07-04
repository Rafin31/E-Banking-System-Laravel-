<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MeoCheck
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
        if($request->session()->get('user_type')=='meo')
        {
            return $next($request);
        }

        else{
            return redirect ('/login/meo');
        }
        
    }
}
