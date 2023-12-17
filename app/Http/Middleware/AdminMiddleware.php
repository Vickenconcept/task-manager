<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(auth()->user()->is_admin);
        if (auth()->check() && auth()->user()->is_admin == 1) {
            return $next($request);
        }

        // If not an admin, redirect to a different route or show an error
        return redirect('/');
    }
}
