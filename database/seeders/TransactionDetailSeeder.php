<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactiondetails')->insert([
            [
                'bookid'=>'1',
                'transactionid'=>'1',
                'quantity'=> '3'
            ],
            [
                'bookid'=>'8',
                'transactionid'=>'2',
                'quantity'=> '1'
            ]
        ]);
    }
}
