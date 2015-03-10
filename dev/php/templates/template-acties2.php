<?php
/*
Template Name: Acties type 2
*/
?>

<?php get_header(); ?>
		

	<div class="u-gridContainer">
		<div class="white-bg">
			<div>
			
				<article class="Content" id="post-<?php the_ID(); ?>">
					<h2 class="website-titel"><?php the_title(); ?></h2>
					<div class="paginainhoud">
						<div class="u-gridRow">
							<p>Vraag <a target="_Blank" href="/offerte-aanvragen">hier</a> gratis uw offerte aan of bel 0115 630299</p>
						</div>
						<div class="u-gridRow">
							<?php $loop = new WP_Query( array( 'post_type' => 'actie2', 'posts_per_page' => 999 ) ); ?>

							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php
									$plaatje = get_field('advertentie');
									$src = $plaatje['url'];
								?>

								<div class="advertisement">
									<a href="<?php echo get_field('link'); ?>" target="_blank">
										<img src="<?php echo $src; ?>" />
									</a>
								</div>



							<?php endwhile; ?>
						</div>

						<div class="u-gridRow button-area">
							<a href="#">overzicht assortiment</a>
						</div>
					</div>					
				</article>
			
			</div>
		</div>
	</div>

<?php get_footer(); ?>
