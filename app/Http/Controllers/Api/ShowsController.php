<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Shows;
use App\Models\Theatre;
use Illuminate\Http\Request;

class ShowsController extends Controller
{
    public function index()
    {
        //$shows = Shows::query();
       // $NowShowing_movies = $movies->where('status', 1)->latest()->take(10)->get();
        return response()->json([
            'shows' => Shows::with('movie', 'theatre')->get(),
        ]);
    }



    // Search for a movie
    public function search($name)
    {
       // return Shows::with('movie', 'theatre')->where('name', 'like', '%' .$name. '%')->get();
       return response()->json([
        'shows' => Shows::with('movie', 'theatre')->where('', 'like', '%' .$name. '%')->get(),
       ]);
    }
}
