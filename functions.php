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
