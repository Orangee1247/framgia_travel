<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->delete();

        DB::table('services')->insert(
            [
//                Ha Noi Hotel
                [
                    'category_id'    => '1',
                    'province_id'    => '1',
                    'name'           => 'Hanoi Elite Hotel',
                    'description'    => 'Free Wifi, Breakfast included, Air Conditioning, Non-Smoking Hotel, Airport Transportation',
                    'address'        => '50 10, Dao Duy Tu Str., Old Quarter, Hanoi',
                    'open_time'      => '',
                    'expected_price' => '956,263',
                ],

                [
                    'category_id'    => '1',
                    'province_id'    => '1',
                    'name'           => 'Hanoi Tirant Hotel',
                    'description'    => 'Free Wifi, Breakfast included, Air Conditioning, Pool, Non-Smoking Hotel, Restaurant, Airport Transportation',
                    'address'        => '38 36, Gia Ngu Str, Hoan Kiem, Hanoi',
                    'open_time'      => '',
                    'expected_price' => '1,687,735',
                ],

                [
                    'category_id'    => '1',
                    'province_id'    => '1',
                    'name'           => 'Golden Sun Villa Hotel',
                    'description'    => 'Free Wifi, Breakfast included, Air Conditioning, Family Rooms, Concierge, Dry Cleaning, Shuttle Bus Service',
                    'address'        => '68 Hang Trong, Hanoi',
                    'open_time'      => '',
                    'expected_price' => '1,363,743',
                ],

                [
                    'category_id'    => '1',
                    'province_id'    => '1',
                    'name'           => 'Hotel de l\'Opera Hanoi',
                    'description'    => 'Free Wifi, Free Parking, Breakfast Buffet, Air Conditioning, Pool,Non-Smoking Hotel, Restaurant',
                    'address'        => '29 Trang Tien Street, Hoan Kiem District, Hanoi',
                    'open_time'      => '',
                    'expected_price' => '2,518,824',
                ],

                [
                    'category_id'    => '1',
                    'province_id'    => '1',
                    'name'           => 'Calypso Premier Hotel',
                    'description'    => 'Free Wifi, Breakfast included, Air Conditioning, Non-Smoking Hotel, Airport Transportation, Room Service, Suites',
                    'address'        => '27 Cua Dong Street, Hoan Kiem, Hanoi',
                    'open_time'      => '',
                    'expected_price' => '955,063',
                ],
            ]
        );
    }
}
