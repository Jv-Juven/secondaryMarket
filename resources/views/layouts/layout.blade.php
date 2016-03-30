<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>@yield("title", "二手市场")</title>

	@section("css")
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="dist/css/common.css">
	@show

</head>
<body>

	@section("body")
	@show
	

	@section("js")
	<script src="lib/jquery/jquery-2.2.1.js"></script>
	<script src="lib/bootstrap/js/bootstrap.js"></script>
	<script src="lib/vue/vue.js"></script>
	@show

</body>
</html>