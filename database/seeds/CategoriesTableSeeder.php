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
            [
                'parent_id' => 0,
                'parent_group_id' => 0,
                'name' => 'Gear',
                'slug' => 'gear',
                'sortorder' => 1
            ],
            [
                'parent_id' => 0,
                'parent_group_id' => 0,
                'name' => 'Parts',
                'slug' => 'parts',
                'sortorder' => 2
            ],
            [
                'parent_id' => 0,
                'parent_group_id' => 0,
                'name' => 'Accessories',
                'slug' => 'accessories',
                'sortorder' => 3
            ],
            [
                'parent_id' => 0,
                'parent_group_id' => 0,
                'name' => 'News',
                'slug' => 'news',
                'sortorder' => 4
            ],
            [
                'parent_id' => 1,
                'parent_group_id' => 1,
                'name' => 'Jerseys',
                'slug' => 'jerseys',
                'sortorder' => 1
            ],
            [
                'parent_id' => 1,
                'parent_group_id' => 1,
                'name' => 'Pants',
                'slug' => 'pants',
                'sortorder' => 2
            ],
            [
                'parent_id' => 1,
                'parent_group_id' => 1,
                'name' => 'Gloves',
                'slug' => 'gloves',
                'sortorder' => 3
            ],
            [
                'parent_id' => 1,
                'parent_group_id' => 1,
                'name' => 'Boots',
                'slug' => 'boots',
                'sortorder' => 4
            ],
            [
                'parent_id' => 1,
                'parent_group_id' => 2,
                'name' => 'Suspension',
                'slug' => 'suspension',
                'sortorder' => 1
            ],
            [
                'parent_id' => 1,
                'parent_group_id' => 2,
                'name' => 'Tires',
                'slug' => 'tires',
                'sortorder' => 2
            ],
            [
                'parent_id' => 1,
                'parent_group_id' => 2,
                'name' => 'Oil and Grease',
                'slug' => 'oil-and-grease',
                'sortorder' => 3
            ],
            [
                'parent_id' => 1,
                'parent_group_id' => 3,
                'name' => 'T-Shirts',
                'slug' => 't-shirts',
                'sortorder' => 1
            ],
            [
                'parent_id' => 1,
                'parent_group_id' => 3,
                'name' => 'Caps',
                'slug' => 'caps',
                'sortorder' => 2
            ],
            [
                'parent_id' => 8,
                'parent_group_id' => 1,
                'name' => 'Offroad',
                'slug' => 'offroad-boots',
                'sortorder' => 1
            ],
            [
                'parent_id' => 8,
                'parent_group_id' => 1,
                'name' => 'Street',
                'slug' => 'onroad-boots',
                'sortorder' => 2
            ],
            [
                'parent_id' => 10,
                'parent_group_id' => 2,
                'name' => 'Offroad',
                'slug' => 'offroad-tires',
                'sortorder' => 1
            ],
            [
                'parent_id' => 10,
                'parent_group_id' => 2,
                'name' => 'Street',
                'slug' => 'onroad-tires',
                'sortorder' => 2
            ],
            [
                'parent_id' => 11,
                'parent_group_id' => 2,
                'name' => 'Motor Oil',
                'slug' => 'motor-oil',
                'sortorder' => 1
            ],
            [
                'parent_id' => 11,
                'parent_group_id' => 2,
                'name' => 'Suspension Oil',
                'slug' => 'suspension-oil',
                'sortorder' => 2
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
