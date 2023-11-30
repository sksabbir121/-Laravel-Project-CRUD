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
    <h1>Create</h1>
 <div class="container">
    <a href="{{url('http://127.0.0.1:8000/product')}}"class="btn btn-primary my-3">Show Data</a>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="">Id</label>
            <input type="text"class="form-control" name="Id" Placeholder="Enter Product Id"
        </div> 
        <div class="form-group">
            <label for="">Name</label>
            <input type="text"class="form-control" name="name" Placeholder="Enter Product Name"
        </div> 
        <div class="form-group">
            <label for="">Quantity</label>
            <input type="text"class="form-control" name="quantity" Placeholder="Enter Product quantity"
        </div> 
        <div class="form-group">
            <label for="">Price</label>
            <input type="text"class="form-control" name="price" Placeholder="Enter Product Price"
        </div> 
        <input type="submit" class="btn btn-primary my-3" value="submit"> 
    </form>  
 </div>
        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>