<?php header( "Last-Modified: " . get_the_modified_date('r') ) ?>


<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saitcraft
 */


?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="/css/app.css?<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/css/app.css') ?>">
	<?php wp_head(); ?>

<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',t.onload=function(){VK.Retargeting.Init("VK-RTRG-1311016-4DMMi"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1311016-4DMMi" style="position:fixed; left:-999px;" alt=""/></noscript>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<?php
$categories = get_the_category();
$category_id = @$categories[0]->cat_ID;
if(($category_id == 3 && is_single()) || is_page(3) || is_page(1736)) {
    $header_class = "black__text";
} else {
    $header_class = "";
}
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQTS4MC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
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
<header class="<?php echo $header_class;?>">
          <div class="container h-100">
              <div class="row h-100">
                  <div class="col-sm-12 d-flex justify-content-between align-items-center position-relative h-100">
                      <a href="/">
                        <svg class="logo__header" width="196" height="42" viewBox="0 0 196 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.139 0.614586C10.0164 0.614586 0.999726 9.74404 0.999726 21.0035C0.999726 32.2629 10.0164 41.3908 21.139 41.3908C23.4229 41.3908 25.6155 41.0015 27.6621 40.2918L22.8489 29.4217L16.5795 33.9512L16.5472 10.6312L33.7265 26.1763L26.2137 27.8959L31.0234 38.7645C37.1434 35.2667 41.2782 28.6252 41.2782 21.0035C41.2782 9.74404 32.2616 0.614586 21.139 0.614586Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M68.0973 9.99994C62.4087 9.99994 57.9999 13.9117 57.9999 19.6391C57.9999 25.3694 62.4087 29.2819 68.0973 29.2819C72.2786 29.2819 74.6674 27.0185 76.033 24.6989L72.5626 23.0491C71.7665 24.5865 70.0599 25.7601 68.0973 25.7601C64.6558 25.7601 62.1525 23.1623 62.1525 19.6391C62.1525 16.1188 64.6558 13.5202 68.0973 13.5202C70.0599 13.5202 71.7665 14.7216 72.5626 16.2313L76.033 14.5544C74.6958 12.2348 72.2786 9.99994 68.0973 9.99994ZM86.4969 27.5802V28.9518H90.043V20.3921C90.043 16.5789 87.2231 15.3716 84.151 15.3716C82.0287 15.3716 79.9068 16.0304 78.2591 17.4575L79.5993 19.7895C80.7443 18.7466 82.0846 18.2251 83.5371 18.2251C85.3242 18.2251 86.4969 19.103 86.4969 20.4468V22.2296C85.6031 21.1889 84.0116 20.6119 82.2245 20.6119C80.0745 20.6119 77.5333 21.7914 77.5333 24.891C77.5333 27.8548 80.0745 29.2819 82.2245 29.2819C83.9834 29.2819 85.5754 28.6509 86.4969 27.5802ZM86.4969 24.1227V25.7689C85.9105 26.538 84.7932 26.9214 83.6487 26.9214C82.2521 26.9214 81.1077 26.2093 81.1077 24.9743C81.1077 23.6845 82.2521 22.9717 83.6487 22.9717C84.7932 22.9717 85.9105 23.3536 86.4969 24.1227ZM92.6311 15.7003V28.9518H96.0379L101.762 20.6389V28.9518H105.308V15.7003H101.734L96.1773 23.7115V15.7003H92.6311ZM94.0549 11.9689C95.1999 13.4501 96.987 14.3835 98.9694 14.3835C100.98 14.3835 102.74 13.4501 103.856 11.9689L102.293 10.6799C101.511 11.7499 100.366 12.3809 98.9694 12.3809C97.5174 12.3809 96.3726 11.7221 95.6186 10.6799L94.0549 11.9689ZM111.31 18.7466V28.9518H114.884V18.7466H118.654V15.7003H107.54V18.7466H111.31ZM129.626 28.9518L126.052 23.8488L124.432 25.5505V28.9518H120.886V15.7003H124.432V21.5986L129.543 15.7003H133.899L128.565 21.7082L134.066 28.9518H129.626ZM139.37 33.9999V27.2522C140.459 28.6224 141.939 29.2819 143.53 29.2819C146.993 29.2819 149.506 26.7308 149.506 22.3129C149.506 17.8957 146.993 15.3716 143.53 15.3716C141.883 15.3716 140.403 16.0845 139.37 17.3743V15.7003H135.824V33.9999H139.37ZM142.414 18.4713C144.452 18.4713 145.82 20.0364 145.82 22.3129C145.82 24.6179 144.452 26.1816 142.414 26.1816C141.269 26.1816 139.956 25.4943 139.37 24.6726V19.9809C139.956 19.1308 141.269 18.4713 142.414 18.4713ZM160.199 27.5802V28.9518H163.746V20.3921C163.746 16.5789 160.925 15.3716 157.853 15.3716C155.731 15.3716 153.609 16.0304 151.961 17.4575L153.302 19.7895C154.447 18.7466 155.787 18.2251 157.239 18.2251C159.027 18.2251 160.199 19.103 160.199 20.4468V22.2296C159.305 21.1889 157.714 20.6119 155.927 20.6119C153.777 20.6119 151.235 21.7914 151.235 24.891C151.235 27.8548 153.777 29.2819 155.927 29.2819C157.686 29.2819 159.278 28.6509 160.199 27.5802ZM160.199 24.1227V25.7689C159.613 26.538 158.496 26.9214 157.351 26.9214C155.954 26.9214 154.809 26.2093 154.809 24.9743C154.809 23.6845 155.954 22.9717 157.351 22.9717C158.496 22.9717 159.613 23.3536 160.199 24.1227ZM188.656 18.7466V28.9518H192.23V18.7466H196V15.7003H184.886V18.7466H188.656ZM176.716 15.4089H176.568V10.7434H173.081V15.4089H172.933C169.009 15.4089 165.827 18.5063 165.827 22.3268C165.827 26.1472 169.009 29.2439 172.933 29.2439H173.081V33.9094H176.568V29.2439H176.716C180.64 29.2439 183.822 26.1472 183.822 22.3268C183.822 18.5063 180.64 15.4089 176.716 15.4089ZM169.36 22.3268C169.36 20.0839 171.022 18.2594 173.137 18.1777V26.4752C171.022 26.3933 169.36 24.5704 169.36 22.3268ZM176.515 26.4752V18.1777C178.63 18.2594 180.289 20.0839 180.289 22.3268C180.289 24.5704 178.63 26.3933 176.515 26.4752Z" fill="white"/>
                        </svg>                            
                      </a>
					
						<?php 
						wp_nav_menu( [
							'theme_location'  => '',
							'menu'            => 'header',
							'container'       => 'nav',
							'menu_class'      => 'menu',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							] ); ?>
              
                      <a href="javascript:;" class="btn__header" data-bs-toggle="modal" data-bs-target="#exampleModal">Обсудить проект</a>
                      
                      <a href="tel:<?php echo do_shortcode('[city_phone]')?>" class="header__tel">
                        <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                        <svg class="d-sm-none d-md-block d-lg-none" fill="#2cb7ff" height="14px" width="14px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                             viewBox="0 0 473.806 473.806" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4
                                    c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8
                                    c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6
                                    c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5
                                    c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26
                                    c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9
                                    c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806
                                    C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20
                                    c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6
                                    c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1
                                    c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3
                                    c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5
                                    c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8
                                    c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9
                                    l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1
                                    C420.456,377.706,420.456,388.206,410.256,398.806z"/>
                                <path d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2
                                    c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11
                                    S248.656,111.506,256.056,112.706z"/>
                                <path d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11
                                    c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2
                                    c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z"/>
                            </g>
                        </g>
                        </svg>
                        <span class="d-none d-sm-block d-md-none d-lg-block">
                        <?php echo do_shortcode('[belingogeo_city_field field="city_phone"]')?>
                        </span>
                      </a>
					  <!--<div style="margin-left:10px; position: relative;"><?php echo do_shortcode('[belingogeo_select_city]')?></div>-->
					  <span class="burger__mobile">
						<span></span>
					  </span>
                  </div>
              </div>
          </div>
      </header>

      <main class="<?php if(is_page_template('page-reviews.php')) echo 'main page__container'; ?>" >