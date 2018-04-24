<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Good_House_Grille
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
	  	<!---start-top-header---->
		 <div class="header">
		     <div class="wrap">
				<div class="top-header">
					<div class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" title="<?php bloginfo('name'); ?>" /></a>
					</div>
					<div class="social-icons">
						<ul>
							<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" title="facebook" /></a></li>
							<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" title="twitter" /></a></li>
							<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/google.png" title="google pluse" /></a></li>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
				<!---start-top-nav---->
				<div class="top-nav">
					<div class="top-nav-left">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="menu.html">Menu</a></li>
							<li><a href="contact.html">Contact</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
					<div class="top-nav-right">
						<?php get_search_form(); ?>
					</div>
					<div class="clear"> </div>
				</div>
				<!---End-top-nav---->
			</div>
		</div>
	   <!----End-header---->
	   <?php if (is_page_template( 'page-home.php' ) ) : ?>
	    <div class="slider">
	    	<?php if ( has_post_thumbnail() ) :
	    		the_post_thumbnail();
	    	else : ?>
	   			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slider1.jpg" />
	   		<?php endif; ?>
	   </div>
		<?php endif; ?>
<div class="content"></div>
