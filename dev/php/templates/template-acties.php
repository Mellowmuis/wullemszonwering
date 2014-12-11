<?php
/*
Template Name: Acties
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
						<p>Vraag <a target="_Blank" href="/offerte-aanvragen">hier</a> gratis uw offerte aan of bel 0115 630299</p>
					</div>


					<div class="u-gridRow">

						<div class="u-gridCol6">
							<div class="actie-box">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/actie-rolluiken.png">
								<!--<b>Heroal rolluiken</b>

								<ul>
								  <li>INBRAAKWEREND</li>
								  <li>GELUIDSWEREND</li>
								  <li>ISOLERENDE DUBBELWANDIGE LAMEL</li>
								  <li>UITGEVOERD IN ALUMINIUM</li>
								  <li>DUBBEL GEMOFFELD</li>
								  <li>AFGESCHUINDE OF RONDE KAP</li>
								  <li>ELEKTRISCHE OF MET BAND BEDIENING</li>
								  <li>KEUZE UIT MEERDERE KLEUREN</li>
								  <li>CE KEURMERK</li>
								  <li>5 JAAR GARANTIE</li>
								</ul>

								<img class="korting-badge" src="<?php echo get_stylesheet_directory_uri();?>/img/korting-badge-rolluiken.png">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/actie-rolluiken-bg.png">-->
							</div>
						</div>


						<div class="u-gridCol6">
							<div class="actie-box">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/actie-rolluiken.png">
							</div>
						</div>

					</div>


					<div class="u-gridRow actie-row-bottom">

						<div class="u-gridCol6">
							<div class="actie-box">
								<img src="<?php echo get_stylesheet_directory_uri();?>/img/actie-rolluiken.png">
							</div>
						</div>

					</div>

					<div class="u-gridRow button-area">
						<a href="#">overzicht assortiment</a>
					</div>
										
				</article>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
