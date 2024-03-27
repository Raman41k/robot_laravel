<?php

namespace App\Classes;

use App\Interfaces\HeroInterface;

class Magician implements HeroInterface
{
    public $health;
    public $stamina;
    public $gun;
    public function createHero(float $health, float $stamina, GunContext $gun)
    {
        $this->health = $health;
        $this->stamina = $stamina;
        $this->gun = $gun;
    }
}
