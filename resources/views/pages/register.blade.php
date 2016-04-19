@extends("layouts.layout")

@section("css")
<link rel="stylesheet" href="dist/css/login.css">
@parent
@stop

@section("body")
<div class="container">
	<h3 class="text-center text-success login-title">用户登录</h3>
	<div id="reg_board" class="form-horizontal">
		<!-- 用户名 -->
		<div class="form-group">
			<label for="name" class="col-xs-12 text-left control-label login-label">邮箱</label>
			<div class="col-xs-12">
				<input id="name" name="name" class="form-control" type="text" placeholder="请输入您的邮箱" value="" v-model="email" placeholder="example@email.com">
			</div>
		</div>

		<!-- 密码 -->
		<div class="form-group">
			<label for="psd" class="col-xs-12 text-left control-label login-label">密码</label>
			<div class="col-xs-12">
				<input id="psd" name="password" class="form-control" type="password" placeholder="请输入您的密码" value="" v-model="password">
			</div>
		</div>

		<!-- 确认密码 -->
		<div class="form-group">
			<label for="re_psd" class="col-xs-12 text-left control-label login-label">确认密码</label>
			<div class="col-xs-12">
				<input id="re_psd" name="password" class="form-control" type="password" placeholder="请确认您的密码" value="" v-model="re_password">
			</div>
		</div>

		<!-- 提交按钮 -->
		<div class="form-group">
			<div class="col-xs-10 col-xs-offset-1">
				<!-- <input class="form-control btn-primary input-lg" type="submit"> -->
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

		<div class="form-group" v-show="show_tag">
			<div class="col-xs-12">
				<div class="alert alert-danger text-center h4" role="alert">@{{sub_tips}}</div>
			</div>
		</div>

	</div>
</div>
@stop

@section("js")
@parent
<script src="dist/js/register.js"></script>
@stop