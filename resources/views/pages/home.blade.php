@extends("layouts.layout")

@section("css")
@parent
<link rel="stylesheet" href="dist/css/home.css">
@stop

@section("body")
<div class="top-img-wrapper">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->	
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->	
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="./images/home/top.jpg" alt="...">	
				<div class="carousel-caption"></div>
			</div>
			<div class="item">
				<img src="./images/home/top.jpg" alt="...">	
				<div class="carousel-caption"></div>
			</div>
		</div>

		<!-- Controls -->	
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<div class="container home-container">
	<div class="row">
		<form class="navbar-form navbar-left row" role="search">
			<div class="form-group col-xs-8">
				<input type="text" class="form-control" placeholder="搜索本校（广中医）信息">
			</div>
			<button type="submit" class="btn btn-success col-xs-3  col-xs-offset-0">
				搜索 <!-- <span class="glyphicon glyphicon-search"></span> -->
			</button>
		</form>
	</div>
	<div class="row home-row">
		<div class="col-xs-4 home-item">
			<div class="item-wrapper">
				<a href="/issue">
					<span class="item-img-wrapper">
						<img class="item-img" src="./images/home/item01.gif" alt="">
					</span>
					<span class="item-text text-center">发布信息</span>
				</a>
			</div>
		</div>
		<div class="col-xs-4 home-item">
			<div class="item-wrapper">
				<a href="#">
					<span class="item-img-wrapper">
						<img class="item-img" src="./images/home/item02.gif" alt="">
					</span>
					<span class="item-text text-center">我的帖子</span>
				</a>
			</div>
		</div>
		<div class="col-xs-4 home-item">
			<div class="item-wrapper">
				<a href="#">
					<span class="item-img-wrapper">
						<img class="item-img" src="./images/home/item03.gif" alt="">
					</span>
					<span class="item-text text-center">联系客服</span>
				</a>
			</div>
		</div>
		<div class="col-xs-4 home-item">
			<div class="item-wrapper">
				<a href="#">
					<span class="item-img-wrapper">
						<img class="item-img" src="./images/home/item04.gif" alt="">
					</span>
					<span class="item-text text-center">二手市场</span>
				</a>
			</div>
		</div>
		<div class="col-xs-4 home-item">
			<div class="item-wrapper">
				<a href="#">
					<span class="item-img-wrapper">
						<img class="item-img" src="./images/home/item05.gif" alt="">
					</span>
					<span class="item-text text-center">个人设置</span>
				</a>
			</div>
		</div>
		<div class="col-xs-4 home-item">
			<div class="item-wrapper">
				<a href="#">
					<span class="item-img-wrapper">
						<img class="item-img" src="./images/home/item06.gif" alt="">
					</span>
					<span class="item-text text-center">举报帖子</span>
				</a>
			</div>
		</div>
	</div>


</div>
@stop

@section("js")
@parent
<script src="dist/js/home.js"></script>
@stop