<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index() {
        return view('landingPage.index',);
    }
    //show create bookings form
    public function show() {
        return view('landingPage.download');

    }
     public function about() {
        return view('landingPage.about');

     }
}
