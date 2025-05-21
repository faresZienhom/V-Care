<?php

namespace Database\Seeders;

use App\Models\Speciality;
use App\Models\Specialty;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialties = [
            'Cardiology',
            'Dermatology',
            'Neurology',
            'Pediatrics',
            'Oncology',
            'Psychiatry',
            'Orthopedics',
            'Gynecology',
            'Radiology',
            'Anesthesiology',
            'Urology',
            'Endocrinology',
            'Rheumatology',
            'Gastroenterology',
            'Hematology',
            'Nephrology',
            'Ophthalmology',
            'Pathology',
            'Pulmonology',
            'Emergency Medicine'
        ];
        foreach ($specialties as $specialty) {
            Specialty::firstOrCreate(attributes: ['name' => $specialty]);
        }
    }
}