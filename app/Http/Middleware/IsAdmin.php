<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if (!$user || !$user->roles || !$user->roles->contains('name', 'super_admin')) {
            abort(403, 'Unauthorized.');
        }

        return $next($request);
    }

}
