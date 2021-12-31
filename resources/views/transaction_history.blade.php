@extends('layout')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <p style="display:none">{{ $user = Auth::user(); }}</p>
            <div class="col-md-3">
                <p>TransactionID</p>
            </div>
            <div class="col-md-3">
                <p>Date</p>
            </div>
            <div class="col-md-2">
                
            </div>
            <div class="col-md-4">
                Action
            </div>
        </div>
        @foreach ($transaction as $t)
            @if ($user->id == $t->userid)
                <div class="row">
                <hr>
                <div class="col-md-3">
                    <p>{{ $user->id }}</p>
                </div>
                <div class="col-md-3">
                    <p>{{ $t->transactiondate }}</p>
                </div>
                <div class="col-md-2">
                    <p></p>
                </div>
                <div class="col-sm-auto">
                    <a href="#">
                        <button class="btn btn-sm btn-secondary">View Transaction Detail</button>
                    </a>
                </div>
            
        @else
        
        @endif
        @endforeach
    </div> 
    </div>
@endsection