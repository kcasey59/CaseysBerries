<?php get_header();?>
<div class="clearfix">
		<section class="main">
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
		<?php get_sidebar(); ?>
</div>
<?php get_footer();?>	