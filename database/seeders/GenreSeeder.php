<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name'=>'Horror'],//1
            ['name'=>'Drama'],//2
            ['name'=>'Graphic Novel'],
            ['name'=>'Anthology'],
            ['name'=>'Mystery'],//5
            ['name'=>'Romance'],
            ['name'=>'Novel'],
            ['name'=>'Young-adult fiction'],//8
            ['name'=>'Action and adventure'],
            ['name'=>'Fiction'],
            ['name'=>'Coming-of-age'],
            ['name'=>'Crime'],
            ['name'=>'Comic book'],//13
            ['name'=>'Science fiction'],
            ['name'=>'Fairytale'],
            ['name'=>'Poetry'],
            ['name'=>'Thriller'],
        ]);
    }
}
