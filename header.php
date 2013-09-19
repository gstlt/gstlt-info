<?php
/**
 *  gstlt.info WP theme
 *
 * @package     gstlt-info
 * @author      Grzegorz Adamowicz (gadamowicz@gstlt.info)
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title>
            <?php
            /*
             * Print the <title> tag based on what is being viewed.
             */
            global $page, $paged;
            wp_title('|', true, 'right');
            // Add the blog name.
            bloginfo('name');
            // Add the blog description for the home/front page.
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && ( is_home() || is_front_page() ))
                echo " | $site_description";
            // Add a page number if necessary:
            if ($paged >= 2 || $page >= 2)
                echo ' | ' . sprintf('Page %s', max($paged, $page));
            ?>
        </title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed', THEME_NS), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />
        <?php
        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */
        wp_head();
        ?>
    </head>
    <body <?php body_class(); ?>>

    <div id="main">
	<?php wp_nav_menu(); ?>
        <div id="pitch">
            <h1><span><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></span><br/><?php bloginfo('description'); ?></h1>
            <p></p>
        </div>
    <div class="x"></div>