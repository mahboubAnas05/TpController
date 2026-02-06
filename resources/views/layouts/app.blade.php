<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="">
    <nav class="d-flex justify-content-between align-items bg-dark p-3 text-light w-100">
        <div>
            <h2 class="text-light">
                TP Laravel
            </h2>    
        </div>
    </nav>
    <div class="row bg-light">
        <div class="col-3 vh-100 bg-white p-4">
            <h6 class="text-secondary text-uppercase">
                navigation
            </h6>
            <div class="border">
                <a href="{{ route('home') }}" class="text-secondary d-block p-3 border-bottom text-decoration-none">Accueil</a>
                <a href="{{route('products.index')}}" class="text-secondary d-block p-3 border-bottom text-decoration-none">Produits</a>
                <a href="{{route('about')}}" class="text-secondary d-block p-3 border-bottom text-decoration-none">A propos</a>
                <a href="{{route('contact')}}" class="text-secondary d-block p-3 text-decoration-none">Contact</a>
            </div>
        </div>
        <div class="col-9 col-md-8">
            @yield('content')
        </div>
    </div>
    <footer class="p-3 bg-dark">
        <p class="text-light text-center">© 2026 - TP Laravel</p>
    </footer>
</body>
</html>