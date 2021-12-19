@extends('layout')
@section('content')
<div class= "p-3 border">
    <form>
        <p class="fs-4">{{ $book->title }}'s Book Detail</p>
        <div class="row mb-3">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" aria-label="default input example" value="{{ $book->title }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Author</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" aria-label="default input example" value="{{ $book->author}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Synopsis</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10">{{ $book->synopsis}}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Genre(s)</label>
            <div class="col-sm-9">
                <div class="row">
                    @foreach($genre as $genres)
                        <div class="col-md-4">
                            @if ($genres->id ==  $book->genreid)
                                <input class="form-check-input" type="checkbox" value="" id="{{ $genres->name}}" checked>
                            @else
                                <input class="form-check-input" type="checkbox" value="" id="{{ $genres->name}}">
                            @endif
                            <label class="form-check-label me-2" for="{{ $genres->name }}">{{ $genres->name}}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" aria-label="default input example" value="{{ $book->price}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Cover</label>
            <div class="col-sm-10">
                <img src="https://upload.wikimedia.org/wikipedia/en/a/a9/Harry_Potter_and_the_Deathly_Hallows.jpg" alt="">
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<div class= "p-3 border">
    <p class="fs-4">Harry Potter series's Book Detail</p>
    <div class="row mb-3">
        <img src="https://upload.wikimedia.org/wikipedia/en/a/a9/Harry_Potter_and_the_Deathly_Hallows.jpg" alt="">
    </div>
    <div class="row mb-3">
        <p class="col-sm-2">Name</p>
        <p class="col-sm-10">Harry Potter series</p>
    </div>
</div>
@endsection
