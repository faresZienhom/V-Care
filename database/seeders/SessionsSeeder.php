<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Sessions;


class SessionsSeeder extends Seeder
{
    public function run(): void
    {
        Sessions::factory()->count(10)->create();
    }
}