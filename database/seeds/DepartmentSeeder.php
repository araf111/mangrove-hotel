<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
			'name' => "Management",
			'description' => 'Management',
        ]);
        
        DB::table('departments')->insert([
			'name' => "Accounts",
			'description' => 'Accounts',
        ]);
        
        DB::table('departments')->insert([
			'name' => "Marketing",
			'description' => 'Marketing',
        ]);
        
        DB::table('departments')->insert([
			'name' => "Admin",
			'description' => 'Admin',
		]);
    }
}
