<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Http\Response;
use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use HandleResponse;

class authJWT {

    protected $jwtAuth;

    public function __construct(JWTAuth $jwtAuth) {
        $this->jwtAuth = $jwtAuth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, \Closure $next) {

        $method = $request->method();
        if($this->apiCheck()){

        } else {
            if (!$token = str_replace("Bearer ", "", $request->header('Authorization'))) {
                $status = Response::HTTP_BAD_REQUEST;
                return response()->json(['error' => 'Token Not provided', 'status' => $status, 'method' => $method], $status);
            }

            try {
                $user = $this->jwtAuth->authenticate($token);
   
            } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException  $e) {
                return HandleResponse::jsonResponse('token_expired');
                // return response()->json(['error' => 'token_expired', 'method' => $method], $e->getStatusCode());

            } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
                return HandleResponse::jsonResponse('token_invalid');

            } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
                return response()->json(['error' => 'token_absent', 'method' => $method], $e->getStatusCode());
            }  

            if (!$user) {
                $status = Response::HTTP_BAD_REQUEST;
                return response()->json(['error' => 'Token Invalid - user not found', 'method' => $method, 'status' => $status], $status);
            }
        }
        $response = $next($request);

        return $response;
    }

    public function apiCheck() {
        return false;
    }
}