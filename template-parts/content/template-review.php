<?php
	global $reviews_list;
	global $post;
	$review_name = get_field('review_name', $post->ID);
	$review_position = get_field('review_position', $post->ID);
	$review_text = get_field('review_text', $post->ID);
	$review_file = get_field('review_file', $post->ID);
	$review_video = get_field('review_video', $post->ID);
?>
<article class="reviews__item">
	<div class="reviews__item-outer">
		<header class="reviews__item-header">
			<div class="reviews__item-photo">
				<?php
					$default_attr = [
						'class'	=> "reviews__item-img",
						'alt'   => get_the_title()
					];

					echo get_the_post_thumbnail( $post->ID, 'large', $default_attr ) ?>
				<?php if(!empty($review_video)): ?>
					<a href="<?= $review_video; ?>" class="reviews__video-play" data-type="iframe" data-fancybox>
						<svg class="reviews__video-icon" viewBox="0 0 320 67" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.6637 63.7673C20.1014 63.7676 19.5517 63.6012 19.0841 63.289C18.6165 62.9769 18.2519 62.5331 18.0366 62.0137C17.8212 61.4944 17.7647 60.9228 17.8742 60.3713C17.9837 59.8199 18.2543 59.3133 18.6518 58.9156C19.0492 58.5179 19.5557 58.2471 20.1071 58.1373C20.6585 58.0275 21.2301 58.0837 21.7496 58.2988C22.269 58.5139 22.713 58.8782 23.0254 59.3456C23.3378 59.8131 23.5045 60.3627 23.5045 60.9249C23.5036 61.6782 23.2041 62.4004 22.6716 62.9333C22.139 63.4661 21.417 63.766 20.6637 63.7673ZM318.797 59.7218H50.7841H25.7714C25.5005 58.5706 24.8487 57.5447 23.9216 56.8104C22.9945 56.0761 21.8465 55.6766 20.6639 55.6766C19.4813 55.6766 18.3333 56.0761 17.4062 56.8104C16.4791 57.5447 15.8273 58.5706 15.5564 59.7218H1.20312C0.884036 59.7218 0.578017 59.8486 0.352387 60.0742C0.126758 60.2998 0 60.6058 0 60.9249C0 61.244 0.126758 61.55 0.352387 61.7757C0.578017 62.0013 0.884036 62.1281 1.20312 62.1281H15.5564C15.8274 63.2791 16.4793 64.3049 17.4064 65.0391C18.3334 65.7733 19.4813 66.1727 20.6639 66.1727C21.8465 66.1727 22.9943 65.7733 23.9214 65.0391C24.8485 64.3049 25.5004 63.2791 25.7714 62.1281H318.797C319.116 62.1281 319.422 62.0013 319.648 61.7757C319.873 61.55 320 60.9249 320 60.9249C320 60.6058 319.873 60.2998 319.648 60.0742C319.422 59.8486 319.116 59.7218 318.797 59.7218ZM33.4091 16.8018L50.0706 26.4222L33.4091 36.0416V16.8018ZM32.0959 38.3164C32.4273 38.5106 32.8045 38.613 33.1886 38.613C33.5727 38.613 33.9498 38.5106 34.2812 38.3164L51.604 28.3154C51.9362 28.1234 52.2121 27.8473 52.4038 27.5149C52.5956 27.1825 52.6966 26.8055 52.6966 26.4217C52.6966 26.038 52.5956 25.661 52.4038 25.3286C52.2121 24.9962 51.9362 24.7201 51.604 24.528L34.2826 14.527C33.9502 14.335 33.5732 14.234 33.1893 14.234C32.8055 14.2339 32.4285 14.335 32.0961 14.5269C31.7637 14.7189 31.4877 14.9949 31.2958 15.3274C31.104 15.6598 31.0031 16.0369 31.0032 16.4207V36.4227C31.0006 36.807 31.1005 37.185 31.2925 37.5178C31.4846 37.8507 31.7619 38.1263 32.0959 38.3164ZM38.5 3.23313C25.7138 3.23313 15.311 13.6359 15.311 26.4222C15.311 39.2084 25.7138 49.6104 38.5 49.6104C51.2862 49.6104 61.6889 39.2082 61.6889 26.4222C61.6889 13.6361 51.2861 3.23313 38.5 3.23313ZM38.5 52.017C52.6128 52.017 64.0948 40.535 64.0948 26.4222C64.0948 12.3094 52.6128 0.827179 38.5 0.827179C24.3872 0.827179 12.905 12.31 12.905 26.4222C12.905 40.5344 24.387 52.017 38.5 52.017Z" fill="white"/>
						</svg>
					</a>
				<?php endif; ?>
			</div>
		</header>
		<div class="reviews__item-inner">
			<div class="reviews__item-decor"></div>
			<h2 class="reviews__item-title title title--white title--pre-large title--w-semi-bold">
				<?= $review_name; ?>
			</h2>
			<?php if(!empty($review_position)): ?>
				<p class="reviews__item-subtitle title title--white title--small title--w-light">
					<?= $review_position; ?>
				</p>
			<?php endif; ?>
			<div class="reviews__item-text title title--white title--medium title--w-regular">
				<?= $review_text; ?>
			</div>
		</div>
	</div>
	<footer class="reviews__item-footer">
		<?php if(!empty($review_file)): ?>
			<a href="<?= $review_file; ?>" class="reviews__read title title--white title--medium title--w-extra-light" target="_blank">
				Посмотреть отзыв полностью
			</a>
		<?php endif; ?>
	</footer>
</article>
