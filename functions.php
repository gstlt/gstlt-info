<?php

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'main-sidebar' ),
		'id' => 'main-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
