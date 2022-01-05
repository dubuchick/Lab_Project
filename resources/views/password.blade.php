@extends('layout')
@section('content')
    <div class="container border bg-white">
        <div class="row mt-4">
            {{-- <p style="display:none">{{ $user = Auth::user(); }}</p> --}}
            <h3>Profile</h3>
            
        </div>
        <form action="/change-password" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
        @endforeach 
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Old Password</p>
            </div>
            <div class="col-md-6">
                <input type="password" placeholder="" class="form-control" name="current_pass" value="{{ old('current_pass') }}">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <p>New Password</p>
            </div>
            <div class="col-md-6">
                <input type="password" placeholder="" class="form-control" name="new_pass">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <p>New Confirmation Password</p>
            </div>
            <div class="col-md-6">
                <input type="password" placeholder="" class="form-control" name="new_confirm_pass">
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-md-8"></div>
            <div class="col-md-auto">
                <button type="submit" class="btn btn-primary">Update</button>
            </div> 
        </div>
        </form>
        
    </div>
@endsection