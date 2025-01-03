<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        
        Log::info('Middleware role called with role: ' . $role);

        // Pastikan pengguna sudah login
        if (!Auth::check()) {
            abort(403, 'Unauthorized');
        }

        // Periksa apakah pengguna memiliki peran yang sesuai
        if (Auth::user()->role !== $role) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
