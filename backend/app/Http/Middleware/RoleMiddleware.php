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
    

    public function handle($request, Closure $next, ...$roles): Response
    {
        $user = $request->user();

        if(!$user){
            return response()->json(['message' => 'Unauthenticated'], 401);
        }

        foreach($roles as $role){
            [$rolename, $beosztas] = explode(':', $role) + [1 => null];

            if(
                method_exists($user, 'getRole') &&
                $user->getRole() === $rolename &&
                (!$beosztas || $user->getBeosztas() === $beosztas)
            ) {
                return $next($request);
            }
        }

        return response()->json(['message' => 'Unauthorized'], 403);
    }
}
