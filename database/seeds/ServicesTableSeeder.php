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
                    'expected_price' => '20',
                    'phone'          => '123456789',
                    'profile_pic'    => 'https://media-cdn.tripadvisor.com/media/photo-o/0e/c6/12/a5/executive-room.jpg',
                ],

                [
                    'category_id'    => '1',
                    'province_id'    => '1',
                    'name'           => 'Hanoi Tirant Hotel',
                    'description'    => 'Free Wifi, Breakfast included, Air Conditioning, Pool, Non-Smoking Hotel, Restaurant, Airport Transportation',
                    'address'        => '38 36, Gia Ngu Str, Hoan Kiem, Hanoi',
                    'open_time'      => '',
                    'expected_price' => '15',
                    'phone'          => '1234345389',
                    'profile_pic'    => 'https://media-cdn.tripadvisor.com/media/photo-o/0a/35/ee/02/hang-gai-street.jpg',
                ],

                [
                    'category_id'    => '1',
                    'province_id'    => '1',
                    'name'           => 'Golden Sun Villa Hotel',
                    'description'    => 'Free Wifi, Breakfast included, Air Conditioning, Family Rooms, Concierge, Dry Cleaning, Shuttle Bus Service',
                    'address'        => '68 Hang Trong, Hanoi',
                    'open_time'      => '',
                    'expected_price' => '120',
                    'phone'          => '1234554679',
                    'profile_pic'    => 'https://media-cdn.tripadvisor.com/media/oyster/1070/0a/c8/cb/c9/the-hotel--v11775934.jpg',
                ],

                [
                    'category_id'    => '1',
                    'province_id'    => '3',
                    'name'           => 'Hotel de l\'Opera Hanoi',
                    'description'    => 'Free Wifi, Free Parking, Breakfast Buffet, Air Conditioning, Pool,Non-Smoking Hotel, Restaurant',
                    'address'        => '29 Trang Tien Street, Hoan Kiem District, Hanoi',
                    'open_time'      => '',
                    'expected_price' => '38',
                    'phone'          => '4233456789',
                    'profile_pic'    => 'https://media-cdn.tripadvisor.com/media/photo-o/0f/65/1a/75/hotel-room.jpg',
                ],

                [
                    'category_id'    => '1',
                    'province_id'    => '2',
                    'name'           => 'Calypso Premier Hotel',
                    'description'    => 'Free Wifi, Breakfast included, Air Conditioning, Non-Smoking Hotel, Airport Transportation, Room Service, Suites',
                    'address'        => '27 Cua Dong Street, Hoan Kiem, Hanoi',
                    'open_time'      => '',
                    'expected_price' => '50',
                    'phone'          => '1234234589',
                    'profile_pic'    => 'https://media-cdn.tripadvisor.com/media/photo-o/0d/40/c6/c5/paradise-boutique-hotel.jpg',
                ],
            ]
        );
    }
}
