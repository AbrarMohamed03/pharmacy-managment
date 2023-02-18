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
        </style>
</head>

<body class="antialiased">
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid justify-content-center">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('Home') }}">Available Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Add') }}">Add Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('Unavailable') }}">Unavailable Products</a>
                </li>
            </ul>
        </div>
    </nav>

    <section >
        <div class="container py-5">
            @foreach ($Products as $Product)
            <div class="row justify-content-center mb-1">
                <div class="col-md-10 col-lg-7 col-xl-18">
                col-md-8 col-lg-6 col-xl-6
                    <div class="card shadow-0 border rounded-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                    <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                        <img src="{{ $Product->image_path }}" class="w-100" />
                                        <a href="#!">
                                            <div class="hover-overlay">
                                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <h3>{{ $Product->name }}</h3>  
                                    <br/>              
                                    <p class=" mb-4 mb-md-0">
                                    {{ $Product->desc }}
                                    </p>   
                                </div>
                                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                    <div class="d-flex flex-row align-items-center mb-1">
                                        <h4 class="mb-1 me-1"><b>{{ $Product->price }}</b> MAD</h4>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-1">
                                        <h5 class="mb-1 me-1">Quantity On Stock : <b>{{ $Product->Quantity }}</b> </h5>
                                    </div>
                                    <form method="post" action="{{ route('Edit', $Product->id ) }}" accept-charset="UTF-8">
                                        {{ csrf_field() }}
                                        <div class="d-flex flex-column mt-4">

                                        <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
    </section>
</body>

</html>