<?php

namespace DanielCristeaa\AwesomeAbTesting\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DanielCristeaa\AwesomeAbTesting\AwesomeAbTesting
 */
class AwesomeAbTesting extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \DanielCristeaa\AwesomeAbTesting\AwesomeAbTesting::class;
    }
}
