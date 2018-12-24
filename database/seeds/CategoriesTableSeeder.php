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
        ];

        DB::table('categories')->insert($categories);
    }
}
