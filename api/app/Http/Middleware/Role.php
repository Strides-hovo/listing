<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;

class Role
{
    

    public function handle(Request $request, Closure $next, $name )
    {
        if (property_exists(auth()->user(),'roleAdmin')) {
            return $next($request);
        }
        elseif (!auth()->user()->hasRole($name) ) {
            return response()->json(['message' => 'not found'], 404);
        }

        return $next($request);
    }


}
