<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $peliculas = Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|max:255',
            'year' => 'required|integer|min:1900|max:2024',
        ]);
        Pelicula::create($request->all());

        return redirect()->route('pelicula.index');
    }

    /**
     * Display the specified resource.
     */


    public function show(Pelicula $pelicula) {
        $reviews = $pelicula->reviews;
        return view('peliculas.show', compact('pelicula', 'reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     */

     public function edit(Pelicula $pelicula)
     {
         return view('peliculas.edit', compact('pelicula'))->with('generos', Genero::all());
     }
     
     public function update(Request $request, Pelicula $pelicula)
     {
         $validatedData = $request->validate([
             'title' => 'required|max:255',
             'year' => 'required|integer',
         ]);
     
         $pelicula->update($validatedData);
     
         return redirect()->route('pelicula.index');
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();

        return redirect()->route('pelicula.index')->with('success','Película eliminada exitosamente.');
    }

    public function test(Pelicula $pelicula)
     {
         return view('peliculas.test', compact('pelicula'));
     }

     public function seleccionarGenero(Pelicula $pelicula)
     {
        return view('peliculas.seleccionar-genero', compact('pelicula'))
            ->with('generos', Genero::all());
     }

     public function relacionarGeneroPelicula(Request $request, Pelicula $pelicula)
     {
        $genero_id = $request->genero_id;
        $pelicula_id = $pelicula->id;

        $pelicula->generos()->sync($genero_id);


        return redirect()->route('pelicula.show', $pelicula_id);
     }
}
