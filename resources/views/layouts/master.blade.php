<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- website official logo -->
    <link rel="icon" type="image/png" href="{{ asset('assets/image/official logo.png') }}" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="{{ asset('assets/css/googleFont.css') }}" rel="stylesheet" />
    <!-- MDB -->
    <link href="{{ asset('assets/css/mdb.min.css') }}" rel="stylesheet" />
    {{-- toastr minified file --}}
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" />
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title> @yield('title')</title>
</head>

<body>
    <div class="main">
        <div class="content">
            <div class="container mt-5">
                <div class="card">
                    <div class="card-header bg-dark">
                        <a href="{{ route('candidate.index') }}" class="btn bg-info btn-link btn-rounded btn-sm fw-bold float-start"
                            data-mdb-ripple-color="dark">
                            <span class="text-black">Home</span>
                        </a>
                        <a href="gallery.html" class="btn bg-info btn-link btn-rounded btn-sm fw-bold float-start mx-2"
                            data-mdb-ripple-color="dark">
                            <span class="text-black">gallery</span>
                        </a>
                        <a href="profile.html" class="btn bg-info btn-link btn-rounded btn-sm fw-bold float-start"
                            data-mdb-ripple-color="dark">
                            <span class="text-black">Profile</span>
                        </a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn bg-danger btn-link btn-rounded btn-sm fw-bold float-end"
                            data-mdb-ripple-color="dark">
                            <i class="fa-solid fa-right-from-bracket text-white">{{ __('Logout') }}</i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
            
                        <a href="{{ route('candidate.create') }}" class="btn bg-danger btn-link btn-rounded btn-sm fw-bold float-end mx-2"
                            data-mdb-ripple-color="dark">
                            <i class="fa-solid fa-file-circle-plus text-white"></i>
                        </a>
                    </div>
            @yield('content')
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- jquery link  -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- fonawsome link  -->
    <script type="text/javascript" src="{{ asset('assets/js/all.min.js') }}"></script>

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
    {{-- sweetalert link --}}
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <!-- custom javascript -->
    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
    {{-- toastr minified js --}}
    <script type="text/javascript" src="{{ asset('assets/js/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
</body>

</html>