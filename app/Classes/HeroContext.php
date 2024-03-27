<?php

namespace App\Classes;
use App\Interfaces\HeroInterface;

class HeroContext
{
    private $heroStrategy;

    public function __construct(HeroInterface $heroStrategy)
    {
        $this->heroStrategy = $heroStrategy;
    }

    public function createHero(float $health, float $stamina, GunContext $gun)
    {
        return $this->heroStrategy->createHero($health, $stamina, $gun);
    }
}
