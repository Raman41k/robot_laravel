<?php

namespace App\Classes;

use App\Interfaces\GunInterface;

class GunContext
{
    private $gunStrategy;

    public function __construct(GunInterface $gunStrategy)
    {
        $this->gunStrategy = $gunStrategy;
    }

    public function createGun(float $damage, float $special_damage)
    {
        return $this->gunStrategy->createGun($damage, $special_damage);
    }
}
