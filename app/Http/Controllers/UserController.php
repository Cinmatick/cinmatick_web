<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    //show all movies
    public function index()
    {
        $users = User::where('is_admin', 0)->get();
        return view('users.index', [
            'users' => $users
        ]);
    }
}
