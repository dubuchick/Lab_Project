@extends('layout')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <p style="display:none">{{ $user = Auth::user(); }}</p>
            <div class="col-md-2">
                <h6>Book Name</h6>
            </div>
            <div class="col-md-2">
                <h6>Book Author</h6>
            </div>
            <div class="col-md-1">
                <h6>Price</h6>
            </div>
            <div class="col-md-2">
                <h6>Quantity</h6>
            </div>
            <div class="col-md-2">
                <h6>Sub Total</h6>
            </div>
            <div class="col-md-2">
                <h6>Action</h6>
            </div>
        </div>
        <?php $total = 0 ?>
            @if(session('cart'))
                @foreach (session('cart') as $id=> $details)
                <?php $total += $details['price'] * $details['quantity']?>
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
                        @if ($details['quantity'] < 2)
                            <p>{{ $details['quantity'] }} book</p>  
                        @else
                            <p>{{ $details['quantity'] }} books</p> 
                        @endif
                    </div>
                    <div class="col-md-2">
                        <p>{{ $details['price'] * $details['quantity']}} </p>
                    </div>
                    <div class="col-sm-3">
                        <a href="/book-detail/{{ $id }}">
                            <button class="btn btn-sm btn-secondary">View Book Detail</button>
                        </a>
                        <a href="/book-detail/{{ $id }}">
                            <button class="btn btn-sm btn-primary">Edit</button>
                        </a>
                        <form action="/delete-cart" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button class="btn btn-sm btn-danger" type="submit">Remove</button>
                        </form>
                    </div>
                </div>
                @endforeach
                <hr>
                <h5>Grand Total: {{ $total }}</h5>
                <div class="row">
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Checkout</button>
                    </div> 
                </div>
            @else
            <div class="row">
                <hr>
                <h5>No data</h5>
            </div>
            @endif   
    </div> 
    </div>
@endsection