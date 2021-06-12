<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class Admin
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
        if (FacadesAuth::check())
        {
            if(auth()->user()->role == 'admin')
            {
                return $next($request);
            }
            return redirect()->route('logout');
        }
        else
        {
            return redirect()->route('login');
        }
    }
}