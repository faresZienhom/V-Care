<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

use App\Models\Doctors;
use App\Models\DoctorTitle;
use App\Models\Specialty;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        $specialtyIds = Specialty::pluck('id')->toArray();
        $titleIds = DoctorTitle::pluck('id')->toArray();

        Doctor::factory()->count(count: 50)->create()->each(function ($doctor) use ($specialtyIds, $titleIds) {
            $doctor->update([
                'doctor_title_id' => fake()->optional()->randomElement($titleIds),
                'specialty_id' => fake()->optional()->randomElement($specialtyIds),
            ]);
        });
    }
}