<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\FacilityAdmins;


class FacilityAdminsSeeder extends Seeder
{
    public function run(): void
    {
        FacilityAdmins::factory()->count(10)->create();
    }
}