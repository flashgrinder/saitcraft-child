<?php
const VERSION_THEME_FILES = '1.0.4';

add_action('wp_enqueue_scripts', function () {

	wp_enqueue_style('styles-parent', get_template_directory_uri() . '/style.css', [], VERSION_THEME_FILES);
	wp_enqueue_style('styles-bootstrap', get_stylesheet_directory_uri() . '/old-styles/bootstrap.min.css', [], VERSION_THEME_FILES);
	wp_enqueue_style('styles-app', get_stylesheet_directory_uri() . '/old-styles/app.css', [], VERSION_THEME_FILES);
	wp_style_add_data('saitcraft-style', 'rtl', 'replace');
	wp_enqueue_style('styles-child', get_stylesheet_directory_uri() . '/assets/css/style.min.css', ['styles-parent'], VERSION_THEME_FILES);

	wp_deregister_script('jquery');
	wp_register_script('jquery', '/js/jquery-3.6.0.min.js');
	wp_enqueue_script('jquery');

	wp_enqueue_script('navigation', get_template_directory_uri() . '/js/navigation.js', [], VERSION_THEME_FILES, ['in_footer' => true]);
	wp_enqueue_script('customizer', get_template_directory_uri() . '/js/customizer.js', ['customize-preview'], VERSION_THEME_FILES, ['in_footer' => true]);
	wp_enqueue_script('scripts-child', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', [], VERSION_THEME_FILES, ['in_footer' => true]);
	wp_enqueue_script('scripts-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', [], VERSION_THEME_FILES, ['in_footer' => true]);
	wp_enqueue_script('scripts-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', [], VERSION_THEME_FILES, ['in_footer' => true]);
	wp_enqueue_script('scripts-vide', '/js/jquery.vide.min.js', ['jquery'], VERSION_THEME_FILES, ['in_footer' => true]);
	wp_enqueue_script('scripts-app', '/js/app.js', [], VERSION_THEME_FILES, ['in_footer' => true]);
});

add_action('wp_head', function () {
?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<script type="text/javascript">
		! function() {
			var t = document.createElement("script");
			t.type = "text/javascript", t.async = !0, t.src = 'https://vk.com/js/api/openapi.js?169', t.onload = function() {
				VK.Retargeting.Init("VK-RTRG-1311016-4DMMi"), VK.Retargeting.Hit()
			}, document.head.appendChild(t)
		}();
	</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1311016-4DMMi" style="position:fixed; left:-999px;" alt="" /></noscript>


	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");


        ym(25803377, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/25803377" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->


	<?php
}, 99);

## JS в конце документа
add_action('wp_footer', function () {
?>

	<script>
		(function(ratingRuneta) {
			var rrcid = new URLSearchParams(window.location.search).get(ratingRuneta);
			if (rrcid) window.sessionStorage.setItem(ratingRuneta, rrcid);
			rrcid = window.sessionStorage.getItem(ratingRuneta);
			(function(m, e, t, r, i, k, a) {
				m[i] = m[i] || function() {
					(m[i].a = m[i].a || []).push(arguments)
				};
				m[i].l = 1 * new Date();
				for (var j = 0; j < document.scripts.length; j++) {
					if (document.scripts[j].src === r) {
						return;
					}
				}
				k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
			})
			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
			ym(25803377, "init", {
				'clickmap': false,
				'trackLinks': false,
				'accurateTrackBounce': true,
				'webvisor': false,
				'params': {
					'rrcid': rrcid
				}


			});
		})('rrcid');
	</script>

	<script>
		if ('loading' in HTMLImageElement.prototype) {
			const images = document.querySelectorAll("img.lazyload");
			images.forEach(img => {
				img.src = img.dataset.src;
			});
		} else {
			// Dynamically import the LazySizes library
			let script = document.createElement("script");
			script.async = true;
			script.src =
				"//cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js";
			document.body.appendChild(script);
		}
	</script>

	<script>
		$('.js-modal-fake-file input[type=file]').on('change', function() {
			let file = this.files[0];
			$(this).closest('.js-modal-fake-file').find('.js-filename').html(file.name);
		});
	</script>

	<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8" defer></script>

<?php
}, 99);

/* Ajax Reviews */
include_once(__DIR__ . '/ajax/ajax-reviews.php');
