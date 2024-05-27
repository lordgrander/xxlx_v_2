<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;
class lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 
        if(session('locale'))
        {
            app()->setLocale(session('locale')); 
        }
        else
        {
            session()->put('locale', 'th');
            app()->setLocale('th'); 
        }
        return $next($request);
    }
}
