<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    //use HasFactory;
    protected $fillable = [
        'user_id', 'category_id', 'org_domicile',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function charity()
    {
        return $this->hasMany(Charity::class);
    }

    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
