<?php

namespace Database\Seeders;

use App\Models\Charity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Dummy Data for Charities with ID organization is 1
        Charity::create([
            'organization_id' => '1',
            'type_id' => '1',
            'category_id' => '4',
            'charity_title' => 'Belajar Lukis Bersama, Yuk!',
            'charity_img' => 'images/art.jpg',
            'charity_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'charity_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'charity_location' => 'GBK Senayan, Jakarta',
            'charity_date' => '2022-09-19'
        ]);

        Charity::create([
            'organization_id' => '1',
            'type_id' => '2',
            'category_id' => '1',
            'charity_title' => 'Donasi Buku',
            'charity_img' => 'images/book_donations.jpg',
            'charity_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'charity_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'charity_location' => 'Mbloc Blok M, Jakarta Selatan',
            'charity_date' => '2022-09-19'
        ]);

        //Dummy Data for Charities with ID organization is 2
        Charity::create([
            'organization_id' => '2',
            'type_id' => '1',
            'category_id' => '5',
            'charity_title' => 'Buat Pantai Kembali Bersih!',
            'charity_img' => 'images/enviVolunteer.jpg',
            'charity_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'charity_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'charity_location' => 'Pantai Ancol, Jakarta Utara',
            'charity_date' => '2022-10-22'
        ]);

        //Dummy Data for Charities with ID organization is 3
        Charity::create([
            'organization_id' => '3',
            'type_id' => '2',
            'category_id' => '2',
            'charity_title' => 'Makanan Lezat, Yes! Bergizi? Harus!',
            'charity_img' => 'images/foodDonation.jpg',
            'charity_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'charity_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'charity_location' => 'Bintaro, Tangerang Selatan',
            'charity_date' => '2022-11-19'
        ]);
    }
}
