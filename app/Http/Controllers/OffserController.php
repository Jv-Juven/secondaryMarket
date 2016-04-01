<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OffserController extends Controller
{
	/**
	 * 返回团队介绍也
	 */
    public function introPage() {
    	return view("pages.intro");
    }
}
