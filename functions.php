<?php
/**
 * Theme functions.
 *
 * @author Andrew Minion <andrew@andrewrminion.com>
 * @package shelby-paint-center
 */

/**
 * Don’t show post thumbnails in header.
 */
add_filter( 'twentynineteen_can_show_post_thumbnail', '__return_false' );

/**
 * Set gallery thumbnails not to crop.
 *
 * @param $size array Width and height.
 *
 * @return array      Width and height.
 */
add_filter(
	'woocommerce_gallery_thumbnail_size',
	function( $thumbnail_size ) {
		return 'sd_wc_gallery_thumbnail';
	}
);

/**
 * Add custom image size for WooCommerce gallrey thumbnails.
 */
add_action(
	'init',
	function() {
		add_image_size( 'sd_wc_gallery_thumbnail', 100, 150, false );
	}
);
