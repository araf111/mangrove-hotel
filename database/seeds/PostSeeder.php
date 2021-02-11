<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => "Logo",
            'slug' => 'log',
            'page_id' => 1,
            'section_id' => 1,
            'menu_id' => 0,
        ]);

        DB::table('posts')->insert([
            'title' => "Banners",
            'slug' => 'banners',
            'page_id' => 1,
            'section_id' => 1,
            'menu_id' => 0,
        ]);
    }
}
