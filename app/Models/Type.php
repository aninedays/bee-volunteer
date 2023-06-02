<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //use HasFactory;

    protected $fillable = [
        'type_name', 'type_image'
    ];

    public function charity()
    {
        return $this->hasMany(Charity::class);
    }

    public function home()
    {
        return $this->hasOne(Home::class);
    }
}
