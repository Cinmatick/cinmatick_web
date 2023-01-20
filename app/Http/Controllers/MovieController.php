<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MovieController extends Controller
{
    //show all movies
    public function index() {
        return view('movies.index',[
            'movies' => Movie::with('category')->get()
        ]);
    }
    //show create movie form
    public function create() {
        $categories = Category::get(['id','name']);
        return view('movies.create', ['categories' => $categories]);

    }
    // store movie data
    public function store(Request $request) {

        $formFields = $request->validate([
            'name' => ['required', 'unique:movies' ],
            'video_url' => 'required',
            'cast' => 'required',
            //'status' => 'required',
            'released_date' => 'required',
            'description' => 'required',
            'pg' => 'required',
            'category_id'=> 'required',

        ]);
        $formFields['status'] = $request->status == 'on' ? 1 : 0;
        $formFields['trending'] = $request->trending == 'on' ? 1 : 0;
        //storing image
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images','public');
        };


        Movie::create(

            $formFields

        );
        //session()->flash('success', 'Movie   created successfully');
        return redirect('/dashboard')->with('message', 'Movie created succesfuly');
    }
    //show Edit form
    public function edit(Movie $movie ){
        $categories = Category::get(['id','name']);
        return view('movies.edit', ['movie' =>$movie, 'categories' => $categories]);
    }
// update movie data
    public function update(Request $request, Movie $movie ) {
    $formFields = $request->validate([
        'name' => 'required',
        'video_url' => 'required',
        'cast' => 'required',
        //'status' => 'required',
        'released_date' => 'required',
        'description' => 'required',
        'pg' => 'required',
        'category_id'=> 'required',

    ]);
    $formFields['status'] = $request->status == 'on' ? 1 : 0;
    $formFields['trending'] = $request->trending == 'on' ? 1 : 0;
    //storing image
    if($request->hasFile('image')){
        $formFields['image'] = $request->file('image')->store('images','public');
    };




    $movie->update($formFields);
    //session()->flash('success', 'Movie   created successfully');
    return redirect('/dashboard')->with('message', 'Movie updated succesfuly');
    }
// delete movie
    public function destroy(Movie $movie){
    $movie->delete();
    return redirect('/dashboard')->with('message', 'movie deleted succefully');
    }
}
