@extends('layouts.welcome')
@section('content')
    <div>

        <div  class="  items-top justify-center   sm:items-center py-4 sm:pt-0">
            <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
            @if (Route::has('login'))
                <div id="nav" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm  dark:text-white-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm  dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm  dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



        </div >
        <!-- Main Content-->
        <div class="min-h-screen  container text-center">
            <img src="{{asset('assets/Wakanda forver.png')}}" alt="">

        </div>

    </div>
@endsection


