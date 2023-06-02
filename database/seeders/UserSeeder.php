<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Dummy Data for Organizations
        User::create([
            'user_name' => 'Organisasi A',
            'user_email' => 'organization@gmail.com',
            'user_role' => 'Organization',
            'user_phone' => '08123451671',
            'user_address' => 'Kemanggisan, Jakarta Barat',
            'password' => bcrypt('organisasi_A'),
            'user_dob' => '2010-10-13'
        ]);

        User::create([
            'user_name' => 'Organisasi B',
            'user_email' => 'organization_b@gmail.com',
            'user_role' => 'Organization',
            'user_phone' => '08123452918',
            'user_address' => 'Bogor, Jawa Barat',
            'password' => bcrypt('organisasi_B'),
            'user_dob' => '2017-08-25'
        ]);

        User::create([
            'user_name' => 'Organisasi C',
            'user_email' => 'organization_c@gmail.com',
            'password' => bcrypt('organisasi_C'),
            'user_address' => 'Tangerang, Banten',
            'user_phone' => '081234598765',
            'user_dob' => '2015-06-07',
            'user_role' => 'Organization'
        ]);

        //Dummy Data for Volunteers
        User::create([
            'user_name' => 'anindahs',
            'user_email' => 'anindahs@gmail.com',
            'password' => bcrypt('volunteer_1'),
            'user_address' => 'Ciledug, Kota Tangerang',
            'user_phone' => '08165431213',
            'user_dob' => '2000-09-25', //YYYY-MM-DD
            'user_role' => 'Volunteer'
        ]);

        User::create([
            'user_name' => 'diisyaa',
            'user_email' => 'dindaAlisya@gmail.com',
            'password' => bcrypt('volunteer_2'),
            'user_address' => 'Perumahan Maharta, Jl. Kejayaan XI',
            'user_phone' => '081654387610',
            'user_dob' => '1998-07-25', //YYYY-MM-DD
            'user_role' => 'Volunteer'
        ]);

        User::create([
            'user_name' => 'yosihanaaa_',
            'user_email' => 'ysshana@gmail.com',
            'password' => bcrypt('volunteer_3'),
            'user_address' => 'Komplek Kota Bumi, Kabupaten Tangerang',
            'user_phone' => '08165439018',
            'user_dob' => '1999-12-25', //YYYY-MM-DD
            'user_role' => 'Volunteer'
        ]);

        ////Dummy Data for Admin
        User::create([
            'user_name' => 'admin',
            'user_email' => 'admin@gmail.com',
            'password' => bcrypt('admin1234'),
            'user_address' => 'Surabaya, Jawa Timur',
            'user_phone' => '081809871265',
            'user_dob' => '2002-01-13',
            'user_role' => 'Admin'
        ]);
    }
}
