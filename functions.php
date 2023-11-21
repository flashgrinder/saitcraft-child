<?php
	define('STANDART_DIR', get_stylesheet_directory_uri() . '/assets/');
	/* Actions */
	include_once(__DIR__ . '/inc/actions.php');
	/* Filters */
	include_once(__DIR__ . '/inc/filters.php');
	/* Post type - Reviews */
	include_once(__DIR__ . '/inc/post-type_reviews.php');
	/* Bitrix24 */
	include_once(__DIR__ . '/inc/bitrix24-webhook.php');