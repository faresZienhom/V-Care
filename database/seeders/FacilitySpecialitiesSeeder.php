<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;

use App\Models\Specialty;

class FacilitySpecialitiesSeeder extends Seeder
{
    public function run(): void
    {
        $specialties = Specialty::all();

        Facility::all()->each(function ($facility) use ($specialties) {


            $facility->specialties()->sync(
                $specialties->random(rand(3, 6))->pluck('id')->toArray()
            );
        });
    }
}