<?php

namespace App\Http\Controllers\Auth;

use App\Models\ResetCodePassword;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /**
     * @param  mixed $request
     * @return void
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['reqired', 'confirmed']
        ]);

        $user = User::firstWhere('email', $request->email);

        if(!$user){
            return $this->jsonResponse('No user found with tha email address',400);
        }

        $user->update([
            "password" => Hash::make($request->password)
        ]);

        return $this->jsonResponse('Password reset successful');
    }
}
