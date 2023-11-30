<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Product Table</title>
  </head>
  <body>
    <h1>Product</h1>
    <a href="{{url('http://127.0.0.1:8000/product/create')}}"class="btn btn-primary my-3">Add Data</a>
    <div class="container">
    <table class="table table-bordered">
  
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
 
  @foreach($products as $product)
  <tr>
    <td>{{$product->id}}</td>
    <td>{{$product->name}}</td>
    <td>{{$product->quantity}}</td>
    <td>{{$product->price}}</td>
    <td>
      <a href="{{route('product.edit',['product'=> $product])}}">Edit</a>
    </td>
    <td>
    <form method="post" action="{{route('product.destroy',['product' => $product])}}">
        @csrf
        @method('delete')
        <input type = "submit" value= "Delete"/>
    </form>
    </td>    
  </tr>
  @endforeach 
 </table>
</div>
        
    
    

    
  </body>
</html>