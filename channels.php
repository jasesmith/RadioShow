<?php
$stack['Example'] = array(
			'intro' => '<span class="mark">RadioShow</span> <small>A CSS3 Image Showcase</small>',
			'shots' => array(
				1 => array(
						'headline' => 'Helvetica',
						'desc' => array('A pure type face, excellent for building awesome robot shirts.','<a href="http://chopshopstore.com/index.php/helbotica.html" target="_blank">Want one?</a>',)
					),
				2 => array(
						'headline' => 'Coffee Time',
						'desc' => array('Drinking coffee with a friend is a good thing.', 'Invest in human beans.')
					),
				3 => array(
						'headline' => 'Fishermans Are Bad Ass',
						'desc' => array('&ldquo;My big fish must be somewhere.&rdquo;','&mdash; Ernest Hemingway, <em>The Old Man and the Sea</em>')
					),
				4 => array(
						'headline' => 'Flippity-flops!',
						'desc' => array('Nothin\' beats a broked-in pair of flip-flops.')
					),
				5 => array(
						'headline' => 'Everyone Loves A Good Bokeh',
						'desc' => array('Blur that light source and ramp-up you some saturations!')
					),
				6 => array(
						'headline' => 'Autumn Spirals And Winter Is Inevitable',
						'desc' => array('Behind the sweet summer fade, and on a coast not far away... Sometimes we glide, sometimes we fall, and there are times we don\'t get up at all.','<em>&mdash; The Submarines</em>')
					),
				7 => array(
						'headline' => 'Everything Has Been Made',
						'desc' => array('And the walls kept tumbling down in the city that we love. Great clouds roll over the hills, bringing darkness from above.','<em>&mdash; Bastille</em>')
					)
			)
		);

foreach($stack as $name => $data)
{
	$key = str_replace(' ','-',strtolower($name));
	?>
	<section id="<?php echo $key ?>">
		<header>
			<h1><?php echo $data['intro'] ?></h1>
			<nav class="control-bar">
				<li class="cat">Placement:</li>
				<li data-layout="radioshow-top" class="active">top</li>
				<li data-layout="radioshow-bottom">bottom</li>
				<li class="cat">/</li>
				<li data-pos="radioshow-left">left</li>
				<li data-pos="" class="active">center</li>
				<li data-pos="radioshow-right">right</li>
				<li class="cat">Transition:</li>
				<li data-fx="" class="active">none</li>
				<li data-fx="radioshow-fade">fade</li>
				<li data-fx="radioshow-scale">scale</li>
				
				<li class="cat">Caption:</li>
				<li data-text="" data-control="slide" class="active">hover</li>
				<li data-text="persist-text" data-control="static">persist</li>
				<li data-text="hide-text" data-control="hide">hide</li>
				
				<li class="cat slide">Direction:</li>
				<li class="slide" data-slide="slide-up">up</li>
				<li class="slide" data-slide="slide-down">down</li>
				<li class="slide active" data-slide="slide-left">left</li>
				<li class="slide" data-slide="slide-right">right</li>
				
				<li class="cat static hidden">Position:</li>
				<li class="static hidden" data-static="static-top">top</li>
				<li class="static hidden" data-static="static-bottom">bottom</li>
				<li class="static hidden" data-static="static-left">left</li>
				<li class="static hidden active" data-static="static-right">right</li>
			</nav>
		</header>
		<article>
			<div class="radioshow slide-left">
			<?php
			foreach($data['shots'] as $shot => $bits)
			{
				$next_shot = $shot == count($stack[$name]['shots']) ? 1 : $shot+1;
				?>
				<input class="trigger" type="radio" name="<?php echo $key ?>-flip" id="<?php echo $key ?>-flip-<?php echo $shot; ?>"<?php echo $shot == 1 ? 'checked="checked"' : '' ?> />
				<label class="cue" for="<?php echo $key ?>-flip-<?php echo $shot; ?>" data-title="<?php echo $bits['headline'] ?>"><span><?php echo $shot ?></span></label>
				<div class="story" style="background-image:url(images/<?php echo $key ?>-<?php echo $shot ?>.jpg);">
					<div class="text">
						<div class="padme">
							<label class="next button" for="<?php echo $key ?>-flip-<?php echo $next_shot; ?>">
								<?php echo $shot == count($stack[$name]['shots']) ? 'Start Over' : 'Next'; ?>
							</label>
							<h2><?php echo $bits['headline'] ?></h2>
							<?php
						if(count($bits['desc']) > 0)
						{
							foreach($bits['desc'] as $text)
							{
								?>
								<p><?php echo $text ?></p>
								<?php
							}
						}
							?>
						</div>
					</div>
				</div>
				
				<?php } ?>
				
			</div>
		</article>
		<footer>
			<a href="https://github.com/pixleyes/RadioShow">RadioShow on GitHub</a>
		</footer>
	</section>
	<?php
}
?>
