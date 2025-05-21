<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\FacilityWorkingDaysShifts;
use Illuminate\Support\Facades\DB;

class FacilityWorkingDayShiftsSeeder extends Seeder
{
    public function run(): void
    {
        $workingDays = DB::table('facility_working_days')->get();

        foreach ($workingDays as $day) {
            $shiftsCount = rand(1, 2);

            for ($i = 0; $i < $shiftsCount; $i++) {
                $startHour = $i === 0 ? 9 : 14;
                $endHour = $i === 0 ? 13 : 18;



                DB::table('facility_working_days_shifts')->insert([
                    'from' => sprintf('%02d:00:00', $startHour),
                    'to' => sprintf('%02d:00:00', $endHour),
                    'facility_day_shifts_id' => $day->id,
                ]);
            }
        }
    }
}