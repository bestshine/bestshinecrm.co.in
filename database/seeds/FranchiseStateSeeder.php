<?php

use Illuminate\Database\Seeder;

class FranchiseStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('franchise_states')->truncate();
        DB::table('franchise_states')->insert([
        	[
        		'state_name'=>'Andra Pradesh',         
				'status'=>1
        	],
        	[
        		'state_name'=>'Arunachal Pradesh',
				'status'=>1
        	],
        	[
        		'state_name'=>'Assam',
				'status'=>1
        	],
        	[
        		'state_name'=>'Bihar',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Chhattisgarh',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Goa',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Gujarat',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Haryana',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Himachal Pradesh',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Jammu and Kashmir',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Jharkhand',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Karnataka',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Kerala',
				'status'=>1
        	],
        	[
        		'state_name'=>'Madya Pradesh',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Maharashtra',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Manipur',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Meghalaya',
				'status'=>1
        	],
        	[
        		'state_name'=>'Mizoram',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Nagaland',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Orissa',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Punjab',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Rajasthan',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Sikkim',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Tamil Nadu',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Tripura',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Uttaranchal',
        		'status'=>1
        	],
        	[
        		'state_name'=>'West Bengal',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Andaman and Nicobar Islands',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Chandigarh',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Dadar and Nagar Haveli',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Daman and Diu',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Delhi',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Lakshadeep',
        		'status'=>1
        	],
        	[
        		'state_name'=>'Pondicherry',
        		'status'=>1
        	]
        ]);               
    }
}
