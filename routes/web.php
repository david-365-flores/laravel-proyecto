<?php

use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;

use App\Livewire\Counter;
 
Route::get('/counter', Counter::class);

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('peliculas', PeliculaController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('peliculas', PeliculaController::class);
    Route::get('peliculas/{pelicula}/delete', 'PeliculaController@delete')->name('peliculas.delete');
    Route::get('peliculas/{pelicula}/edit', [PeliculaController::class, 'edit'])->name('peliculas.edit');
    Route::get('/peliculas/{pelicula}', 'PeliculaController@show')->name('peliculas.show');
    
});

Route::get('peliculas/{pelicula}/delete', 'PeliculaController@delete')->name('peliculas.delete');
Route::get('peliculas/{pelicula}/edit', [PeliculaController::class, 'edit'])->name('peliculas.edit');
Route::get('/peliculas/{pelicula}', 'PeliculaController@show')->name('peliculas.show');