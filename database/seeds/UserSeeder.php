<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
			'id' => 2,
        	'people_id' => 2,
        	'cargo'=>'Técnico',
        	'user' => 'rey2018',
        	'password'=> bcrypt('123456'),
			'is_admin' => true, 
			'created_id'=> 1,
        ]);
        
        // DB::table('users')->insert([
		// 	'id' => 3,
        // 	'people_id' => 3,
        // 	'cargo'=>'técnico',
        // 	'user' => 'fer',
        // 	'password'=> bcrypt('123456'),
		// 	'is_admin' => true, 
		// 	'created_id'=> 1,
        // ]);

        // DB::table('users')->insert([
		// 	'id' => 4,
        // 	'people_id' => 4,
        // 	'cargo'=>'técnico',
        // 	'user' => 'xim',
        // 	'password'=> bcrypt('123456'),
		// 	'is_admin' => false, 
		// 	'created_id'=> 1,
        // ]);

        // DB::table('users')->insert([
		// 	'id' => 5,
        // 	'people_id' => 5,
        // 	'cargo'=>'técnico',
        // 	'user' => 'lis',
        // 	'password'=> bcrypt('123456'),
		// 	'is_admin' => false, 
		// 	'created_id'=> 1,
		// ]);
    }
}
