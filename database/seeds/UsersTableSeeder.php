<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$today = Carbon::today();
       	DB::table('users')->truncate();
       	DB::table('users')->delete();
       	DB::table('users')->insert(array(
           	array(
               'name'=>'Bestshine',
	           'email'=>'admin@bestshine.com',
	           'password'=>bcrypt('kmmpks@123'),
	           'status'=>1,
               'is_deleted'=>0,
	           'notify_count'=>0,
	           'slug'=>'super-admin',
	           'created_at' => $today,
	           'updated_at' => $today
            )            
       ));        
    }
}
