<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check() || !$request->user()->is_admin) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
