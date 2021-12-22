@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <strong>Welcome to Keypedia</strong>
            <p>Best keyboard and Keycaps Shop</p>

            <div class="card d-flex justify-content-center" style="width: 18rem;">
                <div class="card-body">
                    <p>Keyboard Name: {{$products->name}}</p>
                    <p>Keyboard Price: {{$products->price}}</p>
                    <p>Keyboard Description: {{$products->description}}</p>
                    <p>Keyboard Image:</p> <img src="{{asset('/storage/'.$products->image)}}" width="200px" height="100px">
                    <div class="buttons d-flex ml-4">
                        <form action="/cart/store" method="post">
                          @csrf
                          <input type="hidden" name="item_id" value="{{$products->id}}">
                          <input type="hidden" name="image" value="{{$products->image}}">
                          Quantity: <input type="number"  name="quantity" value="{{$products->quantity}}">
                          <input type="submit" class="btn btn-primary" value="Add To Cart">
                        </form>
                      </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection


