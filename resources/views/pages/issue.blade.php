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
</div>
@stop

@section("js")
@stop