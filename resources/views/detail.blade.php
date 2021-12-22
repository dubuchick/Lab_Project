@extends('layout')
@section('content')

@if(Auth::check())
    @if(auth()->user()->roleid == '1')
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
                    @foreach($genres as $g)
                        <div class="col-md-4">
                            @if ($g->id ==  $book->genreid)
                                <input class="form-check-input" type="checkbox" value="" id="checkbox{{ $g->id}}" checked>
                            @else
                                <input class="form-check-input" type="checkbox" value="" id="checkbox{{ $g->id}}">
                            @endif
                            <label class="form-check-label me-2" for="checkbox{{ $g->id }}">{{ $g->name}}</label>
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
                <img src="{{\Illuminate\Support\Facades\Storage::url($book->cover)}}" alt=""style="width: 13rem; height: 18rem;">
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
    @elseif(auth()->user()->roleid == '2')
<div class= "p-3 border">
    <p class="fs-4">{{ $book->title }}'s Book Detail</p>
    <div class="row">
        <div class="col-sm-2 ms-4">
            <img src="{{\Illuminate\Support\Facades\Storage::url($book->cover)}}" alt=""style="width: 13rem; height: 18rem;">
        </div>
        <div class="col-sm-9 ms-5">
            <div class="row">
                <p class="col-sm-3">Name</p>
                <p class="col-sm-6 ms-4">{{ $book->title }}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Author</p>
                <p class="col-sm-6 ms-4">{{ $book->author}}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Synopsis</p>
                <p class="col-sm-6 ms-4">{{ $book->synopsis}}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Genre(s)</p>
                <p class="col-sm-6 ms-4">{{ $genres[ $book->genreid - 1]->name}}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Price</p>
                <p class="col-sm-6 ms-4">IDR {{ $book->price}}</p>
            </div>
            <div class="row">
                <form action="">
                    <div class="col-sm-3 input-group">
                        <span class="input-group-text" id="inputGroup-sizing-default">Quantity</span>
                        <input type="text" class="form-control">
                        <button type="submit" class="btn btn-primary col-sm-2">Add to Cart</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
@else
<div class= "p-3 border">
    <p class="fs-4">{{ $book->title }}'s Book Detail</p>
    <div class="row">
        <div class="col-sm-2 ms-4">
            <img src="{{\Illuminate\Support\Facades\Storage::url($book->cover)}}" alt=""style="width: 13rem; height: 18rem;">
        </div>
        <div class="col-sm-9 ms-5">
            <div class="row">
                <p class="col-sm-3">Name</p>
                <p class="col-sm-6 ms-4">{{ $book->title }}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Author</p>
                <p class="col-sm-6 ms-4">{{ $book->author}}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Synopsis</p>
                <p class="col-sm-6 ms-4">{{ $book->synopsis}}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Genre(s)</p>
                <p class="col-sm-6 ms-4">{{ $genres[ $book->genreid - 1]->name}}</p>
            </div>
            <div class="row">
                <p class="col-sm-3">Price</p>
                <p class="col-sm-6 ms-4">IDR {{ $book->price}}</p>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
