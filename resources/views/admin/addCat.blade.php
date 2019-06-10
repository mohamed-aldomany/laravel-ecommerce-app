@extends('admin.layout.master')

@section('title','Add Category')

@section('content')


<!-- success added message -->
<div id="msgcat" class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Added Category Successfully</strong> Insert New Rows
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="row">
    <div class="col-md-4">
        <input type="hidden" value="{{csrf_token()}}" id="token"/>
        <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="cname" id="cname" class="form-control" placeholder="Enter Product Name">
        </div>
        <button type="submit" id="addCat" class="btn btn-primary">Submit</button>
        
    </div>
    <div class="col-md-8" id="cats">
        
    </div>
</div>



@endsection