<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class VerifyApiUser
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated using the API guard
        if (Auth::guard('api')->check()) {
            // User is authenticated, proceed with the request
            return $next($request);
        }

       

        // User is not authenticated, return an unauthorized response

        return response()->json(['errors'=>"Unauthorized"]);
    



        
    }
}