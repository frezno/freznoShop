<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['parent_id' => 0, 'c_group' => 0, 'name' => 'Gear', 'slug' => 'gear', 'sortorder' => 1, 'active' => 1],
            ['parent_id' => 0, 'c_group' => 0, 'name' => 'Parts', 'slug' => 'parts', 'sortorder' => 2, 'active' => 1],
            ['parent_id' => 0, 'c_group' => 0, 'name' => 'Casual', 'slug' => 'casual', 'sortorder' => 3, 'active' => 1],
            ['parent_id' => 0, 'c_group' => 0, 'name' => 'News', 'slug' => 'news', 'sortorder' => 4, 'active' => 1],
            ['parent_id' => 1, 'c_group' => 1, 'name' => 'Clothes', 'slug' => 'clothes', 'sortorder' => 1, 'active' => 1],
            ['parent_id' => 1, 'c_group' => 1, 'name' => 'Helmets', 'slug' => 'helmets', 'sortorder' => 2, 'active' => 1],
            ['parent_id' => 1, 'c_group' => 1, 'name' => 'Boots', 'slug' => 'boots', 'sortorder' => 3, 'active' => 1],
            ['parent_id' => 1, 'c_group' => 2, 'name' => 'Suspension', 'slug' => 'suspension', 'sortorder' => 1, 'active' => 1],
            ['parent_id' => 1, 'c_group' => 2, 'name' => 'Maintenance', 'slug' => 'maintenance', 'sortorder' => 2, 'active' => 1],
            ['parent_id' => 1, 'c_group' => 2, 'name' => 'Oils', 'slug' => 'oils', 'sortorder' => 3, 'active' => 1],
            ['parent_id' => 1, 'c_group' => 3, 'name' => 'T-Sirts', 'slug' => 'tshirts', 'sortorder' => 1, 'active' => 1],
            ['parent_id' => 1, 'c_group' => 3, 'name' => 'Caps', 'slug' => 'caps', 'sortorder' => 2, 'active' => 1],
            ['parent_id' => 5, 'c_group' => 1, 'name' => 'Jerseys', 'slug' => 'jerseys', 'sortorder' => 1, 'active' => 1],
            ['parent_id' => 5, 'c_group' => 1, 'name' => 'Pants', 'slug' => 'pants', 'sortorder' => 2, 'active' => 1],
            ['parent_id' => 6, 'c_group' => 1, 'name' => 'Adults', 'slug' => 'adults-helmets', 'sortorder' => 1, 'active' => 1],
            ['parent_id' => 6, 'c_group' => 1, 'name' => 'Kids', 'slug' => 'kids-helmets', 'sortorder' => 2, 'active' => 1],
            ['parent_id' => 7, 'c_group' => 1, 'name' => 'Adults', 'slug' => 'adults-boots', 'sortorder' => 1, 'active' => 1],
            ['parent_id' => 7, 'c_group' => 1, 'name' => 'Kids', 'slug' => 'kids-boots', 'sortorder' => 2, 'active' => 1],
            ['parent_id' => 8, 'c_group' => 2, 'name' => 'Fork', 'slug' => 'fork-parts', 'sortorder' => 1, 'active' => 1],
            ['parent_id' => 8, 'c_group' => 2, 'name' => 'Shock', 'slug' => 'shock-parts', 'sortorder' => 2, 'active' => 1],
            ['parent_id' => 9, 'c_group' => 2, 'name' => 'Airfilter', 'slug' => 'airfilter', 'sortorder' => 1, 'active' => 1],
            ['parent_id' => 9, 'c_group' => 2, 'name' => 'Oilfilter', 'slug' => 'oilfilter', 'sortorder' => 2, 'active' => 1],
            ['parent_id' => 9, 'c_group' => 2, 'name' => 'Brakepads', 'slug' => 'brakepads', 'sortorder' => 3, 'active' => 1],
            ['parent_id' => 10, 'c_group' => 2, 'name' => 'Engine Oils', 'slug' => 'engine-oils', 'sortorder' => 1, 'active' => 1],
            ['parent_id' => 10, 'c_group' => 2, 'name' => 'Suspension Oils', 'slug' => 'suspension-oils', 'sortorder' => 2, 'active' => 1],
            ['parent_id' => 10, 'c_group' => 2, 'name' => 'Maintenance', 'slug' => 'bike-maintenance', 'sortorder' => 3, 'active' => 1],
        ];

        DB::table('categories')->insert($categories);
    }
}
