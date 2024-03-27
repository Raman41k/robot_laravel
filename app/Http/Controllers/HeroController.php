<?php

namespace App\Http\Controllers;

use App\Classes\GunContext;
use App\Classes\GunFactory;
use App\Classes\HeroContext;
use App\Classes\HeroFactory;
use App\Classes\Pistol;
use App\Classes\Warrior;

class HeroController extends Controller
{
    public function strategyPattern()
    {
        $pistolContext = new GunContext(new Pistol());
        $pistol = $pistolContext->createGun(30, 40);

        $warrior = new HeroContext(new Warrior());
        $warriorContext = $warrior->createHero(30, 70, $pistolContext);

        dump($pistol);
        dump($warrior);
    }

    public function factoryPattern()
    {
        $sword = GunFactory::createGun('sword');
        $sword->damage = 30;
        $sword->special_damage = 40;

        $warrior = HeroFactory::createHero('warrior');
        $warrior->health = 30;
        $warrior->stamina = 100;
        $warrior->gun = $sword;

        dump($warrior);
    }
}
