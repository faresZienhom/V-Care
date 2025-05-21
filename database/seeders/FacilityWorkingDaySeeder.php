<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;

use App\Models\FacilityWorkingDays;
use Illuminate\Support\Facades\DB;

class FacilityWorkingDaySeeder extends Seeder
{
    public function run(): void
    {
        Facility::all()->each(function ($facility) {
            $days = collect(range(0, 6))->shuffle()->take(5);

            foreach ($days as $day) {
                DB::table('facility_working_days')->insert([
                    'facility_id' => $facility->id,
                    'day' => $day,
                ]);
            }
        });
    }
}