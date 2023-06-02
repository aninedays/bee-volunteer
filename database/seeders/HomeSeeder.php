<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
            'type_id' => '1',
            'category_id' => '1',
            'charity_id' => '1'
        ]);

        Home::create([
            'type_id' => '2',
            'category_id' => '2',
            'charity_id' => '2'
        ]);

        Home::create([
            'type_id' => '1',
            'category_id' => '3',
            'charity_id' => '3'
        ]);

        Home::create([
            'type_id' => '2',
            'category_id' => '4',
            'charity_id' => '4'
        ]);

        Home::create([
            'type_id' => '1',
            'category_id' => '5',
            'charity_id' => '3'
        ]);
    }
}
