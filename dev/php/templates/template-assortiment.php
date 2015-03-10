<?php
/*
Template Name: Assortiment
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
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/knikarmschermen.jpg">
								<a class="assort-link-master" href="/knikarmschermen">Knikarmschermen</a>
								<div class="assort-link-bottom">
									<a href="/porto-knikarmscherm">Porto</a>
									<a href="/st-tropez-knikarmzonnescherm">St Tropez</a>
									<a href="/ipanema-knikarmzonnescherm">Ipanema</a>
									<a href="/alicante">Alicante</a>
									<a href="/salou">Salou</a>
									<a href="/rhodos">Rhodos</a>
								</div>
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/markiezen.jpg">
								<a class="assort-link-master" href="/markiezen">Markiezen</a>
								<div class="assort-link-bottom">
									<a href="/markiezen">Standaard</a>
									<a href="/markiezen">Petmodel</a>
									<a href="/markiezen">Klapmodel</a>
								</div>
							</div>		

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/screens.jpg">
								<a class="assort-link-master" href="/screens">Screens</a>
								<div class="assort-link-bottom">
									<a href="/screens-standaard">Standaard</a>
									<a href="/ritsscreens">Ritsscreens</a>
								</div>
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/terrasoverkappingen.jpg">
								<a class="assort-link-master" href="/terrasoverkapping">Terrasoverkappingen</a>
								<div class="assort-link-bottom">
									<a href="/iseo-terrasoverkapping">Iseo</a>
									<a href="/greenline-terrasoverkapping">Greenline</a>
									<a href="/highline-terrasoverkapping">Highline</a>
									<a href="/profiline-terrasoverkapping">Profiline</a>
									<a href="/garda">Garda</a>
								</div>
							</div>
						</div>


						<div class="u-gridRow assort-row">
							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/garagedeuren.jpg">
								<a class="assort-link-master" href="/garagedeuren">Garagedeuren</a>
								<div class="assort-link-bottom">
									<a href="/duopoort-garagedeuren">Duopoort</a>
									<a href="/sectionaal-garagedeuren">Sectionaal</a>
									<a href="/rolpoort-garagedeuren">Rolpoort</a>
								</div>
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/rolluiken.jpg">
								<a class="assort-link-master" href="/rolluiken">Rolluiken</a>
								<div class="assort-link-bottom">
									<a href="/verano-rolluiken">Verano rolluiken</a>
									<a href="/heroal-rolluiken">Heroal rolluiken</a>
									<a href="/eco-rolluiken">Eco rolluiken</a>
									<a href="/safe-rolluiken">Safe rolluiken</a>
									<a href="/jaloezie-rolluiken">Jaloezie rolluiken</a>

								</div>
							</div>		

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/uitvalschermen.jpg">
								<a class="assort-link-master" href="/uitvalschermen">Uitvalschermen</a>
								<div class="assort-link-bottom">
									<a href="/rimini-uitvalscherm">Rimini</a>
									<a href="/mallorca-uitvalscherm">Mallorca</a>
									<a href="/napoli-uitvalscherm">Napoli</a>
									<a href="/florence-uitvalscherm">Florence</a>
									<a href="/palma-uitvalscherm">Palma</a>
									<a href="/markisolette-uitvalscherm">Markisolette</a>
								</div>
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/verandazonwering.jpg">
								<a class="assort-link-master" href="/verandazonwering">Verandazonwering</a>
								<div class="assort-link-bottom">
									<a href="/oslo-malmo-talinn">Oslo</a>
									<a href="/oslo-malmo-talinn">Malmö</a>
									<a href="/oslo-malmo-talinn">Talinn</a>
								</div>
							</div>
						</div>	


						<div class="u-gridRow assort-row">
							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/horen.jpg">
								<a class="assort-link-master" href="/horen-en-hordeuren">Horen en hordeuren</a>
								<div class="assort-link-bottom">
									<a href="http://www.uniluxhorren.nl/producten/voor-ramen/?dealer=wullems-zonwering">Bestel online</a>
								</div>
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/tuinkamers.jpg">
								<a class="assort-link-master" href="/tuinkamers">Tuinkamers</a>
								<div class="assort-link-bottom">
								</div>
							</div>		

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/binnenzonwering.jpg">
								<a class="assort-link-master" href="/binnenzonwering">Binnenzonwering</a>
								<div class="assort-link-bottom">
					                <a href="/rolgordijnen">Rolgordijnen</a>
					                <a href="/duo-rolgordijnen">Duo rolgordijnen</a>
					                <a href="/aluminium-jaloezieen">Aluminium jaloeziën</a>
					                <a href="/houten-jaloezieen">Houten jaloeziën</a>
					                <a href="/plisse-en-duette">Plissé gordijnen</a>
					                <a href="/lamellen">Lamelgordijnen</a>
					                <a href="/paneelgordijnen">Paneelgordijnen</a>
					                <a href="/vouwgordijnen">Vouwgordijnen</a>
					                <a href="/gordijnen-en-vitrages">Gordijnen en vitrages</a>
					                <a href="/sheerlight">Sheerlight</a>
					                <a href="/shutters">Shutterpanelen</a>
								</div>
							</div>

							<div class="u-gridCol3 assort-area">
								<img class="assort-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/buiten.png">
								<a class="assort-link-master" href="/buitenleven">Buiten leven</a>
								<div class="assort-link-bottom">
					                <a href="/cortona-terrasscherm">Cortona terasscherm</a>
					                <a href="/lucca-terrasscherm">Lucca terrasscherm</a>
					                <a href="/siena-terrasscherm">Sienna terrasscherm</a>
					                <a href="/carport">Carport</a>
					                <a href="/windschermen">Windscherm</a>
					                <a href="/lamellendak-overkapping">Lamellen overkapping</a>
					                <a href="/tuinschuttingen">Tuinschuttingen</a>
					                <a href="/planten-en-vijverbakken">Plant- en vijverbakken</a>
								</div>
							</div>
						</div>	
															
					</div>
						
				</article>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
