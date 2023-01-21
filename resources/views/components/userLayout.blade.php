<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Golden Screen</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Font Awesome icons (free version)-->
    <!-- Core theme CSS (includes Bootstrap)-->

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles2.css') }}" rel="stylesheet" />


</head>

<body class=" container-fluid-md   bg-dark text-white">
    <nav class=" navbar navbar-expand navbar-dark ">
        <!-- Navbar Brand-->

        <div class="container-fluid px-2 px-lg-2">
            <a class="navbar-brand" href="/">
                <x-application-logo class="  fill-current " />
            </a>

            <div  >
                <ul class="navbar-nav  py-2   ">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-2 py-lg-3 " href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-2 py-lg-3" href="/about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-2 py-lg-3 bg-warning rounded rounded-4"
                            href="/download">Download App</a></li>

                </ul>
            </div>
        </div>

    </nav>
    <main>
        <div class="container-fluid px-4">

            {{ $slot }}

        </div>
    </main>
    <footer class="py-4 bg-dark mt-1 fixed-bottom ">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center  justify-content-between small">
                <div class="text-muted text-center">Copyright &copy; Golden Screen 2023</div>
                <div class="d-block-md d-none" >
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/scripts2.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>
