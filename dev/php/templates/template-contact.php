<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>

	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
		<div class="white-bg">
			<div class="Content-entry">
				<h2 class="website-titel"><?php the_title(); ?></h2>
					<div class="paginainhoud">

						<div class="Content-text">

							<div class="u-gridRow">					
								<div class="adress u-gridCol4">
									<div class="adress-info">
										<p>Wullems Zonwering</p>
										<p>Haarmanweg 21A</p>
										<p>4538 AN  Terneuzen</p>
										<p>Email: info@wullemszonwering.nl</p>
										<p>Tel: 0115 630299</p>
										<hr>
										<p>ABN-Amro IBAN: NL91ABNA0612027503</p>
										<p>KVK: 51932334</p>
										<p>BTW: NL127159447B02</p>
									</div>
			
								</div>					
								<div class="adress-map u-gridCol8">
									<a target="_blank" href="https://www.google.nl/maps/place/Wullems+Zonwering/@51.325013,3.831374,17z/data=!3m1!4b1!4m2!3m1!1s0x47c48055c0990ca5:0x2068223c790f1ad1">
										<div id="map_canvas"></div>
									</a>
								</div>

							</div> <!-- /gridRow -->

							<div class="hr-style super-margin">
								<hr>
							</div>
							<div class="u-gridRow">						
								<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
								<?php the_content(); ?>
							
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
							</div>

						</div> 
					</div><!-- content-text -->
			</div>
		</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

