<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

	public function __construct()
	{
		// $this->middleware('auth');
	}

    // 查询指定id的用户
    public function showUserInfo() {
    	$user = User::find(1);
    	$user->name = "自定义名字";
    	$user->save();
    	echo $user;
    }

    // 创建一个新的用户
    public function createUser(Request $request) {
    	$user = new User;
    	$user->name = $request->input('name');
    	$user->phone = $request->input('phone');
    	$user->email = str_random(3).$request->input('email');
    	$user->virtual_money = $request->input('virtual_money');
    	$user->password = '12345678';
    	$user->save();

    	echo $user->id;
    }

    /**
     * 获取登录页面
     */
    public function login() {
    	return view("pages.login");
    }

    /**
     * 处理登录页面提交的数据
     */
    public function postLogin(Request $rq) {
        echo var_dump($rq->input());
    }

    /**
     * 处理注册页面提交的数据
     * 用户名、密码、确认的密码、手机号码（可选）、邮箱（可选）
     */
    public function postRegister(Request $rq) {
        // echo var_dump($rq->input());
        $user = new User;
        $user->name = $rq->input('name');
        $user->email = str_random(3).$rq->input('email');
        // $user->email = str_random(3).$rq->input('email');
        $user->password = Hash::make($rq->input('password'));
        $user->save();
    }

    /**
     * 修改密码
     */
    public function postChangePsd (Request $rq){
        $user = User::findOrFail($rq->input('id'));
        $user->fill([
            'password' => Hash::make($user->password)
            ])->save();

    }
}
