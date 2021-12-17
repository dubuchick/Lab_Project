<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
=======

>>>>>>> 739a1955595fb5a302937677e6f3d3fd4bc63489
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'rolename' => 'Admin',
            ],
            [
                'rolename' => 'Member',
            ],
            [
                'rolename' => 'Guest',
            ],
        ]);
    }
}
