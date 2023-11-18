<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Facades\JWTAuth;

class RefreshToken
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
        try {
            JWTAuth::parseToken();
            return $next($request);
        } catch (TokenExpiredException $e) {
            // Token has expired, attempt to refresh it
            try {
                $newToken = JWTAuth::refresh(JWTAuth::getToken());
                JWTAuth::setToken($newToken); // update token if expired 
            } catch (\Exception $e) {
                return response()->json(['error' => 'Unable to refresh token'], 401);
            }
            return $next($request);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unauthorized','message'=>$e->getMessage(),'trace'=>$e->getTraceAsString()], 401);
        }
    }
}
