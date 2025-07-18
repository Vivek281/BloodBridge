<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserTypeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $user_type)
    {
        if(Auth::check() && $user_type == Auth::user()->user_type){
            return $next($request);
        }
        abort(403,"Unauthorized");
    }
}
