<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class ShowsController extends Controller
{
    public function index()
    {
        $movies = Movie::query();
        $NowShowing_movies = $movies->where('status', 1)->latest()->take(10)->get();
        return response()->json([
            'nowshowing_movies' => $NowShowing_movies,
        ]);
    }

    // Search for a movie
    public function search($name)
    {
        return Movie::where('name', 'like', '%' .$name. '%')->get();
    }
}
