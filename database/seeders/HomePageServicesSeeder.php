<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\HomePageServices;


class HomePageServicesSeeder extends Seeder
{
    public function run(): void
    {
        HomePageServices::factory()->count(10)->create();
    }
}