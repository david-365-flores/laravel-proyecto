<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $fillable = ['title','year'];

    public function generos(){
        return $this->belongsToMany(Genero::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
