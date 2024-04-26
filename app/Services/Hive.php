<?php

namespace App\Services;

use App\Models\Bee;

class Hive
{
    public function reset()
    {
        Bee::truncate();

        Bee::create(['type' => 'Queen Bee', 'hit_points' => 100]);
        for ($i = 0; $i < 5; $i++) {
            Bee::create(['type' => 'Worker Bee', 'hit_points' => 75]);
        }
        for ($i = 0; $i < 8; $i++) {
            Bee::create(['type' => 'Drone Bee', 'hit_points' => 50]);
        }
    }

    public function getRandomBee()
    {
        return Bee::inRandomOrder()->first();
    }

    public function hitBee(Bee $bee)
    {
        switch ($bee->type) {
            case 'Queen Bee':
                $damage = 8;
                break;
            case 'Worker Bee':
                $damage = 10;
                break;
            case 'Drone Bee':
                $damage = 12;
                break;
        }

        $bee->hit_points -= $damage;
        $bee->save();
    }

    public function allBeesDead()
    {
        return Bee::where('hit_points', '>', 0)->count() === 0;
    }
}
