<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Shows;
use App\Models\Theatre;
use Illuminate\Http\Request;

class ShowsController extends Controller
{
     //show all movies
     public function index() {
        return view('shows.index',[
            'shows' => Shows::with('movie', 'theatre')->get()
        ]);
    }
    //show create movie form
    public function create() {
        $movies = Movie::where('status',1)->get(['id','name']);
        $theatres = Theatre::get(['id','name']);
        return view('shows.create',[
            'movies' => $movies,
            'theatres' => $theatres
        ]);

    }
        // store Shows  data
    public function store(Request $request) {
            $formFields = $request->validate([
                'movie_id' => 'required',
                'theatre_id' => 'required',
                'price' => 'required',
                'time' => 'required',
                //'available_seats' => 'required',
                'date' => 'required'

            ]);
            $capacity =Theatre::where('id',$request->theatre_id)->first('capacity');
            $formFields['available_seats'] = $capacity->capacity;

            Shows::create($formFields );
            //session()->flash('success', 'Shows    created successfully');
            return redirect('/shows')->with('message', 'Shows created succesfuly');
        }
        //show Edit form
        public function edit(Shows $show ){
            $movies = Movie::where('status',1)->get(['id','name']);
        $theatres = Theatre::get(['id','name']);
            return view('shows.edit', ['show' =>$show, 'movies' => $movies,
            'theatres' => $theatres]);
        }
    // update Shows  data
        public function update(Request $request, Shows $show ) {
            $formFields = $request->validate([
                'movie_id' => 'required',
                'theatre_id' => 'required',
                'price' => 'required',
                'time' => 'required',
                // 'available_seats' => 'required',
                'date' => 'required'
            ]);
            //adding connecting the available seats column to theatre capacity
           // $formFields['available_seats'] = Theatre::where('id','theatre_id')->get('capacity');
           $capacity =Theatre::where('id',$request->theatre_id)->first('capacity');
           $formFields['available_seats'] = $capacity->capacity;

            $show->update($formFields );
        //session()->flash('success', 'Shows    created successfully');
        return redirect('/shows')->with('message', 'Shows updated succesfuly');
        }
    // delete Shows
        public function destroy(Shows $show){
        $show->delete();
        return redirect('/shows')->with('message', 'shows deleted succefully');
        }

}
