@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <strong>Welcome to Keypedia</strong>
            <p>Best keyboard and Keycaps Shop</p>

            <div class="row list-product pt-3">
                @foreach ($carts as $cart)
                <div class="card mr-5 mb-3" style="width: 10rem;">
                    <img class="card-img-top" src="{{asset('/storage/'.$cart->image)}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$cart->products->name}}</h5>
                    </div>
                  </div>
                @endforeach 
            </div>
           
    </div>
</div>
@endsection
