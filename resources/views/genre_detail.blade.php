@extends('layout')
@section('content')
    <div class="container border bg-white">
        <div class="row mt-4">
            <h3>Insert Genre Form</h3>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Name</p>
            </div>
            <div class="col-md-6">
                <input type="text" placeholder="Novel" class="form-control">
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="container col-md-1">
                <button class="btn btn-primary">Insert</button>
            </div> 
        </div>
        <div class="row">
            <h3>Book List</h3>
        </div>
    
        <div class="row mt-4">
            <div class="col-md-8">
                <p>Name</p>
            </div>
            <div class="col-md-3">
                Action
            </div>
        </div>
        <div class="row">
            <hr>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p>Namanya</p>
            </div>
            <div class="col md-3">
                <button class="btn btn-sm btn-secondary">View Book Details</button>
            </div>
        </div>
    </div>
@endsection