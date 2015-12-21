<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@section("titleHead")
			Template FTIK
		@stop
	</title>
	@section("head")
	<script type="text/javascript" src="{{ asset('jamil-template/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('Jamil/Template/public/bootstrap/js/bootstrap.min.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('jamil-template/bootstrap/css/bootstrap.min.css') }}">
	@show
</head>
<body>

	<div class="container">
		@section("header")
			<h1>Template</h1>
		@show
	</div>

	@section("navigation")
		@include("JamilTemplate::nav")
	@show

	<div class="container">
		@section("layout")
		
		@show
	</div>

	<div class="container">
		<div class="text-center">
			@section("footer")
				Copyright &copy; {{ date("Y") }} by Rofilde Hasudungan. All Right Reserved.
			@show	
		</div>
		
	</div>
	
</body>
</html>