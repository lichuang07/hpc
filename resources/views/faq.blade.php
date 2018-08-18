@extends('layout.app')
@section('content')
<!--faq-->
<div class="faq-info">
	<div class="container">
		<h4 class="title">FAQ</h4>
		<h3 class="title1">FREQUENTLY ASKED <span>QUES</span>TIONS</h3>
		<span class="bg-text">F</span>
		<ul class="faq">
			<li class="item1 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">问1 ?<span class="icon"> </span></a>
				<ul>
					<li class="subitem1"><p> 还没有人问</p></li>										
				</ul>
			</li>
			<li class="item2 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">问2 ?<span class="icon"> </span></a>
				<ul>
					<li class="subitem1"><p> 所以没有</p></li>										
				</ul>
			</li>
			<li class="item3 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">问3 ?<span class="icon"> </span></a>
				<ul>
					<li class="subitem1"><p>回答</p></li>										
				</ul>
			</li>
			<li class="item4 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">问4 ?<span class="icon"> </span></a>
				<ul>
					<li class="subitem1"><p>所以，就先这样了</p></li>										
				</ul>
			</li> 
		</ul>
		<!-- script for tabs -->
		<script type="text/javascript">
			$(function() {
			
				var menu_ul = $('.faq > li > ul'),
					   menu_a  = $('.faq > li > a');
				
				menu_ul.hide();
			
				menu_a.click(function(e) {
					e.preventDefault();
					if(!$(this).hasClass('active')) {
						menu_a.removeClass('active');
						menu_ul.filter(':visible').slideUp('normal');
						$(this).addClass('active').next().stop(true,true).slideDown('normal');
					} else {
						$(this).removeClass('active');
						$(this).next().stop(true,true).slideUp('normal');
					}
				});
			
			});
		</script>
		<!-- script for tabs -->
	</div>			
</div>			
<!--//faq-->

@stop