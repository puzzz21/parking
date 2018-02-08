<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'password' => 'required|confirmed',
            "email" => "required|email|unique:users",
            "username" => "required"
        ]);

        if ($validator->fails()) {
            $status = 500;
            $body = $validator->errors()->all()[0];
            return ["data" => $body, "status" => $status];
        }
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->address = $request->address;
        $user->phone_number = $request->phone_number;
        $user->save();
        return ["data" => ["user created"], "status" => 200];

    }
    public function login(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            "email" => "required|email",
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $status = 500;
            $body = $validator->errors()->all()[0];
            return ["data" => $body, "status" => $status];
        }
        $user = User::where("email", $request->email)->first();
        if($user)
        {
            if(\Hash::check($request->password,$user->password))
            {
                return ["data" => $user, "status" => 200];
            }
        }

        return ["data" => "credential mismatch", "status" => 500];
    }
}