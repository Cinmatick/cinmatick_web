<?php

namespace App\Http\Controllers\Api;

use App\Models\Bookings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class BookingController extends Controller
{
    public function index() {
        return response()->json([
            'shows' => Bookings::with('show', 'user')->get(),
        ]);

    }
    //show create bookings form
    public function store(Request $request) {

        $formFields = $request->validate([
           // 'reference' => ['required', 'unique:movies' ],
            'number_of_seats' => 'required',
            'show_id' => 'required'
        ]);
        $uniqid = Str::random(9);
        $formFields['reference'] = $uniqid;

        $data = array_merge($formFields, ['user_id' => auth()->user()->id]);
        //$formFields['status'] = $request->status == 'on' ? 1 : 0;


        Bookings::create($data);

    }
}
