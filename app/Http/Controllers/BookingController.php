<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class BookingController extends Controller
{
     //show all bookings
     public function index() {
        return view('bookings.index',[
            'bookings' => Bookings::all()
        ]);
    }
    //show create bookings form
    public function create() {
        return view('bookings.create');

    }
}
