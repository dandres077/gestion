<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PermissionMiddleware
{
    public function handle($request, Closure $next, $permiso)
    {

        if (Auth::guest()) {
            return redirect('/login');
        }

        if (! $request->user()->can($permiso)) {
            abort(403);
        }

        return $next($request);
    }
}
