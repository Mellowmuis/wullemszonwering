<?php
/*
Template Name: Assortiment-binnenzonwering
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
							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/rolgordijnen.png">
								<a class="assort-link-master" href="/rolgordijnen">Rolgordijnen</a>
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/duo-rolgordijnen.png">
								<a class="assort-link-master" href="/duo-rolgordijnen">Duo rolgordijnen</a>
							</div>		

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/aluminium.png">
								<a class="assort-link-master" href="/aluminium-jaloezieen">Aluminium jaloezieën</a>
								
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/houtenj.png">
								<a class="assort-link-master" href="/houten-jaloezieen">Houten jaloezieën</a>
								
							</div>
						</div>
						<br>
						<br>
						<div class="u-gridRow">
							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/plisse.png">
								<a class="assort-link-master" href="/plisse-en-duette">Plissé en Duette</a>
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/lamelgordijnen.png">
								<a class="assort-link-master" href="/lamellen">Lamelgordijnen</a>
							</div>		

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/paneelgordijnen.png">
								<a class="assort-link-master" href="/paneelgordijnen">Paneelgordijnen</a>
								
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/vouwgordijnen.png">
								<a class="assort-link-master" href="/vouwgordijnen">Vouwgordijnen</a>
								
							</div>
						</div>
						<br>
						<br>
						<div class="u-gridRow">
							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/vitrages.jpg">
								<a class="assort-link-master" href="/gordijnen-en-vitrages">Gordijnen en vitrages</a>
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/sheerlight.png">
								<a class="assort-link-master" href="/sheerlight">Sheerlight</a>
							</div>		

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/shutters.png">
								<a class="assort-link-master" href="/shutters">Shutterpanelen</a>
								
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/horren.jpg">
								<a class="assort-link-master" href="/horen-en-hordeuren">Horren</a>
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
