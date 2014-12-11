<?php
/*
Template Name: Webshop
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="white-bg">
			<div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content" id="post-<?php the_ID(); ?>">
					<h2 class="website-titel"><?php the_title(); ?></h2>

					<div class="u-gridRow">
						<div class="u-gridCol9">
							<p>Bestellingen via de webshop worden in geheel Nederland gratis thuisbezorgd.Indien u er voor kiest om de producten te laten meten en monteren zal dit alleen mogelijk zijn in Zeeuws Vlaanderen. De prijzen hiervan kunt u opvragen via de formulieren opmeten. U krijgt dan vrijblijvend een offerte toegestuurd. .Bij bestelling van binnenzonwering vanaf € 500,00 is het meten en monteren gratis!</p>
						</div>
					</div>

					<div class="u-gridRow">
						<div class="u-gridCol6">
							<div class="thumb-webshop">
								<div class="thumb-content">
									<a target="_blank" href="http://shop.zonnelux.nl/">DIRECT NAAR WEBSHOP RAAMDECORATIE</a>
								</div>
								<img class="webshop-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/raamdecoratie.png">
							</div>
						</div>

						<div class="u-gridCol6">
							<div class="thumb-webshop">
								<div class="thumb-content">
									<a target="_blank" href="http://www.wullemswebshop.nl/Home.html">DIRECT NAAR WEBSHOP BUITENZONWERING</a>
								</div>
								<img class="webshop-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/buitenzonwering.png">
							</div>							
						</div>
					</div>
						
				</article>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
