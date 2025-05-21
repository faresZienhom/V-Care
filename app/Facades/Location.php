<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array countries
 * @method static array cities(\App\CountryEnum|string $country_name)
 * @method static array zones(\App\CityEnum|string $city_name)
 */
class Location extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'country';
    }

}