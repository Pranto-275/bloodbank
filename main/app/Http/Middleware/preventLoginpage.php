<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Redirect;

class preventLoginpage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

       if(\Auth::user() && (\Auth::user()->name)=='admin'){
           return Redirect::to('/adminhome');
       }

       if(\Auth::user() && (\Auth::user()->name) !='admin'){
        return Redirect::to('becomedonor');
    }

        return $next($request);
    }
}