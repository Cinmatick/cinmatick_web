<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
//use Illuminate\Routing\Controller;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register (Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
            'phone_no' => 'required|unique:users'

        ]);

        $user = User::create([
            'name' => $fields ['name'],
            'email' => $fields ['email'],
            'password' => bcrypt($fields['password']),
            'phone_no' => $fields['phone_no'],
            'is_admin' => 0,
            'reset_token'=>Str::random(4)

        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function login(Request $request) {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        //Check email
        $user = User::where('email', $fields['email'])->first();

        // Check password
        if(!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Wrong Credentials'
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function destroy(Request $request) {
         $user = User::findOrFail(auth()->user()->id);
         $user->tokens()->delete();
         return response()->json([
            'message' => 'Logged out'
         ]);
        // auth()->user()->tokens()->delete();
        // return [
        //     'message' => 'Logged out'
        // ];

    }
}
