<?php

use Illuminate\Database\Seeder;

class ProvinceGalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('province_gallery')->delete();

        DB::table('province_gallery')->insert(
            [
                [
                    'province_id' => '1',
                    'img_url'     => 'HN-1.jpg',
                ],

                [
                    'province_id' => '1',
                    'img_url'     => 'HN-2.jpg',
                ],

                [
                    'province_id' => '1',
                    'img_url'     => 'HN-3.jpg',
                ],

                [
                    'province_id' => '1',
                    'img_url'     => 'HN-4.jpg',
                ],

                [
                    'province_id' => '1',
                    'img_url'     => 'HN-5.jpg',
                ],

                [
                    'province_id' => '1',
                    'img_url'     => 'HN-6.jpg',
                ],

                [
                    'province_id' => '1',
                    'img_url'     => 'HN-7.jpg',
                ],

                [
                    'province_id' => '2',
                    'img_url'     => 'DN-1.jpg',
                ],

                [
                    'province_id' => '2',
                    'img_url'     => 'DN-2.jpg',
                ],

                [
                    'province_id' => '2',
                    'img_url'     => 'DN-3.jpg',
                ],

                [
                    'province_id' => '2',
                    'img_url'     => 'DN-4.jpg',
                ],

                [
                    'province_id' => '2',
                    'img_url'     => 'DN-5.jpg',
                ],

                [
                    'province_id' => '2',
                    'img_url'     => 'DN-6.jpg',
                ],

                [
                    'province_id' => '2',
                    'img_url'     => 'DN-7.jpg',
                ],

                [
                    'province_id' => '3',
                    'img_url'     => 'NT-1.jpg',
                ],

                [
                    'province_id' => '3',
                    'img_url'     => 'NT-2.jpg',
                ],

                [
                    'province_id' => '3',
                    'img_url'     => 'NT-3.jpg',
                ],

                [
                    'province_id' => '3',
                    'img_url'     => 'NT-4.jpg',
                ],

                [
                    'province_id' => '3',
                    'img_url'     => 'NT-5.jpg',
                ],

                [
                    'province_id' => '3',
                    'img_url'     => 'NT-6.jpg',
                ],

                [
                    'province_id' => '3',
                    'img_url'     => 'NT-7.jpg',
                ],

                [
                    'province_id' => '4',
                    'img_url'     => 'SG-1.jpg',
                ],

                [
                    'province_id' => '4',
                    'img_url'     => 'SG-2.jpg',
                ],

                [
                    'province_id' => '4',
                    'img_url'     => 'SG-3.jpg',
                ],

                [
                    'province_id' => '4',
                    'img_url'     => 'SG-4.jpg',
                ],

                [
                    'province_id' => '4',
                    'img_url'     => 'SG-5.jpg',
                ],

                [
                    'province_id' => '4',
                    'img_url'     => 'SG-6.jpg',
                ],

                [
                    'province_id' => '4',
                    'img_url'     => 'SG-7.jpg',
                ],

                [
                    'province_id' => '5',
                    'img_url'     => 'Hue-1.jpg',
                ],

                [
                    'province_id' => '5',
                    'img_url'     => 'Hue-2.jpg',
                ],

                [
                    'province_id' => '5',
                    'img_url'     => 'Hue-3.jpg',
                ],

                [
                    'province_id' => '6',
                    'img_url'     => 'DL-1.jpg',
                ],

                [
                    'province_id' => '6',
                    'img_url'     => 'DL-2.jpg',
                ],

                [
                    'province_id' => '6',
                    'img_url'     => 'DL-3.jpg',
                ],

                [
                    'province_id' => '7',
                    'img_url'     => 'SP-1.jpg',
                ],

                [
                    'province_id' => '7',
                    'img_url'     => 'SP-2.jpg',
                ],

                [
                    'province_id' => '7',
                    'img_url'     => 'SP-3.jpg',
                ],

                [
                    'province_id' => '8',
                    'img_url'     => 'HL-1.jpg',
                ],

                [
                    'province_id' => '8',
                    'img_url'     => 'HL-2.jpg',
                ],

                [
                    'province_id' => '8',
                    'img_url'     => 'HL-3.jpg',
                ],

                [
                    'province_id' => '9',
                    'img_url'     => 'PQ-1.jpg',
                ],

                [
                    'province_id' => '9',
                    'img_url'     => 'PQ-2.jpg',
                ],

                [
                    'province_id' => '9',
                    'img_url'     => 'PQ-3.jpg',
                ],
            ]

        );
    }
}
