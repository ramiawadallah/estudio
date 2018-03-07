<!DOCTYPE html>
<html @if(app()->getLocale() == 'ar') dir="rtl" @else() dir="ltr" @endif() lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>@yield('title') | 
		@if(app()->getLocale() == 'ar')
			تبوك للصناعات الدوائية
		@else()
			Tabuk Pharma.
		@endif()
	</title>
	
	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="{{ theme('frontend/img/fav/apple-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ theme('frontend/img/fav/apple-icon-60x60.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ theme('frontend/img/fav/apple-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ theme('frontend/img/fav/apple-icon-76x76.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ theme('frontend/img/fav/apple-icon-114x114.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ theme('frontend/img/fav/apple-icon-120x120.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ theme('frontend/img/fav/apple-icon-144x144.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ theme('frontend/img/fav/apple-icon-152x152.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ theme('frontend/img/fav/apple-icon-180x180.png') }}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{ theme('frontend/img/fav/android-icon-192x192.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ theme('frontend/img/fav/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ theme('frontend/img/fav/favicon-96x96.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ theme('frontend/img/fav/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ theme('frontend/img/fav/manifest.json') }}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
	
	<!-- Bootstrap core CSS -->
	<link href="{{ theme('frontend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	
	<!-- Icon Fonts -->
	<link href="{{ theme('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ theme('frontend/css/simple-line-icons.css') }}" rel="stylesheet">
	
	<!-- Plugins -->
	<link href="{{ theme('frontend/css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ theme('frontend/css/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ theme('frontend/css/flexslider.css') }}" rel="stylesheet">
	<link href="{{ theme('frontend/css/animate.min.css') }}" rel="stylesheet">
	<link href="{{ theme('frontend/css/animatecss') }}" rel="stylesheet">
	
	<!-- Template core CSS -->
	<link href="{{ theme('frontend/css/vertical.min.css') }}" rel="stylesheet">
	<!-- <link href="{{ theme('frontend/css/template.css') }}" rel="stylesheet"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	@if(app()->getLocale() == 'ar')
		<link href="{{ theme('frontend/css/template-rtl.css') }}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-flipped.css">
	@else()
		<link href="{{ theme('frontend/css/template.css') }}" rel="stylesheet">
	@endif()

	<link href="{{ theme('frontend/css/bootstrap-dropdownhover.css') }}" rel="stylesheet">

	<script src="dist/wow.js"></script>

	<script>
		wow.init();
	</script>
</head>
<body>

	<!-- PRELOADER -->
	<div class="page-loader">
		<div class="loader">Loading...</div>
	</div>
	<!-- END PRELOADER -->

	<!-- HEADER -->
	<header class="header header-fixed" style="background-color: rgba(255, 255, 255, 0.9) !important; ">
		<div class="container">
			<!-- YOUR LOGO HERE -->
			<div class="inner-header">
				<a class="inner-brand" href="{{ url('/') }}">

					@if(app()->getLocale() == 'ar')
						<img class="brand-light" src="{{ theme('frontend/img/logo_ar.png') }} " width="120" alt="">
						<img class="brand-dark" src="{{ theme('frontend/img/logo_ar.png') }}" width="120" alt="">
					@else()
						<img class="brand-light" src="{{ theme('frontend/img/logo_en.png') }} " width="120" alt="">
						<img class="brand-dark" src="{{ theme('frontend/img/logo_en.png') }}" width="120" alt="">
					@endif()

				</a>
			</div>
		
			<!-- OPEN MOBILE MENU -->
			<div class="main-nav-toggle">
				<div class="nav-icon-toggle" data-toggle="collapse" data-target="#custom-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
			</div>
		
			<!-- MAIN MENU -->
			<nav id="custom-collapse" class="main-nav collapse clearfix" >
				<ul class="inner-nav pull-right">
		
					<!-- <li class="has-submenu">
						<a href="aboutus.html">About us</a>
						<ul class="submenu">
							<li><a href="aboutus.html#keyfact">Key Fact</a></li>
							<li><a href="aboutus.html#mfgnetwork">Manufacturing Network</a></li>
							<li><a href="aboutus.html#team">Meet Management</a></li>
							<li><a href="aboutus.html#locations">Locations world wide</a></li>
							<li><a href="">history</a></li>
						</ul>
					</li>

					<li>
						<a href="R&D.html">R&D</a>
					</li> -->
							

					@include('partials.navigation')

					<!-- Languages -->
					<li class="has-submenu">
						<a>{{ trans('lang.languages')}}</a>
						<ul class="submenu">
							@foreach(\App\Lang::all() as $lang)
								<li>
									<a href="{{ url('setlocale/'.$lang->code) }}">
										<!-- <img src="{{ theme('backend/flags') }}/{{ $lang->flug }}" /> -->
										<span>{{ $lang->name }}</span>
									</a>
								</li>
							@endforeach()
						</ul>
					</li>
					<!-- END HOME -->	
		
				</ul>
			</nav>
		
		</div>
	</header>
	<!-- END HEADER -->

	<!-- WRAPPER -->
	<div class="wrapper">

		@yield('content')

	</div>

	<!-- Footer -->
	
		<div class="container" style="clear: both !important;">
			<div style="top:10px; margin-bottom: 15px;" class="col-sm-6">
				<p class="m-0">Copyright <a href="#">Tabuk</a>, 2017, All Rights Reserved.</p>
			</div>
			<div class="col-sm-6">
				<ul class="social-icons social-icons-md text-center">
					@foreach(App\Setting::where('id',1)->get() as $setting)
						<li><a target="_new" href="{{ $setting->facebook }}"><i class="fa fa-facebook"></i></a></li>
						<li><a target="_new" href="{{ $setting->twitter }}"><i class="fa fa-twitter"></i></a></li>
						<li><a target="_new" href="{{ $setting->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
						<li><a target="_new" href="{{ $setting->youtube }}"><i class="fa fa-youtube"></i></a></li>
						<li><a target="_new" href="{{ $setting->instagram }}"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#top" style="background-color: #63a70a !important; color: #fff;"><i class="fa fa-level-up"></i></a></li>
					@endforeach()
				</ul>
			</div>
		</div>
	<!-- END Footer -->

	<!-- JAVASCRIPT FILES -->
	<script src="{{ theme('frontend/js/jquery-2.2.3.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ "></script>
	<script src="{{ theme('frontend/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ theme('frontend/js/plugins.min.js ') }}"></script>
	<script src="{{ theme('frontend/js/custom.min.js') }}"></script>

	<!-- VUE JS LINKS -->
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.5"></script>
	<script src="{{ theme('frontend/js/main.js') }}"></script>
	<script src="{{ theme('frontend/js/bootstrap-dropdownhover.js') }}"></script>

</body>
</html>