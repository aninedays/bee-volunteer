<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => 'ANINDA HANIFA SARI',
            'jobdesc' => 'Back-End Developer'
        ]);

        Team::create([
            'name' => 'DINDA ALISYA',
            'jobdesc' => 'Front-End Developer'
        ]);

        Team::create([
            'name' => 'YOSIHANA SINAGA',
            'jobdesc' => 'UI/UX Designer'
        ]);
    }
}
