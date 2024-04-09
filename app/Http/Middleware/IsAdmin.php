<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the active_user session variable is empty
        if (empty(session('active_user'))) {
            // Redirect to user.homepage if the session variable is empty
            return redirect(route('user.homepage'));
        }

        // Continue to the next middleware or route
        return $next($request);
    }
}
