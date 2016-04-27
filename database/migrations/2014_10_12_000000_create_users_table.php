<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); // 自增数据表id
            $table->string('name')->unique(); // 唯一的用户名（账号）
            $table->integer('phone')->nullable(); // 用户手机号码
            $table->integer('virtual_money')->default(0); // 用户虚拟币
            $table->string('email')->unique(); // 唯一的用户邮箱
            $table->string('password', 60); // 用户密码
            $table->rememberToken(); // "记住我"秘钥（暂时不用，备用）
            $table->timestamps(); // 用户账号的创建时间和登录时间记录
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
