<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>CSS RadioShow</title>
		<link rel="stylesheet" href="css/base.css" />
		<link rel="stylesheet" href="css/radioshow.css" />
	</head>
	
	<body>
		<section>
			<header>
				<h1><span class="mark">RadioShow</span> <small>A CSS3 Image Showcase</small></h1>
				<nav class="control-bar">
					<ul>
						<li class="cat">Placement:</li>
						<li data-layout="radioshow-top" class="active">top</li>
						<li data-layout="radioshow-bottom">bottom</li>
						<li class="cat">/</li>
						<li data-pos="radioshow-left">left</li>
						<li data-pos="" class="active">center</li>
						<li data-pos="radioshow-right">right</li>
					</ul>
					
					<ul>
						<li class="cat">Transition:</li>
						<li data-fx="">none</li>
						<li data-fx="radioshow-fade" class="active">fade</li>
						<li data-fx="radioshow-scale">scale</li>
					</ul>
					
					<ul>
						<li class="cat">Caption:</li>
						<li data-text="" data-control="slide" class="active">hover</li>
						<li data-text="persist-text" data-control="static">persist</li>
						<li data-text="hide-text" data-control="hide">hide</li>
					</ul>
					
					<ul>
						<li class="cat slide">Direction:</li>
						<li class="slide" data-slide="slide-up">up</li>
						<li class="slide" data-slide="slide-down">down</li>
						<li class="slide" data-slide="slide-left">left</li>
						<li class="slide active" data-slide="slide-right">right</li>
					</ul>
					
					<ul>
						<li class="cat static hidden">Position:</li>
						<li class="static hidden" data-static="static-top">top</li>
						<li class="static hidden" data-static="static-bottom">bottom</li>
						<li class="static hidden active" data-static="static-left">left</li>
						<li class="static hidden" data-static="static-right">right</li>
					</ul>
				</nav>
			</header>
			<?php include "channels.php"; ?>
			<footer>
				<a href="https://github.com/pixleyes/RadioShow">RadioShow on GitHub</a>
			</footer>
		</section>
	</body>
	<script src="/core/j/jquery-1.8.0.min.js"></script>
	<script>
	$(function(){
		$('[data-slide]').on('click', function(e){
			var slide = $(this).data('slide');
			$('.radioshow').removeClass('slide-up slide-down slide-left slide-right static-top static-bottom static-left static-right').addClass(slide);
			$('[data-slide]').removeClass('active');
			$(this).addClass('active');
		});
		$('[data-static]').on('click', function(e){
			var stay = $(this).data('static');
			$('.radioshow').removeClass('slide-up slide-down slide-left slide-right static-top static-bottom static-left static-right').addClass(stay);
			$('[data-static]').removeClass('active');
			$(this).addClass('active');
		});
		$('[data-layout]').on('click', function(e){
			var layout = $(this).data('layout');
			$('.radioshow').removeClass('radioshow-top radioshow-bottom').addClass(layout);
			$('[data-layout]').removeClass('active');
			$(this).addClass('active');
		});
		$('[data-text]').on('click', function(e){
			var text = $(this).data('text');
			$('.radioshow').removeClass('persist-text hide-text').addClass(text);
			$('[data-text]').removeClass('active');
			$(this).addClass('active');
		});
		$('[data-pos]').on('click', function(e){
			var pos = $(this).data('pos');
			$('.radioshow').removeClass('radioshow-left radioshow-right').addClass(pos);
			$('[data-pos]').removeClass('active');
			$(this).addClass('active');
		});
		$('[data-fx]').on('click', function(e){
			var fx = $(this).data('fx');
			$('.radioshow').removeClass('radioshow-fade radioshow-scale').addClass(fx);
			$('[data-fx]').removeClass('active');
			$(this).addClass('active');
		});
		
		$('[data-control]').on('click', function(e){
			var control = $(this).data('control');
			if(control == 'static') {
				$('.static').removeClass('hidden');
				$('.slide').addClass('hidden');
				$('[data-static].active').click();
			}
			if(control == 'slide') {
				$('.slide').removeClass('hidden');
				$('.static').addClass('hidden');
				$('[data-slide].active').click();
			}
			if(control == 'hide') {
				$('.slide').addClass('hidden');
				$('.static').addClass('hidden');
			}
		});
	});
	</script>
</html>