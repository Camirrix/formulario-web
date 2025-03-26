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
        // Política CSP actualizada que incluye recursos de app.blade.php:
        // - Scripts desde 'self', inline, jQuery, Tailwind, cdnjs y jsdelivr.
        // - Estilos desde 'self', inline, Tailwind, Google Fonts y jsdelivr.
        // - Imágenes desde 'self' y data URIs.
        // - Fuentes desde 'self' y Google Fonts.
        $csp = "default-src 'self'; " .
               "script-src 'self' 'unsafe-inline' https://code.jquery.com https://cdn.tailwindcss.com https://cdnjs.cloudflare.com https://cdn.jsdelivr.net; " .
               "style-src 'self' 'unsafe-inline' https://cdn.tailwindcss.com https://fonts.googleapis.com https://cdn.jsdelivr.net; " .
               "img-src 'self' data:; " . // Permite cargar imágenes desde el dominio y data URIs en producción.
               "font-src 'self' https://fonts.gstatic.com; " .
               "connect-src 'self';";
        $response->headers->set('Content-Security-Policy', $csp);
        return $response;
    }
}
