<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['review','calificacion'];

    public function peliculas()
    {
        return $this->belongsTo(Pelicula::class);
    }
}
