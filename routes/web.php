<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PublicController::class, "home"])->name("home");
Route::get("/nuovi_arrivi", [PublicController::class, "nuoviArrivi"])->name("new");
Route::get("/libri", [PublicController::class, "libri"])->name("libri");
Route::get("/musei", [PublicController::class, "musei"])->name("musei");
Route::get("/libri/create-libri", [PublicController::class, "create_libri"])->name("create_libri");
Route::get("/libri/create-musei", [PublicController::class, "create_musei"])->name("create_musei");
Route::post("/libro/add", [PublicController::class, "add_libro"])->name("add_libro");
Route::post("/museo/add", [PublicController::class, "add_museo"])->name("add_museo");
Route::get("/movies", [PublicController::class, "movies"])->name("movies");
Route::get("/movies/create-movies", [PublicController::class, "create_movies"])->name("create_movies");
Route::post("/movie/add", [PublicController::class, "add_movie"])->name("add_movie");

Route::get("/libro/detail/{libro}", [PublicController::class, "show"])->name("libro_show");
Route::get("/libri/edit/{libro}", [PublicController::class, "edit"])->name("libro_edit");
Route::put("/libro/update/{libro}", [PublicController::class, "update"])->name("libro_update");
Route::delete("/libro/destroy/{libro}", [PublicController::class, "destroy"])->name("libro_destroy");






