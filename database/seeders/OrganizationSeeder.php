<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organization::create([
            'user_id' => '2',
            'category_id' => '4', //Seni
            'org_domicile' => 'Jakarta Barat'
        ]);

        Organization::create([
            'user_id' => '1',
            'category_id' => '5', //Lingkungan
            'org_domicile' => 'Bandung'
        ]);
        
        Organization::create([
            'user_id' => '3',
            'category_id' => '2', //Kesehatan
            'org_domicile' => 'Semarang'
        ]);
    }
}
