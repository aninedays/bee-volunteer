<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //use HasFactory;

    protected $fillable = [
        'category_name', 'category_image'
    ];

    public function organization()
    {
        return $this->hasMany(Organization::class);
    }

    public function charity()
    {
        return $this->hasMany(Charity::class);
    }

    public function home()
    {
        return $this->hasOne(Home::class);
    }
}
