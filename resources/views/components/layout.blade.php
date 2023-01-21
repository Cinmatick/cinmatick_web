<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Cinmatick') }}</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
        <!-- Font Awesome icons (free version)-->
    <!-- Core theme CSS (includes Bootstrap)-->

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet" />


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="sb-nav-fixed">
        {{-- <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->

        </div> --}}
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            {{-- <a class="navbar-brand ps-3" href="/dashboard">{{ config('app.name', 'Cinmatick') }}</a> --}}
            <a class="navbar-brand ps-3" href="/dashboard">
                <x-application-logo class=" fill-current " />
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            {{-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form> --}}


            <div class="mt-3 space-y-1 fixed top-0 right-0 text-white ">


                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>


            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/movies/create">Add movie</a>
                            </nav>
                            <a class="nav-link" href="{{route('categories.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Categories
                            </a>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('categories.create')}}">Add Category</a>
                            </nav>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="/theatres">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Theatre
                            </a>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/theatres/create">Add theatre</a>
                            </nav>
                            <a class="nav-link" href="/shows">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Shows
                            </a>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/shows/create">Add Show</a>
                            </nav>

                            <a class="nav-link" href="/bookings">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Bookings
                            </a>
                            <a class="nav-link" href="/users">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Registered Users
                            </a>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Download
                            </a>
                            <a class="nav-link" href="/reviews">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Reviews
                            </a>


                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>

                        <div>{{ Auth::user()->name }}</div>

                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <x-flash-message/>
                <main>
                    <div class="container-fluid px-4">

                        {{$slot}}

                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; {{ config('app.name') }} 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>


         <!-- content of the page-->

        <!-- footer-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/scripts2.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <!-- Core theme JS-->

    </body>
</html>
