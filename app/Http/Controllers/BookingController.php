<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class BookingController extends Controller
{
     //show all bookings
     public function index() {
        return view('bookings.index',[
            'bookings' => Bookings::with('show', 'user')->get()
        ]);
    }
    //show create bookings form
    public function create() {
        return view('bookings.create');

    }
}
