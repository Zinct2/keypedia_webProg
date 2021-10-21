@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <strong>Welcome to Keypedia</strong>
            <p>Best keyboard and Keycaps Shop</p>

            <div class="item d-flex pt-3">
                <div class="card mr-5" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset($category->image)}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$category->name}}</h5>
                      <a href="category/{{$category->id}}" class="btn btn-primary">Delete</a>
                    </div>
                  </div>
            </div>
           
    </div>
</div>
@endsection