<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Psy\Readline\Hoa\Console;

class prof
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      
        if (Auth::check()) {
            if(auth()->user()->active = 1)
            {
             if(auth()->user()->roles == "2")
             {
                 return $next($request);
             }
             else
             {
                 return redirect('/')->with('error',"You don't have admin access.");
             }

         }
         else {
             return redirect('/login')->with('message',"ur not active");
         }
     }
     else {
         return redirect('/login')->with('message',"please login");
     }
     }
    }


