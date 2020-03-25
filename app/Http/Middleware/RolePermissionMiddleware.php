<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class RolePermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->isSuperAdmin())
            return $next($request);
        abort(404, "You are not authorized to see this page");
    }
}
