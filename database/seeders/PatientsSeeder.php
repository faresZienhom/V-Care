<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

use App\Models\Patients;


class PatientsSeeder extends Seeder
{
    public function run(): void
    {
        Patient::factory()->count(10)->create();
    }
}