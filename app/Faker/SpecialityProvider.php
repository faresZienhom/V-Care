<?php

namespace App\Faker;

use Faker\Provider\Base;

class SpecialityProvider extends Base
{

    protected static $usedSpecialities = [];
    protected static $specialities = [
        'Family Medicine',
        'Internal Medicine',
        'Pediatrics',
        'General Surgery',
        'Cardiothoracic Surgery',
        'Neurosurgery',
        'Orthopedic Surgery',
        'Plastic Surgery',
        'Vascular Surgery',
        'Cardiology',
        'Dermatology',
        'Endocrinology',
        'Gastroenterology',
        'Hematology',
        'Infectious Diseases',
        'Nephrology',
        'Neurology',
        'Oncology',
        'Pulmonology',
        'Rheumatology',
        'Ophthalmology',
        'Otolaryngology (ENT)',
        'Obstetrics and Gynecology (OB/GYN)',
        'Urology',
        'Dentistry',
        'Oral and Maxillofacial Surgery',
        'Psychiatry',
        'Pathology',
        'Radiology',
        'Emergency Medicine',
        'Anesthesiology',
        'Intensive Care Medicine',
        'Allergy and Immunology',
        'Sports Medicine',
        'Geriatrics',
        'Palliative Care',
        'Occupational Medicine',
        'Sleep Medicine',

    ];

    public function uniqueSpecialities()
    {
        $available = array_filter(static::$specialities, function ($specialities) {
            return !in_array($specialities, static::$usedSpecialities);
        });
        if (empty($available)) {
            throw new \Exception("No unique specialities left.");
        }
        $speciality = static::randomElement($available);
        static::$usedSpecialities[] = $speciality;

        return $speciality;
    }
}