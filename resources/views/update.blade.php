@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <strong>Welcome to Keypedia</strong>
            <p>Best keyboard and Keycaps Shop</p>

            <form class="mb-4" action="/update-product/{{$product->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group row">
                    <label  class="col-md-4 col-form-label text-md-right">Category</label>
      
                    <div class="col-md-6">
                        <select name="category" class="form-control"  >

                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
      
                <div class="form-group row">
                  <label  class="col-md-4 col-form-label text-md-right">Keyboard Name</label>
      
                  <div class="col-md-6">
                      <input  class="form-control" name="product_name" value="{{$product->name}}">
                  </div>
              </div>
      
              <div class="form-group row">
                  <label  class="col-md-4 col-form-label text-md-right">Keyboard Price</label>
      
                  <div class="col-md-6">
                      <input  class="form-control" name="price" value="{{$product->price}}" >
                  </div>
              </div>
      
              <div class="form-group row">
                  <label  class="col-md-4 col-form-label text-md-right">Description</label>
      
                  <div class="col-md-6">
                      <input  class="form-control" name="description" value="{{$product->description}}">
                  </div>
              </div>
      
              <div class="form-group row">
                  <label  class="col-md-4 col-form-label text-md-right">Upload File</label>
      
                  <div class="col-md-6">
                      <input  class="form-control" name="image" type="file" >
                  </div>
              </div>
              <button type="submit" class="btn btn-danger">Submit</button>

            </form>

            
          
        
           
    </div>
</div>
@endsection