<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id'); // 商品id
            $table->integer('user_id'); // 商品所属用户id
            $table->integer('class_id'); // 上级分类id
            $table->string('good_name', 50); // 商品名称
            $table->string('good_info', 140); // 商品信息
            $table->float('good_price')->default(0); // 商品价格
            $table->integer('good_itegral')->default(0); // 商品积分
            $table->string('good_image'); // 图片路径（可放置本地或第三方服务器的图片）
            $table->string('contacts')->nullable(); // 联系人信息及地址
            $table->tinyInteger('status')->default(0); // 状态（0正常、1售罄、2违规、3下架等）
            $table->integer('storage'); // 库存
            $table->tinyInteger('type')->default(0); // 类型（现金、积分）
            $table->bigInteger('start_time')->nullable(); // 商品开始时间
            $table->bigInteger('end_time')->nullable(); // 商品开始时间
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('goods');
    }
}
