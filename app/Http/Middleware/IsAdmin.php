<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        if (!$request->user()->is_admin) {
            abort(404);
        }
        return $next($request);
    }
}
