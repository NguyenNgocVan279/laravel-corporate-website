<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VinaSoft.Net - Website Design</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css --> 
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css') }}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/flexslider.css') }}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/fonts/flaticon/font/flaticon.css') }}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('frontend/assets/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	@yield('content')

	<!-- jQuery -->
	<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>	
	<!-- jQuery Easing -->
	<script src="{{ asset('frontend/assets/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('frontend/assets/js/jquery.flexslider-min.js') }}"></script>
	<!-- Sticky Kit -->
	<script src="{{ asset('frontend/assets/js/sticky-kit.min.js') }}"></script>
	<!-- Owl carousel -->
	<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
	<!-- Counters -->
	<script src="{{ asset('frontend/assets/js/jquery.countTo.js') }}"></script>
	
	
	<!-- MAIN JS -->
	<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
	<!-- Custom -->
	<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>	

	</body>
</html>

