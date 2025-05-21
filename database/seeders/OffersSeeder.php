<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Offers;


class OffersSeeder extends Seeder
{
    public function run(): void
    {
        Offers::factory()->count(10)->create();
    }
}