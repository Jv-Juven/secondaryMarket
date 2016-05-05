<?php

namespace App\Http\Controllers;


use Auth;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Good;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodController extends Controller
{
    //
    public function __construct() {}

    /**
     * 返回发布视图
     */
    public function issue() {
    	return view("pages.issue");
    }

	/**
	 * 上传商品数据
	 */
    public function postGood(Request $rq) {
    	// return $rq->all();
    	// return gettype( serialize( $rq->input('pics') ) );
    	// return serialize( $rq->input('pics') );
    	$good_name = $rq->input('good_title');
    	$good_info = $rq->input('describe');
    	$type = intval($rq->input('type'));
    	if ($type == 0) {
	    	$good_price = $rq->input('price');
    	} else {
    		$good_itegral = $rq->input('price');
    	}
    	$good_image = serialize( $rq->input('pics') );
    	$contacts = $rq->input('address');
    	$remark = $rq->input('remark');
    	$good_storage = $rq->input('storage');

    	$name = $rq->input('name');
    	$qq = $rq->input('QQ');
    	$school = $rq->input('school');

    	$data = array(
    		'good_name' => $good_name,
    		'good_info' => $good_info,
    		'type' => $type,
    		'good_storage' => $good_storage,
    		'contacts' => $contacts,
    		'remark' => $remark
		);

		/*这里在开发时有个常犯错的地方就是数组的形式
		$rules = array([
			'good_name' => 'required|max:255',
			'good_info' => 'sometimes|max:140',
			'type' => 'required|numeric',
			'good_storage' => array('required','numeric'),
			'contacts' => 'required',
			'remark' => 'sometimes'
		]);
		相比之下多了方括号，这是不对的*/
		$rules = array(
			'good_name' => 'required|max:50',
			'good_info' => 'sometimes|max:140',
			'type' => 'required|numeric',
			'good_storage' => array('required','numeric'),// 用“|”分隔没有用，估计是和传入的参数有关
			'contacts' => 'required',
			'remark' => 'sometimes|max:140'
		);

		$message = array(
			'good_name.required' => '请输入商品名称',
			'good_name.max' => '商品名称长度不超过50个字符',
			'good_info.max' => '商品信息长度最长为140个字符',
			'type.required' => '请选择交易类型',
			'good_storage.required' => '请输入商品数量',
			'good_storage.numeric' => '请输入数字',
			'contacts.required' => '请填写联系方式',
			'remark.max' => '备注长度最长为140个字符'
		);

		$validator = Validator::make($data, $rules, $message);
		$errors = $validator->errors()->all();
		if ($errors) {
			$msg = array(
				'errCode' => 1,
				'message' => $errors[0]
			);
			return response()->json($msg);
		}

		try {
			$good = new Good;
			$good->user_id = rand(0, 10);
			$good->class_id = rand(0, 8);
			$good->good_name = $good_name;
			$good->good_info = $good_info;
			if (isset($good_itegral)) {
				$good->good_itegral = $good_itegral;
			}
			if (isset($good_price)) {
				$good->good_price = $good_price;
			}
			$good->good_image = $good_image;
			$good->contacts = $contacts;
			$good->good_storage = $good_storage;
			$good->type = $type;
			$good->remark = $remark;

			$good->name = $name;
			$good->QQ = $qq;
			$good->school = $school;

			$good->save();

			$msg = array(
				'errCode' => 0,
				'message' => '商品上传成功'
			);
			return response()->json($msg);

		} catch (Exception $e) {
			echo $e->getMessage();
		}


    }

    public function getUpToken () {
    	
    }
}
