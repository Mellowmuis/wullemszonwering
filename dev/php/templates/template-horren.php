<?php
/*
Template Name: Horren
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
					<div class="paginainhoud">
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

							<div class="u-gridCol6 floating-text">
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

						<div class="u-gridRow">
							<div class="u-gridCol12 floating-text">
								<p class="onderhoud-titel">Bestel online</p>
								<p>Klik op een van onderstaande knoppen om bij Wullems zonwering online Unilux insectenwering te bestellen. U bespaart tot wel 15% op uw aankoopbedrag.</p>
							</div>
						</div>

						<div class="u-gridRow">
							<div class="u-gridCol4 bestelplaatjelinks">
								<a href="http://www.uniluxhorren.nl/producten/voor-ramen/?dealer=wullems-zonwering">
								    <img src="http://www.uniluxhorren.nl/images/banners/raamhorren.png" alt="Unilux Raamhorren" />
								</a>
							</div>
							<div class="u-gridCol4 bestelplaatje">
							<a href="http://www.uniluxhorren.nl/producten/voor-deuren/?dealer=wullems-zonwering">
							    <img src="http://www.uniluxhorren.nl/images/banners/deurhorren.png" alt="Unilux Deurhorren" />
							</a>
							</div>
							<div class="u-gridCol4 bestelplaatjerechts">
							<a href="http://www.uniluxhorren.nl/configurator/start/118/?dealer=wullems-zonwering">
							    <img src="http://www.uniluxhorren.nl/images/banners/stelsamen.png" alt="Unilux Configurator" />
							</a>
							</div>
						</div>

						<?php for($i = 1; $i <= 8; $i++) { ?>	
							<div class="brochure button-area1">
								<?php 
									$brochure = get_field('brochure'.$i);
									$url = $brochure['url'];
									$title = $brochure['title'];
									if($brochure != null){ ?>
										<a href="<?php echo $url; ?>"><?php echo $title; ?></a>
								<?php } ?>
							</div>
						<?php } ?>

						<div class="u-gridRow button-area">
							<a href="/assortiment">overzicht assortiment</a>
						</div>
					</div>

					

										
				</article>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
