<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Good_House_Grille
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="about-header">
		<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
	</header><!-- .entry-header -->



	<?php
		if ( has_post_thumbnail() ) {
	    	the_post_thumbnail('full');
		}
	?>

	<div class="about-info">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
