<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Foreign key disabled
     	DB::statement('SET FOREIGN_KEY_CHECKS=0;');

     	$this->call(RolesTableSeeder::class);
     	$this->call(UsersTableSeeder::class);
        $this->call(RoleUsersTableSeeder::class);
     	$this->call(FranchiseStateSeeder::class);

     	// Foreign key enabled
     	DB::statement('SET FOREIGN_KEY_CHECKS=1;'); 
    }
}
