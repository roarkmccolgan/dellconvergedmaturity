<!DOCTYPE html>
<html>
	<head>
		@section('head')
		<meta charset="utf-8">
		<title>@yield('pagetitle')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />

		<script src="{{ asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>
		@show
	</head>

	<body>
		<div id="container" class="{{isset($class)? $class:''}}">
			<div id="content">
				<div class="wrapper clearfix">
					@yield('header')
					@yield('main')
				</div>
			</div>
			
			<div class="push"></div>
		</div>
		<footer id="footer">
			<div class="wrapper clearfix">
				{{link_to('/', 'Restart Quiz',array('class'=>'restart'))}}
				<span class="hp">In association with</span>
			</div>
		</footer>
	@yield('pagescript')
	</body>
</html>
