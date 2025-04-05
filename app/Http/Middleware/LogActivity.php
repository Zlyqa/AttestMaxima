<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogActivity
{
    public function handle($request, Closure $next)
    {
        Log::channel('admin')->info('Admin access', [
            'user' => auth()->user()?->email,
            'path' => $request->path(),
            'ip' => $request->ip()
        ]);
        
        return $next($request);
    }
}