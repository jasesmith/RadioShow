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
			$('.showcase').removeClass('slide-up slide-down slide-left slide-right').addClass(slide);
		});
		$('[data-layout]').on('click', function(e){
			var layout = $(this).data('layout');
			$('.showcase').toggleClass(layout);
		});
		$('[data-text]').on('click', function(e){
			var text = $(this).data('text');
			$('.showcase').removeClass('persist-text sticky-text').addClass(text);
		});
		$('[data-pos]').on('click', function(e){
			var pos = $(this).data('pos');
			$('.showcase').removeClass('showcase-left showcase-right').addClass(pos);
		});
	});
	</script>
</html>