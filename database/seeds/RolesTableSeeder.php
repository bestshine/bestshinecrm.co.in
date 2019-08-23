<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
		$today = Carbon::today();
		DB::table('roles')->truncate();
		DB::table('roles')->delete();
		DB::table('roles')->insert(array(
			array(
				'name'=>'admin',
				'display_name'=>'Super Admin',
				'description'=>'Limited Access',
				'created_at' => $today,
				'updated_at' => $today
			),
			array(
				'name'=>'employer',
				'display_name'=>'Employer',
				'description'=>'Limited Access',
				'created_at' => $today,
				'updated_at' => $today
			),
			array(
				'name'=>'office-staff',
				'display_name'=>'Office Staff',
				'description'=>'Limited Access',
				'created_at' => $today,
				'updated_at' => $today
			),
			array(
				'name'=>'school',
				'display_name'=>'School',
				'description'=>'Limited Access',
				'created_at' => $today,
				'updated_at' => $today
			),									
    	));          
    }
}
