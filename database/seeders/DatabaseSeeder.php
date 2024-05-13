<?php

namespace Database\Seeders;

use App\Models\Genero;
use App\Models\Pelicula;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'david',
            'email' => 'david@mail.com',
            'password' => 'gatitos23'
        ]);
        Genero::factory(6)->create();
        Pelicula::factory(5)->create();
        

    }
}
