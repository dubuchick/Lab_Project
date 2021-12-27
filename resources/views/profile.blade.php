@extends('layout')
@section('content')
    <div class="container border bg-white">
        <div class="row mt-4">
            <p style="display:none">{{ $user = Auth::user(); }}</p>
            @if ($user->roleid == 1)
            <h3> Admin's User Detail</h3>
            @else
            <h3> Member's User Detail</h3>
            @endif
            
        </div>
        <form action="" enctype="multipart/form-data" method="POST">
        {{ method_field('put') }}
        {{ csrf_field() }}
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Name</p>
            </div>
            <div class="col-md-6">
                <input type="text" placeholder="{{ $user->fullname}}" class="form-control" name="name">
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
        <div class="row mt-3 mb-3">
            <div class="col-md-8"></div>
            <div class="col-md-auto">
                <button type="submit" class="btn btn-primary">Update</button>
            </div> 
            <div class="col-md-auto">
                <button type="submit" class="btn btn-primary">Change Password</button>
            </div> 
        </div>
        </form>
        
    </div>
@endsection