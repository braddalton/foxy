<?php
register_sidebar( array(
		'name' => 'After Post',
		'id' => 'after-post',
		'before_widget' => '<div id="%1$s" class="fwidget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	) );
