<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class OstadMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $code=$request->header('code');
        $ip=$request->ip();

        Log::info($ip);


        if($code=='abc123'){
           
            return $next($request);
        }
        if($code=='abc123'){

            return $next($request);
        }
        else{
            return response()->json('unauthorized',401);
        }
    }
}