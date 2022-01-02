@extends('layout')
@section('content')
    <div class="container">
        <div class="row mt-4">
            {{-- <p style="display:none">{{ $user = Auth::user(); }}</p> --}}
            <div class="col-md-2">
                <p>Book Name</p>
            </div>
            <div class="col-md-2">
                <p>Book Author</p>
            </div>
            <div class="col-md-1">
                <p>Price</p>
            </div>
            <div class="col-md-2">
                <p>Quantity</p>
            </div>
            <div class="col-md-2">
                <p>Sub Total</p>
            </div>
            <div class="col-md-2">
                Action
            </div>
        </div>
        {{-- @foreach ($transaction as $t) --}}
            {{-- @if ($user->id == $t->userid) --}}
            @if (session('cart'))
                @foreach (session('cart') as $id=> $details)
                <div class="row">
                    <hr>
                    <div class="col-md-2">
                        <p>{{ $details['title'] }}</p>
                    </div>
                    <div class="col-md-2">
                        <p>{{ $details['author'] }}</p>
                    </div>
                    <div class="col-md-1">
                        <p>{{ $details['price'] }}</p>
                    </div>
                    <div class="col-md-2">
                        <p>{{ $details['quantity'] }}</p>
                    </div>
                    <div class="col-md-2">
                        <p></p>
                    </div>
                    <div class="col-sm-3">
                        <a href="#">
                            <button class="btn btn-sm btn-secondary">View Book Detail</button>
                        </a>
                        <a href="#">
                            <button class="btn btn-sm btn-secondary">Edit</button>
                        </a>
                        <a href="#">
                            <button class="btn btn-sm btn-secondary">Remove</button>
                        </a>
                    </div>
                </div>
                    @endforeach
            @endif
                
            {{-- @endif --}}
        {{-- @endforeach --}}
    </div> 
    </div>
@endsection