<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
            return redirect('/login')->with('message',"please login");
        }
    }
    }

