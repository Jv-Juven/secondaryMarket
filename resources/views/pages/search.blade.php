@extends("layouts.layout")

@section("css")
@parent
<link rel="stylesheet" href="dist/css/search.css">
@stop

@section("body")
<div class="container-fluid">

	<div class="row search-row">
		<div class="col-xs-2">
			<span class="glyphicon glyphicon-chevron-left search-arrow text-success"></span>
		</div>
		<div class="col-xs-10">
			<form class="navbar-left row" role="search">
				<div class="col-xs-8">
					<input type="text" class="form-control" placeholder="请输入关键字搜索">
				</div>
				<div class="col-xs-4 text-center">
					<button type="submit" class="btn btn-success">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row search-hr"></div>

	<div class="row">
		<div class="col-xs-12">
			<span class="glyphicon glyphicon-search"></span>    <span class="text-muted search-tips">大家都在搜</span>
		</div>
	</div>
	<div class="row hot-search">
		<div class="col-xs-4 text-center hot-search-item">
			<button class="btn btn-default">山地自行车</button>
		</div>
		<div class="col-xs-4 text-center hot-search-item">
			<button class="btn btn-default">连衣裙</button>
		</div>
		<div class="col-xs-4 text-center hot-search-item">
			<button class="btn btn-default">港澳代购</button>
		</div>
		<div class="col-xs-4 text-center hot-search-item">
			<button class="btn btn-default">储物柜</button>
		</div>
		<div class="col-xs-4 text-center hot-search-item">
			<button class="btn btn-default">单车</button>
		</div>
		<div class="col-xs-4 text-center hot-search-item">
			<button class="btn btn-default">卖书</button>
		</div>
		<div class="col-xs-4 text-center hot-search-item">
			<button class="btn btn-default">考研资料</button>
		</div>
		<div class="col-xs-4 text-center hot-search-item">
			<button class="btn btn-default">蚊帐</button>
		</div>
		<div class="col-xs-4 text-center hot-search-item">
			<button class="btn btn-default">女装</button>
		</div>
	</div>
	
</div>
@stop

@section("js")
@stop