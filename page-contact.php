<?php
/**
 * The template for displaying the contact page.
 *
 *
 * @package pgb
 */

$template = false;

if ( function_exists('pgb_get_option') )

	$template = pgb_get_option( 'default_page_template', 'left' );

if ( 'full' === $template ) :

	locate_template( 'page-nosidebar.php', true );

elseif ( 'left' === $template ) :

	locate_template( 'page-sidebarleft.php', true );

else :

	locate_template( 'page-sidebarright.php', true );

endif;
