<?php
/*
Template Name: Product
*/
?>

<?php get_header(); ?>

<?php
	$image = get_field('foto_1');
	$image2 = get_field('foto_2');
	$image3 = get_field('foto_3');
?>
	<div class="u-gridContainer">
		<div class="white-bg">
			<div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content" id="post-<?php the_ID(); ?>">
					<h2 class="website-titel"><?php the_title(); ?></h2>

					<div class="u-gridRow space-row">
						<div class="u-gridCol7">
							<p class="onderhoud-titel"><?php the_field('titel_1'); ?></p>
							<p><?php the_field('text_1'); ?></p>

						</div>

						<div class="u-gridCol5 img-right">
							<img src="<?php echo $image['url']; ?>" />
						</div>
					</div>

					<div class="u-gridRow space-row">
						<div class="u-gridCol6">
							<img src="<?php echo $image2['url']; ?>" />
						</div>

						<div class="u-gridCol6">
							<p class="onderhoud-titel"><?php the_field('titel_2'); ?></p>
							<p><?php the_field('text_2'); ?></p>
						</div>
					</div>

					<div class="u-gridRow space-row">
						<div class="u-gridCol7">
							<p class="onderhoud-titel"><?php the_field('titel_3'); ?></p>
							<p><?php the_field('text_3'); ?></p>
						</div>

						<div class="u-gridCol5 img-right">
							<img src="<?php echo $image3['url']; ?>" />
						</div>
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
