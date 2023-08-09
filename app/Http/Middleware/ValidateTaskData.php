<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateTaskData
{
    public function handle(Request $request, Closure $next)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|string',
        ]);

        return $next($request);
    }
}
