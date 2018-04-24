<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Good_House_Grille
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function good_house_grille_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'good_house_grille_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function good_house_grille_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'good_house_grille_pingback_header' );

/** Home page box**/



function good_house_grille_home_metaboxes() {
	$cmb = new_cmb2_box( array(
		'id'			=> 'grille_home_metabox',
		'title'			=> __( 'Home Top Information', 'cmb2' ),
		'object_types'  => array( 'page' ),
		'context'		=> 'normal',
		'priority'		=> 'high',
		'show_names'   	=> true,
) );

	$group_field_id = $cmb->add_field( array(
		'id'          => 'grille_home_box',
		'type'        => 'group',
		'description' => __( '', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Box {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Another Entry', 'cmb2' ),
			'remove_button' => __( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
		),
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => 'Box Title',
		'id'   => 'title',
		'type' => 'text',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => 'Box Content',
		'id'   => 'content',
		'type' => 'wysiwyg',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => 'Box Link',
		'id'   => 'url',
		'type' => 'text_url',
	) );

}
add_action( 'cmb2_admin_init', 'good_house_grille_home_metaboxes' );
