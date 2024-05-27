<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class check_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 
        if(session('user_id'))
        {  
            if(session('status')=='ACTIVE')
            {
                return $next($request);
            }
            else
            {
                return redirect('/login')->with('error', 'Please Login'); 
            }
        }
        return redirect('/login')->with('error', 'Please Login');

    }
}
