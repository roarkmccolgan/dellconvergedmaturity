<!DOCTYPE html>
<html>
	<head>
		@section('head')
		<meta charset="utf-8">
		<title>@yield('pagetitle')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
        <link rel="stylesheet" href="{{asset('css/cookieBar.css')}}" />

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
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-156016-27', 'auto');
	  ga('send', 'pageview');
	
	</script>
	</body>
</html>
