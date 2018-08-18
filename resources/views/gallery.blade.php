@extends('layout.app')
@section('content')
<!-- gallery -->
<div class="gallery">
	<div class="container">
		<h4 class="title">Gallery</h4>
		<h3 class="title1">OUR CLUB <span>FLAV</span>ORS ARE</h3>
		<div class="gallery-row row">
			<div class="col-md-4 gallery-grids grid">
				<figure class="effect-ming wow zoomIn animated" data-wow-delay=".5s">
					<a href="images/p1.jpg" class="swipebox">
						<img src="images/p1.jpg" alt="" class="img-responsive" />
						<figcaption><h5><span>W</span>A</h5></figcaption>	
					</a>	
				</figure>
			</div>
			<div class="col-md-4 gallery-grids grid">
				<figure class="effect-ming wow zoomIn animated" data-wow-delay=".5s">
					<a href="images/p2.jpg" class="swipebox">
						<img src="images/p2.jpg" alt="" class="img-responsive" />
						<figcaption><h5><span>L</span>L</h5></figcaption>		
					</a>	
				</figure>
			</div>
			<div class="col-md-4 gallery-grids grid">
				<figure class="effect-ming wow zoomIn animated" data-wow-delay=".5s">
					<a href="images/p3.jpg" class="swipebox">
						<img src="images/p3.jpg" alt="" class="img-responsive" />
						<figcaption><h5><span>P</span>A</h5></figcaption>	
					</a>	
				</figure>
			</div>
			<div class="col-md-12 row">
			<div class="col-md-6 gallery-grids gallery-btm grid">
				<figure class="effect-ming wow zoomIn animated" data-wow-delay=".5s">
					<a href="images/img9.jpg" class="swipebox">
						<img src="images/img9.jpg" alt="" class="img-responsive" />
						<figcaption><h5><span>P</span>E</h5></figcaption>	
					</a>	
				</figure>
			</div>
			<div class="col-md-6 gallery-grids gallery-btm grid">
				<figure class="effect-ming wow zoomIn animated" data-wow-delay=".5s">
					<a href="images/img8.jpg" class="swipebox">
						<img src="images/img8.jpg" alt="" class="img-responsive" />
						<figcaption><h5><span>R</span></h5></figcaption>	
					</a>	
				</figure>
			</div>
			</div>
			<div class="col-md-4 gallery-grids grid">
				<figure class="effect-ming wow zoomIn animated" data-wow-delay=".5s">
					<a href="images/p4.jpg" class="swipebox">
						<img src="images/p4.jpg" alt="" class="img-responsive" />
						<figcaption><h5><span></span></h5></figcaption>	
					</a>	
				</figure>
			</div>
			<div class="col-md-4 gallery-grids grid">
				<figure class="effect-ming wow zoomIn animated" data-wow-delay=".5s">
					<a href="images/p5.jpg" class="swipebox">
						<img src="images/p5.jpg" alt="" class="img-responsive" />
						<figcaption><h5><span>A</span></h5></figcaption>	
					</a>	
				</figure>
			</div>
			<div class="col-md-4 gallery-grids grid">
				<figure class="effect-ming wow zoomIn animated" data-wow-delay=".5s">
					<a href="images/img7.jpg" class="swipebox">
						<img src="images/img7.jpg" alt="" class="img-responsive" />
						<figcaption><h5><span>P</span></h5></figcaption>	
					</a>	
				</figure>
			</div>
			<div class="clearfix"> </div>
			<!-- swipe box js -->
			<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script>
			<!-- //swipe box js -->
		</div>
		<span class="bg-text">G</span>
	</div>
</div>
<!-- //gallery -->
@stop