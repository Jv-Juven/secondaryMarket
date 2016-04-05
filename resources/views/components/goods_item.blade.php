@if (count($goods_list) != 0)
@foreach ($goods_list as $good)
<div class="container-fluid">
	<a href="###">
		<div class="row goods-item">
			<div class="col-xs-3">
				<img src="images/home/item01.gif" alt="140*140" class="img-rounded goods-thumb-img">
			</div>
			<div class="col-xs-9">
				<div class="row">{{$good['good_name']}}</div>
				<label class="row text-warning">
					@if ($good['type'] == 0)
					￥ {{$good['good_price']}}
					@else
					{{$good['good_itegral']}} 积分
					@endif
				</label>
				<div class="row text-muted">{{$good['good_info']}}</div>
			</div>
		</div>
	</a>
</div>
@endforeach
@endif