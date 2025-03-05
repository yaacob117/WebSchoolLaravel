<?php

namespace Database\Seeders;

use App\Models\Superhero; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperheroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Superhero::create([
        //     'name' => 'Spider-Man',
        //     'real_name' => 'Peter Parker',
        //     'universe_id' => 1, 
        //     'gender_id' => 2,  
        //     'picture' => 'spiderman.jpg'
        // ]);
        Superhero::factory(10)->create();


    }
}
