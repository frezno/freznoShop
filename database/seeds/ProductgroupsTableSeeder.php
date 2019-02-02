<?php

use Illuminate\Database\Seeder;

class ProductgroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Thor Pulse Stunner Jersey',
                'teaser' => false,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Thor Hallmann Pulse Jersey',
                'teaser' => true,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Thor Sector Shear Jersey',
                'teaser' => false,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Thor Pulse Stunner Pant',
                'teaser' => false,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Thor Pulse Stunner Pant',
                'teaser' => true,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Thor Spectrum Gloves',
                'teaser' => false,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Thor Rebound Gloves',
                'teaser' => true,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Alpinestars Tech 10 Boot',
                'teaser' => true,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Alpinestars Supertech R Boot',
                'teaser' => true,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'SKF Forkseal Kits Kayaba',
                'teaser' => true,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'SKF Forkseal Kits WP',
                'teaser' => false,
                'recommended' => false,
                'active' => true,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Mitas C-18 Front Tire',
                'teaser' => false,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Mitas EF-07 Rear Tire',
                'teaser' => true,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Mitas MC-50 M-Racer Front Tire',
                'teaser' => false,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Mitas MC-50 M-Racer Rear Tire',
                'teaser' => true,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Putoline EsterTech 10W-40',
                'teaser' => true,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Putoline EsterTech 15W-50',
                'teaser' => false,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Putoline HPX 5 R',
                'teaser' => true,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Putoline HPX 7.5 R',
                'teaser' => false,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Split Cry Baby T-Shirt',
                'teaser' => true,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Fox Night Rider T-Shirt',
                'teaser' => true,
                'recommended' => false,
                'active' => true
            ],
            [
                'name' => 'Fox Legacy Flexfit Cap',
                'teaser' => true,
                'recommended' => false,
                'active' => true
            ],
        ];

        DB::table('productgroups')->insert($data);
    }
}
