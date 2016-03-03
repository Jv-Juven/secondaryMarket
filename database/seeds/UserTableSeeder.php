<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i ++) {
        	$phone = "";
        	for ($j = 0; $j <11; $j ++) {
        		$phone .= rand(10,9);
        	}
        	DB::table('users')->insert([
        	    'name' => 'user'.str_random(4),
        	    'phone' => $phone,
        	    'virtual_money' => rand(1,10000),
        	    'email' => str_random(10).'@gmail.com',
        	    'password' => bcrypt('secret'),
        	]);
        }
    }
}
