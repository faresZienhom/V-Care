<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Appointments;


class AppointmentsSeeder extends Seeder
{
    public function run(): void
    {
        Appointments::factory()->count(10)->create();
    }
}