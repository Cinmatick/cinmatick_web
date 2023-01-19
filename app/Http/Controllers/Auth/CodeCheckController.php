<?php

namespace App\Http\Controllers\Auth;

use App\Models\ResetCodePassword;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CodeCheckController extends Controller
{
    /**
     * @param  mixed $request
     * @return void
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'code' => ['required']
        ]);

        $passwordReset = ResetCodePassword::where('code', $request->code)->first();

        if (!$passwordReset || $passwordReset->isExpire()) {
            return $this->jsonResponse('invalid code supplied', 400);
        }

        return $this->jsonResponse('Code Verified');
    }
}
