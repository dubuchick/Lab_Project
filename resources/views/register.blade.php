@extends('layout')
@section('content')
<div class="container py-5">
    <form action="/register" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10 col-xl-5" >
            <div class="card shadow-2-strong shadow p-4 bg-white rounded" style="border-radius: 1rem;">
                <div class="card-body p-4 text-center ">
                    <h3 class=" d-flex justify-content-start mb-4">Register</h3>
                    <div class="form-outline mb-4 d-flex justify-content-start align-items-center">
                        <div style="background-color: whitesmoke" class="form-outline col-2 p-2" >
                            <ion-icon name="mail-outline" size="large"></ion-icon>
                        </div>
                        <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="email" name="email">
                        <div class="row">
                            <span style="color: red">@error('email')
                                {{ 'Email is required' }}
                            @enderror</span>
                        </div>
                    </div>
                    <div class="form-outline mb-4 d-flex justify-content-start align-items-center">
                        <div style="background-color: whitesmoke" class="form-outline col-2 p-2" >
                            <ion-icon name="person-outline" size="large"></ion-icon>
                        </div>
                        <input type="text" class="form-control form-control-lg @error('fullname') is-invalid @enderror" placeholder="fullname" name="fullname"/>
                        <div class="row">
                            <span style="color: red">@error('fullname')
                                {{ 'Name is required' }}
                            @enderror</span>
                        </div>
                    </div>
                    <div class="form-outline mb-4 d-flex justify-content-start align-items-center">
                        <div style="background-color: whitesmoke" class="form-outline col-2 p-2" >
                            <ion-icon name="lock-closed-outline"size="large"></ion-icon>
                        </div>
                        <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="password" name="password"/>
                        <div class="row">
                            <span style="color: red">@error('password')
                                {{ 'Password is required' }}
                            @enderror</span>
                        </div>
                    </div>
                    <div class="form-outline mb-4 d-flex justify-content-start align-items-center">
                        <div style="background-color: whitesmoke" class="form-outline col-2 p-2" >
                            <ion-icon name="lock-closed-outline"size="large"></ion-icon>
                        </div>
                        <input type="password" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" placeholder="confirmation password" name="password_confirmation"/>
                        <div class="row">
                            <span style="color: red">@error('password_confirmation')
                                {{ 'Password is required' }}
                            @enderror</span>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg btn-block align-items-center" type="submit">
                    <ion-icon name="people-outline"></ion-icon>
                    Register
                </button>
            </div>
        </div>
    </div>
</form>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection