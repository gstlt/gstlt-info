<?php
/**
 *  gstlt.info WP theme
 *
 * @package     gstlt-info
 * @author      Grzegorz Adamowicz (gadamowicz@gstlt.info)
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'main-sidebar' ),
		'id' => 'main-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

// revert to 2-column dashboard
function gstlt_screen_layout_columns($columns) {
    $columns['dashboard'] = 2;
    return $columns;
}
add_filter('screen_layout_columns', 'gstlt_screen_layout_columns');

function gstlt_screen_layout_dashboard() { return 2; }
add_filter('get_user_option_screen_layout_dashboard', 'gstlt_screen_layout_dashboard');
