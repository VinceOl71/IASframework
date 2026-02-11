<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user(); // safer than auth()->user()

        if (!$user || $user->role !== 'admin') {
            abort(403, 'Access denied');
        }

        return $next($request);
    }
}
