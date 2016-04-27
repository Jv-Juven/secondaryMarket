@extends("layouts.layout")

@section("title")
登录
@stop

@section("css")
@parent
<link rel="stylesheet" href="dist/css/login.css">
@append

@section("body")
<div class="container">
	<h3 class="text-center text-success login-title">用户登录</h3>
	<div id="login" class="form-horizontal">
		<!-- 用户名 -->
		<div class="form-group">
			<label for="name" class="col-xs-3 text-right control-label login-label">账号</label>
			<div class="col-xs-8">
				<input id="name" name="name" class="form-control" type="text" placeholder="请输入您的账号" value="" v-model="name" @click="nowarn"  placeholder="学号、手机号等">
			</div>
		</div>

		<!-- 密码 -->
		<div class="form-group">
			<label for="psd" class="col-xs-3 text-right control-label login-label">密码</label>
			<div class="col-xs-8">
				<input id="psd" name="password" class="form-control" type="password" placeholder="请输入您的密码" value="" v-model="password" @click="nowarn" >
			</div>
		</div>

		<!-- 提交按钮 -->
		<div class="form-group">
			<div class="col-xs-10 col-xs-offset-1">
				<button class="form-control btn-success input-lg" @click="submit">提交</button>
			</div>
		</div>

		<!-- 其他链接 -->
		<div class="form-group">
			<div class="col-xs-6 text-center">
				<a href="#">注册</a>
			</div>
			<div class="col-xs-6 text-center">
				<a href="#">忘记密码？</a>
			</div>
		</div>

		<!-- 信息 -->
		<div class="form-group" v-show="sub_tips">
			<div class="col-xs-12">
				<div v-if="tips_type == 1" class="alert alert-danger text-center h4" role="alert">@{{sub_tips}}</div>
				<div v-if="tips_type == 0" class="alert alert-success text-center h4" role="alert">@{{sub_tips}}</div>
			</div>
		</div>


	</div>
</div>
@stop

@section("js")
@parent
<script src="dist/js/login.js"></script>
@stop