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

	<!-- Form Phone -->
	<section class="form-phone">
		<div class="form-phone__body container">
			<div class="form-phone__outer">
				<div class="form-phone__info">
					<h3 class="form-phone__heading title title--pre-large title--dark title--w-semi-bold center">
						Помочь с выбором
					</h3>
					<p class="form-phone__subtitle text text--large text--dark text--w-semi-bold center">
						Оставьте номер и мы перезвоним вам в течение 1 часа
					</p>
				</div>
				<?= do_shortcode('[contact-form-7 id="502f623" title="Контактная форма c телефоном" html_class="form-phone__form"]'); ?>
			</div>
		</div>
	</section>
	<!-- /. Form Phone -->

<?php get_footer(); ?>
