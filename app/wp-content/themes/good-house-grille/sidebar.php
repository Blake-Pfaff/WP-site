<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Good_House_Grille
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col span_1_of_3">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>


