@extends('admin.layout.master')

@section('title','Add Product')

@section('content')


<!-- success added message -->
<div id="msgupdate" class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Updated Successfully</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
    <div class="row">
        <div class="col-md-7">
        <h2 class="text-center">Edit Form For Product ID: {{$product->id}}</h2>
        <input type="hidden" value="{{csrf_token()}}" id="token"/>
        <input type="hidden" value="{{$product->id}}" id="pid"/>
        <div class="form-group">
            <label>Product Name</label>
        <input type="text" name="pname" id="pname" class="form-control" value="{{$product->prod_name}}">
        </div>
        <div class="form-group">
            <label>Product Code</label>
            <input type="text" name="pcode" id="pcode" class="form-control" value="{{$product->prod_code}}">
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input type="number" name="price" id="price" class="form-control" value="{{$product->prod_price}}">
        </div>
        <button type="submit" id="editProd" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-md-5">
        <div class="card">
            <img class="card-img-top" src="../../images/{{$product->prod_img}}" style="max-width: 488px;
            max-height: 292px;">
            <div class="card-body">
                <form action="/admin/uploadImage/{{$product->id}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{$product->id}}"/>
                        <label for="exampleFormControlFile1">Upload Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="cover_image"><br>
                        <button type="submit" class="btn btn-primary" name="submit">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


@endsection