<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    public function create(Pelicula $pelicula)
    {
        return view('opinions.create', compact('pelicula'));
    }
}
