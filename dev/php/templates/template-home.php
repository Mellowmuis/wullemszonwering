<?php
/*
Template Name: Homepage
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

			<div class="u-gridCol3">

				<div class="thumb-webshop">
					<div class="thumb-content">
						<a target="_blank" href="http://shop.zonnelux.nl/">WEBSHOP RAAMDECORATIE</a>
					</div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/raamdecoratie.png">
				</div>

				<div class="thumb-webshop-bottom">
					<div class="thumb-content">
						<a target="_blank" href="http://www.wullemswebshop.nl/Home.html">WEBSHOP BUITENZONWERING</a>
					</div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/img/buitenzonwering.png">
				</div>

			</div>


			<div class="u-gridCol6">
				<img src="<?php echo get_stylesheet_directory_uri();?>/img/aanbiedingen-rolluik.jpg">
				<img class="aanbiedingen-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/aanbiedingen.gif">
			</div>
		</div>

	<!--<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>-->
	</div>
</div>

<?php get_footer(); ?>
