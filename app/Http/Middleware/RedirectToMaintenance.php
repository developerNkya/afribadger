<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectToMaintenance
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->path() !== 'mail') {
            return redirect('/maintenance');
        }

        return $next($request);
    }
}
