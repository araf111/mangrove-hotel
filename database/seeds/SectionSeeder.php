<?php

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
			'title' => "Home Sections",
			'page_id' => 1,
        ]);

        DB::table('sections')->insert([
			'title' => "Details Sections",
			'page_id' => 1,
        ]);
    }
}
