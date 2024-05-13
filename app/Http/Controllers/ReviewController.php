<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    
    public function create(Pelicula $pelicula)
    {
        return view('reviews.create', compact('pelicula'));
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'review' => 'required|max:255',
            'calificacion' => 'required|integer|min:0|max:10',
            'user_id' => 'required',
            'pelicula_id'=> 'required',
        ]);
        Review::create($request->all());

        return redirect()->route('peliculas.index');
    }
}
