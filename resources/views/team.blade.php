@extends('layout.app')
@section('content')
<!--team-->
<div class="team">
	<div class="container">
		<h4 class="title">Our Team</h4>
		<h3 class="title1">IMAGE<span>IMAGE</span>IMAGE</h3>
		<div class="team-info">
			<div class="col-md-3 team-grids wow zoomIn animated" data-wow-delay=".5s">
				<img class="img-responsive" src="images/a.png" alt="">
				<div class="captn">
					<h4>this is 照片</h4>
					<div class="team-icons">
						<ul>
							<li><a href="#"> </a></li>
							<li><a href="#" class="fb"> </a></li>
							<li><a href="#" class="in"> </a></li>
						</ul>
					</div>
				</div>
				<p>本来应该放些照骗的 </p>
			</div>					
			<div class="col-md-3 team-grids wow zoomIn animated" data-wow-delay=".5s">
				<img class="img-responsive" src="images/a.png" alt="">
				<div class="captn">
					<h4>this is 照片</h4>
					<div class="team-icons">
						<ul>
							<li><a href="#"> </a></li>
							<li><a href="#" class="fb"> </a></li>
							<li><a href="#" class="in"> </a></li>
						</ul>
					</div>
				</div>
				<p>不过我没有 </p>
			</div>	
			<div class="col-md-3 team-grids wow zoomIn animated" data-wow-delay=".5s">
				<img class="img-responsive" src="images/a.png" alt="">
				<div class="captn">
					<h4>this is 照片</h4>
					<div class="team-icons">
						<ul>
							<li><a href="#"> </a></li>
							<li><a href="#" class="fb"> </a></li>
							<li><a href="#" class="in"> </a></li>
						</ul>
					</div>
				</div>
				<p>而且也不知道 </p>
			</div>	
			<div class="col-md-3 team-grids wow zoomIn animated" data-wow-delay=".5s">
				<img class="img-responsive" src="images/a.png" alt="">
				<div class="captn">
					<h4>this is 照片</h4>
					<div class="team-icons">
						<ul>
							<li><a href="#"> </a></li>
							<li><a href="#" class="fb"> </a></li>
							<li><a href="#" class="in"> </a></li>
						</ul>
					</div>
				</div>
				<p>她们让不让放 </p>
			</div>	
			<div class="clearfix"> </div>
		</div>
		<span class="bg-text">T</span>
	</div>
</div>
<!--//team-->
<!--skill-->
<div class="skill">
	<div class="container">
		<h4 class="title wow fadeInDown animated" data-wow-delay=".5s">社团活动</h4>
		<h3 class="title1 wow fadeInDown animated" data-wow-delay=".5s">除了学习，竞赛<span>还有</span>．．．</h3>
		<div class="skill-info">
			<ul>
				<li class="wow fadeInLeftBig animated" data-wow-delay=".5s"><div class="demo demo-1" data-percent="40"></div><p>openMP</p></li>
				<li class="wow fadeInRightBig animated" data-wow-delay=".5s"><div class="demo demo-2" data-percent="20"></div><p>MPI</p> </li>
				<li class="wow fadeInLeftBig animated" data-wow-delay=".5s"><div class="demo demo-3" data-percent="20"></div><p>openAcc</p> </li>
				<li class="wow fadeInRightBig animated" data-wow-delay=".5s"><div class="demo demo-4" data-percent="20"></div><p>Linux</p> </li>
			</ul>
			<script>
				$('.demo-1').percentcircle();
					$('.demo-2').percentcircle({
					animate : true,
					fillColor: '#e94e02'
				});
					$('.demo-3').percentcircle({
					animate : true,
					fillColor: '#F2B33F'
				});
					$('.demo-4').percentcircle({
					animate : true,
					fillColor: '#79302a'
				});
			</script>
		</div>
		<span class="bg-text">S</span>
	</div>
</div>
<!--//skill-->
@stop