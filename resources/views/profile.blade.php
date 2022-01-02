@extends('layout')
@section('content')
    <div class="container border bg-white">
        <div class="row mt-4">
            <p style="display:none">{{ $user = Auth::user(); }}</p>
            <h3>Profile</h3>
            
        </div>
        <form action="/update-profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        {{ method_field('put') }}
        {{ csrf_field() }}
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Name</p>
            </div>
            <div class="col-md-6">
                <input type="text" placeholder="{{ $user->fullname}}" class="form-control" name="fullname">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Email</p>
            </div>
            <div class="col-md-6">
                <p>{{ $user->email }}</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8"></div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div> 
        </form>
        </div>
        <div class="col-md-auto">
            <a href="{{ url('/change-password') }}">
                <button class="btn btn-primary">Change Password</button>
            </a>
        </div> 
    </div>
@endsection