<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

use App\Models\DoctorServices;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class DoctorServiceSeeder extends Seeder
{
    public function run(): void
    {
        $doctorIds = Doctor::pluck('id')->toArray();
        $serviceIds = Service::pluck('id')->toArray();

        foreach ($doctorIds as $doctorId) {
            $assignedServiceIds = collect($serviceIds)->shuffle()->take(rand(2, 5));

            foreach ($assignedServiceIds as $serviceId) {
                DB::table('doctor_services')->insert([
                    'doctor_id' => $doctorId,
                    'service_id' => $serviceId
                ]);
            }
        }
    }
}