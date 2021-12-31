<!DOCTYPE html>
<html lang="en">
<head>
    <title>Happy Book Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        @auth()
            @if(auth()->user()->roleid == '1')
                <div class="col-md-auto mt-2">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color: white">Manage</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/insert-genre') }}">Manage Genre</a></li>
                        <li><a class="dropdown-item" href="{{ url('/manage-user') }}">Manage User</a></li>
                        <li><a class="dropdown-item" href="{{ url('/manage-book') }}">Manage Books</a></li>
                        </ul>
                </div>
                <div class="col-md-auto mt-2">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color: white">Hello, admin</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/profile-page') }}">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
                        </ul>
                </div>
            @endif
            @if(auth()->user()->roleid == '2')
                <div class="col-md-auto mt-2">
                    <p class="">View Cart</p>
                </div>
                <div class="col-md-auto mt-2">
                    <a href="/transaction-history" style="color: white">
                    <p class="">View Transaction History</p>
                    </a>
                </div>
                <div class="col-md-auto mt-2">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color: white">Hello, member</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
                        </ul>
                </div>
            @endif
        
        @else
        <div class="col-md-auto mt-2">
            <a href="/register" style="color: white">
                <p class="">Register</p>
            </a>
        </div>
        <div class="col col-sm-1 mt-2">
            <a href="/login" style="color:white">
            <p class="">Login</p>
            </a>
        </div>
        @endauth()
        {{-- <div class="col-md-auto mt-2">
            <p>Hello, member</p>
        </div> --}}
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
