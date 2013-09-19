<?php
/**
 *  gstlt.info WP theme
 *
 * @package     gstlt-info
 * @author      Grzegorz Adamowicz (gadamowicz@gstlt.info)
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


if ( post_password_required() )
        return;
?>

<div id="comments">
<?php if ( have_comments() ) : ?>

<?php wp_list_comments(array(
            'avatar_size' => 45,
            'format' => 'html5',
            'style' => 'ul',
            'type' => 'comment' // 'all', 'comment' or 'pingback'
            )); ?>

<?php endif; // Check for comment navigation ?>

<?php
        if(function_exists('wp_paginate_comments')) {
            wp_paginate_comments();
        }
?>
<?php comment_form(); ?>
</div>