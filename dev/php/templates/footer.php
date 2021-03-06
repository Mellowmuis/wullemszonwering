	<div class="Footer">
		<div class="u-gridContainer">
				<div class="u-gridRow footer-bg">
					<div class="u-gridCol4 footer-contact">
						<h4>Contact</h4>
						<p class="contact-space">
							Wullems Zonwering</br>
							Haarmanweg 21A</br>
							4538 AN Terneuzen</br>
							Tel: 0115 630299
						</p>
					</div>

					<div class="u-gridCol4">
						<h4>Openingstijden</h4>
						<p class="contact-space">
							Maandag gesloten</br>
							Di t/m vrij 09:00 tot 17:00 uur</br>
							Za 10:00 tot 16:00 uur</br>
							Zondag gesloten
						</p>
					</div>
					
					<div class="u-gridCol4">
						<h4>Gegevens</h4>
						<p class="contact-space">
							ABN-Amro IBAN: NL91ABNA0612027503</br>
						</p>
					</div>
				</div>
		</div>
	</div>


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<div class="u-gridCol6">
				<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
				<a href="http://www.lokaalgevonden.nl" target="_blank">Lokaal<span class="orange-text">Gevonden</span></a>
			</div>
			<div class="u-gridCol2 sitemap">
				<h5>Sitemap:</h5>
					<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
						<div class="u-gridCol3">
							<?php dynamic_sidebar( 'footer-widgets' ); ?>
						</div>
						<?php endif; ?>
			</p>
			</div>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script>
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
