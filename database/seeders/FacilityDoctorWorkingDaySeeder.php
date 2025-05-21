<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\FacilityDoctorWorkingDays;
use Illuminate\Support\Facades\DB;

class FacilityDoctorWorkingDaySeeder extends Seeder
{
    public function run(): void
    {
        $facilityDoctorIds = DB::table('facility_doctors')->pluck('id');

        foreach ($facilityDoctorIds as $id) {
            $days = collect(range(0, 6))->shuffle()->take(rand(3, 5));

            foreach ($days as $day) {
                DB::table('facility_doctor_working_days')->insert([
                    'facility_doctor_id' => $id,
                    'day' => (string) $day, // store as string since it's an enum('0', ... '6')
                ]);
            }
        }
    }
}