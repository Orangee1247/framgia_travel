<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->delete();

        DB::table('provinces')->insert(
            [
                [
                    'name'    => 'Ha Noi',
                    'img_url' => 'https://media.licdn.com/mpr/mpr/AAEAAQAAAAAAAAtuAAAAJGI5YTk0MGVjLTFjZGUtNDhmYi05YTU3LTdlMmYxNTE4ZmJhMA.jpg'
                ],

                [
                    'name'    => 'Da Nang',
                    'img_url' => 'https://www.vietravel.com/images/news/4-le-hoi-phao-hoa-QT-Da-Nang.jpg',
                ],

                [
                    'name'    => 'Nha Trang',
                    'img_url' => 'https://taxiairport.vn/uploads/blog_post/5a7ce1fb4cabff6a0df4dfeda0d46241.jpg',
                ],
                [
                    'name'    => 'TP HCM',
                    'img_url' => 'http://cdn01.diadiemanuong.com/ddau/640x/lap-team-can-quet-chuyen-foodtour-danh-cho-nhung-ai-an-le-304-o-sai-gon-b3dc3404635975382765576295.jpg',
                ],
                [
                    'name'    => 'Hue',
                    'img_url' => 'http://www.vietnamgalaxytravel.com/wp-content/uploads/2015/08/hue-anh-to-1.jpg',
                ],
                [
                    'name'    => 'Da Lat',
                    'img_url' => 'http://khachsandalat.pro/wp-content/uploads/2016/10/da-lat-lam-dong-3.jpg',
                ],
                [
                    'name'    => 'Sapa',
                    'img_url' => 'https://cdn3.ivivu.com/2014/10/du-lich-sa-pa-cam-nang-tu-a-den-z-iVIVU.com-19.jpg',
                ],
                [
                    'name'    => 'Ha Long',
                    'img_url' => 'https://cdn3.ivivu.com/2013/09/du-lich-ha-long-ivivu-6.png'
                ],
                [
                    'name'    => 'Phu Quoc',
                    'img_url' => 'http://dulichdaophuquoc.org/wp-content/uploads/2017/01/dao-phu-quoc.jpg',
                ],
            ]
        );
    }
}
