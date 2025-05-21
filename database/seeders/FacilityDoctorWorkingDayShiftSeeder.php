<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\FacilityDoctorWorkingDayShifts;
use Illuminate\Support\Facades\DB;

class FacilityDoctorWorkingDayShiftSeeder extends Seeder
{
    public function run(): void
    {
        $shiftIds = DB::table('facility_doctor_working_days')->pluck('id');

        foreach ($shiftIds as $id) {
            $shiftCount = rand(1, 2); // 1 or 2 shifts per day

            for ($i = 0; $i < $shiftCount; $i++) {
                // Example shift times
                $from = $i === 0 ? '09:00:00' : '16:00:00';
                $to   = $i === 0 ? '13:00:00' : '20:00:00';

                DB::table('facility_doctor_working_day_shifts')->insert([
                    'shift_id' => $id,
                    'from' => $from,
                    'to' => $to,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}