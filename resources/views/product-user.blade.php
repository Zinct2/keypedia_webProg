@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <strong>{{$categories->name}}</strong>
            <div class="md-form mt-3">
                <input class="form-control" name="search" type="text" placeholder="Search" aria-label="Search">
              </div>

            <div class="item d-flex pt-3 justify-content-evenly flex-wrap">
                @foreach ($products as $product)
                <div class="card mr-5" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('/storage/'.$product->image)}}" alt="Card image cap">
                    <div class="card-body">
                      <a href="/detail/{{$product->id}}"><h5 class="card-title">{{$product->name}}</h5></a>
                      <div class="buttons d-flex ml-4">
                      </div>
                    </div>
                  </div>
                @endforeach 
            </div>
           
    </div>
</div>
@endsection