<!DOCTYPE html>
<html lang="en">
<head>
    <title>Happy Book Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>

<div class="container-fluid bg-primary text-white">
    {{-- <div class="row mx-auto my-auto">
        <p class="text-start col-md-6">Book Store</p>
        <p class="text-end col-md-5">Register</p>
        <p class="text-end col-md-1">Login</p>
    </div> --}}
    <div class="row">
        <div class="col mt-2">
            <p class="">Book Store</p>
        </div>
        <div class="col-md-auto mt-2">
            <p class="">View Cart</p>
        </div>
        <div class="col-md-auto mt-2">
            <p class="">View Transaction History</p>
        </div>
        <div class="col-md-auto mt-2">
            <p>Hello, member</p>
        </div>
    </div>
</div>
<div class="container">

</div>
<div class="container mt-5">
    <div class="row ">

        <div class="col-12 p-3">
            @yield('content')
        </div>

        <div class = "p-3 col-2">

        </div>

    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</div>
<div class="container-fluid p-3 mt-5 bg-primary text-white">
    <div class="text-start">
        <small>Current date and time: {{ date("D") }}, {{ date("d M") }}, {{ date("Y") }} {{ date("H:i:a") }}</small>
    </div>
    <div class="text-center">
        <small>&copy {{ date("Y") }} Book Store</small>
    </div>
</div>
</body>
</html>
