@extends('layout.app')
@section('content')
<!--faq-->
<div class="faq-info">
	<div class="container">
		<h4 class="title">FAQ</h4>
		<h3 class="title1">FREQUENTLY ASKED <span>QUES</span>TIONS</h3>
		<span class="bg-text">F</span>
		<ul class="faq">
			<li class="item1 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">加入高性能计算俱乐部需要具备编程能力吗 ?<span class="icon"> </span></a>
				<ul>
					<li class="subitem1"><p> 高性能俱乐部所讲课程是基于Ｃ语言在linux平台操做的,需要基础的Ｃ语言编程能力,不过就算你还没有学习过Ｃ语言也不要担心,学习并行编程需要的Ｃ语言基础不高,仅需知道基础语句即可.</p></li>										
				</ul>
			</li>
			<li class="item2 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">参加课程需要带电脑吗 ?<span class="icon"> </span></a>
				<ul>
					<li class="subitem1"><p> 一般讲课会有例子需要大家连接集群操作,所以有电脑最好带着</p></li>										
				</ul>
			</li>
			<li class="item3 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">加入高性能计算俱乐部需要缴纳会费吗 ?<span class="icon"> </span></a>
				<ul>
					<li class="subitem1"><p>高性能计算俱乐部经费来源于参加比赛所的奖金和学校所拨经费,不需要缴纳会费.</p></li>										
				</ul>
			</li>
			<li class="item4 wow fadeInDown animated" data-wow-delay=".5s"><a href="#">社团活动时间 ?<span class="icon"> </span></a>
				<ul>
					<li class="subitem1"><p>一般高性能俱乐部社团活动时间在周末,具体时间会在群里通知.</p></li>										
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