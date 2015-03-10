<?php
/*
Template Name: Product type 3
*/
?>

<?php get_header(); ?>

<?php
	$imageProd2_1  = get_field('foto_een');
	$imageProd2_2 = get_field('foto_twee');
	$imageProd2_3 = get_field('foto_drie');
	$imageProd2_4 = get_field('foto_vier');
	$imageProd2_5 = get_field('foto_vijf');

?>
	<div class="u-gridContainer">
		<div class="white-bg">
			<div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content" id="post-<?php the_ID(); ?>">
					<h2 class="website-titel"><?php the_title(); ?></h2>
					<div class="paginainhoud">
						<div class="u-gridRow space-row">
							<div class="u-gridCol3"> 
								<img src="<?php echo $imageProd2_2['url']; ?>" />
							</div>

							<div class="u-gridCol9">
								<p class="onderhoud-titel"><?php the_field('titel_twee'); ?></p>
								<p><?php the_field('text_twee'); ?></p>
							</div>
						</div>

						<div class="u-gridRow space-row">
							<div class="u-gridCol9">
								<p class="onderhoud-titel"><?php the_field('titel_drie'); ?></p>
								<p><?php the_field('text_drie'); ?></p>
							</div>	

							<div class="u-gridCol3"> 
								<img src="<?php echo $imageProd2_3['url']; ?>" />
							</div>	
						</div>

						<div class="u-gridRow space-row"> 
							<div class="u-gridCol3">
								<img src="<?php echo $imageProd2_4['url']; ?>" />
							</div>
							<div class="u-gridCol9">
								<p class="onderhoud-titel"><?php the_field('titel_vier'); ?></p>
								<p><?php the_field('text_vier'); ?></p>
							</div>
						</div>

						<div class="u-gridRow space-row">
							<div class="u-gridCol8">
								<p class="onderhoud-titel"><?php the_field('titel_vijf'); ?></p>
								<p><?php the_field('text_vijf'); ?></p>
							</div>

							<div class="u-gridCol4 img-right">
								<img src="<?php echo $imageProd2_5['url']; ?>" />
							</div>						
						</div>

						<div class="u-gridRow">
							<?php for($i = 1; $i <= 8; $i++) { ?>	
							<div class="brochure button-area1">
								<?php 
									$brochure = get_field('brochure'.$i);
									$url = $brochure['url'];
									$title = $brochure['title'];
									if($brochure != null){ ?>
										<a href="<?php echo $url; ?>" target="_blank"><?php echo $title; ?></a>
								<?php } ?>
							</div>
						<?php } ?>
						<div class="button-area">
							<a href="/assortiment">overzicht assortiment</a>
						</div>
					</div>	 
 


				</article>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
