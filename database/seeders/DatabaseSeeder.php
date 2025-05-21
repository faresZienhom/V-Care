<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call(DoctorTitleSeeder::class);
        // this seeder will create countries ,cities and zones
        $this->call(CitySeeder::class);
        $this->call(SpecialtySeeder::class);
        $this->call(FacilitySeeder::class);
        $this->call(FacilitySpecialitiesSeeder::class);
        $this->call(FacilityWorkingDaySeeder::class);
        $this->call(FacilityWorkingDayShiftsSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(DoctorServiceSeeder::class);
        $this->call(FacilityDoctorSeeder::class);
        $this->call(FacilityDoctorWorkingDaySeeder::class);
        $this->call(FacilityDoctorWorkingDayShiftSeeder::class);
    }
}
