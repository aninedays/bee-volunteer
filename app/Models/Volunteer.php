<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    //use HasFactory;

    protected $fillable = [
        'userID', 'v_interest', 'v_expertise', 'v_domicile', 'v_age'
    ];

}
