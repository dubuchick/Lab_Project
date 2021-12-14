@extends('layout')
@section('content')
<div class="container">
    <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-11">
                <input type="text" class="form-control">
        </div>
        <div class="col-md-auto">
            <button class="btn btn-primary">Search</button>
        </div>
        <div class="row mt-4">
            {{-- <div class="col-1">

            </div> --}}
            <div class="col-6">
                <button class="btn btn-primary">Clear Filter</button>
            </div>
        </div>
        <div class="row mt-3"></div>
    </div>
</div>
<div class="container">
    <div class="row height m-1 d-flex justify-content-center align-items-center">
        @foreach ($books as $b)
        <div class="col col-sm-2 " >
            <div class="card mb-2" >
                <div class="card-body">
                    <div>
                        <img class="card-img-top img-fluid" src="{{\Illuminate\Support\Facades\Storage::url($b->cover)}}" alt="" style="width: 13rem; height: 15rem;">
                        <div class="m-2">
                            <h6 class="card-title text-center">{{ $b->title }}</h4>
                        </div>
                        <div class="">
                            <p>Author: {{ $b->author }}</p>
                        </div>
                        <div class="">
                            <p>Price: {{ $b->price }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="" class="btn btn-outline-info">View Details</a>
                    </div>
                </div>

            </div>
        </div>
        @endforeach  
    </div>
    <div class="m-5 d-flex justify-content-center">
        Page
    </div>
</div>
@endsection