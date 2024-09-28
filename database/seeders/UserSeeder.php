<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Max Bukator', 'email' => 'maxon4ik@gooooogle.com', 'password'=> bcrypt('123456789maxon4ik')],
            ['name' => 'Travis Scott', 'email' => 'ILoveKylieJenner@cactusgang.com', 'password'=> bcrypt('ILoveKylieJenner')],
        ]);
    }
}
