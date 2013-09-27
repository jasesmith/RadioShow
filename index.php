<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>CSS RadioShow</title>
		<link rel="stylesheet" href="css/base.css" />
		<link rel="stylesheet" href="css/radioshow.css" />
	</head>
	
	<body>
	
		<?php include "channels.php"; ?>
	
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