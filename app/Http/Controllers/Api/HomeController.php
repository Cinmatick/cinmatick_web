<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::query();
        $trending_movies = $movies->where('trending', 1)->latest()->take(6)->get();
        $categories = Category::latest()->take(8)->get();
        return response()->json([
            'trending_movies' => $trending_movies,
            'categories' => $categories
        ]);
    }
}
