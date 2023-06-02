<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'type_name' => 'Services',
            'type_image' => 'images/Service.jpg'
        ]);

        Type::create([
            'type_name' => 'Donations',
            'type_image' => 'images/Donation.jpg'
        ]);

    }
}
