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
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', '{{Config::get('app.analytics')}}', 'auto');
		ga('send', 'pageview');
	</script>
</head>

<body>
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
						<div class="col-md-4">
							<div class="btn-group">
		                        <button type="button" class="btn btn-default rounded dropdown-toggle" data-toggle="dropdown">
		                            <i class="flag {{App::getLocale()}}"></i> {{Lang::get('general.changelang')}} 
		                            <i class="fa fa-angle-down"></i>
		                        </button>
		                        <ul class="dropdown-menu" role="menu">
		                            {{getLangSwitch()}}
		                        </ul>
		                    </div>
						</div>
						<div class="col-sm-3 col-md-offset-5">
							<h5 class="pull-right">{{Lang::get('general.assoc')}}</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3 col-md-offset-9">                       
							<a href="http://dell.com" class="pull-right"><img src="{{asset('images/dell_intel_lockup.png')}}" alt="logo" usemap="#logos"></a>

						</div>
					</div>
					<div class="spacer10"></div>
					<div class="row" >
						<div class="col-md-12" >
							<div class="col-sm-8 "style="border-top:1px solid #444; padding-top:5px;">
								<a href="http://www.idc.com/about/termsofuse.jsp" class="pop-up" target="_blank">{{Lang::get('general.termsofuse')}}</a> | <a href="#" data-toggle="modal" data-target="#disclaimer">{{Lang::get('general.disclaimer')}}</a>
							</div> 
							<div class="col-sm-4" style="border-top:1px solid #444; padding-top:5px;">
								<p class="text-right">{{Lang::get('general.copyright')}} {{{ date('Y') }}} IDC. {{Lang::get('general.allrights')}}.</p>
							</div>
						</div>               
					</div>
					<div class="row" >
						<div class="col-md-12" >
							<small>{{Lang::get('general.copyright')}}</small>
						</div>               
					</div>
					@include('_modal.disclaimer')
				</div>
			</div>
		</div>
	</div>
	<map name="logos" id="logos">
		<area  alt="" title="" href="http://dell.com" shape="rect" coords="4,0,80,70" style="outline:none;" target="_blank" />
		<area  alt="" title="" href="http://www.intel.com/" shape="rect" coords="99,5,182,70" style="outline:none;" target="_blank" />
	</map>
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
	<script type="text/javascript">
		$.getScript('//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-564d83572aa39771', function() {
			// replace the following line with your specific layers configuration
			addthis.layers({
				'theme' : 'transparent',
				'share' : {
					'position' : 'left',
					'numPreferredServices' : 5
				},
				'follow' : {
					'services' : [
						{'service' : 'facebook', 'id' : 'IDCResearch'},
						{'service' : 'twitter', 'id' : 'IDC'}
					]
				},
				'whatsnext' : false,
				'recommended' : false
			});
		});
	</script>
	@show
</body>
</html>
