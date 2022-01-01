@extends('layout')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <p style="display:none">{{ $user = Auth::user(); }}</p>
            <div class="col-md-2">
                <p>Book Name</p>
            </div>
            <div class="col-md-2">
                <p>Book Author</p>
            </div>
            <div class="col-md-2">
                <p>Price</p>
            </div>
            <div class="col-md-2">
                <p>Quantity</p>
            </div>
            <div class="col-md-1">
                <p>Sub Total</p>
            </div>
            <div class="col-md-3">
                Action
            </div>
        </div>
        @foreach ($transaction as $t)
            @if ($user->id == $t->userid)
                @foreach ( $transDetail as $td)
                    @if ($t->id == $td->transactionid)
                        <div class="row">
                        <hr>
                        <div class="col-md-2">
                            <p>{{ $book[$td->bookid -1]->title }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $book[$td->bookid -1]->author }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $book[$td->bookid -1]->price }}</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $td->quantity }}</p>
                        </div>
                        <div class="col-md-1">
                            {{ $td->quantity * $book[$td->bookid -1]->price }}
                        </div>
                        <div class="col-sm-auto">
                            <a href="/book-detail/{{ $td->bookid }}">
                                <button class="btn btn-sm btn-secondary">View Book Detail</button>
                            </a>
                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach
        <hr>
        <p>Grand Total: IDR</p>
    </div> 
    </div>
@endsection