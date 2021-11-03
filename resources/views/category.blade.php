@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <strong>{{$categories->name}}</strong>
            <div class="md-form mt-3">
                <input class="form-control" name="search" type="text" placeholder="Search" aria-label="Search">
              </div>

            <div class="item d-flex pt-3">
                @foreach ($products as $product)
                <div class="card mr-5" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('/storage/'.$product->image)}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$product->name}}</h5>
                      <div class="buttons d-flex ml-4">
                        <a href="/update/{{$product->id}}" class="btn btn-primary">Update Product</a>
                        <form action="/delete/{{$product->id}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-primary ml-2">Delete</button>
                        </form>
                      </div>
                    </div>
                  </div>
                @endforeach 
            </div>
           
    </div>
</div>
@endsection