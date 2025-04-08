<?php

namespace App\Faker;

use Faker\Provider\Base;

class DoctorTitleProvider extends Base
{
    protected static $usedTitles = [];

    protected static $titles = [
        'Intern',
        'Resident',
        'Registrar',
        'Specialist',
        'Consultant',
        'Attending Physician',
        'Fellow',
    ];


    public function uniqueDoctorTitle()
    {
        $available = array_filter(static::$titles, function ($title) {
            return !in_array($title, static::$usedTitles);
        });

        if (empty($available)) {
            throw new \Exception("No unique titles left.");
            // static::$usedTitles = [];  // Reset the used categories
            // $available = static::$titles;  // Reset the available categories
        }

        $title = static::randomElement($available);
        static::$usedTitles[] = $title;

        return $title;
    }

}








