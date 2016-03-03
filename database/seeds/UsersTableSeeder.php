<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i ++) {
        	DB::table('users')->insert([
        	    'name' => 'user'.str_random(4),
        	    'phone' => rand(1,19999999999),
        	    'virtual_money' => rand(1,10000),
        	    'email' => str_random(10).'@gmail.com',
        	    'password' => bcrypt('secret'),
        	]);
        }
    }
}
