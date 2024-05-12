<?php

namespace App\Http\Controllers;

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

        return redirect()->route('peliculas.index');
    }

    /**
     * Display the specified resource.
     */

    public function show(Pelicula $pelicula) {
        return view('peliculas.show', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     */

     public function edit(Pelicula $pelicula)
     {
         return view('peliculas.edit', compact('pelicula'));
     }
     
     public function update(Request $request, Pelicula $pelicula)
     {
         $validatedData = $request->validate([
             'title' => 'required|max:255',
             'year' => 'required|integer',
         ]);
     
         $pelicula->update($validatedData);
     
         return redirect()->route('peliculas.index');
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();

        return redirect()->route('peliculas.index')->with('success','Película eliminada exitosamente.');
    }
}
