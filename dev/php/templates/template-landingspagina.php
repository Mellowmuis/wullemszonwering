<?php
/*
Template Name: Landingspagina
*/
?>

<?php get_header(); ?>
<div class="u-gridContainer">
		<div class="white-bg">
		 <div class="u-gridRow menu-white-bg ">
		 	<div class="u-gridCol12 welkom-text-area-correct">
		 		<p class="welkom-text">Het adres voor al uw binnen- en buitenzonwering, garagedeuren, rolluiken en terrasoverkappingen</p>
		 	</div>
		 </div>
		 
		 <div class="u-gridRow ">
			 <div class="Slider"> <!-- Dit is de slider in de onderkant header -->
                   <?php

								$args = array(
									'post_type' => 'slides',
									'posts_per_page'=>999
								);
								$slides = new WP_Query( $args );
								$num = count($slides);
								$counter = 0;
								if( $slides->have_posts() ) {
									while( $slides->have_posts() ) {
										$slides->the_post();
										$counter++;
										?>
										<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
											  $image_url = $image[0];
										?>
										<div class="slide" style="">
											<img class="border-img" src="<?php echo $image_url; ?>" />
											<div class="slider-txt-back"><h4><?php the_title(); ?></h4></div>
										</div>
										<?php
									}
								}
							?>
                </div>   <!-- einde slider van de onderkant header -->
		</div>

		<div class="u-gridRow content-home-space">
			<div class="u-gridCol3">

				<?php include_once('sidebar-menu.php'); ?>	

			</div>

			<div class="u-gridCol9">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--home" id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>

			</div>
		</div>


	</div>
</div>

<?php get_footer(); ?>
