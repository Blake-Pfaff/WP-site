<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Good_House_Grille
 */

get_header();
?>
<div class="contact">
	<div class="wrap">
		<div class="section group">
		<?php get_sidebar(); ?>
			<div class="col span_2_of_3">
		<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content', 'single');
					}
			}
		?>
  			</div>
		</div>
	</div>
</div>
<?php

get_footer();
