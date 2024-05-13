<?php

use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

use App\Livewire\Counter;
 
Route::get('/counter', Counter::class);

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('peliculas', PeliculaController::class);

Route::resource('pelicula', PeliculaController::class);
Route::get('/pelicula/{pelicula}/seleccionar-genero', [PeliculaController::class, 'seleccionarGenero'])->name('pelicula.seleccionar-genero');
Route::post('/pelicula/{pelicula}/relacionar-genero-pelicula', [PeliculaController::class, 'relacionarGeneroPelicula'])->name('pelicula.relacionar-genero-pelicula');
Route::get('pelicula/{pelicula}/delete', 'PeliculaController@delete')->name('pelicula.delete');

Route::get('pelicula/{pelicula}/edit', [PeliculaController::class, 'edit'])->name('pelicula.edit');
Route::get('pelicula/{pelicula}/show', [PeliculaController::class, 'show'])->name('pelicula.show');
Route::get('pelicula/{pelicula}/test', [PeliculaController::class, 'test'])->name('pelicula.test');

Route::resource('review', ReviewController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    
    
    Route::get('peliculas/{pelicula}/delete', 'PeliculaController@delete')->name('peliculas.delete');
    Route::get('peliculas/{pelicula}/edit', [PeliculaController::class, 'edit'])->name('peliculas.edit');
    Route::get('/peliculas/{pelicula}', 'PeliculaController@show')->name('peliculas.show');
    
});


//Route::get('review/{review}/create', [ReviewController::class, 'create'])->name('review.create');
//Route::get('reviews/{review}/store', [ReviewController::class,'store'])->name('review.store');
//Route::post('reviews/{review}/store', [ReviewController::class,'store'])->name('reviews.store');


//Route::post('/reviews/{pelicula}/create', 'ReviewsController@create');
//Route::get('/peliculas/{pelicula}', 'App\Http\Controllers\PeliculaController@show')->name('peliculas.show');
//Route::get('/reviews/{review}/create', [ReviewController::class, 'create'])->name('reviews.create');
