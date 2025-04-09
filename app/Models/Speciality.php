<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Speciality extends Model
{
    use HasFactory;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'specialities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = ['name'];


}
