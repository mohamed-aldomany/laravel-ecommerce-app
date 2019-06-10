
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Code</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Category Name</th>
            <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($product as $products )
           <tr>
                <th scope="row">{{$products->id}}</th>
                <td>{{$products->prod_name}}</td>
                <td>{{$products->prod_code}}</td>
                <td>{{$products->prod_img}}</td>
                <td>{{$products->prod_price}}</td>
                <td>{{$products->categories->cat_name}}</td>
           <td><a href="/admin/editProduct/{{$products->id}}" class="btn btn-primary">Edit</a></td>    
        </tr>
        @empty
        <tr>
           <td><h1 class="text-center"> NO ROWS FOUND.... :(</h1></td>
        </tr>  
        @endforelse
            
    </tbody>
</table>
