<?php

namespace App\Http\Controllers;

use App\Models\Shows;
use Illuminate\Http\Request;

class ShowsController extends Controller
{
     //show all movies
     public function index() {
        return view('shows.index',[
            'shows' => Shows::all()
        ]);
    }
    //show create movie form
    public function create() {
        return view('shows.create');

    }
        // store Shows  data
    public function store(Request $request) {
            $formFields = $request->validate([
                'movie_id' => 'required',
                'theatre_id' => 'required',
                'price' => 'required',
                'time' => 'required',
                'available_seats' => 'required',
                'date' => 'required'

            ]);


            Shows::create($formFields );
            //session()->flash('success', 'Shows    created successfully');
            return redirect('/shows')->with('message', 'Shows created succesfuly');
        }
        //show Edit form
        public function edit(Shows $show ){
            return view('shows.edit', ['show' =>$show]);
        }
    // update Shows  data
        public function update(Request $request, Shows $show ) {
            $formFields = $request->validate([
                'movie_id' => 'required',
                'theatre_id' => 'required',
                'price' => 'required',
                'time' => 'required',
                'available_seats' => 'required',
                'date' => 'required'
            ]);

            $show->update($formFields );
        //session()->flash('success', 'Shows    created successfully');
        return back()->with('message', 'Shows updated succesfuly');
        }
    // delete Shows
        public function destroy(Shows $show){
        $show->delete();
        return redirect('/shows')->with('message', 'shows deleted succefully');
        }

}
