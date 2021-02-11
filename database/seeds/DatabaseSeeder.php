<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            DepartmentSeeder::class,
            DesignationSeeder::class,
            PageSeeder::class,
            SectionSeeder::class,
            MenuSeeder::class,
            PostSeeder::class,
        ]);
        
    }
}
