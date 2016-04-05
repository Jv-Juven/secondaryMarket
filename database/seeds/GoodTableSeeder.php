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
                'name' => str_random(30),
                'QQ' => mt_rand()." ",
                'school' => str_random(20),
        		'remark' => '备注信息：'.str_random(6),
        		'start_time' => time(),
        		'end_time' => time() + (7 * 24 * 60 * 60)
    		]);
        }
    }

    /**
     * 生成随机中文函数
     */
    // private function unicode_decode($name) {
         
    //     // 转换编码，将Unicode编码转换成可以浏览的utf-8编码
    //     $pattern = '/([\w]+)|(\\\u([\w]{4}))/i';
    //     preg_match_all($pattern, $name, $matches);
    //     if (!empty($matches)) {
    //         $name = '';
    //         for ($j = 0; $j < count($matches[0]); $j++) {
    //             $str = $matches[0][$j];
    //             if (strpos($str, '\\u') === 0) {
    //                 $code = base_convert(substr($str, 2, 2), 16, 10);
    //                 $code2 = base_convert(substr($str, 4), 16, 10);
    //                 $c = chr($code) . chr($code2);
    //                 $c = iconv('UCS-2', 'UTF-8', $c);
    //                 $name.= $c;
    //             } else {
    //                 $name.= $str;
    //             }
    //         }
    //     }
    //     return $name;
    // }

    // public function chineseChars() {
    //     $str = "";
    //     for ($i = 0; $i < 100; $i++) {
    //         $str.= "\\u" . dechex(rand(19968, 40895));
    //     }
    //     $content.= unicode_decode($str);
    // }
}
