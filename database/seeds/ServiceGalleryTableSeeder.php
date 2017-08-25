<?php

use Illuminate\Database\Seeder;

class ServiceGalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_gallerys')->delete();

        DB::table('service_gallerys')->insert(
            [
                [
                    'service_id' => '1',
                    'img_url'    => 'https://media-cdn.tripadvisor.com/media/photo-o/0d/40/c6/c5/paradise-boutique-hotel.jpg'
                ],

                [
                    'service_id' => '1',
                    'img_url'    => 'https://media-cdn.tripadvisor.com/media/photo-o/0f/70/16/3a/suite.jpg'
                ],

                [
                    'service_id' => '1',
                    'img_url'    => 'https://media-cdn.tripadvisor.com/media/photo-w/0f/1c/f8/94/queen-bed-with-wooden.jpg'
                ],

                [
                    'service_id' => '2',
                    'img_url'    => 'https://media-cdn.tripadvisor.com/media/photo-o/09/90/af/f7/recreational-facilities.jpg'
                ],

                [
                    'service_id' => '3',
                    'img_url'    => 'https://media-cdn.tripadvisor.com/media/photo-w/0f/a3/ca/f7/the-grand-suite.jpg'
                ],

                [
                    'service_id' => '4',
                    'img_url'    => 'https://media-cdn.tripadvisor.com/media/photo-o/01/c1/7d/ba/hanoi-tirant-hotel.jpg'
                ],

                [
                    'service_id' => '5',
                    'img_url'    => 'https://media-cdn.tripadvisor.com/media/photo-o/0e/c6/12/a5/executive-room.jpg'
                ],

                [
                    'service_id' => '5',
                    'img_url'    => 'https://media-cdn.tripadvisor.com/media/photo-w/0f/83/d4/e8/photo0jpg.jpg'
                ],

            ]
        );
    }
}
