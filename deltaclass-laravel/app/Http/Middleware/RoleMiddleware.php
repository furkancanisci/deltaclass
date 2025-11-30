<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // If user is not authenticated, redirect to login
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Get the authenticated user
        $user = auth()->user();

        // Check if user has one of the required roles
        foreach ($roles as $role) {
            // Check if user model matches the required role
            if ($this->userHasRole($user, $role)) {
                return $next($request);
            }
        }

        // If no matching role found, redirect to unauthorized page
        return redirect()->route('login');
    }

    /**
     * Check if user has the specified role
     *
     * @param mixed $user
     * @param string $role
     * @return bool
     */
    private function userHasRole($user, string $role): bool
    {
        // Get the class name of the user model
        $userClass = get_class($user);
        
        // Check if the user model matches the role
        switch ($role) {
            case 'student':
                return $userClass === 'App\Models\Student';
            case 'teacher':
                return $userClass === 'App\Models\Teacher';
            case 'guidance':
                return $userClass === 'App\Models\Guidance';
            default:
                return false;
        }
    }
}