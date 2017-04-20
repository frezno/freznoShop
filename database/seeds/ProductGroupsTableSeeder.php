<?php

use Illuminate\Database\Seeder;

class ProductGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_groups = [
            ['pg_name' => 'FOX 360 Jersey Black', 'teaser' => 1],
            ['pg_name' => 'FOX 360 Jersey Red'],
            ['pg_name' => 'FOX 360 Jersey Yellow'],
            ['pg_name' => 'FOX HC Jersey Blue', 'teaser' => 1],
            ['pg_name' => 'FOX HC Jersey Green'],
            ['pg_name' => 'FOX HC Jersey Orange'],
            ['pg_name' => 'FOX 360 Pant Black'],
            ['pg_name' => 'FOX 360 Pant Red', 'teaser' => 1],
            ['pg_name' => 'FOX 360 Pant Yellow'],
            ['pg_name' => 'FOX 180 Pant Blue'],
            ['pg_name' => 'FOX 180 Pant Green'],
            ['pg_name' => 'FOX 180 Pant Orange', 'teaser' => 1],
            ['pg_name' => 'FOX V1 Helmet', 'teaser' => 1],
            ['pg_name' => 'FOX V2 Helmet', 'teaser' => 1],
            ['pg_name' => 'FOX V3 Helmet', 'teaser' => 1],
            ['pg_name' => 'FOX Kids V1 Helmet'],
            ['pg_name' => 'FOX Kids V2 Helmet'],
            ['pg_name' => 'Alpinestars Tech5 Boots'],
            ['pg_name' => 'Alpinestars Tech7 Boots', 'teaser' => 1],
            ['pg_name' => 'FOX Instinct Boots', 'teaser' => 1],
            ['pg_name' => 'Alpinestars Tech3S Boots'],
            ['pg_name' => 'SKF Fork Seal Kits Kayaba'],
            ['pg_name' => 'SKF Fork Seal Kits Showa'],
            ['pg_name' => 'SKF Fork Seal Kits WP', 'teaser' => 1],
            ['pg_name' => 'Fork Inner Bushings', 'teaser' => 1],
            ['pg_name' => 'Fork Outer Bushings', 'teaser' => 1],
            ['pg_name' => 'SKF Shock Seal Heads', 'teaser' => 1],
            ['pg_name' => 'Honda Airfilter', 'teaser' => 1],
            ['pg_name' => 'Kawasaki Airfilter'],
            ['pg_name' => 'Suzuki Airfilter'],
            ['pg_name' => 'Yamaha Airfilter'],
            ['pg_name' => 'Honda Oilfilter'],
            ['pg_name' => 'Kawasaki Oilfilter', 'teaser' => 1],
            ['pg_name' => 'Suzuki Oilfilter'],
            ['pg_name' => 'Yamaha Oilfilter'],
            ['pg_name' => 'Honda Brakepads'],
            ['pg_name' => 'Kawasaki Brakepads'],
            ['pg_name' => 'Suzuki Brakepads'],
            ['pg_name' => 'Yamaha Brakepads', 'teaser' => 1],
            ['pg_name' => 'Nano Tech 4+'],
            ['pg_name' => 'Offroad 4+ Ester Tech', 'teaser' => 1],
            ['pg_name' => 'Synthec 4+ Esther Tech'],
            ['pg_name' => 'HPX Fork Oil', 'teaser' => 1],
            ['pg_name' => 'GPR Shock Oil'],
            ['pg_name' => 'Airfilter Care'],
            ['pg_name' => 'Chain Care', 'teaser' => 1],
            ['pg_name' => 'Greases'],
        ];

        DB::table('product_groups')->insert($product_groups);
    }
}
