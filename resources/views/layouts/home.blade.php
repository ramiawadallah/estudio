<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Estudio is a responsive creative agency website By Rami Awadallah">
        <meta name="keywords" content="portfolio, corporate, business, parallax, creative, agency">
        <meta name="author" content="ramiawadallah.com">

        <title>ESTUDIO | @yield('title')</title>
        <!--  favicon -->
        <link rel="shortcut icon" href="{{ theme('frontend/img/estudio/favicon.png') }}">

        <!--  touch-icon -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ theme('frontend/img/estudio/apple-icon-57x57.png') }}">
    		<link rel="apple-touch-icon" sizes="60x60" href="{{ theme('frontend/img/estudio/apple-icon-60x60.png') }}">
    		<link rel="apple-touch-icon" sizes="72x72" href="{{ theme('frontend/img/estudio/apple-icon-72x72.png') }}">
    		<link rel="apple-touch-icon" sizes="76x76" href="{{ theme('frontend/img/estudio/apple-icon-76x76.png') }}">
    		<link rel="apple-touch-icon" sizes="114x114" href="{{ theme('frontend/img/estudio/apple-icon-114x114.png') }}">
    		<link rel="apple-touch-icon" sizes="120x120" href="{{ theme('frontend/img/estudio/apple-icon-120x120.png') }}">
    		<link rel="apple-touch-icon" sizes="144x144" href="{{ theme('frontend/img/estudio/apple-icon-144x144.png') }}">
    		<link rel="apple-touch-icon" sizes="152x152" href="{{ theme('frontend/img/estudio/apple-icon-152x152.png') }}">
    		<link rel="apple-touch-icon" sizes="180x180" href="{{ theme('frontend/img/estudio/apple-icon-180x180.png') }}">
    		<link rel="icon" type="image/png" sizes="192x192"  href="{{ theme('frontend/img/estudio/android-icon-192x192.png') }}">
    		<link rel="icon" type="image/png" sizes="32x32" href="{{ theme('frontend/img/estudio/favicon-32x32.png') }}">
    		<link rel="icon" type="image/png" sizes="96x96" href="{{ theme('frontend/img/estudio/favicon-96x96.png') }}">
    		<link rel="icon" type="image/png" sizes="16x16" href="{{ theme('frontend/img/estudio/favicon-16x16.png') }}">
    		<link rel="manifest" href="{{ theme('frontend/img/estudio/manifest.json') }}">
    		<meta name="msapplication-TileColor" content="#EA272A">
    		<meta name="msapplication-TileImage" content="{{ theme('frontend/img/estudio/ms-icon-144x144.png') }}">
    		<meta name="theme-color" content="#EA272A">


        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
        <!-- animate CSS -->
        <link href="{{ theme('frontend/css/animate.css') }}" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link href="{{ theme('frontend/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- Flat Icon CSS -->
        <link href="{{ theme('frontend/fonts/flaticon/flaticon.css') }}" rel="stylesheet">
        <!-- flexSlider -->
        <link href="{{ theme('frontend/flexSlider/flexslider.css') }}" rel="stylesheet">
        <!-- magnific-popup -->
        <link href="{{ theme('frontend/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
        <!-- owl.carousel -->
        <link href="{{ theme('frontend/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ theme('frontend/owl-carousel/owl.theme.css') }}" rel="stylesheet">

        <!-- Revolution Main Stylesheet -->
        <link href="{{ theme('frontend/rs-plugin/css/settings.css') }}" rel="stylesheet" media="screen" />

        <!-- Bootstrap -->
        <link href="{{ theme('frontend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Style CSS -->
        <link href="{{ theme('frontend/css/style.css') }}" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="{{ theme('frontend/css/responsive.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body id="page-top">

        <!-- Navigation start -->
        <nav class="navbar navbar-custom tt-default-nav" role="navigation">
            <div class="container">
          
               <!--  <div class="search-box-wrap pull-right hidden-sm hidden-xs">
                    <div class="search-icon"></div>
                    <input id="search-box" placeholder="Search">
                </div> -->

              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand animated bounce" href="{{ url('/') }}"><img src="{{ theme('frontend/img/logo.png') }}" alt=""></a>
              </div>
          
              <div class="collapse navbar-collapse" id="custom-collapse">
          
                <ul class="nav navbar-nav navbar-right">

          		  @include('partials.navigation')
          
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ trans('lang.languages')}}</a>
                    <ul class="dropdown-menu" role="menu">
                      	@foreach(\App\Lang::all() as $lang)
							<li>
								<a href="{{ url('setlocale/'.$lang->code) }}">
									<!-- <img src="/themes/default/assets/cms/images/flags/{{ $lang->flug }}" /> -->
									<span>{{ $lang->name }}</span>
								</a>
							</li>
						@endforeach()
                    </ul>
                  </li>


                  
                </ul>
              </div>
            </div><!-- /.container -->
        </nav>
        <!-- Navigation end -->


        @yield('content')


      
        <footer class="footer-section text-center">
            <div class="container">
                <a class="page-scroll backToTop" href="#page-top"><i class="fa fa-angle-up"></i></a>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-logo">
                            <img src="{{ theme('frontend/img/footer-logo.png') }}" alt="">
                            <p>This theme is proudly designed and developed by <span>Rami Awadllah</span></p>
                        </div>

                        <div class="social-icon clearfix">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="copyright">
                            <p>&copy; Copright 2018 Estodio - All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        

        <!-- jQuery -->
        <script src="{{ theme('frontend/js/jquery-2.1.3.min.js') }}"></script>
        <script src="{{ theme('frontend/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ theme('frontend/js/jquery.easing.min.js') }}"></script>
        <script src="{{ theme('frontend/js/jquery.sticky.min.js') }}"></script>
        <script src="{{ theme('frontend/js/smoothscroll.min.js') }}"></script>
        <script src="{{ theme('frontend/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ theme('frontend/js/jquery.inview.min.js') }}"></script>
        <script src="{{ theme('frontend/js/wow.min.js') }}"></script>
        <script src="{{ theme('frontend/js/jquery.countTo.min.js') }}"></script>
        <script src="{{ theme('frontend/js/jquery.shuffle.min.js') }}"></script>
        <script src="{{ theme('frontend/js/jquery.BlackAndWhite.min.js') }}"></script>
        <script src="{{ theme('frontend/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ theme('frontend/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="{{ theme('frontend/js/scripts.js') }}"></script>

        <!-- jQuery REVOLUTION Slider  -->
        <script src="{{ theme('frontend/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ theme('frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ theme('frontend/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ theme('frontend/js/jquery.inview.min.js') }}"></script>
        <script src="{{ theme('frontend/js/wow.min.js') }}"></script>
        <script src="{{ theme('frontend/js/jquery.countTo.min.js') }}"></script>
        <script src="{{ theme('frontend/js/jquery.shuffle.min.js') }}"></script>
        <script src="{{ theme('frontend/js/masonry.pkgd.min.js') }}"></script>
        <script src="{{ theme('frontend/js/jquery.BlackAndWhite.min.js') }}"></script>
        <script src="{{ theme('frontend/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ theme('frontend/flexSlider/jquery.flexslider-min.js') }}"></script>
        <script src="{{ theme('frontend/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="{{ theme('frontend/js/scripts.js') }}"></script>

        <script type="text/javascript">
            function vidplay() {
              var video = document.getElementById("videoPlayer");
              var button = document.getElementById("playbtn");
              if (video.paused) {
                video.play();
                button.className = "pause"
              } else {
                video.pause();
                button.className = "play"
              }
            }
        </script>
    </body>
  
</html>