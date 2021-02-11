<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'title' => "Overview",
            'slug' => 'overview',
            'page_id' => 1,
            'section_id' => 2,
        ]);
        DB::table('menus')->insert([
			'title' => "Modernliving",
			'slug' => 'modernliving',
            'page_id' => 1,
            'section_id' => 2,
        ]);
        DB::table('menus')->insert([
			'title' => "Map",
			'slug' => 'map',
            'page_id' => 1,
            'section_id' => 2,
        ]);

        DB::table('menus')->insert([
			'title' => "Login",
			'slug' => 'login',
            'page_id' => 1,
            'section_id' => 2,
        ]);
    }
}
