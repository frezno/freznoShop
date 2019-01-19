<?php

use Illuminate\Database\Seeder;

class StockstatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stockstatuses = [
            ['status' => 'in stock'],
            ['status' => 'low stock'],
            ['status' => 'in stock next 7 days'],
            ['status' => 'sold out'],
            ['status' => 'ask for availability'],
        ];
    }
}
