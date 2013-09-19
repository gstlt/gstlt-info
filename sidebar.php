<?php
/**
 *  gstlt.info WP theme
 *
 * @package     gstlt-info
 * @author      Grzegorz Adamowicz (gadamowicz@gstlt.info)
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>


<div id="sidebar">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('main-sidebar') ) : ?>

<h3>Defaults</h3>
<p>Default sidebar</p>
<?php endif; ?>

</div>