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
        DB::table('users')->insert([
            'firstname' => 'Jan',
            'lastname' => 'Janssens',
            'email' => 'JanJannsens@gmail.com',
            'password' => bcrypt('Azerty123'),
            'role_id' => 1
        ]);

        DB::table('users')->insert([
            'firstname' => 'Bart',
            'lastname' => 'Bartens',
            'email' => 'BartBartens@gmail.com',
            'password' => bcrypt('Azerty123'),
            'role_id' => 1
        ]);

        DB::table('users')->insert([
            'firstname' => 'Yens',
            'lastname' => 'De Fraeye',
            'email' => 'Yensdefraeye@gmail.com',
            'password' => bcrypt('Azerty123'),
            'role_id' => 2
        ]);
    }
}
