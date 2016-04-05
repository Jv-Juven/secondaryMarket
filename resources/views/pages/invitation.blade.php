@extends("layouts.layout")

@section("css")
@parent
@stop

@section("body")

@include("components.search_box")
@include("components.additions")
@include("components.goods_item", ['goods_list' => $goods_list])

@stop

@section("js")
@parent
@stop