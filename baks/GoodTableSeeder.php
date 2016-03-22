<?php

use Illuminate\Database\Seeder;

class GoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$length = 50;
        //
        for ($i = 0; $i < $length; $i ++ ) {
        	DB::table('goods')->insert([
        		'iuser_id' => $i%10,
        		'class_id' => $i%8,
        		'goods_name' => str_random(8),
        		'good_info' => str_random(50),
        		'good_price' => rand(0,1010),
        		'good_itegral' => rand(0,1000),
        		'good_image' => str_random(8).'.jpg',
        		'status' => rand(0,3),
        		'storage' => rand(0,100),
        		'type' => rand(0,1)
    		]);
        }
    }
}
