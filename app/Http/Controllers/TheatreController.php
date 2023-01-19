<?php

namespace App\Http\Controllers;

use view;
use App\Models\Theatre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TheatreController extends Controller
{
     //show all theartres
     public function index() {
        return view('theatres.index',[
            'theatres' => Theatre::all()
        ]);
    }
    //show create theatre form
    public function create() {
        return view('theatres.create');

    }
     // store theatre  data
     public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'unique:theatres' ],
            'capacity' => 'required',

        ]);
        
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('images','public');
        };


        Theatre::create($formFields );
        //session()->flash('success', 'theatre    created successfully');
        return redirect('/theatres')->with('message', 'Theatre created succesfuly');
    }
    //show Edit form
    public function edit(Theatre $theatre ){
        return view('theatres.edit', ['theatre' =>$theatre]);
    }
// update theatre  data
    public function update(Request $request, Theatre $theatre ) {
        $formFields = $request->validate([
        'name' => 'required',
        'capacity' => 'required',]);

        //storing image
    if($request->hasFile('image')){
        $formFields['image'] = $request->file('image')->store('images','public');
    };

        $theatre->update($formFields );
    //session()->flash('success', 'theatre    created successfully');
    return back()->with('message', 'Theatre updated succesfuly');
    }
// delete theatre
    public function destroy(Theatre $theatre){
    $theatre->delete();
    return redirect('/theatres')->with('message', 'Theatres deleted succefully');
    }

}
