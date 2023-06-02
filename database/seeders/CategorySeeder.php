<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name' => 'Pendidikan',
            'category_image' => 'images/edu.jpg'
        ]);

        Category::create([
            'category_name' => 'Kesehatan',
            'category_image' => 'images/health.jpg'
        ]);

        Category::create([
            'category_name' => 'Olahraga',
            'category_image' => 'images/sport.jpg'
        ]);

        Category::create([
            'category_name' => 'Seni',
            'category_image' => 'images/art.jpg'
        ]);

        Category::create([
            'category_name' => 'Lingkungan',
            'category_image' => 'images/env.jpg'
        ]);
    }
}
