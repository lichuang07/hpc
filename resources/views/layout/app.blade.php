<!DOCTYPE html>
<html>
<head>
<title>{{$title}}</title>
<!--mobile apps-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="hpc " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--mobile apps-->
<!--Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="css/swipebox.css">
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
	 new WOW().init();
</script>
<!--//end-animate-->
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
	<!--banner-->
	<div class="banner about-bnr">
	    <div class="bnr-img">
			<img class="wow fadeInLeftBig animated" data-wow-delay=".5s" src="images/a.png" alt=""/>
		</div>
		<div class="top-nav">
			<span class="menu"><img src="images/menu-icon.png" alt=""/></span>
			<ul class="nav1 menu-list">
				<li class="menu-item"><a class="menu-link" href="\index">HOME</a></li>
				<li class="menu-item menu-item-current"><a class="menu-link" href="\about">ABOUT</a></li>
				<li class="menu-item"><a class="menu-link" href="\gallery">GALLERY</a></li>
				<!--<li class="menu-item"><a class="menu-link" href="codes.html">CODES</a></li>-->
				<li class="menu-item"><a class="menu-link" href="\contact" >CONTACT</a></li>
			</ul>
			<div class="clearfix"> </div>
			<!-- script-for-menu -->
			 <script>
			   $( "span.menu" ).click(function() {
				 $( "ul.nav1" ).slideToggle( 300, function() {
				 // Animation complete.
				  });
				 });
			</script>
			<!-- /script-for-menu -->
		</div>
		<div class="social-icons wow zoomIn animated" data-wow-delay=".5s">
			<ul>
				<li><a href="https://twitter.com/eipi_1_0"> </a></li>
				<li><a href="https://www.facebook.com/glichuang07" class="fb"> </a></li>
				<li><a href="https://plus.google.com/106078020383181519190" class="in"> </a></li>
				<li><a href="https://www.instagram.com/glichuang07/" class="dott"> </a></li>
			</ul>
		</div>
		<div class="banner-text">
			<h1 class="wow fadeInDown animated" data-wow-delay=".5s"><a href="\index">HPC CLUB</a> </h1>
			<h2 class="wow fadeInUp animated" data-wow-delay=".5s"><a href="\index">Home</a> / {{$title}}</h2>
			@if(isset($banner))
			@include($banner)
			@endif
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--//banner-->
	@yield('content')

	@include('layout.footer')