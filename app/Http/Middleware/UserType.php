<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserType
{
    public function handle($request, Closure $next, $type)
    {
        // Check if user is logged in and user type matches
        if (Auth::check() && Auth::user()->type === $type) {
            return $next($request);
        }

        // Otherwise, redirect to login with error message
        return redirect('/login')->with('error', 'Access denied!');
    }
}
