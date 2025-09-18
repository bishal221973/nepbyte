<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthRedirectMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        // If user is not logged in, just continue
        if (!$user) {
            return $next($request);
        }

        // If user is admin
        if ($user->roles->first()?->name === 'Admin') {
            // Prevent redirect loop
            if (!$request->routeIs('dashboard')) {
                return redirect()->route('dashboard');
            }
        } else {
            // Non-admin
            if (!$request->routeIs('client.dashboard')) {
                return redirect()->route('client.dashboard');
            }
        }

        // Otherwise allow request to continue
        return $next($request);
    }
}
