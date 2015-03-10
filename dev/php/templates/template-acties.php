<?php
/*
Template Name: Acties
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
						
							<?php $loop = new WP_Query( array( 'post_type' => 'actie', 'posts_per_page' => 8 ) ); ?>

							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<div class="u-gridRow actie-space">						
									<div class="u-gridCol6 acties-foto">
										<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
										<a href="<?php echo get_field('link'); ?>">
										<img src="<?php echo $image[0]; ?>" />
										</a>
									</div>
									<div class="u-gridCol6 actie-text">
										<?php the_title( '<h5 class="advertisement-title"><title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</h5>' ); ?>
										<?php the_content(); ?>
									</div>
								</div>								
							<?php endwhile; ?>
						<div class="u-gridRow button-area">
							<a href="#">overzicht assortiment</a>
						</div>
					</div>				
				</article>
			
			</div>
		</div>
	</div> 

<?php get_footer(); ?>
