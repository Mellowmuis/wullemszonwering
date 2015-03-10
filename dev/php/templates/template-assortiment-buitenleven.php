<?php
/*
Template Name: Assortiment-buitenleven
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="white-bg">
			<div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content" id="post-<?php the_ID(); ?>">
					<h2 class="website-titel"><?php the_title(); ?></h2>
					<div class="paginainhoud">
						<div class="u-gridRow">
							<div class="u-gridCol6">
								<p class="onderhoud-titel">Carport en windscherm</p>
								<p>
									Met een carport wordt uw auto optimaal beschermd tegen weersinvloeden, UV-straling en vuil. Een windscherm houdt de wind tegen, zo creëert u de meest aangename omstandigheden om lekker buiten te zitten.
								</p>
							</div>
							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/Cortona.png">
								<a class="assort-link-master" href="/cortona-terrasscherm">Cortona terrasscherm</a>
								
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/lucca.png">
								<a class="assort-link-master" href="/lucca-terrasscherm">Lucca terrasscherm</a>
								
							</div>
						</div>
						<br>
						<br>
						<div class="u-gridRow">
							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/siena.jpg">
								<a class="assort-link-master" href="/siena-terrasscherm">Sienna terrasscherm</a>
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/carport.png">
								<a class="assort-link-master" href="/carport">Carport</a>
							</div>		

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/windschermen.png">
								<a class="assort-link-master" href="/windschermen">Windscherm</a>
								
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/lamellen.png">
								<a class="assort-link-master" href="/lamellendak-overkapping">Lamellen overkapping</a>
								
							</div>
						</div>
						<br>
						<br>
						<div class="u-gridRow">
							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/tuinbeschutting.png">
								<a class="assort-link-master" href="/tuinschuttingen">Tuinbeschutting</a>
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/plantenvijver.png">
								<a class="assort-link-master" href="/planten-en-vijverbakken">Plant- en vijverbakken</a>
							</div>		
							<div class="u-gridCol6">
								<p class="onderhoud-titel">Terras- en tuinschermen en plant- en vijverbak</p>
								<p>
									Bepaal zelf waar het vrijstaande terrasscherm staat. Met een dit scherm kunt u een terras creëren op elke willekeurige plek in uw tuin. Met een tuinscherm creëer u een afscheiding en een plek waar u in alle privacy kunt genieten. De onderhoudsvrije aluminium plantenbakken en vijverbakken passen perfect bij de andere buitenleven producten van Wullems zonwering.
								</p>
							</div>
						</div>
						<div class="u-gridRow button-area">
							<a href="/assortiment">overzicht assortiment</a>
						</div>
						</div>										
					</div>
						
				</article>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
