<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use JWTFactory;
use JWTAuth;
use HandleResponse;
use App\User;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public $response;

    public function index()
    {
        return new UserCollection(User::all());
    }
    
    public function fetchAll()
    {
        return new UserCollection(User::all());
    }

    public function doLogin(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password'=> 'required|min:6'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $credentials = $request->only('email', 'password');

        try {
            if (!JWTAuth::attempt($credentials)) {
                return HandleResponse::jsonResponse('wrong_creds');
            }
        } catch (JWTException $e) {
            return HandleResponse::jsonResponse('auth_error');
        }
        $user = User::first();
        $token = JWTAuth::fromUser($user);
        $payloadable = new UserResource($user);
        return $this->respondWithToken($token, $payloadable);
    }
    
    public function doRegister(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password'=> 'required|min:6',
            'username'=> 'required|string|min:3'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $newUser = User::create([
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);

        if (!$newUser) {
            return HandleResponse::jsonResponse('register_error');
        }
        else {
            return HandleResponse::jsonResponse('register_success');
        }

        // return response()->json($response);
    }

    protected function respondWithToken($token, $payloadable)
    {
      return response()->json([
        'access_token' => $token,
        'token_type' => 'bearer',
        // 'expires_in' => auth()->factory()->getTTL() * 60,
        'data' => [
            'user' => $payloadable
        ]
      ]);
    }
}
