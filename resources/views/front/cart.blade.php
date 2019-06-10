@extends('front.layout.master')

@section('content')

@forelse($cart as $carts)
  <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
         {{$carts->user_products->name}}<hr>
         {{$carts->user_products->prod_name}}<hr>
        <div class="btn-group">
            <button class="btn btn-sm btn-outline-secondary"><a href="#">View</a> </button>
        </div>
        <small class="text-muted">{{$carts->created_at->diffForHumans()}}</small>
        </div>
      </div>
  </div>
  @empty
  <h1 class="text-center"> PRODUCTS FOUND </h1>
@endforelse
@endsection



