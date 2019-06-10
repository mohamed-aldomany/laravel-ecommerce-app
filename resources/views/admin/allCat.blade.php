
<table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cat as $cats )
               <tr>
                    <th scope="row">{{$cats->id}}</th>
                    <td>{{$cats->cat_name}}</td>
                    <td><a href="/admin/editCat/{{$cats->id}}" class="btn btn-primary">Edit</a></td>    
            </tr>
            @empty
            <tr>
               <td><h1 class="text-center"> NO ROWS FOUND.... :(</h1></td>
            </tr>  
            @endforelse    
        </tbody>
    </table>
          