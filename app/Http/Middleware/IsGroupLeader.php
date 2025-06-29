<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsGroupLeader
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || !auth()->user()->hasRole('group_leader')) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}