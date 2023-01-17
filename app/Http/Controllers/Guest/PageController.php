<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // SELECT * FROM movies

        // QUERIES d'esempio:
        // $movies = Movie::where('nationality', 'american')->get(); // SELECT * FROM movies WHERE nationality = american

        // $movies = Movie::where('vote', '>=', 9)->get(); // SELECT * FROM movies WHERE vote >= 9

        // con 2 o più filtri (chaining dei metodi):
        // $movies = Movie::where('vote', '>=', 9)->where('nationality', 'american')->get(); // SELECT * FROM movies WHERE vote >= 9 AND WHERE nationality = american

        // OPPURE (andando a capo ad ogni metodo)
        // $movies = Movie::where('vote', '>=', 9)
        //                 ->where('nationality', 'american')
        //                 ->orderBy('title','desc') // ordina i titoli dalla Z alla A
        //                 ->limit(2) // numero limite di parametri che vogliamo ottenere (2)
        //                 ->get();
        // $movies = Movie::where('vote', '>=', 9)
        //                 ->where('nationality', 'american')
        //                 ->orderBy('title','desc')
        //                 ->first(); // NON restituisce la collection ma solamente il primo oggetto (può essere utile nella pagina del prodotto singolo, non nella funzione index)

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
        $movie = Movie::findOrFail($id); // se non trova l'elemento restituisce una pagina di cortesia (404 not found)

        return view('show', compact('movie'));
    }
}
