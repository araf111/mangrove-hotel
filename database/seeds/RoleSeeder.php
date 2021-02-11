<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('roles')->insert([
			'name' => "superAdmin",
			'label' => 'Super Admin',
		]);

		DB::table('roles')->insert([
			'name' => "admin",
			'label' => 'Administrators',
		]);

		DB::table('roles')->insert([
			'name' => "moderator",
			'label' => 'Moderator',
		]);

		DB::table('roles')->insert([
			'name' => "employee",
			'label' => 'Employee',
		]);

		
		//Insert User Roles
		DB::table('role_user')->insert([
			'role_id' => 1,
			'user_id' => 1,			
		]);
		DB::table('role_user')->insert([
			'role_id' => 2,
			'user_id' => 2,			
		]);
		DB::table('role_user')->insert([
			'role_id' => 2,
			'user_id' => 3,			
		]);
		DB::table('role_user')->insert([
			'role_id' => 2,
			'user_id' => 4,			
		]);
		DB::table('role_user')->insert([
			'role_id' => 3,
			'user_id' => 5,			
		]);

	}
}
