<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Admins;


class AdminsSeeder extends Seeder
{
    public function run(): void
    {
        Admins::factory()->count(10)->create();
    }
}