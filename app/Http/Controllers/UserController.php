<?php

namespace App\Http\Controllers;

use Hash;
use Auth;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use App\Good;
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
     * 获取注册页面
     */
    public function register() {
        return view("pages.register");
    }

    /**
     * 处理登录页面提交的数据
     * 登录
     */
    public function postLogin(Request $rq) {

        $user = new User;

        try {
            $rules = array(
                'name' => 'required|min:1|max:20',
                'password' => 'required|min:6|max:255'
                );

            $message = array(
                'name.required' => '请输入账号',
                'name.max' => '请输入1到20位的账号',
                'password.required' => '请输入6-20位的密码',
                'password.min' => '请输入6-20位的密码',
                'password.max' => '请输入6-20位的密码'
                );

            $validator = Validator::make($rq->input(), $rules, $message);
            $errors = $validator->errors()->all();
            if ($errors) {
                $message = array(
                    'errCode' => 1,
                    'message' => $errors[0]
                    );
                return response()->json($message);
            }

            // 验证用户登录 同时记录用户
            if (Auth::attempt($rq->input())) {
                $message = array(
                    'errCode' => 0,
                    'message' => "登录成功"
                    );
                return response()->json($message);
                // return Auth::user();

            } else {

                $message = array();
                
                if (count($user->where('name', $rq->input('name'))->get())) {
                    $message['errCode'] = 1;
                    $message['message'] = '密码错误';
                } else {
                    $message['errCode'] = 2;
                    $message['message'] = '找不到该用户';
                }
                
                return response()->json($message);
            }
        }

        catch (Exception $e) {

        }


    }

    /**
     * 处理注册页面提交的数据
     * 用户名、密码、确认的密码、手机号码（可选）、邮箱（可选）
     */
    public function postRegister(Request $rq) {

        // 验证规则
        $rules = array(
            'name' => 'required|min:1|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:255',
            're_password' => 'required|min:6|max:255'
            // 'phone' => 'sometimes|numeric'
            );
        
        // 验证信息设置
        $message = array(
            'name.required' => '请输入用户名',
            'name.min' => '请输入1到20位的用户名',
            'name.max' => '请输入1到20位的用户名',
            'name.unique' => '该账号已被使用',
            'password.required' => '请输入密码',
            're_password.required' => '请再次输入密码',
            'email.email' => '请输入正确的邮箱地址格式',
            'email.required' => '请输入邮箱地址',
            'email.unique' => '该邮箱已被使用',
            'phone.numeric' => '请输入正确的手机号码'
            );
        // 获取验证结果
        $validator = Validator::make($rq->all(), $rules, $message);
        $errMessages = $validator->errors()->all();

        // 返回错误信息
        if ($errMessages) {
            $data = array(
                'errCode' => '1',
                'message' => $errMessages[0]
                );
            return response()->json($data);
        }

        try {
            // 将用户的信息存入数据库
            $user = new User;
            $user->name = $rq->input('name');
            $user->email = $rq->input('email');
            $user->phone = $rq->input('phone');
            $user->password = Hash::make($rq->input('password'));
            $user->save();

            // Auth::login($user);

            return Auth::user();

            // 返回成功信息
            $data = array(
                'errCode' => '0',
                'message' => '注册成功'
                );
            return response()->json($data);
        }
        catch (Exception $e) {

        }

    }

    /**
     * 用户退出登录
     */
    public function getLogout() {
        Auth::logout();
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

    /**
     * 获取用户帖子
     */
    public function invitation() {
        $goods = new Good;
        $goods_list = $goods->where('user_id', 3)->get();
        // echo $goods_list;
        // exit();
        return view('pages.invitation', ['goods_list' => $goods_list] );
    }

}
