@extends('admin.layout.master')

@section('title','Add Product')

@section('content')


<!-- success added message -->
<div id="msgcat" class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Updated Category Successfully</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
    <div class="row">
        <div class="col-md-7">
        <h2 class="text-center">Edit Form For Category ID: {{$cat->id}}</h2>
        <input type="hidden" value="{{csrf_token()}}" id="token"/>
        <input type="hidden" value="{{$cat->id}}" id="cid"/>
        <div class="form-group">
            <label>Category Name</label>
        <input type="text" name="cname" id="cname" class="form-control" value="{{$cat->cat_name}}">
        </div>
        <button type="submit" id="editCat" class="btn btn-primary">Submit</button>
    </div>
    </div>


@endsection