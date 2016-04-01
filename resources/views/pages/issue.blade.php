@extends("layouts.layout")

@section("css")
@parent
<link rel="stylesheet" href="dist/css/issue.css">
@stop

@section("body")
<div class="container">
	<div class="row">
		<div class="btn-group btn-group-justified issue-choose-btns" role="group" aria-label="...">
			<div class="btn-group" role="group">
				<button type="button" class="btn btn-default">转让</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" class="btn btn-success">求购</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" class="btn btn-default">转手</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" class="btn btn-default">淘宝</button>
			</div>
		</div>
	</div>
	<!-- 商品图片 -->
	<div class="row row-margin">
		<div class="pic-wrapper row-margin col-xs-4 text-center">
			<div class="img-rounded issue-goods-pic">
				<img src="images/issue/add_image.png" alt="商品图片" class="img-rounded">
			</div>
		</div>
		<div class="pic-wrapper row-margin col-xs-4 text-center">
			<div class="img-rounded issue-goods-pic">
				<img src="images/issue/add_image.png" alt="商品图片" class="img-rounded">
			</div>
		</div>
		<div class="pic-wrapper row-margin col-xs-4 text-center">
			<div class="img-rounded issue-goods-pic">
				<img src="images/issue/add_image.png" alt="商品图片" class="img-rounded">
			</div>
		</div>
		<div class="pic-wrapper row-margin col-xs-4 text-center">
			<div class="img-rounded issue-goods-pic">
				<img src="images/issue/add_image.png" alt="商品图片" class="img-rounded">
			</div>
		</div>
		
	</div>
	<!-- 商品信息 -->
	<div class="row">
		<h4 class="text-center issue-title">商品信息</h4>
	</div>
	<div class="row row-margin">
		<div class="col-xs-3">
			<label class="input-title">标题：</label>
		</div>
		<div class="col-xs-9">
			<input class="form-control" type="text" placeholder="请输入商品的标题">
		</div>
	</div>
	<div class="btn-group btn-group-justified" role="group" aria-label="...">
		<div class="btn-group" role="group">
			<button type="button" class="btn btn-default">现金商品</button>
		</div>
		<div class="btn-group" role="group">
			<button type="button" class="btn btn-success">积分商品</button>
		</div>
	</div>
	<div class="row row-margin">
		<div class="col-xs-3">
			<label class="input-title">价格：</label>
		</div>
		<div class="col-xs-9">
			<input class="form-control" type="text" placeholder="请输入数字">
		</div>
	</div>
	<div class="row row-margin">
		<div class="col-xs-3">
			<label class="input-title">商品描述：</label>
		</div>
		<div class="col-xs-9">
			<textarea class="form-control" rows="5" placeholder="商品描述"></textarea>
		</div>
	</div>
	<div class="row row-margin">
		<div class="col-xs-3">
			<label class="input-title">备注：</label>
		</div>
		<div class="col-xs-9">
			<textarea class="form-control" rows="5" placeholder="备注信息"></textarea>
		</div>
	</div>
	<!-- 联系人信息 -->
	<div class="row">
		<h4 class="text-center issue-title">联系人信息</h4>
	</div>
	<div class="row row-margin">
		<div class="col-xs-3">
			<label class="input-title">姓名：</label>
		</div>
		<div class="col-xs-9">
			<input class="form-control" type="text" placeholder="请输入姓名">
		</div>
	</div>
	<div class="row row-margin">
		<div class="col-xs-3">
			<label class="input-title">手机长号：</label>
		</div>
		<div class="col-xs-9">
			<input class="form-control" type="text" placeholder="请输入手机长号">
		</div>
	</div>
	<div class="row row-margin">
		<div class="col-xs-3">
			<label class="input-title">QQ号：</label>
		</div>
		<div class="col-xs-9">
			<input class="form-control" type="text" placeholder="请输入QQ（可选）">
		</div>
	</div>
	<div class="row row-margin">
		<div class="col-xs-3">
			<label class="input-title">学校：</label>
		</div>
		<div class="col-xs-9">
			<input class="form-control" type="text" placeholder="请输入学校">
		</div>
	</div>
	<div class="row row-margin">
		<div class="col-xs-3">
			<label class="input-title">交易地点：</label>
		</div>
		<div class="col-xs-9">
			<input class="form-control" type="text" placeholder="请输入地点">
		</div>
	</div>
	<div class="row row-margin" style="padding-bottom:12rem;">
		<div class="col-xs-12 text-center">
			<button class="btn btn-success">提交信息</button>
		</div>
	</div>
</div>
@stop

@section("js")
@stop