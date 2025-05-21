<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Specialities;


class SpecialitiesSeeder extends Seeder
{
    public function run(): void
    {
        Specialities::factory()->count(10)->create();
    }
}