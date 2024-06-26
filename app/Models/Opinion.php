<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    public function peliculas()
    {
        return $this->belongsTo(Pelicula::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
