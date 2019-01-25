<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    public function index()
    {
        return new UserCollection(User::all());
    }
    
    public function fetchAll()
    {
        return new UserCollection(User::all());
    }

    public function doLogin(Request $request) {
        try {
            return $data = new UserResource(
                User::where('email', $request->email)
                ->where('password', $request->password)
                ->firstOrFail());

        } catch (ModelNotFoundException $ex) {
            $data["error"] = "Not found";
            $data["message"] = "User not found";
            return response()->json($data);
        }
    }
}
