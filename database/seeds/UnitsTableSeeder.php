<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            [
                'uom' => 'pc',
                'description' => 'Piece(s)'
            ],
            [
                'uom' => 'pr',
                'description' => 'Pair(s)'
            ],
            [
                'uom' => 'kit',
                'description' => 'Kit(s)'
            ],
            [
                'uom' => 'set',
                'description' => 'Set(s)'
            ],
            [
                'uom' => 'oz',
                'description' => 'Ounces'
            ],
            [
                'uom' => 'lb',
                'description' => 'Pound(s)'
            ],
            [
                'uom' => 'gal',
                'description' => 'Gallon'
            ],
        ];

        DB::table('units')->insert($units);
    }
}
