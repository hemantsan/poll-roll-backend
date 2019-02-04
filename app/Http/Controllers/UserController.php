<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use JWTFactory;
use JWTAuth;
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
                return response()->json(['error' => 'Wrong credentials', 'message' => 'Check email and password']);
            }
            else {
                $user = User::first();
                $payloadable = [
                    'subject' => $user->id,
                    'username' => $user->username,
                    'email' => $user->email,
                    'pic' => $user->pic
                ];
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Authentication error']);
        }
        $token = JWTAuth::fromUser($user, $payloadable);
        $response["data"]["user"] = $payloadable;
        $response["data"]["token"] = $token;

        // return $data = new UserResource(
        //     User::where('email', $request->email)
        //     ->where('password', $request->password)
        //     ->firstOrFail());

        // $data["error"] = "Not found";
        // $data["message"] = "User not found";
        return response()->json($response);
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
            $response["data"]["error"] = "Oops!!";
            $response["data"]["message"] = "Some error occured";
        }
        $response["data"]["error"] = "Success";
        $response["data"]["message"] = "Your account is registered";

        return response()->json($response);
    }
}
