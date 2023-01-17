@extends('layouts.main')

@section('page-title')
    Film
@endsection

@section('page-content')
    <section class="container">
        <h1 class="text-center">Film selezionato</h1>
        <a href="{{ route('home') }}">Torna alla lista di tutti i film</a>
        <div class="row my-3">
            <div class="col-auto">
                <div class="card">
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
        </div>
    </section>
@endsection