<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
    //use HasFactory;

    //protected $table = "charity"; --> gabisa dipake kalo menggunakan seeder

    protected $fillable = [
        'organization_id', 'type_id', 'category_id', 'charity_img', 'charity_title',
        'charity_excerpt', 'charity_desc', 'charity_location', 'charity_date'
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function home()
    {
        return $this->hasOne(Home::class);
    }
}
