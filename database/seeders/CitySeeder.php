<?php

namespace Database\Seeders;

use App\CityEnum;
use App\CountryEnum;
use App\Facades\Location;
use App\Faker\CityCountryProvider;
use App\Faker\Countries;
use Illuminate\Database\Seeder;

use App\Models\Cities;
use App\Models\City;
use App\Models\Country;
use App\Models\Zone;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $countries = Location::countries();

        foreach($countries as $country){
            $cities = Location::cities($country);
            $new_country = Country::updateOrCreate(['name' => $country], ['name' => $country]);
            foreach($cities as $city){
                $zones = Location::zones($city);
                $new_city = City::updateOrCreate(['name' => $city],['name' => $city,'country_id' => $new_country->id]);
                foreach($zones as $zone){
                    Zone::updateOrCreate(['name' => $zone['name']], [...$zone,'city_id' => $new_city->id]);
                }
            }
        }
    }
}