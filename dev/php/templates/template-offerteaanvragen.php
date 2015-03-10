<?php
/*
Template Name: Offerte aanvragen
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="white-bg">
			<div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content" id="post-<?php the_ID(); ?>">
					<h2 class="website-titel"><?php the_title(); ?></h2>
					<div class="paginainhoud">
         				<?php echo do_shortcode('[gravityform id=2 name=ContactUs title=false description=false]'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
