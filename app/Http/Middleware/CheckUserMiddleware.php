<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userCount = User::count();
        // dd($userCount);
        
        if ($userCount > 0) {
            // return redirect()->route('login');
            return $next($request);
        } else {
            return redirect()->route('register');
        }

        return $next($request);
    }
}
