<?php
	add_action( 'wp_enqueue_scripts', function (){
		wp_enqueue_script( 'jquery' );

		wp_enqueue_script('true_loadmore',get_stylesheet_directory_uri() . '/inc/ajax/ajax-reviews.js', ['jquery'], '1.0.0' );
		global $wp_query;
		wp_localize_script(
			'true_loadmore',
			'saitcraft', [
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
			]
		);

		wp_enqueue_script( 'true_loadmore' );
	} );

	function true_loadmore() {

		$paged = !empty( $_POST[ 'paged' ] ) ? $_POST[ 'paged' ] : 1;
		$paged++;
		$args = array(
			'posts_per_page' => 2,
			'post_type' => 'reviews',
			'paged' => $paged,
			'post_status' => 'publish',
			'orderby'     => 'date',
			'order'       => 'DESC',
			'suppress_filters' => true
		);

		query_posts( $args );

		ob_start();

		while( have_posts() ) : the_post();

			get_template_part( 'template-parts/content/template', 'review' );

		endwhile;

		$reviews = ob_get_contents();
		ob_get_clean();

		ob_start();
		$paginations = paginate_links(
			$args = array(
				'current'      => max( 1, get_query_var('paged') ),
				'format'       => '?paged=%#%',
				'total'   => $reviews_list->max_num_pages,
				'mid_size' => 1,
				'end_size' => 1,
				'prev_next' => false,
				'prev_text' => false,
				'next_text' => false,
			));
		ob_get_clean();

		echo json_encode([
			'reviews' => $reviews,
			'paginations' => str_replace(admin_url('admin-ajax.php'), $_POST['pagenumlink'], $paginations),
		]);
		wp_die();
	}

	if( wp_doing_ajax() ) {
		add_action('wp_ajax_true_loadmore', 'true_loadmore');
		add_action('wp_ajax_nopriv_true_loadmore', 'true_loadmore');
	}