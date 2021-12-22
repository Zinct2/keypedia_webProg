@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <strong>Welcome to Keypedia</strong>
            <p>Best keyboard and Keycaps Shop</p>

            <div class="item pt-3 justify-content-evenly flex-wrap">
                @foreach ($transactions as $transaction)
                <div class="card">
                    <a href="/transaction/detail/{{$transaction->id}}">Transaction at {{$transaction->created_at}}</a>
                </div>
                @endforeach 
            </div>
           
    </div>
</div>
@endsection
