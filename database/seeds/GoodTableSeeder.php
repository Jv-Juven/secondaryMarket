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
        		'user_id' => rand(0,20),
        		'class_id' => rand(0,8),
        		'good_name' => str_random(8),
        		'good_info' => str_random(50),
        		'good_price' => rand(0,1010),
        		'good_itegral' => rand(0,1000),
        		'good_image' => str_random(8).'.jpg',
        		'contacts' => '广州大学城外环西路'.rand(100,300).'号',
        		'status' => rand(0,3),
        		'good_storage' => rand(0,100),
        		'type' => rand(0,1),
        		'remark' => '备注信息：'.str_random(6),
        		'start_time' => time(),
        		'end_time' => time() + (7 * 24 * 60 * 60)
    		]);
        }
    }
}
