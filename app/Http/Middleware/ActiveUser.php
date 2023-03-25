<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ActiveUser
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()->blocked_at) {
            $user = auth()->user();
            auth()->logout();
            return redirect()->route('login')
                ->withError('Your account was deleted at ' . $user->blocked_at);
        }
        return $next($request);
    }
}
