<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
			'title' => "Home",
			'slug' => 'home',
        ]);
        DB::table('pages')->insert([
			'title' => "Footer",
			'slug' => 'footer',
        ]);
        
        DB::table('pages')->insert([
			'title' => "About Us",
			'slug' => 'about-us',
        ]);
        
        DB::table('pages')->insert([
			'title' => "Find a Job",
			'slug' => 'find-a-job',
        ]);
        
        DB::table('pages')->insert([
			'title' => "Publication",
			'slug' => 'publication',
        ]);
        
        DB::table('pages')->insert([
			'title' => "Investment",
			'slug' => 'investment',
        ]);
        
        DB::table('pages')->insert([
			'title' => "Investment Instruction",
			'slug' => 'investment-instruction',
        ]);
        
        DB::table('pages')->insert([
			'title' => "Phone & Social",
			'slug' => 'Phone-&amp;-social',
		]);
    }
}
