<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pharmacy Management</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <style>
        body{
            background-color: #222B43;
        }
        .nav-link{
            color: black;
            font-size: large;
        } 
        .row{
            margin: 10px 15px;

        } 
        .header{
            margin-bottom: 20px;
        } 
        label{
            margin-left: 10px;
        }     
        
        </style>
</head>

<body class="antialiased">
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid justify-content-center">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('Add') }}">Add Products</a>
                </li>
            </ul>
        </div>
    </nav>

    <section >
        <div class="container py-5">
            <div class="row justify-content-center mb-3">
                <div class="col-md-12 col-xl-10">
                    <div class="card shadow-0 border rounded-3">
                        <div class="card-body">
                            <div class="row">
                                <h2 class="header">Edit Product </h2>

                                @foreach ($Products as $Product)
                                <form  method="post" action="{{ route('updateProduct', $Product->id ) }}" accept-charset="UTF-8">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label class="form-label"><h5>Product Name :</h5></label>
                                        <input type="text" class="form-control" name="name" value="{{ $Product->name }}">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label  class="form-label"><h5>Product description :</h5></label>
                                        <input type="text" class="form-control" name="desc" value="{{ $Product->desc }}">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label"><h5>Product Price :</h5></label>
                                        <input type="text" class="form-control" name="price" value="{{ $Product->price }}">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label"><h5>Product Quantity :</h5></label>
                                        <input type="text" class="form-control" name="Quantity" value="{{ $Product->Quantity }}">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>