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

                [
                    'category_id'    => '2',
                    'province_id'    => '1',
                    'name'           => 'Grill 63',
                    'description'    => 'Lorem ipsum dolor, id bibendum neque mollis ac. Donec vel pellentesque ex. Sed dictum consequat ornare. Cras id rutrum lacus, ac tincidunt erat. Fusce a pharetra ligula',
                    'address'        => '54 Lieu Giai Street, Ba Dinh District , 63rd Floor, Lotte Hotel Hanoi, Hanoi',
                    'open_time'      => '8.00 - 21.30',
                    'expected_price' => '10',
                    'phone'          => '+84 4 3333 1701',
                    'profile_pic'    => 'https://media-cdn.tripadvisor.com/media/photo-w/0f/8c/33/c9/restaurant-overview.jpg',
                ],

                [
                    'category_id'    => '2',
                    'province_id'    => '1',
                    'name'           => 'Jacksons Steakhouse',
                    'description'    => 'Pellentesque vitaMaecenas at mi id ante dictum imperdiet. Etiam ac nisl lobortis, dictum libero ut, feugiat erat. Nam consectetur ante ut laoreet interdum.',
                    'address'        => '23 Hai Ba Trung, Hanoi',
                    'open_time'      => '8.30 - 22.00',
                    'expected_price' => '13',
                    'phone'          => '+84 4 3938 8388',
                    'profile_pic'    => 'https://media-cdn.tripadvisor.com/media/photo-s/02/7c/ef/19/jacksons-steakhouse.jpg',
                ],

                [
                    'category_id'    => '2',
                    'province_id'    => '2',
                    'name'           => 'Crystal Jade Palace',
                    'description'    => 'Authentic Chinese Taste, best place in town for Dimsum',
                    'address'        => '8 Do Duc Duc Road | Me Tri, Nam Tu Liem District, Hanoi ',
                    'open_time'      => '7.30 - 21.00 pm',
                    'expected_price' => '8',
                    'phone'          => '1234234589',
                    'profile_pic'    => 'https://media-cdn.tripadvisor.com/media/photo-o/05/b1/40/e0/crystal-jade-palace.jpg',
                ],

                [
                    'category_id'    => '3',
                    'province_id'    => '1',
                    'name'           => 'Old Quarter',
                    'description'    => 'Hanoi’s lively Old Quarter comprises nearly 40 streets packed with shops selling all kinds of goods, each street named for its primary good or service.',
                    'address'        => 'Hanoi',
                    'open_time'      => '08:00 - 17:00',
                    'expected_price' => '5',
                    'phone'          => '1234234589',
                    'profile_pic'    => 'https://media-cdn.tripadvisor.com/media/photo-o/09/32/1d/c4/old-quarter.jpg',
                ],

                [
                    'category_id'    => '3',
                    'province_id'    => '1',
                    'name'           => 'Vietnam Museum of Ethnology',
                    'description'    => 'Vietnam Museum of Ethnology is both a research centre and a public museum exhibiting the ethnic groups of Vietnam.',
                    'address'        => 'Nguyen Van Huyen road, Cau Giay district , Nghia Do, Cau Giay, Hanoi',
                    'open_time'      => '08:30 - 17:30',
                    'expected_price' => '2',
                    'phone'          => '+84 4 3756 2193',
                    'profile_pic'    => 'https://media-cdn.tripadvisor.com/media/photo-o/07/5b/cb/10/ricostruzione-tipiche.jpg',
                ],

                [
                    'category_id'    => '3',
                    'province_id'    => '1',
                    'name'           => 'Lake of the Restored Sword',
                    'description'    => 'Hoan Kiem Lake is a dynamic daily tableau, from morning walks amid locals doing exercises on the shore and sight-seeing opportunities in the vicinity',
                    'address'        => 'Hoan Kiem, Hanoi',
                    'open_time'      => 'All Day',
                    'expected_price' => '0',
                    'phone'          => '',
                    'profile_pic'    => 'https://media-cdn.tripadvisor.com/media/photo-w/02/2c/21/02/west-lake.jpg',
                ],
            ]
        );
    }
}
