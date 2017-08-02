<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(
            [
                [
                    'email'    => 'admin@gmail.com',
                    'name'     => 'admin',
                    'password' => bcrypt('123456'),
                    'gender'   => 'Male',
                    'level'    => '1',
                    'phone' => '0943901988',
                    'address' => '117 Hang Bong, Hoan Kiem, Ha Noi',
                    'follower' => '0',
                    'following' => '0',
                    'date_of_birth' => '19961104',
                    'self_describe' => 'I am an admin',
                ],

                [
                    'email'    => 'duong@gmail.com',
                    'name'     => 'duong',
                    'password' => bcrypt('123456'),
                    'gender'   => 'Male',
                    'level'    => '0',
                    'phone' => '0943901988',
                    'address' => '117 Hang Bong, Hoan Kiem, Ha Noi',
                    'follower' => '0',
                    'following' => '0',
                    'date_of_birth' => '19961104',
                    'self_describe' => 'I am an tourist',
                ],

                [
                    'email'    => 'pho.duc.dat@framgia.com',
                    'name'     => 'Pho Duc Dat',
                    'password' => bcrypt('123456'),
                    'gender'   => 'Male',
                    'level'    => '0',
                    'phone' => '0943901988',
                    'address' => '117 Hang Bong, Hoan Kiem, Ha Noi',
                    'follower' => '8888',
                    'following' => '9999',
                    'date_of_birth' => '19961104',
                    'self_describe' => 'I am an tourist',
                ],
            ]
        );
    }
}
