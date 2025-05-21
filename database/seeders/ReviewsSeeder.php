<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Reviews;


class ReviewsSeeder extends Seeder
{
    public function run(): void
    {
        Reviews::factory()->count(10)->create();
    }
}