<?php

namespace Database\Seeders;

use App\Models\DoctorTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DoctorTitle::factory(5)->create();
    }
}
