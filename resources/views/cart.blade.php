@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <strong>Welcome to Keypedia</strong>
            <p>Best keyboard and Keycaps Shop</p>

            <div class="row list-product pt-3 justify-content-evenly flex-wrap">
                @foreach ($carts as $cart)
                <div class="card mr-5 mb-3" style="width: 10rem;">
                    <img class="card-img-top" src="{{asset('/storage/'.$cart->image)}}" alt="Card image cap">
                    <div class="card-body">
                      <a href="/cart-detail/{{$cart->products->id}}"><h5 class="card-title ">{{$cart->products->name}}</h5></a>
                    </div>
                  </div>
                @endforeach 
            </div>
            <form action="/checkout" method="post">
              @if ($carts->isEmpty())
                  <p class="bg-warning">Your Cart is empty</p>
              @else
              <form action="/checkout" method="post">
                @csrf
                <button class="btn btn-primary" type="submit">Checkout</button>
              </form>
              @endif
          
    </div>
</div>
@endsection


