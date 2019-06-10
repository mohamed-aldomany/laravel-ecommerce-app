@extends('front.layout.master')

@section('content')

@forelse($cat as $cats)
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
       <div class="card-body">
        <p class="card-text" style="color: cadetblue;font-size: larger;">
        <small>Category Name: {{$cats->cat_name}}</small><br>
        </p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button class="btn btn-sm btn-outline-secondary"><a href="/front/cat/{{$cats->id}}">View</a> </button>
          </div>
        <small class="text-muted">{{$cats->created_at->diffForHumans()}}</small>
        </div>
      </div>
    </div>
  </div>
  @empty
  <h1 class="text-center"> PRODUCTS FOUND </h1>
@endforelse

  @endsection



