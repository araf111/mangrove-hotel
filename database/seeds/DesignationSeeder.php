<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insert([
			'department_id' => 1,
            'name' => 'Chairman',            
        ]);
        DB::table('designations')->insert([
            'department_id' => 1,
            'top_designation_id'=>1,
            'name' => 'CEO',            
        ]);
        DB::table('designations')->insert([
            'department_id' => 1,
            'top_designation_id'=>2,
            'name' => 'MD',            
        ]);
        DB::table('designations')->insert([
            'department_id' => 1,
            'top_designation_id'=>3,
            'name' => 'Director',            
        ]);
        
        DB::table('designations')->insert([
            'department_id' => 2,
            'top_designation_id'=>4,
            'name' => 'Account Manager',            
        ]);
        DB::table('designations')->insert([
            'department_id' => 3,
            'top_designation_id'=>4,
            'name' => 'Marketing Manager',            
        ]);

        DB::table('designations')->insert([
            'department_id' => 3,
            'top_designation_id'=>6,
            'name' => 'Marketing Officer',            
        ]);
    }
}
