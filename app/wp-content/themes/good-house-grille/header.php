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
						<a href="index.html"><img src="images/logo.png" title="logo" /></a>
					</div>
					<div class="social-icons">
						<ul>
							<li><a href="#"><img src="images/facebook.png" title="facebook" /></a></li>
							<li><a href="#"><img src="images/twitter.png" title="twitter" /></a></li>
							<li><a href="#"><img src="images/google.png" title="google pluse" /></a></li>
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
						<form>
							<input type="text"><input type="submit" value="" />
						</form>
					</div>
					<div class="clear"> </div>
				</div>
				<!---End-top-nav---->
			</div>
		</div>
	   <!----End-header----->

<div id="content" class="site-content">
