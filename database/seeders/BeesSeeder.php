<?php

namespace Database\Seeders;

use App\Models\Bee;
use Illuminate\Database\Seeder;

class BeesSeeder extends Seeder
{
    public function run()
    {
        // Queen Bee
        Bee::create(['type' => 'Queen Bee', 'hit_points' => 100]);

        // Worker Bees
        for ($i = 0; $i < 5; $i++) {
            Bee::create(['type' => 'Worker Bee', 'hit_points' => 75]);
        }

        // Drone Bees
        for ($i = 0; $i < 8; $i++) {
            Bee::create(['type' => 'Drone Bee', 'hit_points' => 50]);
        }
    }
}
