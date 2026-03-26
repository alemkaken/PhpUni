<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAccountStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and their account is not active
        // This covers suspended, incomplete, or unverified statuses assuming `is_active` correctly maps to that.
        if ($request->user() && !$request->user()->is_active) {
            return redirect('/inactive-account')->with('error', 'Your account is suspended, incomplete, or unverified.');
        }

        return $next($request);
    }
}
