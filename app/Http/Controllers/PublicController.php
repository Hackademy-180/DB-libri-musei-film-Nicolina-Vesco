<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

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
            "user_id"=> Auth::user()->id

        ]);
        return redirect(route("home"))->with("status", "Libro caricato correttamente!");
    }
     public function add_museo(Request $request){
        Museo::create([
            "name" => $request->name,
            "country" => $request->country,
            "year" => $request->year,
            "info" => $request->info,
            "user_id"=> Auth::user()->id,

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
            "user_id"=> Auth::user()->id,
        ]);
        return redirect(route("home"))->with("status", "Film caricato correttamente!");
    }
    public function show(Libro $libro){ 
        //Pagina di dettaglio
        return view("libri.detail", compact("libro"));
    }
    public function edit(Libro $libro)
    {
        //Accedere alla pagina che contiene il form per l'update
        return view("libri.edit", compact("libro"));
    }
    public function update(Request $request, Libro $libro)
    {
        
        $libro->update([
            // aggiungere le chiavi del create
            "title" => $request->title,
            "author" => $request->author,
            "year" => $request->year,
            "info" => $request->info,
        ]);

        return redirect(route("libro_show", compact("libro"))); //ricordarsi della action sul form x richiamare la rotta e sul form lasciare method post e dopo csrf scrivere:@method("put")
    }
    public function destroy(Libro $libro)
    {
        //cancellare i record
        $libro->delete();
        return redirect(route("libri")); //aggiungere su index un form action con un button per cancellare e aggiungere la route e csrf e poi @method("delete")
    }

        // Musei
    public function showMuseo(Museo $museo){
        return view("musei.detail", compact("museo"));
    }
    public function editMuseo(Museo $museo){
        return view("musei.edit", compact("museo"));
    }
    public function updateMuseo(Request $request, Museo $museo){

        $museo->update([
             "name" => $request->name,
            "country" => $request->country,
            "year" => $request->year,
            "info" => $request->info,
        ]);
        return redirect(route("museo_show", compact("museo")));
    }
    public function destroyMuseo(Museo $museo){
        $museo->delete();
        return redirect(route("musei"));
    }


}
