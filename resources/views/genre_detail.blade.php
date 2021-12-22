@extends('layout')
@section('content')
    <div class="container border bg-white">
        <div class="row mt-4">
            <h3>{{ $genre->name }}'s Genre Detail</h3>
        </div>
        <form action="/update-genre/{{ $genre->id }}" enctype="multipart/form-data" method="POST">
        {{ method_field('put') }}
        {{ csrf_field() }}
        <div class="row mt-3">
            <div class="col-md-4">
                <p>Name</p>
            </div>
            <div class="col-md-6">
                <input type="text" placeholder="{{ $genre->name }}" class="form-control" name="name">
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="container col-md-1">
                <button type="submit" class="btn btn-primary">Insert</button>
            </div> 
        </div>
        </form>
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
        @foreach ($book as $b)
        <div class="row">
            <hr>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p>{{ $b->title }}</p>
            </div>
            <div class="col md-3">
                <a href="/book-detail/{{ $b->id }}">
                    <button class="btn btn-sm btn-secondary">View Book Details</button>
                </a>   
            </div>
        </div>
        @endforeach
        
    </div>
@endsection