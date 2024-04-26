<?php

namespace App\Http\Controllers;

use App\Models\Bee;
use App\Http\Controllers\Controller;
use App\Services\Hive;
use Illuminate\Http\Request;

class BeeController extends Controller
{
    protected $hive;

    public function __construct(Hive $hive)
    {
        $this->hive = $hive;
    }

    public function index()
    {
        if (Bee::count() === 0) {
            $this->hive->reset();
        }

        return view('bee-game', [
            'bees' => Bee::all(),
        ]);
    }

    public function hitRandomBee()
    {
        $bee = $this->hive->getRandomBee();
        $this->hive->hitBee($bee);

        if ($this->hive->allBeesDead()) {
            $this->hive->reset();
        }

        return redirect()->route('bee-game');
    }
}
