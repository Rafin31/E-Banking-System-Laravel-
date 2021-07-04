<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class sessionChecker
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
        if ($request->session()->has('uname') == true)
         {
        return $next($request);
         }
         else
         {
                $request->session()->flash('msg','Please login to acces desired page');
                return redirect(('/manager/login'));
         }
    }
}
