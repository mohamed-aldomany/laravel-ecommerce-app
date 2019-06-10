@extends('front.layout.master')

@section('content')

@forelse($product as $products)
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
    <img class="card-img-top" src="../../images/{{$products->prod_img}}" alt="Card image cap" style="max-width: 500px;
    max-height: 400px;">
      <div class="card-body">
        <p class="card-text" style="color: cadetblue;font-size: larger;">
        <small>Product Name: {{$products->prod_name}}</small><br>
        <small>Product Code: {{$products->prod_code}}</small><br>
        <small>Product Price: {{$products->prod_price}}$</small><br>
        </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
          </div>
        <small class="text-muted">{{$products->created_at->diffForHumans()}}</small>
        </div>
      </div>
    </div>
  </div>
  @empty
  <h1 class="text-center"> PRODUCTS NOT FOUND </h1>
@endforelse

  @endsection



