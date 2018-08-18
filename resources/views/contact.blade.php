@extends('layout.app')
@section('content')
<!-- contact -->
<div class="contact">
	<div class="container">
		<h4 class="title wow fadeInDown animated" data-wow-delay=".5s">Contact Us</h4>
		<h3 class="title1 wow fadeInDown animated" data-wow-delay=".5s">LOCATION OF <span>US</span> </h3>
		<span class="bg-text">C</span>
		<div class="map wow zoomIn animated" data-wow-delay=".5s">
			<img src="images/map.jpg"/>
		</div>
		<div class="contact-form">
			<div class="col-md-5 contact-left">
				<div class="address wow fadeInLeft animated" data-wow-delay=".5s">
					<h5>地址:</h5>
					<p><i class="glyphicon glyphicon-home"></i>松岭路238号 中国海洋大学 数学科学学院 </p>
				</div>
				<div class="address address-mdl wow fadeInLeft animated" data-wow-delay=".5s">
					<h5>联系方式:</h5>
					<p><i class="glyphicon glyphicon-user"></i> QQ群：413615504</p>
					<p><i class="glyphicon glyphicon-phone"></i> 手机：17854233808</p>
				</div>
				<div class="address wow fadeInLeft animated" data-wow-delay=".5s">
					<h5>电子邮件:</h5>
					<p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:glichuang07@gmail.com">
						李闯</a></p>
				</div>
			</div>
			<div class="col-md-7 contact-right wow fadeInRight animated" data-wow-delay=".5s">
				<h5>联系我们:</h5>
				<p>如果您有事需要联系我们，可以写在下面发给我们</p>
				<form>
					<input id="name" type="text" placeholder="Name(可空)">
					<input id="mail"  type="text" placeholder="Email(可空)">
					<input id="phone" type="text" placeholder="Phone(可空)">
					<textarea id="msg" placeholder="Message" required=""></textarea>
					<input class="wow zoomIn animated" data-wow-delay=".5s" type="button" onclick="getMailtoUrl()" value="SUBMIT" >
					<input class="wow zoomIn animated" data-wow-delay=".5s" type="reset" value="CLEAR" >
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //contact -->
@stop