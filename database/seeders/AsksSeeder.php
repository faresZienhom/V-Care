<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Asks;


class AsksSeeder extends Seeder
{
    public function run(): void
    {
        Asks::factory()->count(10)->create();
    }
}