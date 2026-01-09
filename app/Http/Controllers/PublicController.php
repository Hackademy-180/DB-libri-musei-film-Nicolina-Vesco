<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Museo;
use App\Models\Movie;

class PublicController extends Controller
{
    public function home(){
        return view("welcome");
    }

    public function libri(){
        $libri= Libro::all();
        return view("libri.libri", compact("libri"));
    }
     public function musei(){
        $musei=Museo::all();
        return view("musei.musei", compact("musei"));
    }

    public function create_libri(){
        return view("libri.create-libri");
    }

    public function create_musei(){
        return view("musei.create-musei");
    }

    public function add_libro(Request $request){
        Libro::create([
            "title" => $request->title,
            "author" => $request->author,
            "year" => $request->year,
            "info" => $request->info,

        ]);
        return redirect(route("home"))->with("status", "Libro caricato correttamente!");
    }
     public function add_museo(Request $request){
        Museo::create([
            "name" => $request->name,
            "country" => $request->country,
            "year" => $request->year,
            "info" => $request->info,

        ]);
        return redirect(route("home"))->with("status", "Museo aggiornato correttamente!");
    }

    public function movies(){
        $movies=Movie::all();
        return view("movies.movies", compact("movies"));
    }
    public function create_movies(){
        return view("movies.create-movies");
    }
    public function add_movie(Request $request){
        Movie::create([
            "title" => $request->title,
            "director" => $request->director,
            "year" => $request->year,
            "info" => $request->info,
        ]);
        return redirect(route("home"))->with("status", "Film caricato correttamente!");
    }
}
