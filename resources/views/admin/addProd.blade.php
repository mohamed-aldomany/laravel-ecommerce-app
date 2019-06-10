@extends('admin.layout.master')

@section('title','Add Product')

@section('content')


<!-- success added message -->
<div id="msg" class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Added Successfully</strong> Insert New Rows
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="row">
    <div class="col-md-4">
        <input type="hidden" value="{{csrf_token()}}" id="token"/>
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="pname" id="pname" class="form-control" placeholder="Enter Product Name">
        </div>
        <div class="form-group">
            <label>Product Code</label>
            <input type="text" name="pcode" id="pcode" class="form-control" placeholder="Enter Product Code">
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input type="number" name="price" id="price" class="form-control" placeholder="Enter Product Price">
        </div>
        <select class="custom-select" name="cat_id" id="cat_id">
                <option selected>Category Name</option>
                @foreach(App\Category::all() as $cat)
                    <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                @endforeach
        </select><br><br>
        <button type="submit" id="addProd" class="btn btn-primary">Submit</button>
        
    </div>
    <div class="col-md-8" id="products">
            
    </div>
    

</div>



@endsection