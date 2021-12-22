@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <strong>Welcome to Keypedia</strong>
            <p>Best keyboard and Keycaps Shop</p>

            <div class="row list-product pt-3 justify-content-evenly flex-wrap">
                <p>{{$cart->products->name}}</p>
                
            </div>
    </div>
</div>
@endsection


