<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Model Controller</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <h1 class="text-center my-3">Movies</h1>
        <div class="container">
            <div class="row d-flex gy-5">
                @foreach ($movies as $movie)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bold">{{ $movie->title }}</h5>
                                <h6 class="subtitle text-center">{{ $movie->original_title }}</h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Lingua orginale: {{ $movie->nationality }}</li>
                                    <li class="list-group-item">Data uscita: {{ $movie->date }}</li>
                                    <li class="list-group-item">Voto: {{ $movie->vote }}</li>
                                  </ul>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
