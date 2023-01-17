<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('homepage', compact('movies'));
    }

    // public function movieIndex($index)
    // {
    //     $movies = Movie::all();

    //     $movie = $movies[$index];

    //     return view('show', compact('movie'));
    // }
    // Con il metodo find utlizzato sotto (nella funzione show) NON SI UTILIZZA più l'indice per accedere al singolo elemento

    public function show($id)
    {
        $movie = Movie::find($id);

        return view('show', compact('movie'));
    }
}
