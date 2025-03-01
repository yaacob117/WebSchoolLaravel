<?php

namespace Database\Seeders;

use App\Models\Universe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniverseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Universe::create(['name' => 'Marvel', 'description' => 'Marvel Universe']);
        Universe::create(['name' => 'DC', 'description' => 'DC Universe']);
        }
}
