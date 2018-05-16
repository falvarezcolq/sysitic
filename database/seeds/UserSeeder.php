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
        	'id' => 1,
        	'cargo'=>'técnico',
        	'user' => 'fer',
        	'password'=> bcrypt('123456'),
        	'is_admin' => true, 
        ]);

        DB::table('users')->insert([
        	'id' => 2,
        	'cargo'=>'técnico',
        	'user' => 'xim',
        	'password'=> bcrypt('123456'),
        	'is_admin' => false, 
        ]);

        DB::table('users')->insert([
        	'id' => 3,
        	'cargo'=>'técnico',
        	'user' => 'lis',
        	'password'=> bcrypt('123456'),
        	'is_admin' => false, 
        ]);
    }
}
