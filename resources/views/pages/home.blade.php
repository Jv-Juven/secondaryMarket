@extends("layouts.layout")

@section("css")
@parent
<link rel="stylesheet" href="dist/css/home.css">
@stop

@section("body")
<div class="top-img-wrapper">
	<img src="images/home/top.jpg" alt="">
</div>
<div class="container">
	<div class="row home-row">
		<div class="col-xs-4 home-item">
			<div class="item-wrapper">
				<a href="#">
					<span class="item-img-wrapper">
						<img class="item-img" src="./images/home/item01.gif" alt="">
					</span>
					<span class="item-text text-center">首页</span>
				</a>
			</div>
		</div>
		<div class="col-xs-4 home-item">
			<div class="item-wrapper">
				<a href="#">
					<span class="item-img-wrapper">
						<img class="item-img" src="./images/home/item02.gif" alt="">
					</span>
					<span class="item-text text-center">首页</span>
				</a>
			</div>
		</div>
		<div class="col-xs-4 home-item">
			<div class="item-wrapper">
				<a href="#">
					<span class="item-img-wrapper">
						<img class="item-img" src="./images/home/item03.gif" alt="">
					</span>
					<span class="item-text text-center">首页</span>
				</a>
			</div>
		</div>
		<div class="col-xs-4 home-item">
			<div class="item-wrapper">
				<a href="#">
					<span class="item-img-wrapper">
						<img class="item-img" src="./images/home/item04.gif" alt="">
					</span>
					<span class="item-text text-center">首页</span>
				</a>
			</div>
		</div>
		<div class="col-xs-4 home-item">
			<div class="item-wrapper">
				<a href="#">
					<span class="item-img-wrapper">
						<img class="item-img" src="./images/home/item05.gif" alt="">
					</span>
					<span class="item-text text-center">首页</span>
				</a>
			</div>
		</div>
		<div class="col-xs-4 home-item">
			<div class="item-wrapper">
				<a href="#">
					<span class="item-img-wrapper">
						<img class="item-img" src="./images/home/item06.gif" alt="">
					</span>
					<span class="item-text text-center">首页</span>
				</a>
			</div>
		</div>
	</div>


</div>
@stop

@section("js")
@stop