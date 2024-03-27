<?php

namespace App\Classes;

class HeroFactory
{
    public static function createHero($type)
    {
        switch ($type) {
            case 'archer':
                return new Archer();
            case 'magician':
                return new Magician();
            case 'warrior':
                return new Warrior();
            default:
                throw new ("Invalid animal type.");
        }
    }
}
