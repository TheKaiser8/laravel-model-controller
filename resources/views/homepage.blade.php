@extends('layouts.main')

@section('page-title')
    Homepage
@endsection

@section('page-content')
    <h1 class="text-center my-3">Movies</h1>
    <div class="container">
        <div class="row d-flex gy-5">
            @foreach ($movies as $movie)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a href="{{ route('show', $loop->index) }}" class="text-decoration-none">
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
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection