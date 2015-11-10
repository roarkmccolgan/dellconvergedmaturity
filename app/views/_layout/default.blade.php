<!DOCTYPE html>
<html>
<head>
	@section('head')
	<meta charset="utf-8">
	<title>@yield('pagetitle')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin"> 

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="{{asset('css/header-v1.css')}}">
	<link rel="stylesheet" href="{{asset('css/footer-v2.css')}}">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{asset('css/theme-colors/blue.css')}}">
	<link rel="stylesheet" href="{{asset('css/custom-admin.css')}}">

	<!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{asset('plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/cookieBar.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">

	<link rel="stylesheet" href="{{asset('css/spacing.css')}}">

	@show
</head>

<body>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-156016-29', 'auto');
		ga('send', 'pageview');
	</script>
	<div class="wrapper">
		<!--=== Header Default ===-->
		<div class="header-v1">

			<!-- Navbar -->
			<div class="navbar navbar-default mega-menu header-nav" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">

						<a class="logo" href="/">
							<img class="header-logo" src="{{asset('images/idc-logo.png')}}" alt="Logo">
						</a>
						<span class="header-title">@yield('pagetitle')</span>
					</div>


				</div>    
			</div>            
			<!-- End Navbar -->
		</div>
		<!--=== End Header V1 ===-->
		<br/>
		@yield('main')
		
		<!--=== End Content ===-->


		<div class="footer-v2">
			<div> 
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-md-offset-9">
							<h5 class="pull-right">SPONSORED BY</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<a href="/"><i class="fa fa-undo"></i> {{Lang::get('general.restart')}}</a>
						</div>
						<div class="col-sm-3 col-md-offset-5">                       
							<a href="http://dell.com" class="pull-right"><img src="{{asset('images/dell_intel_lockup.png')}}" alt="logo"></a>

						</div>
					</div>
					<div class="spacer10"></div>
					<div class="row" >
						<div class="col-md-12" >
							<div class="col-sm-8 "style="border-top:1px solid #444; padding-top:5px;">
								<a href="http://www.idc.com/about/termsofuse.jsp">Terms of Use</a> | <a href="#" data-toggle="modal" data-target="#disclaimer">Disclaimer</a>
							</div> 
							<div class="col-sm-4" style="border-top:1px solid #444; padding-top:5px;">
								<p class="text-right">Copyright {{{ date('Y') }}} IDC. All rights reserved.</p>
							</div>
						</div>               
					</div>
					@include('_modal.disclaimer')
				</div>
			</div>
		</div>
	</div>
	@section('javascript')
	<script type="text/javascript" src="{{asset('plugins/jquery/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('plugins/jquery/jquery-migrate.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/back-to-top.js') }}"></script>
	<script type="text/javascript" src="{{asset('plugins/smoothScroll.js') }}"></script>
	<script type="text/javascript" src="{{asset('plugins/jquery.parallax.js') }}"></script>
	@show
</body>
</html>
