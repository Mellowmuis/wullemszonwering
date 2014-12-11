<?php
/*
Template Name: Product iframe
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="white-bg">
			<div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content" id="post-<?php the_ID(); ?>">
					<h2 class="website-titel"><?php the_title(); ?></h2>

					<div class="u-gridRow space-onderhoud">
						<iframe class="product-iframe" src="<?php the_field('iframe_url'); ?>"></iframe>
					</div>

					<div class="u-gridRow button-area">
						<a href="/assortiment">overzicht assortiment</a>
					</div>

				</article>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
