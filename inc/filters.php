<?php
add_filter('body_class', function ($classes) {
	if (is_page_template('page-reviews.php') || is_page_template('page-director.php') || is_page_template('page-case-brturbo.php')) {
		return array_merge($classes, ['bg--black-grey']);
	}
	return $classes;
});

add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpseo_json_ld_output', '__return_false');
