<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is an admin
        if (Auth::check() && Auth::user()->admin == 1) {
            return $next($request);
        }

        // Redirect if not an admin
        return redirect()->route('user.dashboard');
    }
}
