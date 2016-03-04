<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
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

    public function login() {
    	echo "ddd";
    	// $this->validate($request, [
	    //     'name' => 'required|max:255',
	    // ]);
    }
}
