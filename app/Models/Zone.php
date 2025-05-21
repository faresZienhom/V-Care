<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Zone extends Model
{
    function city() : BelongsTo {
        return $this->belongsTo(City::class);
    }
}
