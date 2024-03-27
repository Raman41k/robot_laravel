<?php

namespace App\Interfaces;

use App\Classes\GunContext;

interface HeroInterface {
    public function createHero(float $health, float $stamina, GunContext $gun);
}
