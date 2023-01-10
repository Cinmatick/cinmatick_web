<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MovieController extends Controller
{
    //show all movies
    public function index() {
        return view('movies.index',[
            'movies' => Movie::all()
        ]);
    }
    //show create movie form
    public function create() {
        return view('movies.create');

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

        ]);
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images','public');
        };

        $formFields['status'] = $request->status == 'on' ? 1 : 0;
        $formFields['trending'] = $request->status == 'on' ? 1 : 0;


        Movie::create(

            $formFields

        );
        //session()->flash('success', 'Movie   created successfully');
        return redirect('/dashboard')->with('message', 'Movie created succesfuly');
    }
    //show Edit form
    public function edit(Movie $movie ){
        return view('movies.edit', ['movie' =>$movie]);
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

    ]);
    if($request->hasFile('image')){
        $formFields['image'] = $request->file('image')->store('images','public');
    };

    $formFields['status'] = $request->status == 'on' ? 1 : 0;
    $formFields['trending'] = $request->status == 'on' ? 1 : 0;


    $movie->update(

        $formFields

    );
    //session()->flash('success', 'Movie   created successfully');
    return back()->with('message', 'Movie updated succesfuly');
    }
// delete movie
    public function destroy(Movie $movie){
    $movie->delete();
    return redirect('/dashboard')->with('message', 'movie deleted succefully');
    }
}
