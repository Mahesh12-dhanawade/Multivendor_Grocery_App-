<?php

namespace App\Http\Middleware;

use App\CentralLogics\Helpers;
use Closure;

class ActivationCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		return $next($request);
    }
}
