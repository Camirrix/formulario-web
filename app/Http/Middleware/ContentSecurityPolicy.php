<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContentSecurityPolicy
{
    /**
     * Maneja la solicitud entrante.
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        // Política CSP que permite scripts provenientes del mismo origen y inline
        $csp = "default-src 'self'; script-src 'self' 'unsafe-inline';";
        $response->headers->set('Content-Security-Policy', $csp);
        return $response;
    }
}
