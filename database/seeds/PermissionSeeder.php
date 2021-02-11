<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		//Permisions

		$permissions = [
			[
				'name' => "access-dashboard",
				'label' => 'Access Dashboard',
				'category' => 'settings',
			],
			[
				'name' => "manage-users",
				'label' => 'Manage Users',
				'category' => 'settings',
			],
			[
				'name' => "manage-roles",
				'label' => 'Manage Roles',
				'category' => 'settings',
			],
			[
				'name' => "manage-departments",
				'label' => 'Manage Departments',
				'category' => 'settings',
			],
			[
				'name' => "manage-designations",
				'label' => 'Manage Designations',
				'category' => 'settings',
			],
			[
				'name' => "manage-backup",
				'label' => 'Manage backup',
				'category' => 'settings',
			],
			[
				'name' => "manage-cms",
				'label' => 'Manage Web Content',
				'category' => 'cms',
			],
			[
				'name' => "list-investor",
				'label' => 'List investor',
				'category' => 'investor',
			],
			[
				'name' => "view-investor",
				'label' => 'Show investor',
				'category' => 'investor',
			],
			[
				'name' => "create-investor",
				'label' => 'Create investor',
				'category' => 'investor',
			],
			[
				'name' => "update-investor",
				'label' => 'Edit investor',
				'category' => 'investor',
			],
			[
				'name' => "delete_investor",
				'label' => 'Delete investor',
				'category' => 'investor',
			]
		];

		foreach ($permissions as $permission) {
			Permission::create(
					[
						'name' => $permission['name'],
						'label' => $permission['label'],
						'category' => $permission['category'] 
					]
				);
	   	}

		//Insert User Roles

		DB::table('permission_role')->insert([
			'permission_id' => 1,
			'role_id' => 2,			
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 1,
			'role_id' => 3,			
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 1,
			'role_id' => 4,			
		]);

		DB::table('permission_role')->insert([
			'permission_id' => 2,
			'role_id' => 2,			
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 3,
			'role_id' => 2,			
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 4,
			'role_id' => 2,			
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 5,
			'role_id' => 2,			
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 6,
			'role_id' => 2,			
		]);

		DB::table('permission_role')->insert([
			'permission_id' => 7,
			'role_id' => 3,			
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 8,
			'role_id' => 3,			
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 9,
			'role_id' => 3,			
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 10,
			'role_id' => 3,			
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 11,
			'role_id' => 3,			
		]);
		DB::table('permission_role')->insert([
			'permission_id' => 12,
			'role_id' => 3,			
		]);
		
	}
}
