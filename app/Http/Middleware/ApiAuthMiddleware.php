<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Check if the request has a valid API token
        if (!$request->bearerToken()) {
        
            return response()->json(['error' => 'Unauthorized. Missing API token.']);
        }

        // Attempt to authenticate the user using the API token
        $user = Auth::guard('api')->user(); // Use Auth::guard('api') to specify the API guard

        // Check if the user is authenticated
        if (!$user) {
      
            return response()->json(['error' => 'Unauthorized. Invalid API token.']);
        }

        // Share the authenticated user with the request
        $request->merge(['user' => $user]);
       
        
        return $next($request);
    }
}