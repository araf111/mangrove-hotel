<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mangrove Chairman',
            'department_id'=>1,
            'designation_id'=>1,
            'mobile' =>'+8801798161526',
            'email' => 'chairman@mangrove-hotel.com',
            'password' => Hash::make('mangrove123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mangrove CEO',
            'department_id'=>1,
            'designation_id'=>2,
            'mobile' =>'+8801798161525',
            'email' => 'ceo@mangrove-hotel.com',
            'password' => Hash::make('mangrove123'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'Mangrove MD',
            'department_id'=>1,
            'designation_id'=>3,
            'mobile' =>'+8801798161527',
            'email' => 'md@mangrove-hotel.com',
            'password' => Hash::make('mangrove123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mangrove Director',
            'department_id'=>1,
            'designation_id'=>4,
            'mobile' =>'+8801798161528',
            'email' => 'director@mangrove-hotel.com',
            'password' => Hash::make('mangrove123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Marketing Manager',
            'department_id'=>3,
            'designation_id'=>6,
            'mobile' =>'+8801798161529',
            'email' => 'marketing@mangrove-hotel.com',
            'password' => Hash::make('mangrove123'),
        ]);
    }
}
