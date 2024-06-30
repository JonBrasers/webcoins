<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
//use http\Env\Response;
use Illuminate\Http\Request;


class AuthController extends Controller {
    public function login() {

    }
    public function registration(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|between:8,36|confirmed',
        ]);
        if($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if(!$user) {
            return response()->json(["success" => false, "message" => "Registration failed",], 500);
        }
        return response()->json(["success" => true, "message" => "Registration succeeded",], 500);
    }
}
