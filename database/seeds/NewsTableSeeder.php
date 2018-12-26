<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            [
                'title' => 'FreznoShop',
                'body' => 'FreznoShop continues to evolve step by step.<br>That\'s a sticky news btw.',
                'sticky' => true,
                'active' => true,
            ],
            [
                'title' => 'FreznoShop DevNews 1',
                'body' => 'After adding the skeleton for the shop we now can go on.',
                'sticky' => false,
                'active' => true,
            ],
            [
                'title' => 'FreznoShop DevNews 2',
                'body' => 'Ok, so now we set up the News. Good job...',
                'sticky' => false,
                'active' => true,
            ],
            [
                'title' => 'FreznoShop DevNews 3',
                'body' => 'This news is set to not active, so you should\'nt see it.',
                'sticky' => false,
                'active' => false,
            ],
        ];

        DB::table('news')->insert($news);
    }
}
