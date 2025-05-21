<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\ContactUs;


class ContactUsSeeder extends Seeder
{
    public function run(): void
    {
        ContactUs::factory()->count(10)->create();
    }
}