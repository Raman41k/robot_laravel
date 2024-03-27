<?php

namespace App\Classes;

use App\Interfaces\GunInterface;

class Bow implements GunInterface
{
    public $damage;
    public $special_damage;
    public function createGun(float $damage, float $special_damage)
    {
        $this->damage = $damage;
        $this->special_damage = $special_damage;
        return $this;
    }
}
