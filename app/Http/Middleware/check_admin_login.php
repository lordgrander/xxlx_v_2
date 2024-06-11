<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class check_admin_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(session('admin_id'))
        {  
            if(session('status')!='OFF')
            {
                return $next($request);
            }
            else
            {
                return redirect('/a/l')->with('error', 'Please Login'); 
            }
        }
        return redirect('/a/l')->with('error', 'Please Login');
    }
}
