<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufacturers = [
            [
                'name' => 'Thor',
                'logo' => 'thor_logo.jpg'
            ],
            [
                'name' => 'Alpinestars',
                'logo' => null
            ],
            [
                'name' => 'Fox',
                'logo' => null
            ],
            [
                'name' => 'Split',
                'logo' => null
            ],
            [
                'name' => 'Mitas',
                'logo' => 'mitas_logo.jpg'
            ],
            [
                'name' => 'Putoline',
                'logo' => 'putoline_logo.jpg'
            ],
            [
                'name' => 'SKF',
                'logo' => 'skf_logo'
            ],
        ];

        DB::table('manufacturers')->insert($manufacturers);
    }
}
