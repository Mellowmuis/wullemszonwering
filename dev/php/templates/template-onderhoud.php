<?php
/*
Template Name: Onderhoud
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="white-bg">
			<div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content" id="post-<?php the_ID(); ?>">
					<h2 class="website-titel"><?php the_title(); ?></h2>

					<div class="u-gridRow space-onderhoud">
						<div class="u-gridCol9">
							<p class="onderhoud-titel">Kwaliteit, service en maatwerk</p>
							<p>Ook voor onderhoud en reparaties staat Wullems Zonwering voor u klaar. Wij staan voor kwaliteit en service, onder het  motto ‘sterk in maatwerk’. Met onze ervaring, vakkundig VCA gecertificeerd personeel en producten van hoge kwaliteit bieden wij een optimale serviceverlening, zodat u jarenlang plezier van uw zonwering heeft. Wij komen graag langs voor advies of brengen geheel vrijblijvend een offerte uit.  Onze producten en diensten zijn altijd scherp geprijsd.</p>
						</div>

						<div class="u-gridCol3">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/onderhoud-1.jpg">
						</div>
					</div>

					<div class="u-gridRow space-onderhoud">
						<div class="u-gridCol6">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/onderhoud-2.jpg">
						</div>

						<div class="u-gridCol6">
							<p class="onderhoud-titel">Ook op hoogte aan het juiste adres</p>
							<p>Op grote hoogtes is het van belang dat de zonwering van zeer hoge kwaliteit is.Al onze producten zijn TNO getest en voorzien van het CE keurmerk. Dit geeft u de garantie dat het product aan de meest recente Europese (veiligheids) normen voldoet</p>
						</div>
					</div>

					<div class="u-gridRow space-onderhoud">
						<div class="u-gridCol3">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/onderhoud-3.jpg">
						</div>

						<div class="u-gridCol6">
							<p class="onderhoud-titel">Garantie</p>
							<p>Wullems zonwering levert buitenzonwering en rolluiken met 5 jaar garantie. Voor terrasoverkappingen en garagedeuren geldt een garantieperiode van 10 jaar. De binnenzonwering wordt met 2 jaar garantie geleverd. Tevens heeft u op al onze producten de zekerheid van beste kwaliteit/prijsverhouding. Dit alles met gedegen en betrouwbaar advies.</p>
						</div>

						<div class="u-gridCol3">
							<img src="<?php echo get_stylesheet_directory_uri();?>/img/onderhoud-4.jpg">
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
