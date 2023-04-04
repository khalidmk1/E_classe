<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {

            if (auth()->user()->active == 1) {

                if (auth()->user()->roles == "3") {
                    return redirect('/user');
                } elseif (Auth()->user()->roles == "2") {
                    return redirect('/prof');
                } elseif (auth()->user()->roles == "1") {
                    return redirect('/admin');
                } else {
                    return redirect('/')->with('error', "You don't have access.");
                }
            } else {
                return redirect('/')->with('message', "ur not active");
            }
        } else {
            return redirect('/dashboard')->with('message', "please login");
        }
    }
}
