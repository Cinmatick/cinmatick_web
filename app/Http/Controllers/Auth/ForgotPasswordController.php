<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\ResetCodePassword;
use App\Mail\SendCodeResetPassword;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Mail;


class ForgotPasswordController extends Controller
{
    /**
     * @param  mixed $request
     * @return void
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email']
        ]);

        $user = User::where('email',$request->input('email'))->where('is_admin',0)->first();
        if(!$user){
            return $this->jsonResponse('No user found with that email address', 400);
        }

        ResetCodePassword::where('user_id', $user->id)->delete();

        $data = [
            'code' => rand(00000,999999),
            'user_id' => $user->id,
            'expires_at' => now()->addMinutes(30)
        ];

        $codeData = ResetCodePassword::create($data);

        Mail::to($request->email)->send(new SendCodeResetPassword($codeData->code));

        return $this->jsonResponse('Password reset token sent to your email address', 200);
    }
}
