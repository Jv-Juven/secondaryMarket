@extends("../layouts/layout")

@section("title")
登录
@stop

@section("css")
@parent
<link rel="stylesheet" href="dist/css/login.css">
@append

@section("body")
<div class="container">
	<h3 class="text-center text-primary login-title">用户登录</h3>
	<div id="login" class="form-horizontal">
		<!-- 用户名 -->
		<div class="form-group">
			<label for="name" class="col-xs-3 text-right control-label login-label">邮箱</label>
			<div class="col-xs-8">
				<input id="name" name="name" class="form-control" type="text" placeholder="请输入您的邮箱" value="" v-model="email" placeholder="example@email.com">
			</div>
		</div>

		<!-- 密码 -->
		<div class="form-group">
			<label for="psd" class="col-xs-3 text-right control-label login-label">密码</label>
			<div class="col-xs-8">
				<input id="psd" name="password" class="form-control" type="password" placeholder="请输入您的密码" value="" v-model="password">
			</div>
		</div>

		<!-- 提交按钮 -->
		<div class="form-group">
			<div class="col-xs-10 col-xs-offset-1">
				<!-- <input class="form-control btn-primary input-lg" type="submit"> -->
				<button class="form-control btn-primary input-lg" @click="submit">提交</button>
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

	</div>
</div>
@stop

@section("js")
@parent
<script src="dist/js/login.js"></script>
@stop