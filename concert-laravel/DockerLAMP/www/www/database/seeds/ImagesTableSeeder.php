<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'path' => 'tomorrow1.jpg',
                'concert_id' => '1'
            ],
            [
                'path' => 'tomorrow2.jpg',
                'concert_id' => '1'
            ],
            [
                'path' => 'rally1.jpg',
                'concert_id' => '2'
            ],
            [
                'path' => 'rally2.jpg',
                'concert_id' => '2'
            ]
        ]);
    }
}
