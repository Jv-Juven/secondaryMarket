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
					<button type="submit" class="btn btn-primary">搜索</button>
				</div>
			</form>
		</div>
	</div>
	
</div>
@stop

@section("js")
@stop