@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h2>Your Transaction at {{$transactions->created_at}}</h2>
            <div class="item d-flex pt-3 justify-content-evenly flex-wrap">
                <div class="card mr-5" style="width: 60rem;">
                    @foreach ($details as $detail)  
                    <div class="card-body">
                      <img src="{{$detail->product->image}}" alt="">
                      <h5 class="card-title">{{$detail->product->name}}</h5>
                    </div>
                    @endforeach
                  </div>
            </div>
           
    </div>
</div>
@endsection

