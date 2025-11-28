<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class AuthGates
{
    public function handle($request, Closure $next)
    {
        // Gates are now defined in AppServiceProvider
        return $next($request);
    }
}
