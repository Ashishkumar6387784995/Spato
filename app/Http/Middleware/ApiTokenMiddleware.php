<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        // Check if the 'Authorization' header is present
        if ($request->hasHeader('Authorization')) {
            $token = $request->header('Authorization');
            

            // Perform token validation logic here (e.g., validate against database)
            // Replace this with your actual token validation logic

            if ($this->isValidToken($token)) {
                // Token is valid, proceed to the next middleware or controller action
                return $next($request);
            }
        }

        // Token is not valid or missing, return unauthorized response
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    // Replace this method with your actual token validation logic
    private function isValidToken($token)
    {
        // Example: Check if the token is present in the database
        // You should customize this logic based on your authentication setup
        // This is just a placeholder method, replace it with your actual implementation
        // Note: Storing and comparing tokens securely is crucial for security
        return true;
    }
}
