<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Facilities;
use App\Models\Facility;
use App\Models\Zone;
use Illuminate\Support\Str;

class FacilitySeeder extends Seeder
{
    public function run(): void
    {
        $zones = Zone::whereIn('name', ['Heliopolis', 'Maadi', 'Zamalek', 'Nasr City'])->get()->keyBy('name');


        $hospitalNames = [
            'Cairo General Hospital',
            'Heliopolis Medical Center',
            'Maadi Care Hospital',
            'Zamalek Health Institute',
            'Nasr City Hospital',
            'El Salam Hospital',
            'Egyptian Heart Center',
            'Future Hospital',
            'Green Valley Hospital',
            'Al Noor Hospital',
            'Saint Mary Hospital',
            'International Medical Hospital',
            'Capital Health Hospital',
            'Red Crescent Hospital',
            'River Nile Hospital'
        ];

        $clinicNames = [
            'Family Care Clinic',
            'Heliopolis Dental Center',
            'Maadi Kids Clinic',
            'Zamalek Skin Clinic',
            'Nasr City ENT Clinic',
            'Modern Eye Clinic',
            'Smile Dental Clinic',
            'Physio Plus',
            'Sunrise Medical Clinic',
            'Elite Care Clinic',
            'Hope Women Clinic',
            'Al Amal Clinic',
            'City Health Clinic',
            'Doctor House Clinic',
            'Trust Care Clinic'
        ];

        foreach ($zones as $zoneName => $zone) {
            for ($i = 0; $i < 15; $i++) {
                $isHospital = $i % 2 === 0;
                $name = $isHospital ? $hospitalNames[$i] : $clinicNames[$i];

                Facility::firstOrCreate([
                    'name' => $name,
                    'type' => $isHospital ? 'hospital' : 'clinic',
                    'address' => "$zoneName, Cairo, Egypt",
                    'address_link' => 'https://maps.google.com/?q=' . $zone->lat . ',' . $zone->long,
                    'phone_number' => fake()->regexify('/^(012|015|010|011)[0-9]{8}$/'),
                    'description' => "Located in $zoneName, serving the community with care.",
                    'zone_id' => $zone->id,
                    'facility_admin_id' => null, // or assign if you have admins
                ]);
            }
        }

    }
}