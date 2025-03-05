<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Universe;
use App\Models\Gender;
use App\Models\Superhero;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UniverseSeeder::class,
            GenderSeeder::class,
            SuperheroSeeder::class, 
        ]);

        Superhero::factory(10)->create();
    }
}
