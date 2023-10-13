<?php /*Template Name: Бета-тест */ ?>
<?php get_header(); ?>
<?php the_post(); ?>

	<section class="beta-test" style="margin-top: 100px">
		<div class="beta-test__body container">
			<h1 class="beta-test__heading title title--large title--dark title--w-medium">
				<?php the_title(); ?>
			</h1>
			<div class="beta-test__content" style="margin-top: 50px">
				<a href="javascript:;" class="button button--primary" data-stc-modal="#feedback-stc">
					Обсудить проект
				</a>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
