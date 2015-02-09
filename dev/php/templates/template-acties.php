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

					<div class="u-gridRow">
						<p>Vraag <a target="_Blank" href="/offerte-aanvragen">hier</a> gratis uw offerte aan of bel 0115 630299</p>
					</div>
					<div class="u-gridRow">
						<?php $loop = new WP_Query( array( 'post_type' => 'actie', 'posts_per_page' => 4 ) ); ?>

						<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="u-gridCol6 acties">
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<div class="actie-box-edit" style="background-image: url('<?php echo $image[0]; ?>')">
								<?php else:  ?>
									<div class="actie-box-edit">
								<?php endif; ?>
										<div class="actie-box-edit-bovenbalk">
											<?php the_title( '<h5><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h5>' ); ?>
										</div>
										<div class="actie-box-edit-korting">
											<img src="<?php echo get_stylesheet_directory_uri();?>/img/korting-edit.png">
											<h2><?php echo get_post_meta($post->ID, 'korting', true); ?>%</h2>
										</div>
										<div class="actie-ul">
											<?php the_content(); ?>
										</div>
									</div>
								</div>
						<?php endwhile; ?>
							</div>

					

						

					<div class="u-gridRow button-area">
						<a href="#">overzicht assortiment</a>
					</div>
										
				</article>
			
			</div>
		</div>
	</div>

<?php get_footer(); ?>
