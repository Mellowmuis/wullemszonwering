<?php
/*
Template Name: Landingspagina
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="white-bg">
		 <div class="u-gridRow welkom-text-area">
		 	<p class="welkom-text">Het adres voor al uw binnen- en buitenzonwering, garagedeuren, rolluiken en terrasoverkappingen</p>
		 </div>
		 
		 <div class="u-gridRow ">
			 <div class="Slider">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/slider.png">
			</div>
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
