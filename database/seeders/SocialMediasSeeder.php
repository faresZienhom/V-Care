<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\SocialMedias;


class SocialMediasSeeder extends Seeder
{
    public function run(): void
    {
        SocialMedias::factory()->count(10)->create();
    }
}