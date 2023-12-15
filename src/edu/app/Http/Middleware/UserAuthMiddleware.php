<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAuthMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user() === null) {
            return redirect()->route('login.view-form');
        }

        return $next($request);
    }
}
