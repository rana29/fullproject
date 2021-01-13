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
        
          Db::table('users')->insert([

        	
        	'name'=>'Masud rana',
        	
        	'email'=>'r3@gmail.com',
            'address'=>'Jatrabarri',
            'gender'=>'male',
            'mobile'=>'0196734521',

        	'password'=>bcrypt('123'),


        ]);

              Db::table('users')->insert([

            
            'name'=>'Masud rana khan',
            
            'email'=>'r4@gmail.com',
            'address'=>'Dhaka',
            'gender'=>'Female',
            'mobile'=>'0196734521',

            'password'=>bcrypt('123'),


        ]);

    }
}
