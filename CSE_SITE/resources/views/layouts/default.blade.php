<?php 

$cuRRlocal = Config::get('app.locale');

use App\Link;

$footerLink = Link::all();



?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">



	<title>
		
		{{config('app.name')}}  @yield('title')
	
	</title>

	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<!-- Font  -->
	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<!-- Font  -->
								<!-- Style  -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/css/icomoon.css">
	<!-- Bootstrap  -->
		<?php if($cuRRlocal == 'en') : ?>
		<link rel="stylesheet" href="/css/bootstrap.css">
	<?php elseif($cuRRlocal == 'ar') : ?>
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/rtl.css">
	<?php endif; ?>


	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="/css/flexslider.css">


	<!-- Theme style  -->
	<link rel="stylesheet" href="/css/style.css">

	<!-- Modernizr JS -->
	<script src="/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
								<!-- Style  -->
	</head>
	<body>
	
		@csrf
	<!-- Loading Sign -->
	<div class="fh5co-loader"></div>
	<!-- Loading Sign -->

	<!-- Start Page -->
		<div id="page">
			@include('element.navbar')
	
		@include('element.flash')
		
		@yield('content')
		
	

		@yield('section')



		@include('element.footer')

	
						 
		</div>
		<!-- END Page -->


<!-- button Up  -->
		<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
		</div>
<!-- button -->


								<!-- Script -->
	<!-- jQuery -->
	<script src="{{ asset('/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('/js/jquery.flexslider-min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('/js/magnific-popup-options.js')}}"></script>
	<!-- Counters -->
	<script src="{{ asset('/js/jquery.countTo.js')}}"></script>
	<!-- Main -->
	<script src="{{ asset('/js/main.js') }} " defer></script>
	<!-- Lagnugae -->
	<script type="text/javascript" src="{{ asset('/js/locale.js')}}"></script>
			<!-- Script -->
	</body>
</html>

