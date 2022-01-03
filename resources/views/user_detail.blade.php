@extends('layout')
@section('content')
    <div class="container border bg-white">
        <div class="row mt-4">
            <h3>{{ $user->fullname }}'s User Detail</h3>
        </div>
        <form action="/updateUserDetail/{{ $user->id }}" enctype="multipart/form-data" method="POST">
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
                <input type="text" placeholder="{{ $user->email}}" class="form-control" name="email">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Role</p>
            </div>
            <div class="col-md-6">
                <input type="text" placeholder="{{ $role[$user->roleid -1]->rolename}}" class="form-control" name="rolename">
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="container col-md-1">
                <button type="submit" class="btn btn-primary">Update</button>
            </div> 
        </div>
        </form>
        
    </div>
@endsection