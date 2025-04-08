<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorTitle extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorTitleFactory> */
    use HasFactory;

    protected $fillable = ['name'];

}
