<?php

namespace App\Classes;

class GunFactory
{
    public static function createGun($type)
    {
        switch ($type) {
            case 'bow':
                return new Bow();
            case 'crossbow':
                return new Crossbow();
            case 'sword':
                return new Sword();
            case 'pistol':
                return new Pistol();
            default:
                throw new ("Invalid animal type.");
        }
    }
}
