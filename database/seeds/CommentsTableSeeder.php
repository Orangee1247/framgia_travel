<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();

        DB::table('comments')->insert(
            [
                [
                    'user_id'    => '1',
                    'service_id' => '1',
                    'title'      => 'test1',
                    'content'    => 'this is a test string 1',
                    'rate_point' => '4',
                ],

                [
                    'user_id'    => '2',
                    'service_id' => '1',
                    'title'      => 'test2',
                    'content'    => 'this is a test string 2',
                    'rate_point' => '3',
                ],

                [
                    'user_id'    => '3',
                    'service_id' => '1',
                    'title'      => 'test4',
                    'content'    => 'this is a test string 3',
                    'rate_point' => '5',
                ],
            ]
        );
    }
}
