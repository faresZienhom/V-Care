<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Facility;
use Illuminate\Database\Seeder;

use App\Models\FacilityDoctors;
use Illuminate\Support\Facades\DB;

class FacilityDoctorSeeder extends Seeder
{
    public function run(): void
    {
        $facilities = Facility::pluck('id')->toArray();
        $doctors = Doctor::pluck('id')->toArray();

        foreach ($doctors as $doctorId) {
            $assignedFacilities = collect($facilities)->shuffle()->take(rand(1, 3));

            foreach ($assignedFacilities as $facilityId) {
                DB::table('facility_doctors')->insert([
                    'doctor_id' => $doctorId,
                    'facility_id' => $facilityId,
                    'visit_duration' => rand(15, 60), // duration in minutes
                    'working_hours_same_as_facility' => (bool) rand(0, 1),
                ]);
            }
        }
    }
}