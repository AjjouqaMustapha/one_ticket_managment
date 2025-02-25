<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard('admin')->check() && !$request->is('admin/dashboard')) {
            return redirect(RouteServiceProvider::ADMIN);
        }
    
        if (Auth::guard('employer')->check() && !$request->is('employer/dashboard')) {
            return redirect(RouteServiceProvider::EMPLOYER);
        }
    
        if (Auth::guard('web')->check() && !$request->is('dashboard')) {
            return redirect(RouteServiceProvider::HOME);
        }
        return $next($request);
    }
}
