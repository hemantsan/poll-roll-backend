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
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
            else {
                $user = User::first();
                $payloadable = [
                    'id' => $user->id,
                    'name' => $user->username,
                    'email' => $user->email,
                    'created_at' => $user->created_at,
                    'updated_at' => $user->updated_at,
                ];
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        $token = JWTAuth::fromUser($user, $payloadable);
        return response()->json($token);

        // return $data = new UserResource(
        //     User::where('email', $request->email)
        //     ->where('password', $request->password)
        //     ->firstOrFail());

        // $data["error"] = "Not found";
        // $data["message"] = "User not found";
        // return response()->json($data);
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
            $response["data"]["title"] = "Oops!!";
            $response["data"]["message"] = "Some error occured";
        }
        $response["data"]["title"] = "Success";
        $response["data"]["message"] = "Your account is registered";

        return $response;
    }
}
