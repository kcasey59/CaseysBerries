<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name');?></title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
</head>
	<body>
		<header>
			<h1><?php bloginfo('name');?></h1>
			<nav>
				<ul>
					<li>Home</li>
					<li>WordPress</li>
				</ul>
			</nav>
		</header>
		<section>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/berries.jpg" />
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<section>
				<?php the_content(); ?>
					<!-- <p>Casey's Berries is a pick your own strawberry patch. </p>
					<p>We also give berry tours on the side.</p> -->
			</section>
			<?php endwhile; else :?>
				<p><?php echo('Sorry, there is nothing to say.'); ?></p>
			<?php endif; ?>
		</section>
		<footer>
			<h1>Contact Us</h1>
			<p>Casey's Berries</p>
			<p>2525 Berry Way, Berryfarm, WI 91104</p>
			<p>Phone: (800) 424-3232</p>
		</footer>
	</body>
</html>