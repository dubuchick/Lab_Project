<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'roleid' => 1,
                'email' => 'jonathan@gmail.com',
                'password' => bcrypt('password'),
                'fullname' => 'Jonathan',
            ],
            [
                'roleid' => 1,
                'email' => 'leonie@gmail.com',
                'password' => bcrypt('password'),
                'fullname' => 'Leonie',
            ],
            [
                'roleid' => 2,
                'email' => 'harry@gmail.com',
                'password' => bcrypt('password'),
                'fullname' => 'Harry',
            ],
            [
                'roleid' => 2,
                'email' => 'potter@gmail.com',
                'password' => bcrypt('password'),
                'fullname' => 'Potter',
            ],
            [
                'roleid' => 2,
                'email' => 'bray@gmail.com',
                'password' => bcrypt('password'),
                'fullname' => 'Bray',
            ],
        ]);
    }
}
