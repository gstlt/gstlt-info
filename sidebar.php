<?php

?>


<div id="sidebar">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('main-sidebar') ) : ?>

<h3>Defaults</h3>
<p>Default sidebar</p>
<?php endif; ?>

</div>