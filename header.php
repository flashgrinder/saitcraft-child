<?php header("Last-Modified: " . get_the_modified_date('r')) ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <?php if (is_page_template('page-contacts.php')) : ?>
        <script src="https://api-maps.yandex.ru/2.1/?apikey=0cffb125-ea9f-4453-9b5e-d2b920a21be9&lang=ru_RU" type="text/javascript"></script>
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php
    $categories = get_the_category();
    $category_id = @$categories[0]->cat_ID;
    if (($category_id == 3 && is_single()) || is_page(3) || is_page(1736)) {
        $header_class = "black__text";
    } else {
        $header_class = "";
    }
    ?>

    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQTS4MC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
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
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/25803377" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->


    <header class="<?php echo $header_class; ?>">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-sm-12 d-flex justify-content-between align-items-center position-relative h-100">
                    <a href="/">
                        <svg class="logo__header" width="196" height="42" viewBox="0 0 196 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.139 0.614586C10.0164 0.614586 0.999726 9.74404 0.999726 21.0035C0.999726 32.2629 10.0164 41.3908 21.139 41.3908C23.4229 41.3908 25.6155 41.0015 27.6621 40.2918L22.8489 29.4217L16.5795 33.9512L16.5472 10.6312L33.7265 26.1763L26.2137 27.8959L31.0234 38.7645C37.1434 35.2667 41.2782 28.6252 41.2782 21.0035C41.2782 9.74404 32.2616 0.614586 21.139 0.614586Z" fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M68.0973 9.99994C62.4087 9.99994 57.9999 13.9117 57.9999 19.6391C57.9999 25.3694 62.4087 29.2819 68.0973 29.2819C72.2786 29.2819 74.6674 27.0185 76.033 24.6989L72.5626 23.0491C71.7665 24.5865 70.0599 25.7601 68.0973 25.7601C64.6558 25.7601 62.1525 23.1623 62.1525 19.6391C62.1525 16.1188 64.6558 13.5202 68.0973 13.5202C70.0599 13.5202 71.7665 14.7216 72.5626 16.2313L76.033 14.5544C74.6958 12.2348 72.2786 9.99994 68.0973 9.99994ZM86.4969 27.5802V28.9518H90.043V20.3921C90.043 16.5789 87.2231 15.3716 84.151 15.3716C82.0287 15.3716 79.9068 16.0304 78.2591 17.4575L79.5993 19.7895C80.7443 18.7466 82.0846 18.2251 83.5371 18.2251C85.3242 18.2251 86.4969 19.103 86.4969 20.4468V22.2296C85.6031 21.1889 84.0116 20.6119 82.2245 20.6119C80.0745 20.6119 77.5333 21.7914 77.5333 24.891C77.5333 27.8548 80.0745 29.2819 82.2245 29.2819C83.9834 29.2819 85.5754 28.6509 86.4969 27.5802ZM86.4969 24.1227V25.7689C85.9105 26.538 84.7932 26.9214 83.6487 26.9214C82.2521 26.9214 81.1077 26.2093 81.1077 24.9743C81.1077 23.6845 82.2521 22.9717 83.6487 22.9717C84.7932 22.9717 85.9105 23.3536 86.4969 24.1227ZM92.6311 15.7003V28.9518H96.0379L101.762 20.6389V28.9518H105.308V15.7003H101.734L96.1773 23.7115V15.7003H92.6311ZM94.0549 11.9689C95.1999 13.4501 96.987 14.3835 98.9694 14.3835C100.98 14.3835 102.74 13.4501 103.856 11.9689L102.293 10.6799C101.511 11.7499 100.366 12.3809 98.9694 12.3809C97.5174 12.3809 96.3726 11.7221 95.6186 10.6799L94.0549 11.9689ZM111.31 18.7466V28.9518H114.884V18.7466H118.654V15.7003H107.54V18.7466H111.31ZM129.626 28.9518L126.052 23.8488L124.432 25.5505V28.9518H120.886V15.7003H124.432V21.5986L129.543 15.7003H133.899L128.565 21.7082L134.066 28.9518H129.626ZM139.37 33.9999V27.2522C140.459 28.6224 141.939 29.2819 143.53 29.2819C146.993 29.2819 149.506 26.7308 149.506 22.3129C149.506 17.8957 146.993 15.3716 143.53 15.3716C141.883 15.3716 140.403 16.0845 139.37 17.3743V15.7003H135.824V33.9999H139.37ZM142.414 18.4713C144.452 18.4713 145.82 20.0364 145.82 22.3129C145.82 24.6179 144.452 26.1816 142.414 26.1816C141.269 26.1816 139.956 25.4943 139.37 24.6726V19.9809C139.956 19.1308 141.269 18.4713 142.414 18.4713ZM160.199 27.5802V28.9518H163.746V20.3921C163.746 16.5789 160.925 15.3716 157.853 15.3716C155.731 15.3716 153.609 16.0304 151.961 17.4575L153.302 19.7895C154.447 18.7466 155.787 18.2251 157.239 18.2251C159.027 18.2251 160.199 19.103 160.199 20.4468V22.2296C159.305 21.1889 157.714 20.6119 155.927 20.6119C153.777 20.6119 151.235 21.7914 151.235 24.891C151.235 27.8548 153.777 29.2819 155.927 29.2819C157.686 29.2819 159.278 28.6509 160.199 27.5802ZM160.199 24.1227V25.7689C159.613 26.538 158.496 26.9214 157.351 26.9214C155.954 26.9214 154.809 26.2093 154.809 24.9743C154.809 23.6845 155.954 22.9717 157.351 22.9717C158.496 22.9717 159.613 23.3536 160.199 24.1227ZM188.656 18.7466V28.9518H192.23V18.7466H196V15.7003H184.886V18.7466H188.656ZM176.716 15.4089H176.568V10.7434H173.081V15.4089H172.933C169.009 15.4089 165.827 18.5063 165.827 22.3268C165.827 26.1472 169.009 29.2439 172.933 29.2439H173.081V33.9094H176.568V29.2439H176.716C180.64 29.2439 183.822 26.1472 183.822 22.3268C183.822 18.5063 180.64 15.4089 176.716 15.4089ZM169.36 22.3268C169.36 20.0839 171.022 18.2594 173.137 18.1777V26.4752C171.022 26.3933 169.36 24.5704 169.36 22.3268ZM176.515 26.4752V18.1777C178.63 18.2594 180.289 20.0839 180.289 22.3268C180.289 24.5704 178.63 26.3933 176.515 26.4752Z" fill="white" />
                        </svg>
                    </a>

                    <?php
                    wp_nav_menu([
                        'theme_location'  => '',
                        'menu'            => 'header',
                        'container'       => 'nav',
                        'menu_class'      => 'menu',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                    ]); ?>

                    <a href="javascript:;" class="btn__header" data-stc-modal="#feedback-stc">Обсудить проект</a>

                    <div class="header__socials">
                        <a href="https://t.me/saitcraft" target="_blank">
                            <svg width="28" height="23" viewBox="0 0 28 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.9325 2.07996C28.3049 0.398297 27.0651 -0.301109 25.9481 0.119301L1.14325 8.94228C-0.532291 9.60293 -0.222004 11.4629 1.14325 11.8833L7.09643 12.8636L21.9794 4.04063C22.662 3.56015 23.5301 4.60055 22.9715 5.02096L11.0652 14.8243V21.6866C11.7478 21.6866 11.685 21.0667 12.0574 20.7063L15.034 17.7653L20.9872 22.6669C22.1662 23.3275 23.6534 23.0078 23.9637 21.6866L27.9325 2.07996Z" fill="url(#paint0_linear_39_3435)" />
                                <defs>
                                    <linearGradient id="paint0_linear_39_3435" x1="0.472574" y1="11.5" x2="28.5907" y2="11.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#8341EF" />
                                        <stop offset="1" stop-color="#EB469F" />
                                    </linearGradient>
                                </defs>
                            </svg>

                        </a>
                        <a href="https://api.whatsapp.com/send?phone=79995838586" target="_blank">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26Z" fill="url(#paint0_linear_39_3438)" />
                                <path d="M18.7318 7.26844C17.3793 5.9024 15.5831 5.06466 13.6673 4.90631C11.7515 4.74797 9.84213 5.27945 8.28367 6.40489C6.72521 7.53033 5.62021 9.17563 5.168 11.044C4.7158 12.9124 4.94614 14.8809 5.8175 16.5945L4.96215 20.7471C4.95328 20.7884 4.95303 20.8311 4.96142 20.8726C4.9698 20.914 4.98665 20.9532 5.0109 20.9879C5.04643 21.0404 5.09715 21.0809 5.15628 21.1038C5.2154 21.1268 5.28013 21.1312 5.34181 21.1164L9.4117 20.1517C11.1204 21.001 13.075 21.2166 14.9277 20.76C16.7804 20.3034 18.4111 19.2043 19.5295 17.6583C20.6479 16.1123 21.1815 14.2197 21.0355 12.3172C20.8894 10.4146 20.0731 8.6256 18.7318 7.26844ZM17.4628 17.3966C16.527 18.3298 15.322 18.9458 14.0175 19.1578C12.713 19.3699 11.3749 19.1672 10.1917 18.5784L9.62443 18.2978L7.12931 18.8887L7.1367 18.8576L7.65375 16.3463L7.37602 15.7982C6.77146 14.6109 6.55819 13.2627 6.76677 11.9467C6.97535 10.6308 7.59507 9.4146 8.53716 8.47242C9.7209 7.28904 11.3262 6.62425 13 6.62425C14.6738 6.62425 16.2791 7.28904 17.4628 8.47242C17.4729 8.48398 17.4838 8.49484 17.4953 8.50492C18.6644 9.69135 19.317 11.2918 19.311 12.9575C19.3049 14.6231 18.6406 16.2188 17.4628 17.3966Z" fill="white" />
                                <path d="M17.2413 15.5543C16.9355 16.0359 16.4524 16.6254 15.8452 16.7716C14.7816 17.0287 13.1492 16.7805 11.118 14.8866L11.0928 14.8645C9.30682 13.2084 8.84296 11.8301 8.95523 10.737C9.01728 10.1165 9.53432 9.55514 9.97012 9.18877C10.039 9.12997 10.1207 9.0881 10.2087 9.06652C10.2967 9.04494 10.3885 9.04424 10.4768 9.06449C10.565 9.08473 10.6474 9.12535 10.7172 9.1831C10.7869 9.24085 10.8422 9.31412 10.8786 9.39707L11.536 10.8743C11.5787 10.9701 11.5946 11.0757 11.5818 11.1798C11.5691 11.2839 11.5282 11.3826 11.4636 11.4653L11.1313 11.8966C11.0599 11.9857 11.0169 12.0941 11.0077 12.2078C10.9985 12.3215 11.0235 12.4354 11.0795 12.5348C11.2657 12.8613 11.7118 13.3414 12.2067 13.786C12.7622 14.2883 13.3782 14.7478 13.7682 14.9043C13.8725 14.947 13.9873 14.9574 14.0976 14.9342C14.2079 14.911 14.3088 14.8554 14.3872 14.7743L14.7727 14.3858C14.8471 14.3125 14.9396 14.2601 15.0409 14.2342C15.1421 14.2082 15.2483 14.2096 15.3489 14.2381L16.9103 14.6813C16.9965 14.7077 17.0754 14.7535 17.1412 14.8151C17.2069 14.8767 17.2577 14.9525 17.2896 15.0368C17.3215 15.121 17.3338 15.2115 17.3254 15.3012C17.317 15.3909 17.2882 15.4775 17.2413 15.5543Z" fill="white" />
                                <defs>
                                    <linearGradient id="paint0_linear_39_3438" x1="0.438819" y1="13" x2="26.5485" y2="13" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#8341EF" />
                                        <stop offset="1" stop-color="#EB469F" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                        <a href="tel:<?php echo do_shortcode('[city_phone]') ?>" class="header__tel d-sm-none d-md-block d-lg-none">
                            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                            <svg class="d-sm-none d-md-block d-lg-none" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_193_2133)">
                                    <path d="M14.2253 11.1502C13.8568 10.7665 13.4123 10.5614 12.9412 10.5614C12.4739 10.5614 12.0256 10.7627 11.6419 11.1464L10.4415 12.3431C10.3427 12.2899 10.2439 12.2405 10.1489 12.1911C10.0122 12.1228 9.88299 12.0582 9.77282 11.9898C8.64831 11.2756 7.62637 10.3448 6.64623 9.14053C6.17135 8.54029 5.85223 8.03502 5.62049 7.52215C5.93201 7.23722 6.22074 6.9409 6.50186 6.65597C6.60824 6.5496 6.71461 6.43943 6.82098 6.33305C7.61878 5.53526 7.61878 4.50193 6.82098 3.70413L5.78385 2.667C5.66608 2.54923 5.54451 2.42766 5.43054 2.30609C5.2026 2.07055 4.96326 1.82741 4.71632 1.59947C4.34782 1.23477 3.90713 1.04102 3.44365 1.04102C2.98017 1.04102 2.53188 1.23477 2.15198 1.59947C2.14818 1.60327 2.14818 1.60327 2.14438 1.60707L0.852716 2.91014C0.366441 3.39641 0.0891121 3.98906 0.0283277 4.67668C-0.0628488 5.786 0.263867 6.81933 0.514603 7.49556C1.13004 9.15573 2.04941 10.6943 3.42086 12.3431C5.08483 14.33 7.08691 15.899 9.37393 17.0045C10.2477 17.4186 11.414 17.9087 12.7171 17.9923C12.7968 17.9961 12.8804 17.9999 12.9564 17.9999C13.834 17.9999 14.571 17.6845 15.1484 17.0577C15.1522 17.0501 15.1598 17.0463 15.1636 17.0387C15.3612 16.7994 15.5891 16.5828 15.8285 16.3511C15.9918 16.1953 16.159 16.032 16.3223 15.861C16.6984 15.4697 16.896 15.0138 16.896 14.5465C16.896 14.0755 16.6946 13.6234 16.3109 13.2435L14.2253 11.1502Z" fill="url(#paint0_linear_193_2133)" />
                                    <path d="M9.72684 4.28205C10.7222 4.44921 11.6264 4.92029 12.3482 5.64211C13.07 6.36392 13.5373 7.26809 13.7082 8.26343C13.75 8.51417 13.9666 8.68892 14.2135 8.68892C14.2439 8.68892 14.2705 8.68512 14.3009 8.68132C14.582 8.63574 14.7681 8.3698 14.7226 8.08868C14.5174 6.88439 13.9476 5.78647 13.0776 4.91649C12.2076 4.04652 11.1097 3.47666 9.9054 3.27151C9.62427 3.22593 9.36214 3.41208 9.31275 3.68941C9.26336 3.96674 9.44572 4.23647 9.72684 4.28205Z" fill="url(#paint1_linear_193_2133)" />
                                    <path d="M17.9783 7.94018C17.6402 5.95709 16.7056 4.15255 15.2696 2.71652C13.8335 1.28049 12.029 0.345932 10.0459 0.00781895C9.76858 -0.0415683 9.50644 0.148383 9.45706 0.425712C9.41147 0.706839 9.59762 0.968972 9.87875 1.01836C11.6491 1.31848 13.2637 2.15807 14.5477 3.43834C15.8318 4.72241 16.6676 6.33699 16.9677 8.10734C17.0095 8.35807 17.2261 8.53283 17.473 8.53283C17.5034 8.53283 17.53 8.52903 17.5604 8.52523C17.8377 8.48344 18.0277 8.21751 17.9783 7.94018Z" fill="url(#paint2_linear_193_2133)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_193_2133" x1="0.297645" y1="9.52044" x2="17.2522" y2="9.52044" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#8341EF" />
                                        <stop offset="1" stop-color="#EB469F" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_193_2133" x1="9.39624" y1="5.97679" x2="14.8439" y2="5.97679" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#8341EF" />
                                        <stop offset="1" stop-color="#EB469F" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_193_2133" x1="9.59426" y1="4.26642" x2="18.1662" y2="4.26642" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#8341EF" />
                                        <stop offset="1" stop-color="#EB469F" />
                                    </linearGradient>
                                    <clipPath id="clip0_193_2133">
                                        <rect width="18" height="18" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="d-none d-sm-block d-md-none d-lg-block">
                                <?php echo do_shortcode('[belingogeo_city_field field="city_phone"]') ?>
                            </span>
                        </a>
                    </div>

                    <a href="tel:<?php echo do_shortcode('[city_phone]') ?>" class="header__tel d-none d-sm-block d-md-none d-lg-block">
                        <span class="d-none d-sm-block d-md-none d-lg-block">
                            <?php echo do_shortcode('[belingogeo_city_field field="city_phone"]') ?>
                        </span>
                    </a>
                    <!--<div style="margin-left:10px; position: relative;"><?php echo do_shortcode('[belingogeo_select_city]') ?></div>-->
                    <span class="burger__mobile">
                        <span></span>
                    </span>
                </div>
            </div>
        </div>
    </header>

    <main class="<?php if (is_page_template('page-reviews.php')) echo 'main page__container'; ?>">