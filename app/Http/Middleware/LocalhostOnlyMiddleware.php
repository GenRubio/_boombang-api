<?php

namespace App\Http\Middleware;

use Closure;

class LocalhostOnlyMiddleware
{
    public function handle($request, Closure $next)
    {
        // Verifica si la solicitud proviene de localhost
        if ($request->ip() != config('app.ip')) {
            // Si no es localhost, retorna un error o redirige
            return response('Acceso no permitido', 403);
        }

        return $next($request);
    }
}