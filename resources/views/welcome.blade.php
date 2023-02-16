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
                    <a class="nav-link active" href="{{ route('Home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Add') }}">Add Products</a>
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
                                        <img src="data:image/png;base64,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" class="w-100" />
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