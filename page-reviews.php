<?php /*Template Name: Отзывы */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
<!-- Reviews -->
<section class="reviews">
	<div class="reviews__decor-ball reviews__decor-ball--one"></div>
	<div class="reviews__decor-ball reviews__decor-ball--two"></div>
	<div class="reviews__decor-bands">
		<svg class="reviews__decor-bands-svg" width="346" height="365" viewBox="0 0 346 365" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g opacity="0.36">
				<path d="M236.534 79.2973C280.551 103.582 330.639 114.207 342.782 188.581C354.924 262.954 303.318 354.023 187.964 363.13C72.6092 372.237 28.5686 331.675 11.8726 242.123C-4.82347 152.572 -12.3889 59.5655 66.5379 14.0309C145.465 -31.5038 192.517 55.0121 236.534 79.2973Z" stroke="#7823EB"/>
				<path d="M225.199 97.8624C261.374 117.744 302.538 126.442 312.517 187.33C322.496 248.218 280.085 322.774 185.282 330.23C90.479 337.685 54.2848 304.478 40.5633 231.164C26.8419 157.851 20.6243 81.7085 85.4894 44.4303C150.355 7.15215 189.024 77.9807 225.199 97.8624Z" stroke="#7823EB"/>
				<path d="M213.928 116.001C242.323 131.622 274.635 138.457 282.468 186.297C290.301 234.137 257.01 292.717 182.595 298.575C108.18 304.433 79.7694 278.342 68.9988 220.738C58.2282 163.135 53.3477 103.309 104.263 74.0186C155.179 44.7286 185.533 100.38 213.928 116.001Z" stroke="#7823EB"/>
			</g>
		</svg>
	</div>
	<div class="reviews__container container">
		<div class="reviews__breadcrumbs">
			<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
		</div>
		<h1 class="reviews__heading title title--big title--white title--w-extra-bold">
			<?php the_title(); ?>
		</h1>
		<?php
			global $post;
			global $wp_query;

			$current_page = !empty( $_POST['paged'] ) ? $_POST['paged'] : 1;
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			$args = array(
				'posts_per_page' => 2,
				'post_type' => 'reviews',
				'post_status' => 'publish',
				'paged'          => $paged,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'suppress_filters' => true
			);
			$reviews_list = new WP_Query( $args );
		?>
		<?php if( $reviews_list->have_posts() ) : ?>
			<div class="reviews__items">
	            <?php while( $reviews_list->have_posts() ) : $reviews_list->the_post(); ?>
		            <?php get_template_part( 'template-parts/content/template', 'review' ); ?>
	            <?php endwhile; ?>
			</div>
			<?php
				$max_pages = $reviews_list->max_num_pages;
				if( $paged < $max_pages):
			?>
				<div class="reviews__action">
					<a id="loadmore" href="javascript:;" class="reviews__button button button--primary" data-pagenumlink="<?= get_pagenum_link(1); ?>" data-paged="<?= $paged; ?>" data-max_pages="<?= $max_pages; ?>">
						Показать еще
					</a>
				</div>
			<?php endif; ?>
			<nav class="reviews__pagination pagination hide">
				<div class="pagination__inner js-pagination">
					<?php
						echo paginate_links(
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
					?>
				</div>
			</nav>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</section>
<!-- /. Reviews -->
<?php get_footer(); ?>
