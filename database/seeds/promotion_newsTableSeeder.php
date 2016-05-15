<?php

use Illuminate\Database\Seeder;

class promotion_newsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotion_news')->insert([
            [
                'name' => str_random(20),
                'key' => str_random(10),
                'begin_date' => '2016-05-25',
                'end_date' => '2016-06-01',
                'provider_id'=> '1',
                'content'=> str_random(200),
                'image' => 'public/assets/app/images/testimage.jpg',
            ],
            [
                'name' => str_random(20),
                'key' => str_random(10),
                'begin_date' => '2016-05-25',
                'end_date' => '2016-06-01',
                'provider_id'=> '1',
                'content'=> str_random(200),
                'image' => 'public/assets/app/images/testimage2.jpg',
            ],
            [
                'name' => str_random(20),
                'key' => str_random(10),
                'begin_date' => '2016-05-25',
                'end_date' => '2016-06-01',
                'provider_id'=> '1',
                'content'=> str_random(200),
                'image' => 'public/assets/app/images/testimage3.jpg',
            ],
            [
                'name' => str_random(20),
                'key' => str_random(10),
                'begin_date' => '2016-05-25',
                'end_date' => '2016-06-01',
                'provider_id'=> '1',
                'content'=> str_random(200),
                'image' => 'public/assets/app/images/testimage4.jpg',
            ]
        ]);
    }
}
