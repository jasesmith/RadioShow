<?php
$stack['Example'] = array(
			'intro' => 'RadioShow &mdash; A CSS3 Image Showcase.',
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
?>
<div class="control-bar">
	<nav>
		<li>RadioShow (<a href="https://github.com/pixleyes/RadioShow">GitHub project</a>)</li>
		<li class="cat">layout:</li>
		<li data-layout="showcase-alt">alternate</li>
		<li class="cat">controls:</li>
		<li data-pos="showcase-left">left</li>
		<li data-pos="">center</li>
		<li data-pos="showcase-right">right</li>
		<li class="cat">slide:</li>
		<li data-slide="slide-up">up</li>
		<li data-slide="slide-down">down</li>
		<li data-slide="slide-left">left</li>
		<li data-slide="slide-right">right</li>
		<li class="cat">text:</li>
		<li data-text="">normal</li>
		<li data-text="sticky-text">sticky</li>
		<li data-text="persist-text">persist</li>
	</nav>
</div>

<?php
foreach($stack as $name => $data)
{
	$key = str_replace(' ','-',strtolower($name));
	?>
	<section id="<?php echo $key ?>">
		<header>
			<h1><?php echo $data['intro'] ?></h1>
		</header>
		<article>
			<div class="showcase slide-left sticky-text">
				
				<?php foreach($data['shots'] as $shot => $bits) { ?>
				
				<input type="radio" name="<?php echo $key ?>-flip" id="<?php echo $key ?>-flip-<?php echo $shot; ?>"<?php echo $shot == 1 ? 'checked="checked"' : '' ?> data-title="<?php echo $bits['headline'] ?>" />
				<div class="story" style="background-image:url(images/<?php echo $key ?>-<?php echo $shot ?>.jpg);">
					<div class="text">
						<div class="padme">
							<label class="next button" for="<?php echo $key ?>-flip-<?php echo $shot == count($stack[$name]['shots']) ? 1 : $shot+1; ?>">
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
	</section>
	<?php
}
?>
