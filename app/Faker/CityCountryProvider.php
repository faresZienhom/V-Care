<?php
namespace App\Faker;

use App\CityEnum;
use App\CountryEnum;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;


class CityCountryProvider
{
    private Collection|array $countries = [];
    function __construct() {
        $file = File::get(storage_path("data/country.json"));
        $this->countries = collect(json_decode($file,true)['countries']);
    }
    public function countries()
    {
        return $this->countries->map(fn($c) => $c['name']);
    }

    public function cities(CountryEnum|string $country)
    {
        $cities = $this->countries->first(fn($c) => $c['name'] ==  (isset($country->value) ? $country->value : $country));
        if(!$cities) throw new \Exception('country not found');
        return collect($cities['cities'])->map(fn($c) => $c['name']);
    }
    public function zones(CityEnum|string $city_name)
    {
        $zones = [];
        $this->countries->each(function($c) use($city_name,&$zones){
            $city = collect($c['cities'])->first(fn($city) => $city['name']== (isset($city_name->value) ? $city_name->value : $city_name));
            if($city){
                $zones = $city['zones'];
            }
        });
        return $zones;
    }
}