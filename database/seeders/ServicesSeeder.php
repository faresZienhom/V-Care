<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

use App\Models\Services;
use App\Models\Specialty;

class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        $specialtyIds = Specialty::pluck('id')->toArray();

        $services = [
            'General Checkup',
            'Cardiac Screening',
            'Dermatology Consultation',
            'Pediatric Vaccination',
            'Physical Therapy',
            'Radiology Imaging',
            'Blood Test',
            'Oncology Consultation',
            'Orthopedic Surgery',
            'Psychiatric Evaluation',
            'Eye Examination',
            'Dental Cleaning',
            'Endocrinology Follow-up',
            'Ultrasound Scan',
            'Emergency Care',
        ];

        foreach ($services as $serviceName) {
            Service::firstOrCreate([
                'name' => $serviceName,
                'specialty_id' => count($specialtyIds) ? $specialtyIds[array_rand($specialtyIds)] : null,
            ]);
        }
    }
}