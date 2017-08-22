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
                    'name'        => 'Ha Noi',
                    'img_url'     => 'https://media.licdn.com/mpr/mpr/AAEAAQAAAAAAAAtuAAAAJGI5YTk0MGVjLTFjZGUtNDhmYi05YTU3LTdlMmYxNTE4ZmJhMA.jpg',
                    'bg_url'      => 'bg-HN.jpg',
                    'description' => 'The charming Vietnamese capital has aged well, preserving the Old Quarter, monuments and colonial architecture, while making room for modern developments alongside. Hanoi may have shrugged off several former names, including Thang Long, or "ascending dragon", but it hasn\'t forgotten its past, as sites such as Ho Chi Minh\'s Mausoleum and Hoa Lo Prison attest. Lakes, parks, shady boulevards and more than 600 temples and pagodas add to the appeal of this city, which is easily explored by taxi.'
                ],

                [
                    'name'        => 'Da Nang',
                    'img_url'     => 'https://www.vietravel.com/images/news/4-le-hoi-phao-hoa-QT-Da-Nang.jpg',
                    'bg_url'      => 'bg-DN.jpg',
                    'description' => 'Da Nang is laid-back and friendly, maybe because everyone you meet has just finished an amazing meal. Culinary tours are a hugely popular way to experience literal local flavor. After you’ve stuffed yourself with bold noodle soups and savory street foods, walk it off by exploring the limestone caves and Buddhist grottos of the Marble Mountains.'
                ],

                [
                    'name'        => 'Nha Trang',
                    'img_url'     => 'https://taxiairport.vn/uploads/blog_post/5a7ce1fb4cabff6a0df4dfeda0d46241.jpg',
                    'bg_url'      => 'bg-NT.jpg',
                    'description' => 'Nha Trang is best known for its beautiful sandy beaches. But visitors will also find amusement parks, mud baths, golf, and the historic Po Ngar temple complex, as well as a variety of hotels and restaurants. Adventurous foodies can sample bun cha ca, a soup made from sailfish and jellyfish.'
                ],
                [
                    'name'        => 'TP HCM',
                    'img_url'     => 'http://cdn01.diadiemanuong.com/ddau/640x/lap-team-can-quet-chuyen-foodtour-danh-cho-nhung-ai-an-le-304-o-sai-gon-b3dc3404635975382765576295.jpg',
                    'bg_url'      => 'bg-SG.jpg',
                    'description' => 'Vietnam\'s bustling largest city sets the cultural and economic pace for the country. The former Saigon boasts charming French colonial architecture and wide boulevards, usually thronged and choked with traffic. Taxis are an option for seeing the sprawling city. The War Remnants Museum shows the Vietnam War through Vietnamese eyes. Don\'t miss the impressive Jade Emperor Pagoda. Go to the frenetic Ben Thanh Market for food, flowers or frogs. Take a tour through the Mekong Delta, past rice paddies and houseboats.'
                ],
                [
                    'name'        => 'Hue',
                    'img_url'     => 'http://www.vietnamgalaxytravel.com/wp-content/uploads/2015/08/hue-anh-to-1.jpg',
                    'bg_url'      => 'bg-Hue.jpg',
                    'description' => 'Hue is clustered around the Perfume River, which splits the capital of the Nguyễn Dynasty in two. There are endless must-see historic sites, especially those that are UNESCO World Heritage designated. Sightseeing can include the ornate Imperial Citadel, colorful Thanh Toan Bridge, royal tombs and the Forbidden Purple City. Spend a moment in quiet contemplation if you visit Hue Jungle Crevice, where thousands of citizens were pushed to their deaths.'
                ],
                [
                    'name'        => 'Da Lat',
                    'img_url'     => 'http://khachsandalat.pro/wp-content/uploads/2016/10/da-lat-lam-dong-3.jpg',
                    'bg_url'      => 'bg-DL.jpg',
                    'description' => 'This former colonial resort provides a respite from Southern Vietnam\'s year-round swelter. The town is full of beautiful French-era buildings and surrounded by pine trees and farms growing exotic vegetables and flowers. It\'s worth the trip just to escape the heat for a few days.'
                ],
                [
                    'name'        => 'Sapa',
                    'img_url'     => 'https://cdn3.ivivu.com/2014/10/du-lich-sa-pa-cam-nang-tu-a-den-z-iVIVU.com-19.jpg',
                    'bg_url'      => 'bg-SP.jpg',
                    'description' => 'The northwest market town of Sapa is colourful and charming, providing the perfect oasis in the midst of a strenuous mountain trek or rice-paddy tour. The Gothic stone church at the centre of town is a bull’s-eye in the centre of shops and stalls, serving as a reminder of the town’s French missionary influence. Dine on Vietnamese or European-inspired cuisine downtown, and don’t miss the Saturday night "love market," one of the most potent—and strictest—single’s nights imaginable.'
                ],
                [
                    'name'        => 'Ha Long',
                    'img_url'     => 'https://cdn3.ivivu.com/2013/09/du-lich-ha-long-ivivu-6.png',
                    'bg_url'      => 'bg-HL.jpg',
                    'description' => ''
                ],
                [
                    'name'        => 'Phu Quoc',
                    'img_url'     => 'http://dulichdaophuquoc.org/wp-content/uploads/2017/01/dao-phu-quoc.jpg',
                    'bg_url'      => 'bg-PQ.jpg',
                    'description' => 'Soak up the sun and some Vietnamese culture on Phu Quoc Island, where white sands and tropical waters entice beachgoers from all over the globe. Snorkeling, scuba diving and fishing are the most popular water sports here, though jet-skiing, wind sailing and squid fishing—yes, squid fishing—are also at your holiday-making fingertips. Check out the early-morning Duong Dong Market for an authentic local experience.'
                ],
            ]
        );
    }
}
