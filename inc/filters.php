<?php
	add_filter( 'body_class', function ($classes) {
		if(is_page_template('page-reviews.php')) {
			return array_merge( $classes, ['bg--black-grey'] );
		}
		return $classes;
	} );