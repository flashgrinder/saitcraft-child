<?php
/*
Template Name: SEO
*/
get_header();
?>
<section class="usluga__banner" style="background-image:url('<?php the_field('banner_pc');?>');">
    <div class="container breadcrumbs__block">
        <div class="row">
            <div class="col-sm-12">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1><?php the_field('title_banner');?> <?php //echo do_shortcode('[city_padej1]')?></h1>
   
                <p><?php the_field('text_banner');?></p>
                <div class="btn__wrap">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Обсудить проект
                    </a>
                    <span>Стоимость обращения из SEO зачастую меньше,<br> чем в контекстной или таргетированной рекламе</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cases__section lazy-bg bg--dark">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2>К каким результатам может <br>
привести <span>SEO-продвижение?</span></h2>
                      </div>
                    
                      <?php
                  // задаем нужные нам критерии выборки данных из БД

$args = array(
	'posts_per_page' => 6,
    'cat'=> 23,
    'post__in'=> [1709,600,1715,1660,1720,2419],
	'orderby' => 'post__in'
);
$query = new WP_Query( $args ); 
?>
<?php if ( $query->have_posts() ) : ?>

<!-- пагинация -->

<!-- цикл -->
<?php while ( $query->have_posts() ) : $query->the_post(); 
				$main_metki = get_field('main_metki',get_the_ID());
				if( $main_metki ){
					$short = '';
					foreach( $main_metki as $tagId ){
						$tag = get_term_by( 'id', $tagId, 'post_tag' );
						$short .= $tag->name . ' ';
					}
				}?>

<div class="col-sm-6">
                            <a <?php if(get_field('kontent')):?>href="<?php the_permalink();?>"<?php endif;?> class="cases__section-card">
                                <div class="cases__section-card__header">
                                    <div class="cases__section-card__header-logo">
                                        <img src="<?php the_field('logotip',get_the_ID());?>" alt="<?php the_title(); ?>" loading="lazy">
                                    </div>
                                    <div>
                                        <span class="cases__section-card__header-name"><?php the_title(); ?></span>
                                        <span class="cases__section-card__header-short"><?php echo $short; ?></span>
                                    </div>
                                </div>
                                <div class="cases__section-card__body">
                                    <?php the_field('kratkoe_opisanie',get_the_ID());?>
                                </div>
                                <img src="<?php echo get_the_post_thumbnail_url();?>" class="cases__section-card-img" alt="<?php the_title(); ?> фото" loading="lazy">
                            </a>
                        </div>



<?php endwhile; ?>
<!-- конец цикла -->

<!-- пагинация -->

<?php wp_reset_postdata(); ?>

<?php else : ?>
<p><?php esc_html_e( 'Нет постов по вашим критериям.' ); ?></p>
<?php endif; ?>
                        <div class="col-sm-12 d-flex flex-md-row flex-column align-items-center justify-content-center gap-3">
							<div class="d-none d-md-block position-relative">
								<svg class="svg_cases-form" width="58" height="49" viewBox="0 0 58 49" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0.827391 1.00003C0.827391 48.5 56.4062 42.7666 56.4062 42.7666" stroke="#7F6CE0" stroke-linecap="round" stroke-dasharray="2 5"/>
								<path d="M43.7366 48L56.7662 43.0207L49.7232 37.0588" stroke="#7F6CE0" stroke-linecap="round"/>
								</svg>
							</div>
                            <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">Хочу так же!</a>
                            <a href="/projects/" class="btn btn__cases btn__cases-link">Больше кейсов</a>
                        </div>
                  </div>
              </div>
          </section>
<!-- Search-promotion -->
<section class="search-promotion bg--dark b-padding-100">
    <div class="search-promotion__body container">
        <h2 class="search-promotion__heading title title--big title--white title--w-extra-bold title--indent" data-num="+">
            Кому <span class="search-promotion__heading-accent title title--purple">подходит</span> поисковое продвижение
        </h2>
        <div class="search-promotion__items">
            <div class="search-promotion__item">
                <div class="search-promotion__info">
                    <h3 class="search-promotion__title title title--pre-large title--white title--w-semi-bold">
                        Интернет-магазинам
                    </h3>
                    <div class="search-promotion__text title title--big-medium title--white title--w-light">
                        SEO продвижение сайтов в этом случае выгоднее, чем таргетированная/контекстная реклама, поскольку раскручивать по отдельности каждую категорию дорого. Поисковая оптимизация позволяет вывести в топ выдачи весь каталог интернет-магазина, и бюджет при этом расходуется экономнее
                    </div>
                </div>
            </div>
            <div class="search-promotion__item">
                <div class="search-promotion__info">
                    <h3 class="search-promotion__title title title--pre-large title--white title--w-semi-bold">
                        Агрегаторам
                    </h3>
                    <div class="search-promotion__text title title--big-medium title--white title--w-light">
                        Этот тип ресурсов любим поисковыми системами за свою полезность для юзеров. Каждый посетитель сайта-агрегатора изучает собранные предложения, что помогает естественным путем улучшать поведенческие факторы ранжирования
                    </div>
                </div>
            </div>
            <div class="search-promotion__item">
                <div class="search-promotion__info">
                    <h3 class="search-promotion__title title title--pre-large title--white title--w-semi-bold">
                        Новостным сайтам
                    </h3>
                    <div class="search-promotion__text title title--big-medium title--white title--w-light">
                        Суть стратегии продвижения новостных порталов — в частом обновлении контента. У таких ресурсов поисковые роботы индексируют новые страницы в течение нескольких минут
                    </div>
                </div>
            </div>
            <div class="search-promotion__item">
                <div class="search-promotion__info">
                    <h3 class="search-promotion__title title title--pre-large title--white title--w-semi-bold">
                        Блогам
                    </h3>
                    <div class="search-promotion__text title title--big-medium title--white title--w-light">
                        Экспертные ресурсы вызывают доверие пользователей, что облегчает работу с поведенческими факторами. А крупная библиотека статей поможет быстрее оказаться в топе выдачи
                    </div>
                </div>
            </div>
        </div>
        <h2 class="search-promotion__heading search-promotion__heading--bottom title title--big title--white title--w-extra-bold title--indent" data-num="–">
            SEO продвижение <span class="search-promotion__heading-accent title title--purple">НЕ подойдет</span> сайтам
        </h2>
        <div class="search-promotion__bottom-items">
            <div class="search-promotion__fit">
                <div class="search-promotion__title-fit title title--big-medium title--white title--w-semi-bold">
                    Лендингам и малостраничным ресурсам
                </div>
                <div class="search-promotion__text-fit title title--big-medium title--white title--w-light">
                    из-за небольшого количества контента
                </div>
            </div>
            <div class="search-promotion__fit">
                <div class="search-promotion__title-fit title title--big-medium title--white title--w-semi-bold">
                    Сезонному бизнесу
                </div>
                <div class="search-promotion__text-fit title title--big-medium title--white title--w-light">
                    раскрутка вне сезона может принести убытки
                </div>
            </div>
            <div class="search-promotion__fit">
                <div class="search-promotion__title-fit title title--big-medium title--white title--w-semi-bold">
                    Акционным предложениям
                </div>
                <div class="search-promotion__text-fit title title--big-medium title--white title--w-light">
                    работа с SEO отличается долгосрочностью, а акции ограничены по времени
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ Search-promotion -->
<section class="seo__graph">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>
                Что вы получите, выбирая <span>SЕО-продвижение?</span>
                </h2>

                <div class="point1 point__wrap">
                    <span class="point__number">01</span>
                    <span class="point__text">Целевой трафик<br>и рост количества обращений</span>
                </div>
                <div class="point2 point__wrap">
                    <span class="point__number">02</span>
                    <span class="point__text">Стоимость обращения<br>в 2 раза ниже чем с рекламы</span>
                </div>
                <div class="point3 point__wrap">
                    <span class="point__number">03</span>
                    <span class="point__text">Результат сохраняется 2-3 мес.<br>даже при остановке работ</span>
                </div>
                <div class="point4 point__wrap">
                    <span class="point__number">04</span>
                    <span class="point__text">Больше продаж из<br>поисковых систем</span>
                </div>
            </div>
            <div class="col-sm-12 mt-4 mb-5 d-flex align-items-center gap-5 abs__block">
                <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Обсудить проект
                </a>
                <span class="poprobuem__text">
                    Вы можете включить <br>
                    в план работ свои предложения <img src="/wp-content/uploads/2022/03/image-59.png" alt="ваши предложения" loading="lazy">
                </span>
            </div>
        </div>
    </div>
    <svg class="graph" width="1723" height="505" viewBox="0 0 1723 505" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3.48047 424.681C58.2137 344.116 112.437 338.144 145.751 342.065C166.466 344.503 188.292 351.515 207.668 359.237L243.957 373.7L277.588 390.359C289.317 396.168 302.228 399.19 315.316 399.19H346.69C359.169 399.19 371.494 396.443 382.791 391.143L392.493 386.592C400.511 382.83 407.893 377.838 414.37 371.796L446.802 341.545C455.819 333.134 469.141 331.276 480.115 336.901V336.901C491.999 342.991 506.498 340.266 515.359 330.277L631.397 199.478C650.957 177.429 680.545 167.087 709.582 172.15L731.422 175.958C747.877 178.827 763.121 186.48 775.252 197.962L803.879 225.058C840.911 260.108 900.254 254.895 930.608 213.924L964.093 168.726C979.645 147.734 1007.27 139.658 1031.68 148.968L1032.76 149.379C1042.16 152.966 1050.39 159.103 1056.5 167.101V167.101C1075.26 191.626 1110.68 195.558 1134.36 175.743L1150.61 162.144C1177.63 139.528 1218.6 147.44 1235.26 178.49V178.49C1251.56 208.865 1291.29 217.235 1318.46 196.018L1417.96 118.314L1462.67 78.9065C1475.83 67.3075 1492.25 60.0634 1509.69 58.168L1627.64 45.3475C1633.97 44.659 1639.56 40.8936 1642.57 35.2817V35.2817C1648.76 23.7666 1664.36 21.5875 1673.46 30.9658L1719.52 78.3952" stroke="#6100FF" stroke-width="7"/>
        <line x1="166.561" y1="199.114" x2="166.561" y2="505" stroke="url(#paint0_linear_0_4)" stroke-width="2"/>
        <line x1="620.58" y1="54.8286" x2="620.58" y2="360.714" stroke="url(#paint1_linear_0_4)" stroke-width="2"/>
        <line x1="850.476" y1="104.848" x2="850.476" y2="410.733" stroke="url(#paint2_linear_0_4)" stroke-width="2"/>
        <line x1="1185.22" x2="1185.22" y2="305.886" stroke="url(#paint3_linear_0_4)" stroke-width="2"/>
        <circle cx="166.042" cy="342.919" r="23.5667" fill="#6100FF" fill-opacity="0.11"/>
        <circle cx="166.042" cy="342.919" r="17.7952" fill="#6100FF" fill-opacity="0.28"/>
        <circle cx="166.042" cy="342.919" r="11.0619" fill="#6100FF"/>
        <circle cx="620.061" cy="207.29" r="23.5667" fill="#6100FF" fill-opacity="0.11"/>
        <circle cx="620.061" cy="207.29" r="17.7952" fill="#6100FF" fill-opacity="0.28"/>
        <circle cx="620.061" cy="207.29" r="11.0619" fill="#6100FF"/>
        <circle cx="848.995" cy="248.652" r="23.5667" fill="#6100FF" fill-opacity="0.11"/>
        <circle cx="848.995" cy="248.652" r="17.7952" fill="#6100FF" fill-opacity="0.28"/>
        <circle cx="848.995" cy="248.652" r="11.0619" fill="#6100FF"/>
        <circle cx="1183.74" cy="153.424" r="23.5667" fill="#6100FF" fill-opacity="0.11"/>
        <circle cx="1183.74" cy="153.424" r="17.7952" fill="#6100FF" fill-opacity="0.28"/>
        <circle cx="1183.74" cy="153.424" r="11.0619" fill="#6100FF"/>
        <defs>
        <linearGradient id="paint0_linear_0_4" x1="165.561" y1="505" x2="165.562" y2="199.114" gradientUnits="userSpaceOnUse">
        <stop stop-color="#26223E" stop-opacity="0"/>
        <stop offset="0.197917" stop-color="#26223E" stop-opacity="0.74"/>
        <stop offset="0.505208" stop-color="#3B3949"/>
        <stop offset="0.765625" stop-color="#26223E" stop-opacity="0.64"/>
        <stop offset="1" stop-color="#26223E" stop-opacity="0"/>
        </linearGradient>
        <linearGradient id="paint1_linear_0_4" x1="619.58" y1="360.714" x2="619.581" y2="54.8286" gradientUnits="userSpaceOnUse">
        <stop stop-color="#26223E" stop-opacity="0"/>
        <stop offset="0.197917" stop-color="#26223E" stop-opacity="0.74"/>
        <stop offset="0.505208" stop-color="#3B3949"/>
        <stop offset="0.765625" stop-color="#26223E" stop-opacity="0.64"/>
        <stop offset="1" stop-color="#26223E" stop-opacity="0"/>
        </linearGradient>
        <linearGradient id="paint2_linear_0_4" x1="849.475" y1="410.733" x2="849.476" y2="104.848" gradientUnits="userSpaceOnUse">
        <stop stop-color="#26223E" stop-opacity="0"/>
        <stop offset="0.197917" stop-color="#26223E" stop-opacity="0.74"/>
        <stop offset="0.505208" stop-color="#3B3949"/>
        <stop offset="0.765625" stop-color="#26223E" stop-opacity="0.64"/>
        <stop offset="1" stop-color="#26223E" stop-opacity="0"/>
        </linearGradient>
        <linearGradient id="paint3_linear_0_4" x1="1184.22" y1="305.886" x2="1184.22" y2="2.54432e-09" gradientUnits="userSpaceOnUse">
        <stop stop-color="#26223E" stop-opacity="0"/>
        <stop offset="0.197917" stop-color="#26223E" stop-opacity="0.74"/>
        <stop offset="0.505208" stop-color="#3B3949"/>
        <stop offset="0.765625" stop-color="#26223E" stop-opacity="0.64"/>
        <stop offset="1" stop-color="#26223E" stop-opacity="0"/>
        </linearGradient>
        </defs>
    </svg>
</section>
<section class="section__wrap grayback pb-1 pb-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Что хорошего в <span>работе с нами?</span></h2>
            </div>
            <div class="col-sm-4">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
                    <path d="M54.9997 39.3333H53.333V21C53.333 20.558 53.1574 20.134 52.8449 19.8215C52.5323 19.5089 52.1084 19.3333 51.6663 19.3333H28.333C27.891 19.3333 27.4671 19.5089 27.1545 19.8215C26.8419 20.134 26.6663 20.558 26.6663 21V39.3333H24.9997C24.5576 39.3333 24.1337 39.5089 23.8212 39.8215C23.5086 40.134 23.333 40.558 23.333 41C23.333 41.442 23.5086 41.8659 23.8212 42.1785C24.1337 42.4911 24.5576 42.6666 24.9997 42.6666H38.333V44.5833L30.7497 49.5833C30.4386 49.7759 30.1995 50.0655 30.0693 50.4074C29.9391 50.7494 29.9251 51.1247 30.0293 51.4754C30.1336 51.8261 30.3504 52.1328 30.6462 52.3481C30.9421 52.5634 31.3006 52.6753 31.6663 52.6666C31.994 52.6704 32.3146 52.5713 32.583 52.3833L38.333 48.5833V51C38.333 51.442 38.5086 51.8659 38.8212 52.1785C39.1337 52.4911 39.5576 52.6666 39.9997 52.6666C40.4417 52.6666 40.8656 52.4911 41.1782 52.1785C41.4907 51.8659 41.6663 51.442 41.6663 51V48.5833L47.4163 52.3833C47.6847 52.5713 48.0053 52.6704 48.333 52.6666C48.6891 52.6639 49.0349 52.5472 49.3198 52.3336C49.6048 52.12 49.8138 51.8208 49.9163 51.4797C50.0188 51.1387 50.0093 50.7738 49.8894 50.4386C49.7694 50.1033 49.5452 49.8152 49.2497 49.6166L41.6663 44.6166V42.6666H54.9997C55.4417 42.6666 55.8656 42.4911 56.1782 42.1785C56.4907 41.8659 56.6663 41.442 56.6663 41C56.6663 40.558 56.4907 40.134 56.1782 39.8215C55.8656 39.5089 55.4417 39.3333 54.9997 39.3333ZM49.9997 39.3333H29.9997V22.6666H49.9997V39.3333ZM34.9997 36C35.2742 35.9986 35.5441 35.9294 35.7854 35.7985C36.0268 35.6677 36.232 35.4792 36.383 35.25L38.5997 31.9166L40.483 33.8166C40.6579 33.9926 40.8698 34.1273 41.1034 34.2109C41.3369 34.2945 41.5862 34.325 41.833 34.3C42.0787 34.273 42.3154 34.1917 42.5258 34.062C42.7362 33.9323 42.9152 33.7574 43.0497 33.55L46.383 28.55C46.5793 28.184 46.6319 27.758 46.5305 27.3553C46.4292 26.9526 46.1811 26.6022 45.8349 26.3728C45.4888 26.1434 45.0694 26.0516 44.6591 26.1151C44.2487 26.1787 43.8768 26.3932 43.6163 26.7166L41.3997 30.05L39.5163 28.15C39.3415 27.974 39.1295 27.8393 38.896 27.7557C38.6624 27.6721 38.4132 27.6417 38.1663 27.6666C37.9206 27.6936 37.684 27.7749 37.4735 27.9046C37.2631 28.0343 37.0842 28.2092 36.9497 28.4166L33.6163 33.4166C33.3751 33.7841 33.2888 34.2319 33.3762 34.6627C33.4636 35.0935 33.7177 35.4723 34.083 35.7166C34.3514 35.9046 34.672 36.0037 34.9997 36Z" fill="white"/>
                </svg>
                <div class="advantage__card">
                    <span class="advantage__title">
                    Сначала стратегия, <br>потом маневры
                    </span>
                    <span class="advantage__text">
					Разрабатываем маркетинговую стратегию<br> с прогнозом результатов и работаем по ней
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
                    <path d="M51.6663 19.3334H28.333C27.0069 19.3334 25.7352 19.8602 24.7975 20.7978C23.8598 21.7355 23.333 23.0073 23.333 24.3334V26.2834C23.3328 26.9716 23.4746 27.6525 23.7497 28.2834V28.3834C23.9851 28.9183 24.3187 29.4045 24.733 29.8167L34.9997 40.0167V51C34.9991 51.2833 35.0707 51.562 35.2078 51.8099C35.3449 52.0577 35.5428 52.2666 35.783 52.4167C36.0482 52.5811 36.3543 52.6677 36.6663 52.6667C36.9272 52.6651 37.1841 52.6023 37.4163 52.4834L44.083 49.15C44.3579 49.0115 44.589 48.7996 44.7508 48.5378C44.9126 48.276 44.9987 47.9745 44.9997 47.6667V40.0167L55.1997 29.8167C55.614 29.4045 55.9475 28.9183 56.183 28.3834V28.2834C56.481 27.6574 56.6456 26.9763 56.6663 26.2834V24.3334C56.6663 23.0073 56.1396 21.7355 55.2019 20.7978C54.2642 19.8602 52.9924 19.3334 51.6663 19.3334ZM42.1497 38.15C41.9952 38.3058 41.873 38.4905 41.7901 38.6935C41.7071 38.8966 41.6651 39.114 41.6663 39.3334V46.6334L38.333 48.3V39.3334C38.3343 39.114 38.2922 38.8966 38.2093 38.6935C38.1264 38.4905 38.0041 38.3058 37.8497 38.15L29.0163 29.3334H50.983L42.1497 38.15ZM53.333 26H26.6663V24.3334C26.6663 23.8913 26.8419 23.4674 27.1545 23.1549C27.4671 22.8423 27.891 22.6667 28.333 22.6667H51.6663C52.1084 22.6667 52.5323 22.8423 52.8449 23.1549C53.1574 23.4674 53.333 23.8913 53.333 24.3334V26Z" fill="white"/>
                </svg>
                <div class="advantage__card">
                    <span class="advantage__title">
                    Упор на качество трафика,<br> а не на его количество 
                    </span>
                    <span class="advantage__text">
                    Приводим максимально целевых<br> посетителей, которые станут покупателями
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
                    <path d="M55.4997 32.8C55.0314 32.2377 54.4453 31.7851 53.783 31.4741C53.1206 31.1631 52.3981 31.0012 51.6663 31H44.0663L44.9997 28.6167C45.3879 27.5731 45.5172 26.451 45.3764 25.3465C45.2357 24.2421 44.8292 23.1882 44.1917 22.2754C43.5541 21.3625 42.7047 20.618 41.7162 20.1056C40.7278 19.5931 39.6297 19.3282 38.5163 19.3333C38.1957 19.334 37.8821 19.4271 37.6131 19.6015C37.3441 19.7759 37.1311 20.0242 36.9997 20.3167L32.2497 31H28.333C27.0069 31 25.7352 31.5268 24.7975 32.4645C23.8598 33.4021 23.333 34.6739 23.333 36V47.6667C23.333 48.9927 23.8598 50.2645 24.7975 51.2022C25.7352 52.1399 27.0069 52.6667 28.333 52.6667H49.5497C50.7194 52.6663 51.8519 52.2558 52.7502 51.5067C53.6485 50.7576 54.2558 49.7172 54.4663 48.5667L56.583 36.9C56.7139 36.179 56.6847 35.438 56.4975 34.7295C56.3103 34.0209 55.9697 33.3622 55.4997 32.8ZM31.6663 49.3333H28.333C27.891 49.3333 27.4671 49.1577 27.1545 48.8452C26.8419 48.5326 26.6663 48.1087 26.6663 47.6667V36C26.6663 35.558 26.8419 35.134 27.1545 34.8215C27.4671 34.5089 27.891 34.3333 28.333 34.3333H31.6663V49.3333ZM53.333 36.3L51.2163 47.9667C51.1453 48.3549 50.9389 48.7054 50.6337 48.9557C50.3284 49.2059 49.9443 49.3398 49.5497 49.3333H34.9997V33.0167L39.533 22.8167C39.9996 22.9527 40.433 23.184 40.8058 23.496C41.1785 23.8079 41.4825 24.1938 41.6987 24.6291C41.9148 25.0645 42.0383 25.54 42.0614 26.0255C42.0846 26.511 42.0068 26.996 41.833 27.45L40.9497 29.8333C40.7615 30.3371 40.6979 30.8789 40.7645 31.4125C40.831 31.9462 41.0257 32.4558 41.3319 32.8979C41.6381 33.34 42.0467 33.7014 42.5229 33.9514C42.999 34.2013 43.5286 34.3324 44.0663 34.3333H51.6663C51.9112 34.3329 52.1531 34.3865 52.3749 34.4902C52.5967 34.5939 52.793 34.7452 52.9497 34.9333C53.1102 35.1189 53.2278 35.3376 53.2941 35.5738C53.3604 35.8101 53.3737 36.058 53.333 36.3Z" fill="white"/>
                </svg>
                <div class="advantage__card">
                    <span class="advantage__title">
                    Работаем <br>«не на потоке»
                    </span>
                    <span class="advantage__text">
                    Чтобы вы получили результат, один<br> SEO-специалист  ведет не более 4-х проектов
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
                    <path d="M51.6663 29.3334H49.9997V24.3334C49.9997 23.0073 49.4729 21.7355 48.5352 20.7978C47.5975 19.8602 46.3258 19.3334 44.9997 19.3334H28.333C27.0069 19.3334 25.7352 19.8602 24.7975 20.7978C23.8598 21.7355 23.333 23.0073 23.333 24.3334V44.3334C23.3347 44.6624 23.4337 44.9836 23.6175 45.2565C23.8014 45.5293 24.062 45.7417 24.3663 45.8667C24.5641 45.96 24.781 46.0057 24.9997 46C25.219 46.0013 25.4365 45.9593 25.6395 45.8763C25.8426 45.7934 26.0273 45.6712 26.183 45.5167L30.8663 40.8167H33.333V43.2167C33.333 44.5428 33.8598 45.8146 34.7975 46.7522C35.7352 47.6899 37.0069 48.2167 38.333 48.2167H49.8663L53.8163 52.1834C53.9721 52.3378 54.1568 52.4601 54.3598 52.543C54.5629 52.6259 54.7803 52.668 54.9997 52.6667C55.2183 52.6723 55.4352 52.6267 55.633 52.5334C55.9374 52.4083 56.1979 52.196 56.3818 51.9231C56.5657 51.6503 56.6647 51.3291 56.6663 51V34.3334C56.6663 33.0073 56.1396 31.7355 55.2019 30.7978C54.2642 29.8602 52.9924 29.3334 51.6663 29.3334ZM33.333 34.3334V37.4834H30.183C29.9637 37.4821 29.7462 37.5241 29.5432 37.6071C29.3401 37.69 29.1554 37.8122 28.9997 37.9667L26.6663 40.3167V24.3334C26.6663 23.8913 26.8419 23.4674 27.1545 23.1549C27.4671 22.8423 27.891 22.6667 28.333 22.6667H44.9997C45.4417 22.6667 45.8656 22.8423 46.1782 23.1549C46.4907 23.4674 46.6663 23.8913 46.6663 24.3334V29.3334H38.333C37.0069 29.3334 35.7352 29.8602 34.7975 30.7978C33.8598 31.7355 33.333 33.0073 33.333 34.3334ZM53.333 46.9834L51.6663 45.3167C51.512 45.1592 51.3279 45.0339 51.1248 44.9481C50.9217 44.8623 50.7035 44.8176 50.483 44.8167H38.333C37.891 44.8167 37.4671 44.6411 37.1545 44.3286C36.8419 44.016 36.6663 43.5921 36.6663 43.15V34.3334C36.6663 33.8913 36.8419 33.4674 37.1545 33.1549C37.4671 32.8423 37.891 32.6667 38.333 32.6667H51.6663C52.1084 32.6667 52.5323 32.8423 52.8449 33.1549C53.1574 33.4674 53.333 33.8913 53.333 34.3334V46.9834Z" fill="white"/>
                </svg>
                <div class="advantage__card">
                    <span class="advantage__title">
                    Ваш сайт не попадет <br>в бан поисковых систем
                    </span>
                    <span class="advantage__text">
                    Используем только «белые»<br> методы продвижения
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
                    <path d="M31.6667 42.6667C32.3297 42.6667 32.9656 42.4033 33.4344 41.9345C33.9033 41.4656 34.1667 40.8298 34.1667 40.1667C34.1748 40.0836 34.1748 39.9998 34.1667 39.9167L38.8167 35.2667H39.2H39.5833L42.2667 37.95C42.2667 37.95 42.2667 38.0334 42.2667 38.0834C42.2667 38.7464 42.5301 39.3823 42.9989 39.8511C43.4677 40.32 44.1036 40.5834 44.7667 40.5834C45.4297 40.5834 46.0656 40.32 46.5344 39.8511C47.0033 39.3823 47.2667 38.7464 47.2667 38.0834V37.95L53.3333 31.8334C53.8278 31.8334 54.3111 31.6868 54.7223 31.412C55.1334 31.1373 55.4538 30.7469 55.643 30.2901C55.8322 29.8333 55.8818 29.3306 55.7853 28.8456C55.6888 28.3607 55.4507 27.9152 55.1011 27.5656C54.7515 27.216 54.306 26.9779 53.8211 26.8814C53.3361 26.7849 52.8334 26.8345 52.3766 27.0237C51.9198 27.2129 51.5294 27.5333 51.2547 27.9444C50.98 28.3556 50.8333 28.8389 50.8333 29.3334C50.8252 29.4165 50.8252 29.5002 50.8333 29.5834L44.8167 35.6H44.55L41.6667 32.6667C41.6667 32.0037 41.4033 31.3678 40.9344 30.8989C40.4656 30.4301 39.8297 30.1667 39.1667 30.1667C38.5036 30.1667 37.8677 30.4301 37.3989 30.8989C36.9301 31.3678 36.6667 32.0037 36.6667 32.6667L31.6667 37.6667C31.0036 37.6667 30.3677 37.9301 29.8989 38.3989C29.4301 38.8678 29.1667 39.5037 29.1667 40.1667C29.1667 40.8298 29.4301 41.4656 29.8989 41.9345C30.3677 42.4033 31.0036 42.6667 31.6667 42.6667ZM54.1667 49.3334H25.8333V21C25.8333 20.558 25.6577 20.1341 25.3452 19.8215C25.0326 19.509 24.6087 19.3334 24.1667 19.3334C23.7246 19.3334 23.3007 19.509 22.9882 19.8215C22.6756 20.1341 22.5 20.558 22.5 21V51C22.5 51.4421 22.6756 51.866 22.9882 52.1786C23.3007 52.4911 23.7246 52.6667 24.1667 52.6667H54.1667C54.6087 52.6667 55.0326 52.4911 55.3452 52.1786C55.6577 51.866 55.8333 51.4421 55.8333 51C55.8333 50.558 55.6577 50.1341 55.3452 49.8215C55.0326 49.509 54.6087 49.3334 54.1667 49.3334Z" fill="white"/>
                </svg>
                <div class="advantage__card">
                    <span class="advantage__title">
                    Ежемесячная отчетность<br> по лидам и продажам
                    </span>
                    <span class="advantage__text">
                    А также по выполненным работам, позициям<br> сайта и трафику
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
                <path d="M55.117 44.05L51.667 40.5167C50.9249 39.8113 49.9888 39.3439 48.979 39.1746C47.9692 39.0053 46.9319 39.1419 46.0003 39.5667L44.5003 38.0667C46.2679 35.7049 47.0751 32.7612 46.7595 29.8281C46.4439 26.895 45.0289 24.1904 42.7994 22.2587C40.5698 20.327 37.6912 19.3116 34.7431 19.417C31.795 19.5224 28.9962 20.7407 26.9103 22.8266C24.8243 24.9126 23.606 27.7113 23.5006 30.6595C23.3952 33.6076 24.4106 36.4862 26.3423 38.7157C28.274 40.9453 30.9786 42.3603 33.9117 42.6759C36.8448 42.9915 39.7885 42.1843 42.1503 40.4167L43.6336 41.9C43.1588 42.8327 42.9886 43.891 43.1471 44.9255C43.3056 45.9601 43.7847 46.9189 44.517 47.6667L48.0503 51.2C48.9878 52.1364 50.2586 52.6623 51.5836 52.6623C52.9086 52.6623 54.1795 52.1364 55.117 51.2C55.5932 50.7344 55.9716 50.1783 56.2299 49.5643C56.4883 48.9504 56.6213 48.2911 56.6213 47.625C56.6213 46.959 56.4883 46.2996 56.2299 45.6857C55.9716 45.0718 55.5932 44.5157 55.117 44.05ZM40.9836 36.9834C39.8174 38.1467 38.3325 38.9383 36.7165 39.2581C35.1006 39.5779 33.4261 39.4117 31.9046 38.7803C30.3832 38.149 29.0829 37.0809 28.1682 35.7109C27.2534 34.341 26.7652 32.7306 26.7652 31.0834C26.7652 29.4361 27.2534 27.8257 28.1682 26.4558C29.0829 25.0858 30.3832 24.0177 31.9046 23.3864C33.4261 22.755 35.1006 22.5888 36.7165 22.9086C38.3325 23.2284 39.8174 24.02 40.9836 25.1834C41.7597 25.9575 42.3754 26.877 42.7955 27.8895C43.2156 28.9019 43.4319 29.9872 43.4319 31.0834C43.4319 32.1795 43.2156 33.2648 42.7955 34.2773C42.3754 35.2897 41.7597 36.2093 40.9836 36.9834ZM52.767 48.7667C52.612 48.9229 52.4277 49.0469 52.2246 49.1315C52.0215 49.2161 51.8037 49.2597 51.5836 49.2597C51.3636 49.2597 51.1458 49.2161 50.9427 49.1315C50.7396 49.0469 50.5552 48.9229 50.4003 48.7667L46.867 45.2334C46.7108 45.0784 46.5868 44.8941 46.5022 44.691C46.4175 44.4879 46.374 44.27 46.374 44.05C46.374 43.83 46.4175 43.6122 46.5022 43.4091C46.5868 43.206 46.7108 43.0216 46.867 42.8667C47.0219 42.7105 47.2062 42.5865 47.4093 42.5019C47.6124 42.4173 47.8303 42.3737 48.0503 42.3737C48.2703 42.3737 48.4882 42.4173 48.6913 42.5019C48.8944 42.5865 49.0787 42.7105 49.2336 42.8667L52.767 46.4C52.9232 46.555 53.0472 46.7393 53.1318 46.9424C53.2164 47.1455 53.26 47.3633 53.26 47.5834C53.26 47.8034 53.2164 48.0212 53.1318 48.2243C53.0472 48.4274 52.9232 48.6118 52.767 48.7667Z" fill="white"/>
            </svg>
                <div class="advantage__card">
                    <span class="advantage__title">
                    Занимаемся поисковым<br> продвижением с 2011 г.
                    </span>
                    <span class="advantage__text">
                    Накоплен огромный опыт. Постоянно следим<br> за трендами в SEO и внедряем их в работу 
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section__wrap pb-1 pb-sm-5 type_ad">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Типы продвижения</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center selector flex-wrap d-flex mb-5">
                <div class="chose-tab active" data-tab="tab-1">По отраслям</div>
                <div class="icon">
                    <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 2L21 6L17 10" stroke="#542AC4" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                        <path d="M3 12V10C3 7.79086 4.79086 6 7 6H21" stroke="#542AC4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7 24L3 20L7 16" stroke="#542AC4" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                        <path d="M21 14V16C21 18.2091 19.2091 20 17 20H3" stroke="#542AC4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="chose-tab" data-tab="tab-2">По типам услуг</div>
            </div>
        </div>
        <div class="tab tab-1 active">
            <div class="row mb-5">

                <div class="col-12 col-md-6 d-flex elem pe-md-5 mb-5 mb-md-0">
                    <div class="col-1">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_343_2132)">
                        <path d="M41.4385 8.14041C41.2075 4.71573 38.3476 2.00009 34.8654 2.00009C31.3834 2.00009 28.5237 4.71517 28.2921 8.13938" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M31.2472 8.13937C31.4691 6.34022 33.0071 4.9427 34.8654 4.9427C36.7236 4.9427 38.2614 6.34013 38.4835 8.13919" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22.174 25.5981V9.32766C22.174 8.67141 22.706 8.13938 23.3622 8.13938H46.3686C47.0248 8.13938 47.5569 8.67141 47.5569 9.32766V26.7932C47.5569 27.4496 47.0248 27.9816 46.3686 27.9816H44.0565" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M40.7755 27.9815H26.383" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M43.3347 16.8113C45.8925 16.3519 47.5569 15.9821 47.5569 15.9821V9.32765C47.5569 8.6714 47.0248 8.13937 46.3686 8.13937H23.3622C22.706 8.13937 22.174 8.6714 22.174 9.32765V15.9821C22.174 15.9821 23.8438 16.3531 26.4089 16.8136" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M29.7913 17.3795L29.9811 17.4087C33.2183 17.9053 36.5123 17.9053 39.7495 17.4087C39.8481 17.3935 39.9461 17.3784 40.0436 17.3632" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M28.4868 19.1235H27.6771C27.1003 19.1235 26.6328 18.6559 26.6328 18.079V16.0369C26.6328 15.46 27.1003 14.9924 27.6771 14.9924H28.4868C29.0637 14.9924 29.5313 15.46 29.5313 16.0369V18.079C29.5313 18.6559 29.0637 19.1235 28.4868 19.1235Z" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M42.0536 19.1235H41.2438C40.667 19.1235 40.1995 18.6559 40.1995 18.079V16.0369C40.1995 15.46 40.667 14.9924 41.2438 14.9924H42.0536C42.6304 14.9924 43.098 15.46 43.098 16.0369V18.079C43.098 18.6559 42.6304 19.1235 42.0536 19.1235Z" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.0733 25.8347C10.2947 24.0351 11.8331 22.6372 13.6916 22.6372C15.5498 22.6372 17.0877 24.0346 17.3097 25.8336" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20.2647 25.8347C20.0337 22.4101 17.1737 19.6945 13.6915 19.6945C10.2095 19.6945 7.34979 22.4095 7.11823 25.8337" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M25.1946 45.6758H2.18828C1.53203 45.6758 1 45.1438 1 44.4876V27.0219C1 26.3657 1.53203 25.8337 2.18828 25.8337H25.1946C25.8509 25.8337 26.3829 26.3657 26.3829 27.0219V44.4876C26.3829 45.1438 25.8509 45.6758 25.1946 45.6758Z" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22.174 34.5034C24.7244 34.0451 26.383 33.6766 26.383 33.6766V27.022C26.383 26.3657 25.851 25.8337 25.1948 25.8337H2.18831C1.53206 25.8337 1.00012 26.3657 1.00012 27.022V33.6766C1.00012 33.6766 2.76749 34.0693 5.45895 34.5481" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.61395 35.0733C8.67826 35.0832 8.74258 35.0933 8.80736 35.1031C12.0445 35.5997 15.3385 35.5997 18.5757 35.1031C18.7269 35.0799 18.8769 35.0566 19.0255 35.0334" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.31301 36.8179H6.5033C5.92645 36.8179 5.45892 36.3503 5.45892 35.7734V33.7312C5.45892 33.1543 5.92645 32.6868 6.5033 32.6868H7.31301C7.88985 32.6868 8.35748 33.1543 8.35748 33.7312V35.7734C8.35748 36.3503 7.88985 36.8179 7.31301 36.8179Z" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20.8796 36.8179H20.0699C19.493 36.8179 19.0255 36.3503 19.0255 35.7734V33.7312C19.0255 33.1543 19.493 32.6868 20.0699 32.6868H20.8796C21.4564 32.6868 21.9241 33.1543 21.9241 33.7312V35.7734C21.9241 36.3503 21.4564 36.8179 20.8796 36.8179Z" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M44.0137 36.2071L40.9595 32.1846C40.8115 31.9897 40.6205 31.8316 40.4014 31.7226C40.1823 31.6136 39.941 31.5567 39.6963 31.5562H39.6934C39.4491 31.5562 39.2082 31.6125 38.9892 31.7206C38.7703 31.8288 38.5792 31.9859 38.4307 32.1798L35.3612 36.1905C34.8276 36.8877 34.9603 37.8856 35.6575 38.4193C36.3546 38.953 37.3526 38.8204 37.8863 38.123L38.1035 37.8392V40.9172C38.1035 41.785 37.3974 42.4912 36.5295 42.4912H32.7056C31.8276 42.4912 31.1157 43.203 31.1157 44.081C31.1157 44.959 31.8276 45.6709 32.7056 45.6709H36.5295C39.1506 45.6709 41.2832 43.5383 41.2832 40.9172V37.869L41.4813 38.13C41.794 38.5419 42.2686 38.7585 42.7487 38.7585C43.0837 38.7585 43.4216 38.653 43.709 38.4348C44.4083 37.9038 44.5447 36.9065 44.0137 36.2071Z" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.5492 2.07323C11.3244 2.46876 9.62957 4.41707 9.62957 6.75368V9.80186L9.43139 9.54077C9.11873 9.12902 8.64426 8.91236 8.16417 8.91236C7.8172 8.91216 7.47977 9.0259 7.20371 9.23608C6.50443 9.76708 6.36802 10.7644 6.89902 11.4638L9.95329 15.4863C10.1013 15.6812 10.2923 15.8393 10.5114 15.9483C10.7305 16.0572 10.9718 16.1142 11.2165 16.1146H11.2194C11.4636 16.1146 11.7045 16.0583 11.9235 15.9502C12.1424 15.8421 12.3335 15.685 12.482 15.4911L15.5516 11.4804C16.0852 10.783 15.9525 9.78527 15.2552 9.25155C14.5581 8.71783 13.5601 8.85049 13.0265 9.5478L12.8093 9.83158V6.75368C12.8093 5.88575 13.5154 5.17972 14.3832 5.17972H18.2072C19.0853 5.17972 19.797 4.46788 19.797 3.58982C19.797 2.71185 19.0853 2.00001 18.2072 2.00001H16.7885" stroke="#6430E8" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_343_2132">
                        <rect width="48" height="48" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    </div>
                    <div class="ps-5 ps-md-3 col-11 d-flex flex-wrap">
                        <a href="/uslugi/seo-prodvizhenie/b2b-sajt/"><div class="title">
                          SEO продвижение b2b сайтов
							</div> </a>
                        <div class="descr">  
                Продвигаем B2B-сайты, прорабатывая внутреннюю и внешнюю оптимизацию сайта компании.
                        </div>
                      <a href="/uslugi/seo-prodvizhenie/b2b-sajt/">  <div class="right-arrow">
                            <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19 1L23 5M23 5L19 9M23 5H1" stroke="#7F6CE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
						  </div> </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex elem ps-md-5">
                    <div class="col-1">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_343_2268)">
                            <path d="M13.9238 38.3914C14.3381 38.3914 14.6786 38.721 14.6786 39.1354C14.6786 39.5498 14.3385 39.8906 13.9238 39.8906H2.19977C1.91117 39.8898 1.62558 39.832 1.35931 39.7207C1.09305 39.6094 0.851343 39.4467 0.64802 39.2419C0.441727 39.0397 0.278085 38.7982 0.166781 38.5317C0.0554767 38.2651 -0.0012289 37.979 2.01955e-05 37.6901V2.20012C2.01955e-05 1.59413 0.24452 1.05187 0.64802 0.648375C1.05227 0.2445 1.59415 0 2.19977 0H45.7886C46.395 0 46.9474 0.2445 47.3516 0.648375C47.745 1.05225 48 1.59413 48 2.20012V37.6901C47.9978 38.2728 47.7646 38.8308 47.3516 39.2419C47.1468 39.4478 46.9032 39.6111 46.635 39.7225C46.3667 39.8338 46.0791 39.8909 45.7886 39.8906H39.4436C39.0293 39.8906 38.6891 39.5501 38.6891 39.1354C38.6891 38.7206 39.0289 38.3914 39.4436 38.3914H45.7886C45.9908 38.3914 46.1606 38.3062 46.2889 38.1791C46.4164 38.0516 46.5011 37.8821 46.5011 37.6901V8.17388H1.4989V37.6901C1.4989 37.8821 1.58402 38.0516 1.71152 38.1791V38.1892C1.83902 38.3175 2.00852 38.3914 2.19977 38.3914H13.9238ZM42.5899 3.33713C43.0043 3.33713 43.3339 3.66675 43.3339 4.08113C43.3339 4.4955 43.0043 4.836 42.5899 4.836H17.07C16.6556 4.836 16.3151 4.49588 16.3151 4.08113C16.3151 3.66638 16.6553 3.33713 17.07 3.33713H42.5899ZM46.5015 6.675V2.20012C46.5015 2.00888 46.4164 1.83863 46.2893 1.71113C46.2243 1.64414 46.1465 1.59083 46.0606 1.55431C45.9747 1.5178 45.8824 1.49882 45.789 1.4985H2.19977C2.00852 1.4985 1.83902 1.58363 1.71152 1.71113C1.58365 1.83863 1.4989 2.00888 1.4989 2.20012V6.675H46.5015Z" fill="#6430E8"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.46439 3.35849C4.65601 3.35879 4.8397 3.43507 4.97516 3.5706C5.11063 3.70614 5.18681 3.88986 5.18701 4.08149C5.18701 4.48536 4.86789 4.81499 4.46439 4.81499C4.06014 4.81499 3.74176 4.48536 3.74176 4.08149C3.74176 3.68811 4.06014 3.35849 4.46439 3.35849ZM10.7993 3.35849C10.9909 3.35879 11.1746 3.43507 11.31 3.5706C11.4455 3.70614 11.5217 3.88986 11.5219 4.08149C11.5219 4.48536 11.2028 4.81499 10.7993 4.81499C10.6048 4.81469 10.4183 4.73733 10.2808 4.59985C10.1432 4.46236 10.0658 4.27597 10.0654 4.08149C10.0654 3.68811 10.395 3.35849 10.7993 3.35849ZM7.63201 3.35849C7.82357 3.35889 8.00716 3.43521 8.14254 3.57074C8.27793 3.70626 8.35406 3.88993 8.35426 4.08149C8.35426 4.48536 8.03514 4.81499 7.63201 4.81499C7.43753 4.81469 7.2511 4.73733 7.11354 4.59985C6.97599 4.46236 6.89853 4.27597 6.89814 4.08149C6.89814 3.68811 7.22739 3.35849 7.63201 3.35849Z" fill="#6430E8"/>
                            <path d="M5.87776 11.6171H13.254C13.6684 11.6171 14.0404 11.7874 14.3168 12.0529C14.4563 12.1922 14.5667 12.3579 14.6415 12.5404C14.7164 12.7229 14.7541 12.9184 14.7525 13.1156V20.5028C14.7525 20.9066 14.5721 21.3529 14.2635 21.6079C13.9877 21.8604 13.6275 22.0007 13.2536 22.0013H5.87739C5.04864 22.0013 4.36801 21.321 4.36801 20.5028V13.116C4.36839 12.2869 5.04864 11.6171 5.87776 11.6171ZM13.254 13.116H5.87776V20.5031H13.254V13.116ZM17.1124 13.116C16.698 13.116 16.3688 12.7759 16.3688 12.3615C16.3688 11.9471 16.698 11.6175 17.1124 11.6175H21.3319C21.7463 11.6175 22.0868 11.9471 22.0868 12.3615C22.0868 12.7759 21.7466 13.116 21.3319 13.116H17.1124ZM17.1124 16.6024C16.698 16.6024 16.3688 16.2728 16.3688 15.8584C16.3688 15.444 16.698 15.1039 17.1124 15.1039H19.6208C20.0351 15.1039 20.3753 15.444 20.3753 15.8584C20.3753 16.2728 20.0355 16.6024 19.6208 16.6024H17.1124ZM27.4121 11.6171H34.7993C34.9961 11.6169 35.1911 11.6556 35.373 11.7308C35.555 11.8061 35.7202 11.9165 35.8594 12.0557C35.9986 12.1949 36.109 12.3603 36.1842 12.5422C36.2594 12.7241 36.298 12.9191 36.2978 13.116V20.5031C36.2978 20.907 36.117 21.3533 35.7983 21.6083C35.5266 21.8604 35.1699 22.0009 34.7993 22.0016H27.4121C26.5931 22.0016 25.9133 21.3214 25.9133 20.5031V13.116C25.9133 12.2869 26.5931 11.6171 27.4121 11.6171ZM34.7993 13.116H27.4121V20.5031H34.7993V13.116ZM38.6573 13.116C38.2429 13.116 37.9028 12.7759 37.9028 12.3615C37.9028 11.9471 38.2425 11.6175 38.6573 11.6175H42.8771C43.2915 11.6175 43.6211 11.9471 43.6211 12.3615C43.6211 12.7759 43.2915 13.116 42.8771 13.116H38.6573ZM38.6573 16.6024C38.2429 16.6024 37.9028 16.2728 37.9028 15.8584C37.9028 15.444 38.2425 15.1039 38.6573 15.1039H41.1656C41.5796 15.1039 41.9205 15.444 41.9205 15.8584C41.9205 16.2728 41.58 16.6024 41.1656 16.6024H38.6573ZM5.87776 25.6583H13.254C13.4509 25.6581 13.6459 25.6967 13.8278 25.7719C14.0098 25.8472 14.1751 25.9576 14.3143 26.0968C14.4535 26.236 14.5639 26.4014 14.6392 26.5833C14.7144 26.7652 14.7531 26.9602 14.7529 27.1571V34.5334C14.7529 35.3625 14.0831 36.0428 13.254 36.0428H5.87776C5.47794 36.0412 5.09494 35.8816 4.81222 35.5989C4.5295 35.3162 4.36997 34.9332 4.36839 34.5334V27.1571C4.36839 26.328 5.04864 25.6583 5.87776 25.6583ZM5.87776 27.1571V34.5334H13.254V27.1571H5.87776ZM38.6573 27.1571C38.4573 27.1562 38.2658 27.0764 38.1245 26.9349C37.9831 26.7934 37.9035 26.6018 37.9028 26.4019C37.9028 25.9879 38.2425 25.6583 38.6573 25.6583H42.8771C43.2915 25.6583 43.6211 25.9879 43.6211 26.4019C43.6211 26.8163 43.2915 27.1571 42.8771 27.1571H38.6573ZM38.6573 30.6431C38.2429 30.6431 37.9028 30.3034 37.9028 29.889C37.9028 29.4746 38.2425 29.145 38.6573 29.145H41.1656C41.5796 29.145 41.9205 29.4746 41.9205 29.889C41.9196 30.0889 41.8398 30.2803 41.6984 30.4215C41.557 30.5628 41.3655 30.6424 41.1656 30.6431H38.6573ZM16.6448 26.7105C15.9645 25.2863 16.209 23.5751 17.7184 22.8739C19.2068 22.1618 20.7263 23.0333 21.396 24.4575L24.5108 30.9833C24.7121 30.9409 25.0526 30.8666 25.3823 30.8033C26.6783 30.5265 27.7631 30.2929 29.5598 30.1016C30.2603 30.0379 31.0365 30.1969 31.6958 30.5475C32.355 30.8771 32.9183 31.398 33.2156 32.0254C34.6185 34.9905 36.0323 37.9459 37.4351 40.911C38.0835 42.2606 37.4989 43.8874 36.1493 44.5354L29.6235 47.6389C29.1446 47.8624 28.5386 47.9899 27.9435 48C27.1789 48 26.4135 47.8088 25.7861 47.5114L18.1759 43.9084C18.144 43.9823 15.423 42.5798 16.2521 40.3054C16.8154 38.7638 18.4946 38.4341 19.9403 38.8699L22.8206 39.6776L21.9814 37.935L21.0566 35.9895L16.6448 26.7105ZM17.9944 26.0723L22.4164 35.3513L23.3408 37.2863L24.8715 40.5064C24.9566 40.677 24.9776 40.8683 24.9251 41.049C24.8078 41.4525 24.3934 41.6861 24 41.5699L19.5251 40.305C18.8985 40.113 17.931 40.0706 17.6546 40.8146C17.3783 41.5909 18.1541 42.2599 18.7811 42.5471L26.3696 46.1393C26.4019 46.1393 26.6254 46.2139 26.6141 46.2139C27.1136 46.3838 28.092 46.7134 28.974 46.2885L35.511 43.185C36.1166 42.8869 36.3724 42.1538 36.0851 41.5485L31.8758 32.7056C31.6635 32.3014 31.4186 32.0888 31.0151 31.8765C30.5895 31.653 30.1223 31.5469 29.7184 31.5893C28.0073 31.7693 26.955 31.9928 25.7006 32.2695C25.467 32.3119 25.2225 32.3648 24.723 32.4709C24.4189 32.5345 24.1022 32.4936 23.8243 32.3546C23.5463 32.2157 23.3235 31.987 23.1919 31.7055L20.0456 25.0946C19.7378 24.4463 19.0894 23.883 18.3563 24.2231C17.6224 24.5633 17.697 25.4348 17.9944 26.0723Z" fill="#6430E8"/>
                            <path d="M27.4121 27.7628C27.4121 28.1771 27.0825 28.5173 26.6681 28.5173C26.2537 28.5173 25.9132 28.1775 25.9132 27.7628V27.1571C25.9132 26.328 26.5931 25.6583 27.4121 25.6583H34.7992C35.2136 25.6583 35.586 25.818 35.862 26.0936C36.1398 26.3781 36.2961 26.7595 36.2977 27.1571V29.889C36.2977 30.303 35.9681 30.6431 35.5537 30.6431C35.1394 30.6431 34.7992 30.3034 34.7992 29.889V27.1571H27.4121V27.7628Z" fill="#6430E8"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_343_2268">
                            <rect width="48" height="48" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="ps-5 ps-md-3 col-11 d-flex flex-wrap">
                        <a href="/uslugi/seo-prodvizhenie/internet-magazin/">
                            <div class="title">
                                SEO продвижение интернет-магазинов
                            </div>
                        </a>
                        <div class="descr">
                            Привлечем максимально большой объем целевого трафика естественными методами.
                            Обеспечим кратный рост продаж из поиска
                        </div>
                         <a href="/uslugi/seo-prodvizhenie/internet-magazin/">
                             <div class="right-arrow">
                                <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 1L23 5M23 5L19 9M23 5H1" stroke="#7F6CE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
							 </div>
                         </a>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-md-6 d-flex elem pe-md-5 mb-5 mb-md-0">
                    <div class="col-1">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M47.3251 35.29C46.9315 35.29 46.6221 34.9807 46.6221 34.587V13.7786C46.6221 11.0791 44.4288 8.85764 41.7012 8.85764H19.2337C18.8401 8.85764 18.5308 8.54832 18.5308 8.15465C18.5308 7.78909 18.8401 7.45166 19.2337 7.45166H41.7012C45.1599 7.45166 47.9719 10.2636 47.9719 13.7504V34.5589C47.9719 34.9807 47.6626 35.29 47.3251 35.29Z" fill="#6430E8"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M43.1072 40.5202H0.731125C0.337452 40.5202 0.0281372 40.2109 0.0281372 39.8172V13.7786C0.0281372 12.6538 0.956081 11.7258 2.08086 11.7258H41.7012C42.826 11.7258 43.754 12.6538 43.754 13.7786V39.8172C43.8102 40.2109 43.5009 40.5202 43.1072 40.5202ZM1.37787 39.1705H42.4324V13.7786C42.4324 13.3849 42.123 13.0756 41.7294 13.0756H2.10898C1.74343 13.0756 1.43411 13.3849 1.43411 13.7786V39.1705H1.37787Z" fill="#6430E8"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M43.1072 19.6274H0.731125C0.337452 19.6274 0.0281372 19.3181 0.0281372 18.9244C0.0281372 18.5308 0.337452 18.2214 0.731125 18.2214H43.1353C43.529 18.2214 43.8383 18.5308 43.8383 18.9244C43.8383 19.3181 43.5009 19.6274 43.1072 19.6274ZM21.9332 38.3831C16.9842 38.3831 12.935 34.3339 12.935 29.3849C12.935 24.4359 16.928 20.3585 21.9332 20.3585C26.8823 20.3585 30.9034 24.3796 30.9034 29.3849C30.9034 34.362 26.8823 38.3831 21.9332 38.3831ZM21.9332 21.7645C17.7153 21.7645 14.2847 25.1951 14.2847 29.413C14.2847 33.6309 17.7153 37.0615 21.9332 37.0615C26.0949 37.0615 29.5255 33.6309 29.5255 29.413C29.5255 25.1951 26.0949 21.7645 21.9332 21.7645ZM4.33042 17.2373C3.40248 17.2373 2.75573 16.5343 2.75573 15.6626C2.75573 14.7627 3.45872 14.0598 4.33042 14.0598C5.23025 14.0598 5.93323 14.7909 5.93323 15.6626C5.93323 16.5343 5.23025 17.2373 4.33042 17.2373ZM4.33042 15.4095C4.18982 15.4095 4.10547 15.522 4.10547 15.6626C4.10547 15.8032 4.18982 15.8875 4.33042 15.8875C4.47102 15.8875 4.5835 15.8032 4.5835 15.6626C4.5835 15.522 4.47102 15.4095 4.33042 15.4095ZM9.3357 17.2373C8.43587 17.2373 7.73288 16.5343 7.73288 15.6626C7.73288 14.7627 8.46399 14.0598 9.3357 14.0598C10.1793 14.0598 10.9385 14.7909 10.9385 15.6626C10.9385 16.5343 10.2355 17.2373 9.3357 17.2373ZM9.3357 15.4095C9.22322 15.4095 9.11074 15.522 9.11074 15.6626C9.11074 16 9.61689 16 9.61689 15.6626C9.56065 15.522 9.44817 15.4095 9.3357 15.4095ZM14.2847 17.2373C13.3849 17.2373 12.6819 16.5343 12.6819 15.6626C12.6819 14.7627 13.4411 14.0598 14.2847 14.0598C15.1564 14.0598 15.8875 14.7909 15.8875 15.6626C15.8875 16.5343 15.1846 17.2373 14.2847 17.2373ZM14.2847 15.4095C14.1723 15.4095 14.0598 15.522 14.0598 15.6626C14.0598 16 14.5659 16 14.5659 15.6626C14.5097 15.522 14.3972 15.4095 14.2847 15.4095ZM40.3796 16.3656H19.5993C19.2056 16.3656 18.8963 16.0281 18.8963 15.6626C18.8963 15.2689 19.2056 14.9596 19.5993 14.9596H40.3796C40.7733 14.9596 41.0826 15.2689 41.0826 15.6626C41.0826 16.0281 40.7733 16.3656 40.3796 16.3656Z" fill="#6430E8"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.4236 34.2777H20.4148C20.0211 34.2777 19.7118 33.9684 19.7118 33.5747V31.522H17.631C17.2373 31.522 16.928 31.2126 16.928 30.819V27.8664C16.928 27.4728 17.2373 27.1634 17.631 27.1634H19.7118V25.0826C19.7118 24.6889 20.0211 24.3796 20.4148 24.3796H23.4236C23.7891 24.3796 24.0985 24.6889 24.0985 25.0826V27.1634H26.1793C26.573 27.1634 26.8823 27.4728 26.8823 27.8664V30.8471C26.8823 31.2408 26.573 31.5501 26.1793 31.5501H24.0985V33.6309C24.0703 34.0246 23.7891 34.2777 23.4236 34.2777ZM21.0615 32.9279H22.7206V30.8471C22.7206 30.4815 23.0299 30.1441 23.4236 30.1441H25.4763V28.5694H23.4236C23.0299 28.5694 22.7206 28.232 22.7206 27.8664V25.7856H21.0615V27.8664C21.0615 28.232 20.7522 28.5694 20.3586 28.5694H18.3058V30.1441H20.3586C20.7522 30.1441 21.0615 30.4815 21.0615 30.8471V32.9279Z" fill="#6430E8"/>
                        </svg>
                    </div>
                    <div class="ps-5 ps-md-3 col-11 d-flex flex-wrap">
                       <a href="/uslugi/seo-prodvizhenie/meditsinskiy-sayt/"> <div class="title">
                           SEO продвижение медицинских сайтов
						   </div> </a>
                        <div class="descr">
                           Знаем все особенности продвижения медицинских сайтов. Привлечем качественный трафик и увеличим количество записей
                        </div>
                       <a href="/uslugi/seo-prodvizhenie/meditsinskiy-sayt/"> <div class="right-arrow">
                            <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19 1L23 5M23 5L19 9M23 5H1" stroke="#7F6CE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
						   </div> </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex elem ps-md-5">
                    <div class="col-1">
                    
<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_343_2274)">
<path d="M44.25 9.75H39.75V3.75C39.75 2.0955 38.4045 0.75 36.75 0.75H11.25C9.5955 0.75 8.25 2.0955 8.25 3.75V9.75H3.75C2.0955 9.75 0.75 11.0955 0.75 12.75V35.25C0.75 36.9045 2.0955 38.25 3.75 38.25H18.75V40.1423C16.2533 40.5412 12.75 41.463 12.75 43.5C12.75 46.077 18.5812 47.25 24 47.25C29.4188 47.25 35.25 46.077 35.25 43.5C35.25 41.463 31.7467 40.5412 29.25 40.1423V38.25H44.25C45.9045 38.25 47.25 36.9045 47.25 35.25V12.75C47.25 11.0955 45.9045 9.75 44.25 9.75ZM33.75 20.25V19.5C33.75 18.2595 32.7405 17.25 31.5 17.25H27.75V13.866C27.75 12.8648 27.1057 11.9985 26.1465 11.7105L19.8975 9.8355C19.5905 9.74354 19.2662 9.72459 18.9505 9.78018C18.6348 9.83576 18.3365 9.96433 18.0793 10.1556C17.8222 10.347 17.6133 10.5957 17.4693 10.8821C17.3253 11.1684 17.2502 11.4845 17.25 11.805V18.2865L15.4935 19.1647C15.1189 19.3505 14.8038 19.6374 14.5841 19.9931C14.3643 20.3488 14.2485 20.7589 14.25 21.177V26.25H29.25V27.75H11.25C10.4227 27.75 9.75 27.0772 9.75 26.25V8.25H38.25V20.25H33.75ZM42.8145 30.375L39.375 33.8145L32.25 26.6895L30.75 28.1895V21.75H37.1895L35.6895 23.25L42.8145 30.375ZM26.25 20.25V24.75H24.75V19.5C24.75 19.0868 25.0868 18.75 25.5 18.75H31.5C31.9132 18.75 32.25 19.0868 32.25 19.5V20.25H29.25V24.75H27.75V20.25H26.25ZM19.7865 17.25C19.4835 17.25 19.1798 17.322 18.9083 17.457L18.75 17.5365V14.4608L26.25 16.3358V17.25H25.5C24.2595 17.25 23.25 18.2595 23.25 19.5V24.75H21.75V19.2135C21.7496 18.6929 21.5426 18.1937 21.1745 17.8255C20.8063 17.4574 20.3071 17.2504 19.7865 17.25ZM26.25 14.7892L18.75 12.9142V11.805C18.75 11.4458 19.1198 11.1683 19.4685 11.2733L25.716 13.1475C25.8707 13.1934 26.0064 13.2882 26.1027 13.4178C26.199 13.5473 26.2507 13.7046 26.25 13.866V14.7892ZM19.5788 18.7987C19.872 18.651 20.25 18.8873 20.25 19.2135V19.7865L15.75 22.0365V21.177C15.75 20.8913 15.909 20.634 16.1647 20.5065L19.5788 18.7987ZM15.75 23.7135L20.25 21.4635V24.75H15.75V23.7135ZM34.1895 30.75H30.3105L32.25 28.8105L34.1895 30.75ZM11.25 2.25H36.75C37.5773 2.25 38.25 2.92275 38.25 3.75V6.75H9.75V3.75C9.75 2.92275 10.4227 2.25 11.25 2.25ZM3.75 11.25H8.25V26.25C8.25 27.9045 9.5955 29.25 11.25 29.25H29.25V30.75H2.25V12.75C2.25 11.9227 2.92275 11.25 3.75 11.25ZM33.75 43.5C33.75 44.1727 30.4328 45.75 24 45.75C17.5672 45.75 14.25 44.1727 14.25 43.5C14.25 43.1932 15.3435 42.2415 18.75 41.6625V44.25H29.25V41.6625C32.6565 42.2415 33.75 43.1932 33.75 43.5ZM27.75 42.75H20.25V38.25H27.75V42.75ZM45.75 35.25C45.75 36.0773 45.0773 36.75 44.25 36.75H3.75C2.92275 36.75 2.25 36.0773 2.25 35.25V32.25H35.6895L39.375 35.9355L44.9355 30.375L37.8105 23.25L40.8105 20.25H39.75V11.25H44.25C45.0773 11.25 45.75 11.9227 45.75 12.75V35.25Z" fill="#6430E8"/>
<path d="M11.25 3.75H12.75V5.25H11.25V3.75ZM14.25 3.75H15.75V5.25H14.25V3.75ZM17.25 3.75H18.75V5.25H17.25V3.75ZM22.5 33.75H25.5V35.25H22.5V33.75ZM27 33.75H28.5V35.25H27V33.75ZM19.5 33.75H21V35.25H19.5V33.75Z" fill="#6430E8"/>
</g>
<defs>
<clipPath id="clip0_343_2274">
<rect width="48" height="48" fill="white"/>
</clipPath>
</defs>
</svg>

                    </div>
                    <div class="ps-5 ps-md-3 col-11 d-flex flex-wrap">
                       <a href="/uslugi/seo-prodvizhenie/korporativny-sajt/"> <div class="title">
                           SEO продвижение корпоративных сайтов
						   </div> </a>
                        <div class="descr">
                            Привлекаем новых клиентов на всех этапах воронки (горячий, теплый, холодный трафик). Делали прирост по трафику более чем в 20 раз
                        </div>
                     <a href="/uslugi/seo-prodvizhenie/korporativny-sajt/">   <div class="right-arrow">
                            <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19 1L23 5M23 5L19 9M23 5H1" stroke="#7F6CE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
						 </div> </a>
                    </div>
                </div>
            </div>
			 <div class="row mb-5">
                <div class="col-12 col-md-6 d-flex elem pe-md-5 mb-5 mb-md-0">
                    <div class="col-1">
                       
<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_343_2279)">
<path d="M12.243 4.87275C11.9332 4.191 11.2492 3.75 10.5 3.75C9.75075 3.75 9.06675 4.191 8.757 4.87275L6 11.8575V12.75C6 15.2318 8.01825 17.25 10.5 17.25C12.9818 17.25 15 15.2318 15 12.7133C15.0003 12.1477 14.8939 11.5872 14.6865 11.061L12.243 4.87275ZM10.5 15.75C8.8455 15.75 7.5 14.4045 7.5 12.75V12.1425L10.1287 5.4795C10.2705 5.196 10.761 5.23575 10.863 5.45775L13.2908 11.6108C13.4295 11.964 13.5 12.3345 13.5 12.75C13.5 14.4045 12.1545 15.75 10.5 15.75Z" fill="#6430E8"/>
<path d="M47.25 24.75V23.25C47.25 22.4228 46.5773 21.75 45.75 21.75V12C45.75 9.10575 43.3942 6.75 40.5 6.75H36.75C36.75 5.92275 36.0773 5.25 35.25 5.25H33.75C32.9227 5.25 32.25 5.92275 32.25 6.75H27.75C27.75 5.92275 27.0772 5.25 26.25 5.25H24.75C23.9228 5.25 23.25 5.92275 23.25 6.75H19.4977C18.0255 3.23025 14.5477 0.75 10.5 0.75C5.124 0.75 0.75 5.124 0.75 10.5C0.75 15.876 5.124 20.25 10.5 20.25C14.5477 20.25 18.0255 17.7698 19.4977 14.25H23.25C23.25 15.0773 23.9228 15.75 24.75 15.75H26.25C27.0772 15.75 27.75 15.0773 27.75 14.25H32.25C32.25 15.0773 32.9227 15.75 33.75 15.75H35.25C36.0773 15.75 36.75 15.0773 36.75 14.25H38.25V21.75C37.4227 21.75 36.75 22.4228 36.75 23.25V24.75C36.75 25.5772 37.4227 26.25 38.25 26.25V27.75H35.25C35.25 26.9228 34.5773 26.25 33.75 26.25H32.25C31.4228 26.25 30.75 26.9228 30.75 27.75H27V24.75H27.75C28.9905 24.75 30 23.7405 30 22.5C30 21.2595 28.9905 20.25 27.75 20.25H27C27 18.5955 25.6545 17.25 24 17.25C22.3455 17.25 21 18.5955 21 20.25H20.25C19.0095 20.25 18 21.2595 18 22.5C18 23.7405 19.0095 24.75 20.25 24.75H21V27.75H17.25C17.25 26.9228 16.5773 26.25 15.75 26.25H14.25C13.4227 26.25 12.75 26.9228 12.75 27.75H9C6.10575 27.75 3.75 30.1057 3.75 33V38.25C2.92275 38.25 2.25 38.9227 2.25 39.75V41.25C2.25 42.0773 2.92275 42.75 3.75 42.75V47.25H11.25V42.75C12.0773 42.75 12.75 42.0773 12.75 41.25V39.75C12.75 38.9227 12.0773 38.25 11.25 38.25V35.25H12.75C12.75 36.0773 13.4227 36.75 14.25 36.75H15.75C16.5773 36.75 17.25 36.0773 17.25 35.25H30.75C30.75 36.0773 31.4228 36.75 32.25 36.75H33.75C34.5773 36.75 35.25 36.0773 35.25 35.25H38.25V38.25C37.4227 38.25 36.75 38.9227 36.75 39.75V41.25C36.75 42.0773 37.4227 42.75 38.25 42.75V47.25H45.75V42.75C46.5773 42.75 47.25 42.0773 47.25 41.25V39.75C47.25 38.9227 46.5773 38.25 45.75 38.25V26.25C46.5773 26.25 47.25 25.5772 47.25 24.75ZM10.5 18.75C5.95125 18.75 2.25 15.0487 2.25 10.5C2.25 5.95125 5.95125 2.25 10.5 2.25C15.0487 2.25 18.75 5.95125 18.75 10.5C18.75 15.0487 15.0487 18.75 10.5 18.75ZM19.9777 12.75C20.1495 12.0262 20.25 11.2755 20.25 10.5C20.25 9.7245 20.1495 8.97375 19.9777 8.25H23.25V12.75H19.9777ZM24.75 14.25V6.75H26.25L26.2515 14.25H24.75ZM27.75 12.75V8.25H32.25V12.75H27.75ZM9.75 45.75H5.25V42.75H9.75V45.75ZM11.2515 41.25H3.75V39.75H11.25L11.2515 41.25ZM11.25 33.75C10.4227 33.75 9.75 34.4227 9.75 35.25V38.25H5.25V33C5.25 30.9323 6.93225 29.25 9 29.25H12.75V33.75H11.25ZM24 18.75C24.8272 18.75 25.5 19.4228 25.5 20.25H22.5C22.5 19.4228 23.1728 18.75 24 18.75ZM19.5 22.5C19.5 22.3011 19.579 22.1103 19.7197 21.9697C19.8603 21.829 20.0511 21.75 20.25 21.75H27.75C27.9489 21.75 28.1397 21.829 28.2803 21.9697C28.421 22.1103 28.5 22.3011 28.5 22.5C28.5 22.6989 28.421 22.8897 28.2803 23.0303C28.1397 23.171 27.9489 23.25 27.75 23.25H20.25C20.0511 23.25 19.8603 23.171 19.7197 23.0303C19.579 22.8897 19.5 22.6989 19.5 22.5ZM22.5 24.75H25.5V27.75H22.5V24.75ZM14.25 35.25V27.75H15.75L15.7515 35.25H14.25ZM17.25 33.75V29.25H30.75V33.75H17.25ZM33.75 14.25V6.75H35.25L35.2515 14.25H33.75ZM38.25 12.75H36.75V8.25H40.5C42.5677 8.25 44.25 9.93225 44.25 12V21.75H39.75V14.25C39.75 13.4227 39.0773 12.75 38.25 12.75ZM38.25 23.25H45.75L45.7515 24.75H38.25V23.25ZM32.25 35.25V27.75H33.75L33.7515 35.25H32.25ZM35.25 33.75V29.25H38.25V33.75H35.25ZM44.25 45.75H39.75V42.75H44.25V45.75ZM45.7515 41.25H38.25V39.75H45.75L45.7515 41.25ZM44.25 38.25H39.75V26.25H44.25V38.25Z" fill="#6430E8"/>
<path d="M41.25 29.25H42.75V30.75H41.25V29.25ZM41.25 35.25H42.75V36.75H41.25V35.25ZM41.25 32.25H42.75V33.75H41.25V32.25ZM24.75 30.75H26.25V32.25H24.75V30.75ZM18.75 30.75H20.25V32.25H18.75V30.75ZM21.75 30.75H23.25V32.25H21.75V30.75ZM41.25 18.75H42.75V20.25H41.25V18.75ZM41.25 12.75H42.75V14.25H41.25V12.75ZM41.25 15.75H42.75V17.25H41.25V15.75Z" fill="#6430E8"/>
</g>
<defs>
<clipPath id="clip0_343_2279">
<rect width="48" height="48" fill="white"/>
</clipPath>
</defs>
</svg>

                    </div>
                    <div class="ps-5 ps-md-3 col-11 d-flex flex-wrap">
                       <a href="/uslugi/seo-prodvizhenie/promyshlenny-sajt/"> <div class="title">
                          SEO продвижение промышленных сайтов
						   </div> </a>
                        <div class="descr">
                         Мы — эксперты в продвижении промышленных сайтов. Увеличим количество продаж заводу, промышленной компании
                        </div>
                       <a href="/uslugi/seo-prodvizhenie/promyshlenny-sajt/"> <div class="right-arrow">
                            <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19 1L23 5M23 5L19 9M23 5H1" stroke="#7F6CE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
						   </div> </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex elem ps-md-5">
                    <div class="col-1">
                    
<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M44.9531 33.15V30.5531C44.9531 20.9719 38.4938 12.675 29.25 10.2844L28.8938 8.64375C28.6031 7.30312 27.4031 6.32812 26.025 6.32812H21.9656C20.5969 6.32812 19.3875 7.30312 19.0969 8.64375L18.7406 10.275C9.5625 12.6469 3.04688 20.9344 3.04688 30.5531V33.1594C1.28438 33.7125 0 35.3625 0 37.3125C0 39.7219 1.95937 41.6719 4.35938 41.6719H43.6406C46.05 41.6719 48 39.7125 48 37.3125C48 35.3625 46.7156 33.7125 44.9531 33.15ZM5.00625 30.5531C5.00625 25.6125 6.90937 20.9344 10.2844 17.4188V26.1188C10.2844 26.6625 10.725 27.0938 11.2594 27.0938C11.7937 27.0938 12.2344 26.6531 12.2344 26.1188V15.6469C14.0437 14.2219 16.0875 13.1437 18.2719 12.4594L16.4437 20.9531C16.3312 21.4781 16.6687 22.0031 17.1937 22.1156C17.7188 22.2281 18.2437 21.8906 18.3563 21.3656L21.0094 9.05625C21.1031 8.60625 21.5063 8.2875 21.9562 8.2875H26.0156C26.4656 8.2875 26.8688 8.60625 26.9625 9.05625L29.6156 21.3656C29.7281 21.8906 30.2531 22.2281 30.7781 22.1156C31.3031 22.0031 31.6406 21.4781 31.5281 20.9531L29.7 12.45C31.8844 13.1344 33.9281 14.2219 35.7375 15.6469V26.1094C35.7375 26.6531 36.1781 27.0844 36.7125 27.0844C37.2469 27.0844 37.6875 26.6437 37.6875 26.1094V17.4094C41.0625 20.925 42.9656 25.6031 42.9656 30.5437V32.9344H5.00625V30.5531ZM43.6406 39.7125H4.35938C3.0375 39.7125 1.95937 38.6344 1.95937 37.3125C1.95937 35.9906 3.0375 34.9125 4.35938 34.9125H43.6406C44.9625 34.9125 46.0406 35.9906 46.0406 37.3125C46.0406 38.6344 44.9625 39.7125 43.6406 39.7125Z" fill="#6430E8"/>
</svg>

                    </div>
                    <div class="ps-5 ps-md-3 col-11 d-flex flex-wrap">
                       <a href="/uslugi/seo-prodvizhenie/stroitelny-sajt/"> <div class="title">
                           SEO продвижение строительных сайтов
						   </div> </a>
                        <div class="descr">
                           Привлечем целевой трафик на ваш сайт. Имеем большой опыт в продвижении строительных сайтов
                        </div>
                     <a href="/uslugi/seo-prodvizhenie/stroitelny-sajt/">   <div class="right-arrow">
                            <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19 1L23 5M23 5L19 9M23 5H1" stroke="#7F6CE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
						 </div> </a>
                    </div>
                </div>
            </div>
        </div>
        <!--ТУТ TAB2-->
        <div class="tab tab-2">
            <div class="row mb-5">

                <div class="col-12 col-md-6 d-flex elem pe-md-5 mb-5 mb-md-0">
                    <div class="col-1">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_994_3364)"> <path d="M31.9831 14.9751C31.867 13.7428 30.8319 12.8015 29.5942 12.8023H28.7944V8.80307C28.7902 7.25256 27.8893 5.84453 26.4832 5.19094C26.9405 4.62949 27.1916 3.92829 27.1947 3.20421C27.1947 1.43729 25.7623 0.00488281 23.9953 0.00488281C22.2284 0.00488281 20.796 1.43729 20.796 3.20421C20.7991 3.92829 21.0502 4.62949 21.5074 5.19094C20.9093 5.47251 20.3901 5.89758 19.9962 6.42829C19.6021 5.89758 19.083 5.47251 18.485 5.19094C18.9422 4.62949 19.1933 3.92829 19.1964 3.20421C19.1964 1.43729 17.764 0.00488281 15.9971 0.00488281C14.2301 0.00488281 12.7977 1.43729 12.7977 3.20421C12.8008 3.92829 13.0519 4.62949 13.5091 5.19094C12.911 5.47251 12.3919 5.89758 11.9979 6.42829C11.6039 5.89758 11.0847 5.47251 10.4867 5.19094C10.9439 4.62949 11.195 3.92829 11.1981 3.20421C11.1981 1.43729 9.7657 0.00488281 7.99877 0.00488281C6.23184 0.00488281 4.79916 1.43719 4.79916 3.20421C4.80225 3.92829 5.05336 4.62949 5.51058 5.19094C4.10451 5.84453 3.20366 7.25256 3.19944 8.80307V12.8023H2.39963C1.16191 12.8015 0.12693 13.7428 0.0107034 14.9751C-0.10543 16.2074 0.735434 17.3256 1.9515 17.556L12.7975 33.0506V47.1954C12.7975 47.4904 12.9599 47.7614 13.22 47.9006C13.4801 48.0397 13.7956 48.0245 14.0411 47.8608L18.8401 44.6615C19.0626 44.5131 19.1962 44.2634 19.1963 43.996V33.0506L30.0423 17.5561C31.2584 17.3256 32.0992 16.2074 31.9831 14.9751ZM23.9953 1.6045C24.8788 1.6045 25.595 2.3207 25.595 3.20421C25.595 4.08773 24.8788 4.80393 23.9953 4.80393C23.1118 4.80393 22.3956 4.08773 22.3956 3.20421C22.3967 2.32108 23.1123 1.60553 23.9953 1.6045ZM20.796 8.80307C20.7974 7.47846 21.8709 6.40495 23.1955 6.40355H24.7952C26.1198 6.40495 27.1934 7.47846 27.1948 8.80307V12.8023H23.9954V9.60297C23.9954 9.16121 23.6374 8.80316 23.1956 8.80316C22.7539 8.80316 22.3958 9.16121 22.3958 9.60297V12.8023H20.7961V8.80307H20.796ZM15.997 1.6045C16.8805 1.6045 17.5967 2.3207 17.5967 3.20421C17.5967 4.08773 16.8805 4.80393 15.997 4.80393C15.1134 4.80393 14.3972 4.08773 14.3972 3.20421C14.3983 2.32108 15.1139 1.60553 15.997 1.6045ZM12.7975 8.80307C12.7989 7.47846 13.8724 6.40495 15.1971 6.40355H16.7968C18.1214 6.40495 19.1949 7.47846 19.1963 8.80307V12.8023H15.997V9.60297C15.997 9.16121 15.6389 8.80316 15.1971 8.80316C14.7554 8.80316 14.3973 9.16121 14.3973 9.60297V12.8023H12.7976V8.80307H12.7975ZM7.99849 1.6045C8.882 1.6045 9.5982 2.3207 9.5982 3.20421C9.5982 4.08773 8.882 4.80383 7.99849 4.80383C7.11498 4.80383 6.39887 4.08763 6.39887 3.20421C6.3999 2.32108 7.11544 1.60553 7.99849 1.6045ZM4.79916 8.80307C4.80056 7.47846 5.87407 6.40495 7.19868 6.40355H8.79839C10.123 6.40495 11.1965 7.47846 11.1979 8.80307V12.8023H7.99849V9.60297C7.99849 9.16121 7.64043 8.80316 7.19868 8.80316C6.75692 8.80316 6.39887 9.16121 6.39887 9.60297V12.8023H4.79916V8.80307ZM26.9384 19.201H19.9961C19.5543 19.201 19.1963 19.5591 19.1963 20.0008C19.1963 20.4425 19.5544 20.8006 19.9961 20.8006H25.8186L24.6988 22.4003H18.3964C17.9546 22.4003 17.5966 22.7584 17.5966 23.2001C17.5966 23.6419 17.9546 23.9999 18.3964 23.9999H23.579L22.4592 25.5996H16.7967C16.3549 25.5996 15.9969 25.9578 15.9969 26.3994C15.9969 26.8411 16.3549 27.1992 16.7967 27.1992H21.3394L20.2196 28.799H15.197C14.7552 28.799 14.3972 29.157 14.3972 29.5988C14.3972 30.0405 14.7552 30.3986 15.197 30.3986H19.0997L17.7409 32.3396C17.6468 32.474 17.5964 32.6341 17.5964 32.7981V43.5678L14.3971 45.701V32.7983C14.3971 32.6343 14.3466 32.4742 14.2525 32.3398L3.9357 17.6013H28.0582L26.9384 19.201ZM2.39963 16.0016C1.95788 16.0016 1.59982 15.6436 1.59982 15.2018C1.59982 14.7601 1.95788 14.402 2.39963 14.402H29.5942C30.0358 14.4025 30.3936 14.7603 30.394 15.2018C30.3935 15.6434 30.0358 16.0013 29.5942 16.0016H2.39963Z" fill="#542AC4"/> <path d="M47.9217 26.8356C47.3767 22.7636 44.0841 19.612 39.9921 19.2457V4.33527L42.6259 6.96912C42.8275 7.17326 43.1231 7.25378 43.4003 7.18011C43.6776 7.10643 43.8942 6.88982 43.9679 6.61256C44.0416 6.33531 43.961 6.03977 43.7569 5.83816L39.7577 1.83892C39.7505 1.8318 39.7409 1.82973 39.7336 1.82289C39.6653 1.75662 39.5856 1.70329 39.4983 1.66542L39.4955 1.66477C39.4887 1.66205 39.4815 1.66214 39.4748 1.65952C39.3933 1.62906 39.3075 1.61237 39.2205 1.61003C39.1943 1.60909 39.1697 1.61237 39.1435 1.61397C39.0744 1.61809 39.0062 1.6314 38.9406 1.65343C38.9149 1.66111 38.8896 1.67011 38.8649 1.68051C38.7765 1.71838 38.6957 1.772 38.6265 1.83883L34.6273 5.83806C34.315 6.15037 34.315 6.6568 34.6273 6.96912C34.9396 7.28143 35.446 7.28143 35.7583 6.96912L38.3922 4.33527V19.2443C37.6128 19.3139 36.8463 19.4869 36.1125 19.7588C32.2639 21.1928 29.9201 25.0992 30.4659 29.1699C31.0117 33.2405 34.3018 36.3916 38.3922 36.7612V43.1964C38.3911 44.0794 37.6755 44.7949 36.7925 44.7961H20.7959C20.3541 44.7961 19.9961 45.1541 19.9961 45.5959C19.9961 46.0376 20.3541 46.3957 20.7959 46.3957H36.7927C38.559 46.3939 39.9904 44.9626 39.9921 43.1964V36.7653C40.7702 36.6929 41.5354 36.5175 42.2674 36.2438C46.1189 34.8142 48.4668 30.9076 47.9217 26.8356ZM43.6024 33.6633C41.1218 35.5879 37.679 35.6792 35.0998 33.8889C32.5206 32.0987 31.4023 28.8411 32.3379 25.8442C33.2735 22.8472 36.0465 20.8045 39.1861 20.7995L39.1923 20.8009L39.1985 20.7995C42.1994 20.8081 44.8815 22.6733 45.9339 25.4835C47.0271 28.4266 46.083 31.7387 43.6024 33.6633Z" fill="#542AC4"/> <path d="M41.8041 24.2008L41.9107 23.9672C42.093 23.5654 41.9155 23.0918 41.514 22.9087C41.1126 22.7257 40.6386 22.9022 40.4547 23.3033L40.3483 23.5368C39.067 23.1772 37.7077 23.7547 37.0769 24.9265C36.6043 26.171 37.0589 27.5769 38.1709 28.309L37.2686 30.2865C37.1627 30.1765 37.0724 30.0524 37.0004 29.9177C36.8564 29.6627 36.8336 29.3569 36.9382 29.0835C37.0574 28.8235 37.0285 28.5196 36.8627 28.2866C36.6969 28.0535 36.4191 27.9269 36.1345 27.9543C35.8498 27.9817 35.6014 28.1591 35.483 28.4195C35.173 29.1344 35.206 29.9517 35.5725 30.6393C35.8135 31.099 36.1573 31.4969 36.5769 31.8023L36.4707 32.0351C36.2874 32.437 36.4645 32.9115 36.8665 33.0949C37.2684 33.2782 37.7429 33.1011 37.9262 32.6991L38.029 32.474C38.2727 32.5269 38.5213 32.5539 38.7707 32.5545C39.8326 32.6037 40.8244 32.0248 41.3038 31.0759C41.6145 30.3612 41.5818 29.5436 41.2147 28.8561C40.9737 28.3965 40.6301 27.9986 40.2105 27.6932L41.1135 25.7142C41.454 26.014 41.5835 26.4876 41.4429 26.9189C41.2595 27.3209 41.4369 27.7955 41.8389 27.9788C42.2409 28.1622 42.7154 27.9848 42.8988 27.5828C43.371 26.3384 42.916 24.9328 41.8041 24.2008ZM38.5325 25.5904C38.7663 25.202 39.2086 24.9896 39.6578 25.0501L38.8616 26.7953C38.5213 26.4953 38.3919 26.0217 38.5325 25.5904ZM39.8487 30.4121C39.6148 30.8004 39.1727 31.0126 38.7234 30.9524L39.5189 29.209C39.6248 29.319 39.715 29.4431 39.7869 29.5779C39.9312 29.8328 39.9538 30.1388 39.8487 30.4121Z" fill="#542AC4"/> </g> <defs> <clipPath id="clip0_994_3364"> <rect width="48" height="48" fill="white"/> </clipPath> </defs> </svg>
                    </div>
                    <div class="ps-5 ps-md-3 col-11 d-flex flex-wrap">
                     <a href="/uslugi/seo-prodvizhenie/po-lidam/">   <div class="title">
                            SEO продвижение по лидам
						 </div> </a>
                        <div class="descr">
                            Продвижение по лидам поможет вам увеличить рост целевых звонков, заказов и заявок. При этом вы платите только за количество лидов.
                        </div>
                     <a href="/uslugi/seo-prodvizhenie/po-lidam/">   <div class="right-arrow">
                            <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19 1L23 5M23 5L19 9M23 5H1" stroke="#7F6CE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
						 </div> </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex elem ps-md-5">
                    <div class="col-1">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M39.75 26.25V0.75C39.75 0.336 39.4147 0 39 0H9C8.58525 0 8.25 0.336 8.25 0.75V26.25C8.25 26.664 8.58525 27 9 27H15H24H33H39C39.4147 27 39.75 26.664 39.75 26.25ZM38.25 1.5V6H9.75V1.5H38.25ZM9.75 25.5V7.5H38.25V25.5H9.75Z" fill="#542AC4"/> <path d="M11.25 3H12.75V4.5H11.25V3Z" fill="#542AC4"/> <path d="M14.25 3H15.75V4.5H14.25V3Z" fill="#542AC4"/> <path d="M17.25 3H18.75V4.5H17.25V3Z" fill="#542AC4"/> <path d="M25.5 3H36.75V4.5H25.5V3Z" fill="#542AC4"/> <path d="M24 9C19.8645 9 16.5 12.3645 16.5 16.5C16.5 20.6355 19.8645 24 24 24C28.1355 24 31.5 20.6355 31.5 16.5C31.5 12.3645 28.1355 9 24 9ZM22.5308 20.0925C23.5073 19.983 24.4927 19.983 25.4692 20.0925C24.9922 21.1133 24.4012 21.8325 24 22.2405C23.598 21.8325 23.0078 21.1125 22.5308 20.0925ZM22.0178 18.6562C21.9083 18.225 21.8362 17.7517 21.795 17.25H26.2058C26.1638 17.7517 26.0925 18.225 25.983 18.6562C24.666 18.4762 23.334 18.4762 22.0178 18.6562ZM25.4692 12.9075C24.4927 13.017 23.5073 13.017 22.5308 12.9075C23.0078 11.8867 23.5988 11.1675 24 10.7595C24.402 11.1675 24.9922 11.8875 25.4692 12.9075ZM24 14.4952C24.663 14.4952 25.3245 14.4338 25.9823 14.3438C26.0918 14.775 26.1637 15.2483 26.205 15.75H21.795C21.837 15.2483 21.9083 14.775 22.0178 14.3438C22.6755 14.4338 23.337 14.4952 24 14.4952ZM20.2808 15.75H18.0525C18.1537 14.9468 18.4125 14.193 18.7995 13.5203C19.3695 13.7378 19.9493 13.92 20.5388 14.0632C20.4113 14.583 20.3228 15.147 20.2808 15.75ZM20.2808 17.25C20.3235 17.853 20.4113 18.417 20.5388 18.9368C19.95 19.08 19.3702 19.2615 18.7995 19.4797C18.4125 18.807 18.153 18.054 18.0525 17.25H20.2808ZM27.7192 17.25H29.9475C29.8463 18.0533 29.5875 18.807 29.2005 19.4797C28.6305 19.2622 28.0508 19.08 27.4613 18.9368C27.5888 18.417 27.6772 17.853 27.7192 17.25ZM27.7192 15.75C27.6765 15.147 27.5888 14.583 27.4613 14.0632C28.05 13.92 28.6297 13.7385 29.2005 13.5203C29.5875 14.193 29.847 14.946 29.9475 15.75H27.7192ZM28.2548 12.2745C27.8393 12.417 27.4185 12.5378 26.9925 12.6375C26.6985 11.934 26.3513 11.343 26.0085 10.8525C26.8613 11.1578 27.6285 11.6445 28.2548 12.2745ZM21.9915 10.8532C21.6488 11.343 21.3015 11.9347 21.0075 12.6382C20.5815 12.5385 20.1607 12.4178 19.7452 12.2753C20.3715 11.6445 21.1388 11.1577 21.9915 10.8532ZM19.7452 20.7255C20.1607 20.583 20.5815 20.4622 21.0075 20.3625C21.3015 21.066 21.6488 21.657 21.9915 22.1475C21.1388 21.8423 20.3715 21.3555 19.7452 20.7255ZM26.0085 22.1467C26.3513 21.657 26.6985 21.0653 26.9925 20.3617C27.4185 20.4615 27.8393 20.5822 28.2548 20.7247C27.6285 21.3555 26.8613 21.8422 26.0085 22.1467Z" fill="#542AC4"/> <path d="M21.2197 29.4697L22.2803 30.5303L23.25 29.5605V34.5758C21.5408 34.9245 20.25 36.4388 20.25 38.25C20.25 39.27 20.6618 40.194 21.3248 40.8705C19.3808 41.6407 18 43.5352 18 45.75V47.25C18 47.664 18.3353 48 18.75 48H29.25C29.6648 48 30 47.664 30 47.25V45.75C30 43.5352 28.6193 41.6407 26.6753 40.8705C27.3383 40.194 27.75 39.27 27.75 38.25C27.75 36.4395 26.4593 34.9245 24.75 34.5758V29.5605L25.7197 30.5303L26.7803 29.4697L24.5303 27.2197C24.384 27.0735 24.192 27 24 27C23.808 27 23.616 27.0735 23.4697 27.2197L21.2197 29.4697ZM28.5 45.75V46.5H19.5V45.75C19.5 43.6823 21.1823 42 23.25 42H24.75C26.8177 42 28.5 43.6823 28.5 45.75ZM26.25 38.25C26.25 39.4905 25.2405 40.5 24 40.5C22.7595 40.5 21.75 39.4905 21.75 38.25C21.75 37.0095 22.7595 36 24 36C25.2405 36 26.25 37.0095 26.25 38.25Z" fill="#542AC4"/> <path d="M43.1752 40.8705C43.8382 40.194 44.25 39.27 44.25 38.25C44.25 36.4395 42.9592 34.9245 41.25 34.5758V33.75C41.25 32.5095 40.2405 31.5 39 31.5H34.5C34.086 31.5 33.75 31.1632 33.75 30.75V29.5605L34.7197 30.5303L35.7802 29.4697L33.5302 27.2197C33.384 27.0735 33.192 27 33 27C32.808 27 32.616 27.0735 32.4697 27.2197L30.2197 29.4697L31.2802 30.5303L32.25 29.5605V30.75C32.25 31.9905 33.2595 33 34.5 33H39C39.414 33 39.75 33.3368 39.75 33.75V34.5758C38.0407 34.9245 36.75 36.4388 36.75 38.25C36.75 39.27 37.1617 40.194 37.8247 40.8705C35.8807 41.6407 34.5 43.5352 34.5 45.75V47.25C34.5 47.664 34.8352 48 35.25 48H45.75C46.1647 48 46.5 47.664 46.5 47.25V45.75C46.5 43.5352 45.1192 41.6407 43.1752 40.8705ZM40.5 36C41.7405 36 42.75 37.0095 42.75 38.25C42.75 39.4905 41.7405 40.5 40.5 40.5C39.2595 40.5 38.25 39.4905 38.25 38.25C38.25 37.0095 39.2595 36 40.5 36ZM45 46.5H36V45.75C36 43.6823 37.6822 42 39.75 42H41.25C43.3177 42 45 43.6823 45 45.75V46.5Z" fill="#542AC4"/> <path d="M12.2197 29.4697L13.2803 30.5303L14.25 29.5605V30.75C14.25 31.1632 13.914 31.5 13.5 31.5H9C7.7595 31.5 6.75 32.5095 6.75 33.75V34.5758C5.04075 34.9245 3.75 36.4395 3.75 38.25C3.75 39.27 4.16175 40.194 4.82475 40.8705C2.88075 41.6407 1.5 43.5352 1.5 45.75V47.25C1.5 47.664 1.83525 48 2.25 48H12.75C13.1648 48 13.5 47.664 13.5 47.25V45.75C13.5 43.5352 12.1193 41.6407 10.1753 40.8705C10.8383 40.194 11.25 39.27 11.25 38.25C11.25 36.4395 9.95925 34.9245 8.25 34.5758V33.75C8.25 33.3368 8.586 33 9 33H13.5C14.7405 33 15.75 31.9905 15.75 30.75V29.5605L16.7197 30.5303L17.7803 29.4697L15.5303 27.2197C15.384 27.0735 15.192 27 15 27C14.808 27 14.616 27.0735 14.4697 27.2197L12.2197 29.4697ZM12 45.75V46.5H3V45.75C3 43.6823 4.68225 42 6.75 42H8.25C10.3177 42 12 43.6823 12 45.75ZM9.75 38.25C9.75 39.4905 8.7405 40.5 7.5 40.5C6.2595 40.5 5.25 39.4905 5.25 38.25C5.25 37.0095 6.2595 36 7.5 36C8.7405 36 9.75 37.0095 9.75 38.25Z" fill="#542AC4"/> </svg>
                    </div>
                    <div class="ps-5 ps-md-3 col-11 d-flex flex-wrap">
                      <a href="/uslugi/seo-prodvizhenie/po-trafiku/">  <div class="title">
                            SEO продвижение по трафику
						  </div> </a>
                        <div class="descr">
                            Увеличим целевой трафик из поиска на ваш сайт. Привлечем заинтересованных пользователей. Подойдет практически для любых типов сайтов.
                        </div>
                    <a href="/uslugi/seo-prodvizhenie/po-trafiku/">    <div class="right-arrow">
                            <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19 1L23 5M23 5L19 9M23 5H1" stroke="#7F6CE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
						</div> </a>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-md-6 d-flex elem pe-md-5 mb-5 mb-md-0">
                    <div class="col-1">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M47.5807 19.5168C47.4955 19.0685 47.1037 18.7441 46.6474 18.7441H24.5066C23.982 18.7441 23.5568 19.1693 23.5568 19.694V28.8127C23.5568 29.3373 23.982 29.7625 24.5066 29.7625H35.3785C34.2768 31.9328 32.5599 33.7657 30.4406 35.0086C28.4973 36.1493 26.2702 36.7523 24 36.7523C18.7109 36.7523 13.9111 33.4261 12.0559 28.4745C11.5196 27.0483 11.2477 25.5428 11.2477 23.9999C11.2477 22.5811 11.4794 21.1866 11.9359 19.8556C13.705 14.7069 18.5533 11.2477 24.0001 11.2477C26.3933 11.2477 28.7249 11.9142 30.7422 13.1752C31.0876 13.3912 31.5322 13.3628 31.8473 13.1047L39.3145 6.99141C39.534 6.81169 39.6617 6.54328 39.6627 6.25978C39.6637 5.97609 39.5378 5.70694 39.3196 5.52572C35.028 1.96247 29.5874 0 24 0C10.7663 0 0 10.7663 0 24C0 27.9698 0.98925 31.903 2.86088 35.3743C7.06003 43.1621 15.1601 48 24 48C29.5316 48 34.9299 46.0729 39.2005 42.5738C43.412 39.1232 46.3507 34.306 47.475 29.0104C47.8233 27.3745 48 25.6887 48 23.9999C48 22.4912 47.8589 20.9828 47.5807 19.5168ZM24 1.89975C28.7574 1.89975 33.3991 3.44447 37.1956 6.27112L31.1581 11.214C28.9793 9.99122 26.5192 9.348 24 9.348C18.1937 9.348 12.9816 12.7709 10.6355 17.9902L4.74337 13.1664C8.53866 6.44691 15.7478 1.89975 24 1.89975ZM1.89975 24C1.89975 20.7577 2.60175 17.6763 3.86137 14.8996L9.93816 19.8746C9.54694 21.2107 9.348 22.5951 9.348 24C9.348 25.5403 9.58472 27.049 10.0513 28.4944L4.01269 33.4375C2.62884 30.5053 1.89975 27.267 1.89975 24ZM24 46.1003C16.1203 46.1003 8.87897 41.9254 4.91578 35.1532L10.7916 30.3434C11.8701 32.5921 13.4997 34.5244 15.5624 35.9798C18.0399 37.728 20.9576 38.6521 23.9999 38.6521C26.3834 38.6521 28.7259 38.0711 30.8173 36.9702L36.8974 41.9477C33.1583 44.6341 28.6301 46.1003 24 46.1003ZM45.617 28.6153C44.6204 33.3091 42.0744 37.5942 38.425 40.743L32.5266 35.9141C34.8814 34.2251 36.7033 31.8634 37.7216 29.1458C37.8309 28.8542 37.7903 28.5274 37.6129 28.2714C37.4354 28.0155 37.1437 27.8628 36.8322 27.8628H25.4565V20.6437H45.8465C46.015 21.7481 46.1003 22.8737 46.1003 23.9999C46.1003 25.5562 45.9377 27.1088 45.617 28.6153Z" fill="#542AC4"/> </svg>
                    </div>
                    <div class="ps-5 ps-md-3 col-11 d-flex flex-wrap">
                      <a href="/uslugi/seo-prodvizhenie/google/">  <div class="title">
                            SEO продвижение в Google
						  </div> </a>
                        <div class="descr">
                            Увеличим видимость сайта в Гугл, добьемся роста позиций и трафика из этой поисковой системы. Знаем, как заставить Google полюбить ваш сайт.
                        </div>
                        <a href="/uslugi/seo-prodvizhenie/google/"> <div class="right-arrow">
                            <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19 1L23 5M23 5L19 9M23 5H1" stroke="#7F6CE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
							</div> </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex elem ps-md-5">
                    <div class="col-1">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_994_3404)"> <path d="M23.4642 12.0477C24.3155 11.1673 25.2084 10.974 25.3918 10.9429H27.6566V24.523H26.0595C24.928 24.523 23.8558 24.0366 23.1737 23.18C22.4351 22.2519 21.7139 20.6156 21.7139 17.733C21.7139 14.5872 22.6135 12.9275 23.4642 12.0477Z" stroke="#542AC4" stroke-width="1.5"/> <path d="M32.0301 41.3654H32.7801V40.6154V7.38462V6.63462H32.0301H25.7877C21.3185 6.63462 16.3304 11.2359 16.3304 18.3525C16.3304 21.9891 17.9279 24.55 19.5118 26.1863C20.3015 27.002 21.0902 27.5914 21.6832 27.9781C21.7964 28.0519 21.9028 28.1185 22.001 28.1781L15.3138 40.252L14.6971 41.3654H15.9699H20.4096H20.8934L21.0929 40.9246L26.5079 28.9608H27.7551V40.6154V41.3654H28.5051H32.0301ZM0.75 5C0.75 2.65279 2.65279 0.75 5 0.75H43C45.3472 0.75 47.25 2.65279 47.25 5V43C47.25 45.3472 45.3472 47.25 43 47.25H5C2.65279 47.25 0.75 45.3472 0.75 43V5Z" stroke="#542AC4" stroke-width="1.5"/> </g> <defs> <clipPath id="clip0_994_3404"> <rect width="48" height="48" fill="white"/> </clipPath> </defs> </svg>
                    </div>
                    <div class="ps-5 ps-md-3 col-11 d-flex flex-wrap">
                       <a href="/uslugi/seo-prodvizhenie/yandex/"> <div class="title">
                            SEO продвижение в Яндекс
						   </div> </a>
                        <div class="descr">
                            Хорошо знаем все алгоритмы Яндекса, выведем ваш сайт на первые строчки в поисковой системе. Работаем только “белыми” методами и делаем сайты для людей.
                        </div>
                     <a href="/uslugi/seo-prodvizhenie/yandex/"> <div class="right-arrow">
                            <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19 1L23 5M23 5L19 9M23 5H1" stroke="#7F6CE0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg>
						  </div> </a>
                    </div>
                </div>
            </div>
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
<section class="section__wrap grayback b-padding-100" style="background-color:white">
	<div class="container">
		<div class="row">
		
		
		<div class="col-sm-12" style="text-align: center;">
                <h2>Преимущества SEO продвижения сайтов</h2>
            </div>
		<div class="col-sm-4">
           
                
					

                    <span class="seo__banner1-title" style="color: black;  font-size:20px">
                    <span style="font-size:24px">01</span>Не нужно платить за клик
                </span>
                    <span class="seo__banner1-text" style="color: black;  font-size:18px;padding-left: 45px;">
                   В отличие от других видов рекламы, нет нужды платить за каждый клик и переход на ресурс. Весь вкладываемый бюджет идет на аудит сайта, улучшение структуры и технической составляющей, обновление контента. В результате заказчик получает и трафик, и оптимизацию сайта.
                    </span>
                
            </div>
			
			<div class="col-sm-4" style="margin-top: 20px">
           
                
					

<span class="seo__banner1-title" style="color: black; font-size:20px">
                    <span style="font-size:24px">02</span>  Выбор запросов
                </span>
                    
                  <span class="seo__banner1-text" style="color: black;  font-size:18px;padding-left: 45px;">
                 Клиент сам определяет запросы, на которых будет построено продвижение сайта. Можно сосредоточиться на конкретных товарах из интернет-магазина или предложениях, дающих максимальный спрос, либо работать отдельно с каждым этапом воронки привлечения покупателей.

                    </span>
                
            </div>
			<div class="col-sm-4" style="margin-top: 20px">
           
               
					

<span class="seo__banner1-title" style="color: black; font-size:20px">
                    <span style="font-size:24px">03</span> Горячий, органический трафик
                </span>

                    
                  <span class="seo__banner1-text" style="color: black;  font-size:18px;padding-left: 45px;">
                  Пришедшие на сайт посетители уже ищут товар в поисковой системе и готовы купить его. Поэтому поисковое продвижение считается одним из самых бюджетных и эффективных способов увеличения продаж (особенно для интернет-магазинов).

                    </span>
               
            </div>
			<div class="col-sm-4" style="margin-top: 20px;">
<span class="seo__banner1-title" style="color: black; font-size:20px">
                    <span style="font-size:24px">04</span>Юзабилити аудит по умолчанию
                </span>

                    <span class="seo__banner1-text" style="color: black;  font-size:18px;padding-left: 45px;">
                   СЕО продвижение сайта подразумевает обязательный SEO аудит и подключение веб-аналитики. Заказчик получает данные о том, насколько сайт удобен в эксплуатации для посетителя. А это — возможность устранить ошибки, мешающие быстрым покупкам.
                    </span>
                
            </div>
			<div class="col-sm-4" style="margin-top: 20px;">
           

<span class="seo__banner1-title" style="color: black; font-size:20px">
                    <span style="font-size:24px">05</span>Долгосрочность
                </span>


                    
                    <span class="seo__banner1-text" style="color: black;  font-size:18px;padding-left: 45px;">
                Результаты продвижения сайта положительно влияют на его позиции в выдаче даже спустя месяцы после завершения всех работ. Конверсия растет в математической прогрессии: каждое посещение ресурса приводит к его подъему и появлению новых посетителей.
                    </span>
                
            </div>
		
		</div>
	</div>
</section>

<!-- Table-cost -->
<section class="table-cost bg--dark b-padding-100">
    <div class="table-cost__body container">
        <h3 class="table-cost__heading title title--big title--white title--w-semi-bold title--indent">
            Цена SEO продвижения
        </h3>
        <div class="table-cost__subtitle title title--pre-large title--white title--w-semi-bold title--indent">
            Точная сумма продвижения будет <span class="title title--purple">индивидуальна для каждого сайта</span>.
            Она сильно зависит от
            конкуренции в
            нише и региона продвижения
        </div>
        <div class="table-cost__table">
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    Проведение технического и usability аудита
                </div>
                <div class="table-cost__check">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 42.0009C-3.75 41.1009 -3.75 0.900916 24 0.000915527C51.75 0.900916 51.75 41.1009 24 42.0009ZM24 3.00092C0.150001 3.75092 0.150001 38.2509 24 39.0009C47.85 38.2509 47.85 3.75092 24 3.00092ZM35.55 14.8509L21 29.4009C20.4 30.0009 19.5 30.0009 18.9 29.4009L12.45 22.9509C11.1 21.6009 13.2 19.5009 14.55 20.8509L19.95 26.2509L33.45 12.7509C34.8 11.2509 36.9 13.5009 35.55 14.8509Z" fill="#6430E8"/>
                    </svg>
                </div>
            </div>
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    Настройка систем статистики
                </div>
                <div class="table-cost__check">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 42.0009C-3.75 41.1009 -3.75 0.900916 24 0.000915527C51.75 0.900916 51.75 41.1009 24 42.0009ZM24 3.00092C0.150001 3.75092 0.150001 38.2509 24 39.0009C47.85 38.2509 47.85 3.75092 24 3.00092ZM35.55 14.8509L21 29.4009C20.4 30.0009 19.5 30.0009 18.9 29.4009L12.45 22.9509C11.1 21.6009 13.2 19.5009 14.55 20.8509L19.95 26.2509L33.45 12.7509C34.8 11.2509 36.9 13.5009 35.55 14.8509Z" fill="#6430E8"/>
                    </svg>
                </div>
            </div>
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    Сбор семантического ядра
                </div>
                <div class="table-cost__check">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 42.0009C-3.75 41.1009 -3.75 0.900916 24 0.000915527C51.75 0.900916 51.75 41.1009 24 42.0009ZM24 3.00092C0.150001 3.75092 0.150001 38.2509 24 39.0009C47.85 38.2509 47.85 3.75092 24 3.00092ZM35.55 14.8509L21 29.4009C20.4 30.0009 19.5 30.0009 18.9 29.4009L12.45 22.9509C11.1 21.6009 13.2 19.5009 14.55 20.8509L19.95 26.2509L33.45 12.7509C34.8 11.2509 36.9 13.5009 35.55 14.8509Z" fill="#6430E8"/>
                    </svg>
                </div>
            </div>
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    Изучение ниши и анализ конкурентов
                </div>
                <div class="table-cost__check">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 42.0009C-3.75 41.1009 -3.75 0.900916 24 0.000915527C51.75 0.900916 51.75 41.1009 24 42.0009ZM24 3.00092C0.150001 3.75092 0.150001 38.2509 24 39.0009C47.85 38.2509 47.85 3.75092 24 3.00092ZM35.55 14.8509L21 29.4009C20.4 30.0009 19.5 30.0009 18.9 29.4009L12.45 22.9509C11.1 21.6009 13.2 19.5009 14.55 20.8509L19.95 26.2509L33.45 12.7509C34.8 11.2509 36.9 13.5009 35.55 14.8509Z" fill="#6430E8"/>
                    </svg>
                </div>
            </div>
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    Написание текстов
                </div>
                <div class="table-cost__check">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 42.0009C-3.75 41.1009 -3.75 0.900916 24 0.000915527C51.75 0.900916 51.75 41.1009 24 42.0009ZM24 3.00092C0.150001 3.75092 0.150001 38.2509 24 39.0009C47.85 38.2509 47.85 3.75092 24 3.00092ZM35.55 14.8509L21 29.4009C20.4 30.0009 19.5 30.0009 18.9 29.4009L12.45 22.9509C11.1 21.6009 13.2 19.5009 14.55 20.8509L19.95 26.2509L33.45 12.7509C34.8 11.2509 36.9 13.5009 35.55 14.8509Z" fill="#6430E8"/>
                    </svg>
                </div>
            </div>
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    Прототипирование и работа дизайнера
                </div>
                <div class="table-cost__check">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 42.0009C-3.75 41.1009 -3.75 0.900916 24 0.000915527C51.75 0.900916 51.75 41.1009 24 42.0009ZM24 3.00092C0.150001 3.75092 0.150001 38.2509 24 39.0009C47.85 38.2509 47.85 3.75092 24 3.00092ZM35.55 14.8509L21 29.4009C20.4 30.0009 19.5 30.0009 18.9 29.4009L12.45 22.9509C11.1 21.6009 13.2 19.5009 14.55 20.8509L19.95 26.2509L33.45 12.7509C34.8 11.2509 36.9 13.5009 35.55 14.8509Z" fill="#6430E8"/>
                    </svg>
                </div>
            </div>
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    Работы программиста и верстальщика
                </div>
                <div class="table-cost__check">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 42.0009C-3.75 41.1009 -3.75 0.900916 24 0.000915527C51.75 0.900916 51.75 41.1009 24 42.0009ZM24 3.00092C0.150001 3.75092 0.150001 38.2509 24 39.0009C47.85 38.2509 47.85 3.75092 24 3.00092ZM35.55 14.8509L21 29.4009C20.4 30.0009 19.5 30.0009 18.9 29.4009L12.45 22.9509C11.1 21.6009 13.2 19.5009 14.55 20.8509L19.95 26.2509L33.45 12.7509C34.8 11.2509 36.9 13.5009 35.55 14.8509Z" fill="#6430E8"/>
                    </svg>
                </div>
            </div>
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    Анализ и доработка конверсии
                </div>
                <div class="table-cost__check">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 42.0009C-3.75 41.1009 -3.75 0.900916 24 0.000915527C51.75 0.900916 51.75 41.1009 24 42.0009ZM24 3.00092C0.150001 3.75092 0.150001 38.2509 24 39.0009C47.85 38.2509 47.85 3.75092 24 3.00092ZM35.55 14.8509L21 29.4009C20.4 30.0009 19.5 30.0009 18.9 29.4009L12.45 22.9509C11.1 21.6009 13.2 19.5009 14.55 20.8509L19.95 26.2509L33.45 12.7509C34.8 11.2509 36.9 13.5009 35.55 14.8509Z" fill="#6430E8"/>
                    </svg>
                </div>
            </div>
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    Персональный менеджер
                </div>
                <div class="table-cost__check">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 42.0009C-3.75 41.1009 -3.75 0.900916 24 0.000915527C51.75 0.900916 51.75 41.1009 24 42.0009ZM24 3.00092C0.150001 3.75092 0.150001 38.2509 24 39.0009C47.85 38.2509 47.85 3.75092 24 3.00092ZM35.55 14.8509L21 29.4009C20.4 30.0009 19.5 30.0009 18.9 29.4009L12.45 22.9509C11.1 21.6009 13.2 19.5009 14.55 20.8509L19.95 26.2509L33.45 12.7509C34.8 11.2509 36.9 13.5009 35.55 14.8509Z" fill="#6430E8"/>
                    </svg>
                </div>
            </div>
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    Ежемесячные отчеты
                </div>
                <div class="table-cost__check">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 42.0009C-3.75 41.1009 -3.75 0.900916 24 0.000915527C51.75 0.900916 51.75 41.1009 24 42.0009ZM24 3.00092C0.150001 3.75092 0.150001 38.2509 24 39.0009C47.85 38.2509 47.85 3.75092 24 3.00092ZM35.55 14.8509L21 29.4009C20.4 30.0009 19.5 30.0009 18.9 29.4009L12.45 22.9509C11.1 21.6009 13.2 19.5009 14.55 20.8509L19.95 26.2509L33.45 12.7509C34.8 11.2509 36.9 13.5009 35.55 14.8509Z" fill="#6430E8"/>
                    </svg>
                </div>
            </div>
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    KPI по проекту
                </div>
                <div
                    class="table-cost__check table-cost__check--text text text--pre-large text--white text--w-light text--uppercase">
                    позиции <span class="table-cost__plus text text--purple">+</span> трафик <span class="table-cost__plus text text--purple">+</span> лиды
                </div>
            </div>
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    Ключевых запросов в продвижении
                </div>
                <div class="table-cost__check text text--pre-large text--white text--w-light">
                    Неограниченно
                </div>
            </div>
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    Специалистов работает над проектом
                </div>
                <div class="table-cost__check text text--pre-large text--white text--w-light text--uppercase">
                    6<span class="text text--purple">+</span>
                </div>
            </div>
            <div class="table-cost__row">
                <div class="table-cost__text title title--pre-large title--white title--w-medium">
                    Стоимость за месяц
                </div>
                <div class="table-cost__check text text--pre-large text--white text--w-light">
                    от <span class="table-cost__price title title--large title--purple title--w-extra-bold">60 000
                ₽</span>
                </div>
            </div>
            <div class="table-cost__row table-cost__row--action">
                <a href="javascript:;" class="top-page__button button button--icon" data-stc-modal="#feedback-stc">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Оставить заявку
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ./ Table-cost -->

<section class="slider__wrap slider__seo">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Что мы делаем?</h2>
            </div>
            <div class="col-sm-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" data-total="8" role="tablist">
                <span class="line" data-percent="1"></span>
                <li class="nav-item" role="presentation">
                    <button data-id="1" class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">
                        <span class="number__slide">1</span>
                        <span class="text__slide">
                        Аудит<br>
сайта
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="2" class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">
                    <span class="number__slide">2</span>
                        <span class="text__slide">
                        Разработка<br>
стратегии 
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="3" class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">
                    <span class="number__slide">3</span>
                        <span class="text__slide">
                        Базовая <br>
оптимизация
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="4" class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">
                    <span class="number__slide">4</span>
                        <span class="text__slide">
                        Внешняя <br>
оптимизация
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="5" class="nav-link" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false">
                    <span class="number__slide">5</span>
                        <span class="text__slide">
                        Отображение <br>
в выдаче
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="6" class="nav-link" id="pills-6-tab" data-bs-toggle="pill" data-bs-target="#pills-6" type="button" role="tab" aria-controls="pills-6" aria-selected="false">
                    <span class="number__slide">6</span>
                        <span class="text__slide">
                        Подготовка <br>
контента
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="7" class="nav-link" id="pills-6-tab" data-bs-toggle="pill" data-bs-target="#pills-7" type="button" role="tab" aria-controls="pills-7" aria-selected="false">
                    <span class="number__slide">7</span>
                        <span class="text__slide">
                        Анализ результатов <br>
и доработка сайта
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="8" class="nav-link" id="pills-8-tab" data-bs-toggle="pill" data-bs-target="#pills-8" type="button" role="tab" aria-controls="pills-8" aria-selected="false">
                    <span class="number__slide">8</span>
                        <span class="text__slide">
                        Пути развития <br>
проекта
                        </span>
                    </button>
                </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>01</span>Аудит сайта</h3>
                            <div class="padding__content">
                                <ul class="checklist">
                                    <li>Собираем информацию о проекте, спросе  и конкурентах</li>
                                    <li>Анализируем целевую аудиторию</li>
                                    <li>Проверяем сайт на фильтры поисковых систем</li>
									<li>Правим структуру при необходимости</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/seo-1.png" alt="сео-1" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>02</span>Разработка стратегии продвижения</h3>
                            <div class="padding__content">
                                <ul class="dots__opacity">
                                    <li>Изучаем проект: проводим АВС анализ и анализ конкурентов</li>
                                    <li>Ищем пути развития проекта
</li>
                                    <li>Собираем семантическое ядро</li>
                                    <li>Составляем ТЗ на техническую оптимизацию сайта</li>
									<li>ТЗ на доработку дизайна и юзабилити
</li>
									<li>Формируем задание на доработку контента</li>
									                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/seo-2.png" alt="сео-2" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>03</span>Базовая техническая оптимизация</h3>
                            <div class="padding__content">
                                <ul class="dots__opacity">
                                    <li>Составляем файл robots.txt</li>
                                    <li>Формируем актуальную карту сайта</li>
									 <li>Настраиваем 404-страницу</li>
									  <li>Склеиваем зеркала сайта и настраиваем редиректы</li>
									   <li>Настраиваем панели Вебмастеров, счетчики Метрики и GA</li>
									    <li>Исправляем ошибки в метатегах, удаляем дубли</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/seo-3.png" alt="сео-3" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>04</span>Базовая внешняя оптимизация</h3>
                            <div class="padding__content">
                                <ul class="dots__opacity">
                                    <li>Регистрируем сайт в Яндекс.Бизнес и Google Мой бизнес</li>
                                    <li>Размещаем предложения на спецпорталах и торговых площадках</li>
									<li>Оцениваем скорость прироста ссылочной массы </li>
									<li>Ищем «плохие» ссылки</li>
									<li>Оцениваем соответствие структуры сайта структуре ссылочной массы</li>
									<li>Оцениваем наличие/отсутствие «ссылочных взрывов»</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/seo-4.png" alt="сео-4" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>05</span>Отображение в выдаче</h3>
                            <div class="padding__content">
                                <ul class="dots__opacity">
                                    <li>Обновляем данные в Яндекс.Бизнес и Google.Мой бизнес</li>
                                    <li>Формируем красивый вид сниппета</li>
                                    <li>Заполняем Description на каждой странице сайта</li>
									<li>Внедряем микроразметку</li>
									
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/seo-5.png" alt="сео-5" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>06</span>Контент</h3>
                            <div class="padding__content">
                                <ul class="dots__opacity">
                                    <li>Пишем уникальные метатеги</li>
                                    <li>Пишем уникальные тексты для разделов сайта
</li>
                                    <li>Оптимизируем тексты, заголовки и метатеги под семантическое ядро</li>
									<li>Прописываем alt, title для картинок. На уникальные фото добавляем водяные знаки</li>
									<li>Анализируем конкурентов и дорабатываем свои макеты</li>
									<li>Оцениваем релевантность страниц и дорабатывем их</li>
									
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/seo-6.png" alt="сео-6" loading="lazy">
                        </div>
                    </div>
                </div>
				   <div class="tab-pane fade" id="pills-7" role="tabpanel" aria-labelledby="pills-7-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>07</span>Анализ результатов и доработки сайта
</h3>
                            <div class="padding__content">
                                <ul class="dots__opacity">
                                    <li>Анализируем трафик и выявляем проблемные страницы</li>
                                    <li>Оцениваем поведение пользователей на сайте и конверсии</li>
                                    <li>Работаем с панелями Вебмастеров, проверяем индексацию сайта</li>
									<li>Анализируем тренды и органический трафик в сравнении с конкурентами</li>
									<li>Проверяем метатеги, оцениваем поисковые фразы и внешние ссылки
</li>
									<li>В вебмастере анализируем раздел поисковых запросов (динамику кликов, CTR, трендов)</li>
									<li>Снимаем и анализируем динамику позиций сайта</li>
									
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/seo-7.png" alt="сео-7" loading="lazy">
                        </div>
                    </div>
                </div>
				<div class="tab-pane fade" id="pills-8" role="tabpanel" aria-labelledby="pills-8-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>08</span>Поиск эффективных путей развития проекта</h3>
                            <div class="padding__content">
                                <ul class="dots__opacity">
                                    <li>Добавляем новые категории и подкатегории в каталоге</li>
                                    <li>Актуализируем карточки товаров и услуг</li>
                                    <li>Размещаем информационный и обучающий контент</li>
									<li>Повышаем конверсию сайта и проводим А/В тестирование</li>
									<li>Разрабатываем калькуляторы и другие формы взаимодествия</li>
									<li>Улучшаем формы обратной связи и внедряем онлайн-консультанты</li>
									<li>Ищем новые пути развития</li>
									
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/seo-8.png" alt="сео-8" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<section class="seo__banner1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Когда ждать результат от SEO-продвижения? </h2>
            </div>
            <div class="col-sm-6">
                <span class="seo__banner1-title">
                    <span>01</span>Через 2-3 месяца
                </span>
                <span class="seo__banner1-text">
                После  первичного анализа и базовой оптимизации вы увидите<br> первый результат — трафик начнет расти
                </span>
            </div>
            <div class="col-sm-6">
                <span class="seo__banner1-title">
                    <span>02</span>Через 3-6 месяцев
                </span>
                <span class="seo__banner1-text">
               К этому моменту трафик продолжит расти, добавление новых посадочных страниц позволит расширить семантическое ядро сайта
                </span>
            </div>
			<div class="col-sm-6">
                <span class="seo__banner1-title">
                    <span>03</span>Через 6-12 месяцев
                </span>
                <span class="seo__banner1-text">
               Благодаря регулярной работе с семантическим ядром объемы привлеченного трафика будут расти от месяца к месяцу
                </span>
            </div>
			<div class="col-sm-6">
                <span class="seo__banner1-title">
                    <span>04</span>Через 12-24 месяца
                </span>
                <span class="seo__banner1-text">
                Рост трафика станет стабильным, стоимость заявки с SEO будет<br> дешевле, чем с рекламы
                </span>
            </div>
            <div class="col-sm-12 text-center text-lg-end text-md-center mt-md-4 mt-4">
                <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc" style="margin-left: auto">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Получить предложение по SEO
                </a>
            </div>
        </div>
    </div>
</section>
<section class="dev__banner2 context__banner">
    <div class="container">
        <div class="row">
            <div class="col-md-7 my-auto">

                <div class="quote__block">
                    <span class="quote__text">
                    <span>Time waits for no one</span> —<br>
Известная песня группы «The Rolling<br> Stones». Не ждите и вы, берите часы<br> на SEO для роста вашего бизнеса! 
                    </span>
                    <span class="quote__name">Татьяна</span>
                    <span class="quote__job">SEO-специалист</span>
                </div>
            </div>			
			<div class="col-12 col-md-5 m-auto text-center">
				<div class="team-circle">
					<img
						data-src="/img/team/circle.svg"
						class="js-lazyload circle-svg"
						style="opacity:0"
						alt="circle-svg"
					/>
					<img
						data-src="/img/team/Tanya_Sm.png"
						class="js-lazyload team-img"
						style="opacity:0"
						alt="Татьяна"
					/>
				</div>
			</div>
        </div>
    </div>
</section>
<section class="section__wrap crm__page context__page-rows">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Как мне вас <span>проконтролировать?</span></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3><span><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.1663 31.6667C13.6719 31.6667 13.1885 31.8133 12.7774 32.088C12.3663 32.3627 12.0459 32.7531 11.8566 33.21C11.6674 33.6668 11.6179 34.1694 11.7144 34.6544C11.8108 35.1393 12.0489 35.5848 12.3986 35.9344C12.7482 36.2841 13.1937 36.5222 13.6786 36.6186C14.1636 36.7151 14.6662 36.6656 15.123 36.4764C15.5799 36.2871 15.9703 35.9667 16.245 35.5556C16.5197 35.1445 16.6663 34.6611 16.6663 34.1667C16.6663 33.5036 16.4029 32.8677 15.9341 32.3989C15.4653 31.9301 14.8294 31.6667 14.1663 31.6667ZM31.6663 26.6667H11.6663C11.2243 26.6667 10.8004 26.4911 10.4878 26.1785C10.1753 25.866 9.99967 25.442 9.99967 25C9.99967 24.558 10.1753 24.1341 10.4878 23.8215C10.8004 23.5089 11.2243 23.3333 11.6663 23.3333H25.8184C26.9041 23.3298 27.9594 22.9746 28.8262 22.3208C29.693 21.667 30.3246 20.75 30.6263 19.707L33.2687 10.4582C33.3396 10.2101 33.352 9.949 33.3048 9.69537C33.2576 9.44175 33.1522 9.20253 32.9969 8.99655C32.8416 8.79058 32.6405 8.62347 32.4096 8.50838C32.1788 8.3933 31.9243 8.33338 31.6663 8.33333H11.2315C10.8864 7.36226 10.2504 6.52118 9.41005 5.92469C8.56969 5.3282 7.56585 5.0053 6.53532 5H4.99967C4.55765 5 4.13372 5.17559 3.82116 5.48816C3.5086 5.80072 3.33301 6.22464 3.33301 6.66667C3.33301 7.10869 3.5086 7.53262 3.82116 7.84518C4.13372 8.15774 4.55765 8.33333 4.99967 8.33333H6.53532C6.89713 8.3346 7.24879 8.45303 7.53765 8.67088C7.82651 8.88874 8.03703 9.19431 8.13769 9.54183L8.39689 10.4497L8.39729 10.4582L11.1317 20.0285C9.85928 20.1654 8.68779 20.7849 7.85845 21.7595C7.0291 22.7342 6.60503 23.9897 6.67355 25.2676C6.74207 26.5455 7.29797 27.7485 8.22678 28.6289C9.15559 29.5092 10.3866 30 11.6663 30H31.6663C32.1084 30 32.5323 29.8244 32.8449 29.5118C33.1574 29.1993 33.333 28.7754 33.333 28.3333C33.333 27.8913 33.1574 27.4674 32.8449 27.1548C32.5323 26.8423 32.1084 26.6667 31.6663 26.6667ZM29.4569 11.6667L27.4215 18.7907C27.321 19.1385 27.1104 19.4443 26.8214 19.6624C26.5323 19.8804 26.1804 19.9989 25.8184 20H14.5903L14.1654 18.513L12.2104 11.6667H29.4569ZM27.4997 31.6667C27.0052 31.6667 26.5219 31.8133 26.1107 32.088C25.6996 32.3627 25.3792 32.7531 25.19 33.21C25.0008 33.6668 24.9512 34.1694 25.0477 34.6544C25.1442 35.1393 25.3823 35.5848 25.7319 35.9344C26.0815 36.2841 26.527 36.5222 27.0119 36.6186C27.4969 36.7151 27.9996 36.6656 28.4564 36.4764C28.9132 36.2871 29.3036 35.9667 29.5783 35.5556C29.853 35.1445 29.9997 34.6611 29.9997 34.1667C29.9997 33.5036 29.7363 32.8677 29.2674 32.3989C28.7986 31.9301 28.1627 31.6667 27.4997 31.6667Z" fill="#6430E8"/>
</svg>
</span>Отчёт по трафику, обращениям и продажам</h3>
<ul class="graydot">
<li>Суммарный трафик за месяц</li>
<li>Трафик из поиска с разбивкой по неделям</li>
<li>Стоимость одного визита из поиска</li>
<li>Количество обращений из поиска с разбивкой по неделям</li>
<li>Стоимость одного обращения</li>
<li>Количество продаж и стоимость клиента</li>
</ul>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/отчет сео.png" alt="отчет сео" loading="lazy">
            </div>
        </div>
        <div class="row invert">
            <div class="col-sm-6">
                <h3><span><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.66667 23.6668C10.3297 23.6668 10.9656 23.4034 11.4344 22.9346C11.9033 22.4658 12.1667 21.8299 12.1667 21.1668C12.1748 21.0837 12.1748 21 12.1667 20.9168L16.8167 16.2668H17.2H17.5833L20.2667 18.9502C20.2667 18.9502 20.2667 19.0335 20.2667 19.0835C20.2667 19.7465 20.5301 20.3824 20.9989 20.8513C21.4677 21.3201 22.1036 21.5835 22.7667 21.5835C23.4297 21.5835 24.0656 21.3201 24.5344 20.8513C25.0033 20.3824 25.2667 19.7465 25.2667 19.0835V18.9502L31.3333 12.8335C31.8278 12.8335 32.3111 12.6869 32.7223 12.4122C33.1334 12.1375 33.4538 11.747 33.643 11.2902C33.8322 10.8334 33.8818 10.3307 33.7853 9.84577C33.6888 9.36082 33.4507 8.91536 33.1011 8.56573C32.7515 8.2161 32.306 7.978 31.8211 7.88153C31.3361 7.78507 30.8334 7.83458 30.3766 8.0238C29.9198 8.21302 29.5294 8.53345 29.2547 8.94457C28.98 9.35569 28.8333 9.83904 28.8333 10.3335C28.8252 10.4166 28.8252 10.5004 28.8333 10.5835L22.8167 16.6002H22.55L19.6667 13.6668C19.6667 13.0038 19.4033 12.3679 18.9344 11.8991C18.4656 11.4302 17.8297 11.1668 17.1667 11.1668C16.5036 11.1668 15.8677 11.4302 15.3989 11.8991C14.9301 12.3679 14.6667 13.0038 14.6667 13.6668L9.66667 18.6668C9.00362 18.6668 8.36774 18.9302 7.8989 19.3991C7.43006 19.8679 7.16667 20.5038 7.16667 21.1668C7.16667 21.8299 7.43006 22.4658 7.8989 22.9346C8.36774 23.4034 9.00362 23.6668 9.66667 23.6668ZM32.1667 30.3335H3.83333V2.00016C3.83333 1.55814 3.65774 1.13421 3.34518 0.821651C3.03262 0.509091 2.60869 0.333496 2.16667 0.333496C1.72464 0.333496 1.30072 0.509091 0.988155 0.821651C0.675595 1.13421 0.5 1.55814 0.5 2.00016V32.0002C0.5 32.4422 0.675595 32.8661 0.988155 33.1787C1.30072 33.4912 1.72464 33.6668 2.16667 33.6668H32.1667C32.6087 33.6668 33.0326 33.4912 33.3452 33.1787C33.6577 32.8661 33.8333 32.4422 33.8333 32.0002C33.8333 31.5581 33.6577 31.1342 33.3452 30.8217C33.0326 30.5091 32.6087 30.3335 32.1667 30.3335Z" fill="#6430E8"/>
</svg>
</span>Отчёт по росту трафика</h3>
                <ul class="graydot">
<li>График из Яндекс.Метрики с начала работ</li>
<li>График из Яндекс.Метрики за месяц с детализацией по неделям</li>
<li>Сравненение посещаемости по источникам переходов</li>
<li>Оценка посещаемости относительно предыдущего периода</li>
<li>Брендовый трафик</li>
<li>Трафик, очищенный от брендовых запросов</li>
</ul>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/отчет сео_2.png" alt="отчет сео-2" loading="lazy">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <h3><span><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M32.117 25.0501L28.667 21.5168C27.9249 20.8114 26.9888 20.344 25.979 20.1747C24.9692 20.0054 23.9319 20.142 23.0003 20.5668L21.5003 19.0668C23.2679 16.705 24.0751 13.7613 23.7595 10.8282C23.4439 7.89514 22.0289 5.19052 19.7994 3.25881C17.5698 1.32711 14.6912 0.311741 11.7431 0.417121C8.79497 0.5225 5.99622 1.7408 3.91026 3.82676C1.82429 5.91273 0.605996 8.71147 0.500617 11.6596C0.395238 14.6077 1.4106 17.4863 3.34231 19.7159C5.27402 21.9454 7.97863 23.3605 10.9117 23.6761C13.8448 23.9917 16.7885 23.1844 19.1503 21.4168L20.6336 22.9001C20.1588 23.8329 19.9886 24.8911 20.1471 25.9257C20.3056 26.9602 20.7847 27.919 21.517 28.6668L25.0503 32.2001C25.9878 33.1365 27.2586 33.6624 28.5836 33.6624C29.9086 33.6624 31.1795 33.1365 32.117 32.2001C32.5932 31.7345 32.9716 31.1784 33.2299 30.5645C33.4883 29.9505 33.6213 29.2912 33.6213 28.6251C33.6213 27.9591 33.4883 27.2997 33.2299 26.6858C32.9716 26.0719 32.5932 25.5158 32.117 25.0501ZM17.9836 17.9835C16.8174 19.1468 15.3325 19.9384 13.7165 20.2582C12.1006 20.5781 10.4261 20.4118 8.90464 19.7805C7.38315 19.1491 6.08291 18.081 5.16816 16.711C4.25342 15.3411 3.76521 13.7308 3.76521 12.0835C3.76521 10.4362 4.25342 8.82587 5.16816 7.45592C6.08291 6.08596 7.38315 5.01785 8.90464 4.3865C10.4261 3.75515 12.1006 3.58889 13.7165 3.90873C15.3325 4.22857 16.8174 5.02015 17.9836 6.18348C18.7597 6.95757 19.3754 7.87717 19.7955 8.88959C20.2156 9.902 20.4319 10.9874 20.4319 12.0835C20.4319 13.1796 20.2156 14.265 19.7955 15.2774C19.3754 16.2898 18.7597 17.2094 17.9836 17.9835ZM29.767 29.7668C29.612 29.923 29.4277 30.047 29.2246 30.1316C29.0215 30.2162 28.8037 30.2598 28.5836 30.2598C28.3636 30.2598 28.1458 30.2162 27.9427 30.1316C27.7396 30.047 27.5552 29.923 27.4003 29.7668L23.867 26.2335C23.7108 26.0785 23.5868 25.8942 23.5022 25.6911C23.4175 25.488 23.374 25.2702 23.374 25.0501C23.374 24.8301 23.4175 24.6123 23.5022 24.4092C23.5868 24.2061 23.7108 24.0218 23.867 23.8668C24.0219 23.7106 24.2062 23.5866 24.4093 23.502C24.6124 23.4174 24.8303 23.3738 25.0503 23.3738C25.2703 23.3738 25.4882 23.4174 25.6913 23.502C25.8944 23.5866 26.0787 23.7106 26.2336 23.8668L29.767 27.4001C29.9232 27.5551 30.0472 27.7394 30.1318 27.9425C30.2164 28.1456 30.26 28.3635 30.26 28.5835C30.26 28.8035 30.2164 29.0213 30.1318 29.2244C30.0472 29.4275 29.9232 29.6119 29.767 29.7668Z" fill="#6430E8"/>
</svg></span>Отчёт по позициям в Яндекс и Google</h3>
                <ul class="graydot">
<li>Запросы по конкретным страницам (кластеры запросов)</li>
<li>Перечень запросов</li>
<li>Оценка поискового спроса по региону и РФ</li>
<li>Позиции Яндекс</li>
<li>Позиции Google</li>
<li>Сводная таблица запросов топ-10, топ-30, топ-100, вне топа</li>
</ul>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/отчет сео-3.png" alt="отчет сео-3" loading="lazy">
            </div>
        </div>
        <div class="row invert">
            <div class="col-sm-6">
                <h3><span><svg width="34" height="20" viewBox="0 0 34 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.1834 17.15C3.02489 16.9983 2.83798 16.8793 2.6334 16.8C2.22763 16.6333 1.7725 16.6333 1.36673 16.8C1.16214 16.8793 0.975235 16.9983 0.816729 17.15C0.664994 17.3085 0.546053 17.4954 0.466729 17.7C0.339096 18.0035 0.304225 18.338 0.366515 18.6614C0.428806 18.9847 0.585466 19.2823 0.816729 19.5167C0.97873 19.6639 1.16475 19.7823 1.36673 19.8667C1.56623 19.9548 1.78194 20.0004 2.00006 20.0004C2.21818 20.0004 2.43389 19.9548 2.6334 19.8667C2.83537 19.7823 3.02139 19.6639 3.1834 19.5167C3.41466 19.2823 3.57132 18.9847 3.63361 18.6614C3.6959 18.338 3.66103 18.0035 3.5334 17.7C3.45407 17.4954 3.33513 17.3085 3.1834 17.15ZM8.66673 3.33333H32.0001C32.4421 3.33333 32.866 3.15774 33.1786 2.84518C33.4911 2.53262 33.6667 2.10869 33.6667 1.66667C33.6667 1.22464 33.4911 0.800716 33.1786 0.488156C32.866 0.175595 32.4421 0 32.0001 0H8.66673C8.2247 0 7.80078 0.175595 7.48822 0.488156C7.17566 0.800716 7.00006 1.22464 7.00006 1.66667C7.00006 2.10869 7.17566 2.53262 7.48822 2.84518C7.80078 3.15774 8.2247 3.33333 8.66673 3.33333ZM3.1834 8.81667C2.94902 8.5854 2.6514 8.42874 2.32808 8.36645C2.00477 8.30416 1.67025 8.33903 1.36673 8.46667C1.16475 8.55107 0.97873 8.66945 0.816729 8.81667C0.664994 8.97517 0.546053 9.16208 0.466729 9.36667C0.378553 9.56617 0.333008 9.78188 0.333008 10C0.333008 10.2181 0.378553 10.4338 0.466729 10.6333C0.551132 10.8353 0.66951 11.0213 0.816729 11.1833C0.97873 11.3306 1.16475 11.4489 1.36673 11.5333C1.56623 11.6215 1.78194 11.6671 2.00006 11.6671C2.21818 11.6671 2.43389 11.6215 2.6334 11.5333C2.83537 11.4489 3.02139 11.3306 3.1834 11.1833C3.33061 11.0213 3.44899 10.8353 3.5334 10.6333C3.62157 10.4338 3.66712 10.2181 3.66712 10C3.66712 9.78188 3.62157 9.56617 3.5334 9.36667C3.45407 9.16208 3.33513 8.97517 3.1834 8.81667ZM32.0001 8.33333H8.66673C8.2247 8.33333 7.80078 8.50893 7.48822 8.82149C7.17566 9.13405 7.00006 9.55797 7.00006 10C7.00006 10.442 7.17566 10.866 7.48822 11.1785C7.80078 11.4911 8.2247 11.6667 8.66673 11.6667H32.0001C32.4421 11.6667 32.866 11.4911 33.1786 11.1785C33.4911 10.866 33.6667 10.442 33.6667 10C33.6667 9.55797 33.4911 9.13405 33.1786 8.82149C32.866 8.50893 32.4421 8.33333 32.0001 8.33333ZM3.1834 0.483333C3.02489 0.331599 2.83798 0.212657 2.6334 0.133333C2.32988 0.00570082 1.99536 -0.0291699 1.67204 0.0331203C1.34872 0.0954105 1.0511 0.252071 0.816729 0.483333C0.66951 0.645335 0.551132 0.831358 0.466729 1.03333C0.378553 1.23283 0.333008 1.44855 0.333008 1.66667C0.333008 1.88478 0.378553 2.1005 0.466729 2.3C0.551132 2.50198 0.66951 2.688 0.816729 2.85C0.97873 2.99722 1.16475 3.1156 1.36673 3.2C1.67025 3.32763 2.00477 3.3625 2.32808 3.30021C2.6514 3.23792 2.94902 3.08126 3.1834 2.85C3.33061 2.688 3.44899 2.50198 3.5334 2.3C3.62157 2.1005 3.66712 1.88478 3.66712 1.66667C3.66712 1.44855 3.62157 1.23283 3.5334 1.03333C3.44899 0.831358 3.33061 0.645335 3.1834 0.483333ZM32.0001 16.6667H8.66673C8.2247 16.6667 7.80078 16.8423 7.48822 17.1548C7.17566 17.4674 7.00006 17.8913 7.00006 18.3333C7.00006 18.7754 7.17566 19.1993 7.48822 19.5118C7.80078 19.8244 8.2247 20 8.66673 20H32.0001C32.4421 20 32.866 19.8244 33.1786 19.5118C33.4911 19.1993 33.6667 18.7754 33.6667 18.3333C33.6667 17.8913 33.4911 17.4674 33.1786 17.1548C32.866 16.8423 32.4421 16.6667 32.0001 16.6667Z" fill="#6430E8"/>
</svg></span>Перечень выполненных работ и планы <br >на предстоящий период</h3>
               <ul class="graydot">
<li>Перечень работ seo-специалиста за прошлый месяц</li>
<li>Перечень работ программиста</li>
<li>Список работ контент-менеджера</li>
<li>Список работ копирайтера</li>
<li>Перечень работ на предстоящий месяц</li>
<li>Вопросы и предложения, требующие согласования</li>
</ul>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/перечень выполненные работ.png" alt="перечень выполненные работ" loading="lazy">
            </div>
        </div>
            

                 </div>
	<section class="section__wrap grayback pb-1 pb-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Кто будет работать над проектом</h2>
            </div>
            <div class="col-sm-4">
            <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M71.972 84.9874C95.9626 72.2008 91.4898 15.0878 68.719 2.72748C45.9482 -9.6328 0 22.7598 0 44.923C0 67.0863 47.9813 97.7739 71.972 84.9874Z" fill="#6430E8"/>
<g clip-path="url(#clip0_574_9853)">
<path d="M28.3499 46.792H33.2343C34.8042 46.792 36.078 45.5181 36.078 43.9482C36.078 42.3784 34.8042 41.1045 33.2343 41.1045H31.378C29.6104 41.1045 28.1749 39.669 28.1749 37.9014C28.1749 36.1338 29.6104 34.6982 31.378 34.6982H35.1937C35.2925 34.6982 35.378 34.7838 35.378 34.8826C35.378 34.9815 35.2925 35.067 35.1937 35.067H31.378C29.8081 35.067 28.5343 36.3409 28.5343 37.9107C28.5343 39.4806 29.8081 40.7545 31.378 40.7545H33.2343C35.0019 40.7545 36.4374 42.19 36.4374 43.9576C36.4374 45.7252 35.0019 47.1607 33.2343 47.1607H28.3499C28.251 47.1607 28.1655 47.0752 28.1655 46.9764C28.1655 46.8775 28.251 46.792 28.3499 46.792Z" fill="white" stroke="white"/>
<path d="M39.3907 46.292V46.792H39.8907H45.6751C45.7789 46.792 45.8595 46.873 45.8595 46.9764C45.8595 47.0752 45.774 47.1607 45.6751 47.1607H39.2063C39.1075 47.1607 39.022 47.0752 39.022 46.9764V34.8826C39.022 34.7838 39.1075 34.6982 39.2063 34.6982H45.6751C45.774 34.6982 45.8595 34.7838 45.8595 34.8826C45.8595 34.9815 45.774 35.067 45.6751 35.067H39.8907H39.3907V35.567V40.2451V40.7451H39.8907H43.3501C43.449 40.7451 43.5345 40.8306 43.5345 40.9295C43.5345 41.0283 43.449 41.1139 43.3501 41.1139H39.8907H39.3907V41.6139V46.292Z" fill="white" stroke="white"/>
<path d="M55.4688 43.6482C55.4688 45.5846 53.8927 47.1607 51.9563 47.1607C50.0223 47.1607 48.4526 45.5866 48.4438 43.6472V38.2107C48.4438 36.2744 50.02 34.6982 51.9563 34.6982C53.8927 34.6982 55.4688 36.2744 55.4688 38.2107V43.6482ZM51.9563 35.067C50.2166 35.067 48.8126 36.4826 48.8126 38.2107V43.6482C48.8126 45.3869 50.2177 46.792 51.9563 46.792C53.6961 46.792 55.1001 45.3764 55.1001 43.6482V38.2107C55.1001 36.4721 53.695 35.067 51.9563 35.067Z" fill="white" stroke="white"/>
<path d="M29.7938 29.5955C30.9657 29.5955 31.9219 28.6393 31.9219 27.4674C31.9219 26.2955 30.9657 25.3486 29.7938 25.3486C28.6219 25.3486 27.675 26.3049 27.675 27.4768C27.675 28.6486 28.6219 29.5955 29.7938 29.5955ZM29.7938 26.7174C30.2157 26.7174 30.5532 27.0549 30.5532 27.4768C30.5532 27.8986 30.2157 28.2361 29.7938 28.2361C29.3719 28.2361 29.0344 27.8986 29.0344 27.4768C29.0344 27.0549 29.3813 26.7174 29.7938 26.7174Z" fill="white"/>
<path d="M35.6813 29.5951C36.8532 29.5951 37.8095 28.6389 37.8095 27.467C37.8095 26.2951 36.8532 25.3389 35.6813 25.3389C34.5095 25.3389 33.5532 26.3045 33.5532 27.4764C33.5532 28.6482 34.5095 29.5951 35.6813 29.5951ZM35.6813 26.717C36.1032 26.717 36.4407 27.0545 36.4407 27.4764C36.4407 27.8982 36.1032 28.2357 35.6813 28.2357C35.2595 28.2357 34.922 27.8982 34.922 27.4764C34.922 27.0545 35.2595 26.717 35.6813 26.717Z" fill="white"/>
<path d="M41.5688 29.5951C42.7407 29.5951 43.6969 28.6389 43.6969 27.467C43.6969 26.2951 42.7407 25.3389 41.5688 25.3389C40.3969 25.3389 39.4407 26.3045 39.4407 27.4764C39.4407 28.6482 40.3969 29.5951 41.5688 29.5951ZM41.5688 26.717C41.9907 26.717 42.3282 27.0545 42.3282 27.4764C42.3282 27.8982 41.9907 28.2357 41.5688 28.2357C41.1469 28.2357 40.8094 27.8982 40.8094 27.4764C40.8094 27.0545 41.1469 26.717 41.5688 26.717Z" fill="white"/>
<path d="M38.4469 54.5137H28.35C27.9938 54.5137 27.7031 54.8043 27.7031 55.1605C27.7031 55.5168 27.9938 55.8074 28.35 55.8074H38.4375C38.7937 55.8074 39.0844 55.5168 39.0844 55.1605C39.0937 54.7949 38.8031 54.5137 38.4469 54.5137Z" fill="white"/>
<path d="M43.3313 51.1768H28.35C27.9938 51.1768 27.7031 51.4674 27.7031 51.8236C27.7031 52.1799 27.9938 52.4705 28.35 52.4705H43.3219C43.6781 52.4705 43.9688 52.1799 43.9688 51.8236C43.9781 51.458 43.6875 51.1768 43.3313 51.1768Z" fill="white"/>
<path d="M34.9594 57.8418H28.35C27.9938 57.8418 27.7031 58.1324 27.7031 58.4887C27.7031 58.8449 27.9938 59.1355 28.35 59.1355H34.9594C35.3156 59.1355 35.6063 58.8449 35.6063 58.4887C35.6063 58.1324 35.3156 57.8418 34.9594 57.8418Z" fill="white"/>
<path d="M71.7281 53.1172L69.2344 48.5797C69.75 47.8016 69.8438 46.8078 69.4875 45.9359V31.0297V31.0203V26.3141C69.4875 24.4766 67.9875 22.9766 66.15 22.9766H27.3375C25.5 22.9766 24 24.4766 24 26.3141V31.0109V31.0203V60.6266C24 62.4641 25.5 63.9641 27.3375 63.9641H53.6062L53.8969 64.4891C54.0844 64.8359 54.4406 65.0234 54.8063 65.0234C54.975 65.0234 55.1437 64.9859 55.3031 64.8922L56.2969 64.3391C56.4656 64.2453 56.5969 64.1141 56.6906 63.9547H66.1594C67.9969 63.9547 69.4969 62.4547 69.4969 60.6172V56.2859C69.6094 56.3047 69.7219 56.3141 69.8438 56.3141C70.2 56.3141 70.5563 56.2297 70.8844 56.0422C71.3906 55.7609 71.7563 55.3016 71.925 54.7484C72.075 54.2047 72.0094 53.6234 71.7281 53.1172ZM68.1469 46.2828C68.2594 46.4891 68.325 46.7141 68.3344 46.9484L67.6875 45.7766C67.875 45.9078 68.0344 46.0766 68.1469 46.2828ZM27.3375 24.3453H66.1594C67.2469 24.3453 68.1281 25.2266 68.1281 26.3141V30.3453H25.3688V26.3141C25.3688 25.2266 26.25 24.3453 27.3375 24.3453ZM27.3375 62.5953C26.25 62.5953 25.3688 61.7141 25.3688 60.6266V31.7047H68.1281V44.4547C67.7156 44.2484 67.2656 44.1453 66.7969 44.1453L64.3219 39.6453C63.75 38.5953 62.4281 38.2203 61.3781 38.7922C60.3281 39.3641 59.9531 40.6859 60.525 41.7359L60.5531 41.7922C59.0625 45.8422 54.4781 49.3578 52.6031 50.6703C52.2563 50.1734 51.5812 50.0047 51.0469 50.3047L47.1469 52.4516C46.8656 52.6016 46.6594 52.8641 46.575 53.1641C46.4906 53.4734 46.5187 53.7922 46.6781 54.0734L46.9969 54.6547C46.7625 54.9641 46.5844 55.3109 46.4813 55.6766C46.2469 56.4828 46.3406 57.3359 46.7438 58.0672C47.3063 59.0891 48.375 59.6984 49.5 59.6984C49.5938 59.6984 49.6781 59.6891 49.7719 59.6891L50.0906 60.2703C50.2406 60.5516 50.5031 60.7578 50.8031 60.8422C50.9156 60.8703 51.0281 60.8891 51.1406 60.8891C51.3375 60.8891 51.5344 60.8422 51.7125 60.7391L51.8063 60.6922L52.8562 62.5953H27.3375ZM50.7281 58.6109L50.0531 57.3828L47.9531 53.5578L51.5531 51.5797L51.7688 51.9734L52.7812 53.8203L54.7969 57.4859L51.1969 59.4641L50.7281 58.6109ZM47.7844 56.0891L48.8156 57.9641L48.9844 58.2641C48.5531 58.1328 48.1781 57.8328 47.9437 57.4203C47.7094 57.0078 47.6531 56.5297 47.7844 56.0891ZM55.4812 55.8734L53.7188 52.6672L53.2781 51.8609C55.2281 50.5203 59.4562 47.2953 61.3969 43.3016L67.0594 53.5859C62.6437 53.0984 57.6469 54.9453 55.4812 55.8734ZM54.9281 63.5422L54.6 62.9516C54.6 62.9516 54.6 62.9516 54.6 62.9422L52.9969 60.0266L53.9906 59.4828C54.1594 60.4391 54.5438 61.7047 55.3594 63.2984L54.9281 63.5422ZM66.1594 62.5953H56.5312C55.6406 60.8328 55.35 59.5484 55.2656 58.7797L55.6031 58.5922C55.8844 58.4422 56.0906 58.1797 56.175 57.8797C56.25 57.6172 56.2313 57.3359 56.1281 57.0828C58.2281 56.2016 63.6562 54.2047 67.875 55.1141L67.9219 55.2078C67.9781 55.3109 68.0438 55.4047 68.1188 55.4984V60.6266C68.1281 61.7141 67.2469 62.5953 66.1594 62.5953ZM70.6031 54.3828C70.5469 54.5891 70.4062 54.7578 70.2188 54.8609C69.8344 55.0766 69.3469 54.9359 69.1312 54.5422L61.7156 41.0703C61.6125 40.8828 61.5844 40.6672 61.65 40.4609C61.7062 40.2547 61.8469 40.0859 62.0344 39.9828C62.1562 39.9172 62.2875 39.8797 62.4187 39.8797C62.4937 39.8797 62.5688 39.8891 62.6438 39.9078C62.85 39.9641 63.0187 40.1047 63.1219 40.2922L70.5375 53.7641C70.6406 53.9609 70.6594 54.1766 70.6031 54.3828Z" fill="white"/>
</g>
<defs>
<clipPath id="clip0_574_9853">
<rect width="48" height="48" fill="white" transform="translate(24 20)"/>
</clipPath>
</defs>
</svg>


                <div class="advantage__card">
                    <span class="advantage__title1">
                    SEO - специалист
                    </span>
                    <span class="advantage__text1">
					Отвечает за аудиты, анализ конкурентов,<br> постановку технических заданий другим<br> специалистам, определяет бюджет работ.
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
            
<svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.34587 72.972C17.1324 96.9626 74.2455 92.4898 86.6058 69.719C98.9661 46.9482 66.5734 0.999999 44.4102 0.999998C22.247 0.999997 -8.44069 48.9813 4.34587 72.972Z" stroke="#542AC4"/>
<mask id="path-2-inside-1_574_9870" fill="white">
<path d="M25.0833 67H60.5066L62.0638 70.2354C62.3253 70.7717 62.7891 71.1822 63.3532 71.3766C63.9173 71.571 64.5355 71.5335 65.0719 71.2723C65.6078 71.0111 66.0181 70.548 66.2129 69.9846C66.4076 69.4212 66.3708 68.8036 66.1105 68.2673L65.5007 67H65.5833C66.1798 66.9993 66.7517 66.762 67.1735 66.3402C67.5953 65.9184 67.8326 65.3465 67.8333 64.75V28.75C67.8326 28.1535 67.5953 27.5816 67.1735 27.1598C66.7517 26.738 66.1798 26.5007 65.5833 26.5H25.0833C24.4867 26.5007 23.9148 26.738 23.493 27.1598C23.0712 27.5816 22.8339 28.1535 22.8333 28.75V64.75C22.8339 65.3465 23.0712 65.9184 23.493 66.3402C23.9148 66.762 24.4867 66.9993 25.0833 67ZM64.7958 69.4938C64.7475 69.6337 64.6589 69.7562 64.5412 69.846C64.4234 69.9357 64.2818 69.9885 64.134 69.9979C63.9863 70.0072 63.8391 69.9726 63.711 69.8985C63.5829 69.8243 63.4795 69.7139 63.4141 69.5811L60.2059 62.9155L61.5543 62.2584L64.7606 68.9207C64.8041 69.0091 64.8295 69.1053 64.8356 69.2037C64.8416 69.3021 64.8281 69.4006 64.7958 69.4938ZM58.905 60.2125L60.2534 59.5553L60.9039 60.907L59.5551 61.5644L58.905 60.2125ZM65.5833 65.5H64.7787L62.643 61.0624C62.6304 61.0131 62.6127 60.9653 62.5904 60.9196C62.5693 60.8767 62.5442 60.8359 62.5154 60.7977L61.2779 58.226C61.235 58.137 61.175 58.0573 61.1013 57.9916C61.0275 57.9258 60.9415 57.8753 60.8482 57.8428C60.7549 57.8104 60.6561 57.7968 60.5575 57.8026C60.4588 57.8085 60.3623 57.8338 60.2735 57.8771L59.5994 58.2052L58.9926 56.9602C60.2881 56.32 61.4374 55.4192 62.3686 54.3143C63.2998 53.2094 63.9929 51.9241 64.4045 50.5389C64.816 49.1538 64.9372 47.6986 64.7603 46.2644C64.5835 44.8303 64.1124 43.4481 63.3767 42.2044C62.641 40.9607 61.6564 39.8823 60.4847 39.0367C59.3129 38.1911 57.9792 37.5965 56.567 37.2902C55.1549 36.9839 53.6947 36.9724 52.2779 37.2565C50.8611 37.5406 49.5182 38.1141 48.3333 38.9412V36.25C48.3333 36.0511 48.2542 35.8603 48.1136 35.7197C47.9729 35.579 47.7822 35.5 47.5833 35.5H26.5833C26.3843 35.5 26.1936 35.579 26.0529 35.7197C25.9123 35.8603 25.8333 36.0511 25.8333 36.25V45.25C25.8333 45.4489 25.9123 45.6397 26.0529 45.7803C26.1936 45.921 26.3843 46 26.5833 46H43.9483C43.6836 47.7713 43.8763 49.5809 44.5082 51.2567C45.1401 52.9325 46.1901 54.4189 47.5584 55.5745C48.9267 56.7301 50.5678 57.5165 52.3257 57.859C54.0837 58.2015 55.9 58.0887 57.602 57.5312L58.2509 58.8625L57.5766 59.1906C57.3985 59.2776 57.2619 59.4315 57.1969 59.6188C57.1319 59.8061 57.1437 60.0115 57.2298 60.1901L59.7847 65.5H25.0833C24.8844 65.4998 24.6938 65.4207 24.5532 65.2801C24.4126 65.1395 24.3335 64.9488 24.3333 64.75V34H66.3333V64.75C66.333 64.9488 66.2539 65.1395 66.1133 65.2801C65.9727 65.4207 65.7821 65.4998 65.5833 65.5ZM44.2864 44.5H27.3333V43H40.0833C40.2822 43 40.4729 42.921 40.6136 42.7803C40.7542 42.6397 40.8333 42.4489 40.8333 42.25C40.8333 42.0511 40.7542 41.8603 40.6136 41.7197C40.4729 41.579 40.2822 41.5 40.0833 41.5H27.3333V40H32.5833C32.7822 40 32.9729 39.921 33.1136 39.7803C33.2542 39.6397 33.3333 39.4489 33.3333 39.25C33.3333 39.0511 33.2542 38.8603 33.1136 38.7197C32.9729 38.579 32.7822 38.5 32.5833 38.5H27.3333V37H46.8333V40.2125C45.6526 41.4167 44.7791 42.8872 44.2864 44.5ZM54.3333 38.5529C56.1133 38.5529 57.8533 39.0807 59.3334 40.0696C60.8134 41.0586 61.967 42.4642 62.6482 44.1087C63.3294 45.7533 63.5076 47.5629 63.1603 49.3087C62.8131 51.0545 61.9559 52.6582 60.6972 53.9168C59.4385 55.1755 57.8349 56.0327 56.0891 56.3799C54.3432 56.7272 52.5336 56.549 50.8891 55.8678C49.2446 55.1866 47.839 54.033 46.85 52.553C45.8611 51.073 45.3333 49.3329 45.3333 47.5529C45.336 45.1668 46.285 42.8791 47.9723 41.1919C49.6595 39.5047 51.9471 38.5556 54.3333 38.5529ZM25.0833 28H65.5833C65.7821 28.0002 65.9727 28.0793 66.1133 28.2199C66.2539 28.3605 66.333 28.5512 66.3333 28.75V32.5H24.3333V28.75C24.3335 28.5512 24.4126 28.3605 24.5532 28.2199C24.6938 28.0793 24.8844 28.0002 25.0833 28Z"/>
</mask>
<path d="M25.0833 67H60.5066L62.0638 70.2354C62.3253 70.7717 62.7891 71.1822 63.3532 71.3766C63.9173 71.571 64.5355 71.5335 65.0719 71.2723C65.6078 71.0111 66.0181 70.548 66.2129 69.9846C66.4076 69.4212 66.3708 68.8036 66.1105 68.2673L65.5007 67H65.5833C66.1798 66.9993 66.7517 66.762 67.1735 66.3402C67.5953 65.9184 67.8326 65.3465 67.8333 64.75V28.75C67.8326 28.1535 67.5953 27.5816 67.1735 27.1598C66.7517 26.738 66.1798 26.5007 65.5833 26.5H25.0833C24.4867 26.5007 23.9148 26.738 23.493 27.1598C23.0712 27.5816 22.8339 28.1535 22.8333 28.75V64.75C22.8339 65.3465 23.0712 65.9184 23.493 66.3402C23.9148 66.762 24.4867 66.9993 25.0833 67ZM64.7958 69.4938C64.7475 69.6337 64.6589 69.7562 64.5412 69.846C64.4234 69.9357 64.2818 69.9885 64.134 69.9979C63.9863 70.0072 63.8391 69.9726 63.711 69.8985C63.5829 69.8243 63.4795 69.7139 63.4141 69.5811L60.2059 62.9155L61.5543 62.2584L64.7606 68.9207C64.8041 69.0091 64.8295 69.1053 64.8356 69.2037C64.8416 69.3021 64.8281 69.4006 64.7958 69.4938ZM58.905 60.2125L60.2534 59.5553L60.9039 60.907L59.5551 61.5644L58.905 60.2125ZM65.5833 65.5H64.7787L62.643 61.0624C62.6304 61.0131 62.6127 60.9653 62.5904 60.9196C62.5693 60.8767 62.5442 60.8359 62.5154 60.7977L61.2779 58.226C61.235 58.137 61.175 58.0573 61.1013 57.9916C61.0275 57.9258 60.9415 57.8753 60.8482 57.8428C60.7549 57.8104 60.6561 57.7968 60.5575 57.8026C60.4588 57.8085 60.3623 57.8338 60.2735 57.8771L59.5994 58.2052L58.9926 56.9602C60.2881 56.32 61.4374 55.4192 62.3686 54.3143C63.2998 53.2094 63.9929 51.9241 64.4045 50.5389C64.816 49.1538 64.9372 47.6986 64.7603 46.2644C64.5835 44.8303 64.1124 43.4481 63.3767 42.2044C62.641 40.9607 61.6564 39.8823 60.4847 39.0367C59.3129 38.1911 57.9792 37.5965 56.567 37.2902C55.1549 36.9839 53.6947 36.9724 52.2779 37.2565C50.8611 37.5406 49.5182 38.1141 48.3333 38.9412V36.25C48.3333 36.0511 48.2542 35.8603 48.1136 35.7197C47.9729 35.579 47.7822 35.5 47.5833 35.5H26.5833C26.3843 35.5 26.1936 35.579 26.0529 35.7197C25.9123 35.8603 25.8333 36.0511 25.8333 36.25V45.25C25.8333 45.4489 25.9123 45.6397 26.0529 45.7803C26.1936 45.921 26.3843 46 26.5833 46H43.9483C43.6836 47.7713 43.8763 49.5809 44.5082 51.2567C45.1401 52.9325 46.1901 54.4189 47.5584 55.5745C48.9267 56.7301 50.5678 57.5165 52.3257 57.859C54.0837 58.2015 55.9 58.0887 57.602 57.5312L58.2509 58.8625L57.5766 59.1906C57.3985 59.2776 57.2619 59.4315 57.1969 59.6188C57.1319 59.8061 57.1437 60.0115 57.2298 60.1901L59.7847 65.5H25.0833C24.8844 65.4998 24.6938 65.4207 24.5532 65.2801C24.4126 65.1395 24.3335 64.9488 24.3333 64.75V34H66.3333V64.75C66.333 64.9488 66.2539 65.1395 66.1133 65.2801C65.9727 65.4207 65.7821 65.4998 65.5833 65.5ZM44.2864 44.5H27.3333V43H40.0833C40.2822 43 40.4729 42.921 40.6136 42.7803C40.7542 42.6397 40.8333 42.4489 40.8333 42.25C40.8333 42.0511 40.7542 41.8603 40.6136 41.7197C40.4729 41.579 40.2822 41.5 40.0833 41.5H27.3333V40H32.5833C32.7822 40 32.9729 39.921 33.1136 39.7803C33.2542 39.6397 33.3333 39.4489 33.3333 39.25C33.3333 39.0511 33.2542 38.8603 33.1136 38.7197C32.9729 38.579 32.7822 38.5 32.5833 38.5H27.3333V37H46.8333V40.2125C45.6526 41.4167 44.7791 42.8872 44.2864 44.5ZM54.3333 38.5529C56.1133 38.5529 57.8533 39.0807 59.3334 40.0696C60.8134 41.0586 61.967 42.4642 62.6482 44.1087C63.3294 45.7533 63.5076 47.5629 63.1603 49.3087C62.8131 51.0545 61.9559 52.6582 60.6972 53.9168C59.4385 55.1755 57.8349 56.0327 56.0891 56.3799C54.3432 56.7272 52.5336 56.549 50.8891 55.8678C49.2446 55.1866 47.839 54.033 46.85 52.553C45.8611 51.073 45.3333 49.3329 45.3333 47.5529C45.336 45.1668 46.285 42.8791 47.9723 41.1919C49.6595 39.5047 51.9471 38.5556 54.3333 38.5529ZM25.0833 28H65.5833C65.7821 28.0002 65.9727 28.0793 66.1133 28.2199C66.2539 28.3605 66.333 28.5512 66.3333 28.75V32.5H24.3333V28.75C24.3335 28.5512 24.4126 28.3605 24.5532 28.2199C24.6938 28.0793 24.8844 28.0002 25.0833 28Z" fill="#542AC4" stroke="#542AC4" stroke-width="2" mask="url(#path-2-inside-1_574_9870)"/>
<path d="M32.8333 30.25C32.8333 30.3881 32.7213 30.5 32.5833 30.5C32.4452 30.5 32.3333 30.3881 32.3333 30.25C32.3333 30.1119 32.4452 30 32.5833 30C32.7213 30 32.8333 30.1119 32.8333 30.25Z" fill="#542AC4" stroke="#542AC4"/>
<path d="M29.8333 30.25C29.8333 30.3881 29.7213 30.5 29.5833 30.5C29.4452 30.5 29.3333 30.3881 29.3333 30.25C29.3333 30.1119 29.4452 30 29.5833 30C29.7213 30 29.8333 30.1119 29.8333 30.25Z" fill="#542AC4" stroke="#542AC4"/>
<path d="M26.5833 31C26.9975 31 27.3333 30.6642 27.3333 30.25C27.3333 29.8358 26.9975 29.5 26.5833 29.5C26.169 29.5 25.8333 29.8358 25.8333 30.25C25.8333 30.6642 26.169 31 26.5833 31Z" fill="#542AC4"/>
<path d="M26.5833 49H32.5833C32.7822 49 32.9729 48.921 33.1136 48.7803C33.2542 48.6397 33.3333 48.4489 33.3333 48.25C33.3333 48.0511 33.2542 47.8603 33.1136 47.7197C32.9729 47.579 32.7822 47.5 32.5833 47.5H26.5833C26.3843 47.5 26.1936 47.579 26.0529 47.7197C25.9123 47.8603 25.8333 48.0511 25.8333 48.25C25.8333 48.4489 25.9123 48.6397 26.0529 48.7803C26.1936 48.921 26.3843 49 26.5833 49Z" fill="#542AC4"/>
<path d="M25.8333 51.25C25.8333 51.4489 25.9123 51.6397 26.0529 51.7803C26.1936 51.921 26.3843 52 26.5833 52H40.0833C40.2822 52 40.4729 51.921 40.6136 51.7803C40.7542 51.6397 40.8333 51.4489 40.8333 51.25C40.8333 51.0511 40.7542 50.8603 40.6136 50.7197C40.4729 50.579 40.2822 50.5 40.0833 50.5H26.5833C26.3843 50.5 26.1936 50.579 26.0529 50.7197C25.9123 50.8603 25.8333 51.0511 25.8333 51.25Z" fill="#542AC4"/>
<path d="M26.5833 55H32.5833C32.7822 55 32.9729 54.921 33.1136 54.7803C33.2542 54.6397 33.3333 54.4489 33.3333 54.25C33.3333 54.0511 33.2542 53.8603 33.1136 53.7197C32.9729 53.579 32.7822 53.5 32.5833 53.5H26.5833C26.3843 53.5 26.1936 53.579 26.0529 53.7197C25.9123 53.8603 25.8333 54.0511 25.8333 54.25C25.8333 54.4489 25.9123 54.6397 26.0529 54.7803C26.1936 54.921 26.3843 55 26.5833 55Z" fill="#542AC4"/>
<path d="M25.8333 57.25C25.8333 57.4489 25.9123 57.6397 26.0529 57.7803C26.1936 57.921 26.3843 58 26.5833 58H43.8333C44.0322 58 44.2229 57.921 44.3636 57.7803C44.5042 57.6397 44.5833 57.4489 44.5833 57.25C44.5833 57.0511 44.5042 56.8603 44.3636 56.7197C44.2229 56.579 44.0322 56.5 43.8333 56.5H26.5833C26.3843 56.5 26.1936 56.579 26.0529 56.7197C25.9123 56.8603 25.8333 57.0511 25.8333 57.25Z" fill="#542AC4"/>
<path d="M26.5833 61H32.5833C32.7822 61 32.9729 60.921 33.1136 60.7803C33.2542 60.6397 33.3333 60.4489 33.3333 60.25C33.3333 60.0511 33.2542 59.8603 33.1136 59.7197C32.9729 59.579 32.7822 59.5 32.5833 59.5H26.5833C26.3843 59.5 26.1936 59.579 26.0529 59.7197C25.9123 59.8603 25.8333 60.0511 25.8333 60.25C25.8333 60.4489 25.9123 60.6397 26.0529 60.7803C26.1936 60.921 26.3843 61 26.5833 61Z" fill="#542AC4"/>
<path d="M25.8333 63.25C25.8333 63.4489 25.9123 63.6397 26.0529 63.7803C26.1936 63.921 26.3843 64 26.5833 64H50.5833C50.7822 64 50.9729 63.921 51.1136 63.7803C51.2542 63.6397 51.3333 63.4489 51.3333 63.25C51.3333 63.0511 51.2542 62.8603 51.1136 62.7197C50.9729 62.579 50.7822 62.5 50.5833 62.5H26.5833C26.3843 62.5 26.1936 62.579 26.0529 62.7197C25.9123 62.8603 25.8333 63.0511 25.8333 63.25Z" fill="#542AC4"/>
<path d="M54.3333 49C54.5322 49 54.7229 48.921 54.8636 48.7803C55.0042 48.6397 55.0833 48.4489 55.0833 48.25V46.75C55.0833 46.5511 55.0042 46.3603 54.8636 46.2197C54.7229 46.079 54.5322 46 54.3333 46C54.1343 46 53.9436 46.079 53.8029 46.2197C53.6623 46.3603 53.5833 46.5511 53.5833 46.75V48.25C53.5833 48.4489 53.6623 48.6397 53.8029 48.7803C53.9436 48.921 54.1343 49 54.3333 49Z" fill="#542AC4"/>
<path d="M51.3333 49C51.5322 49 51.7229 48.921 51.8636 48.7803C52.0042 48.6397 52.0833 48.4489 52.0833 48.25V46.75C52.0833 46.5511 52.0042 46.3603 51.8636 46.2197C51.7229 46.079 51.5322 46 51.3333 46C51.1343 46 50.9436 46.079 50.8029 46.2197C50.6623 46.3603 50.5833 46.5511 50.5833 46.75V48.25C50.5833 48.4489 50.6623 48.6397 50.8029 48.7803C50.9436 48.921 51.1343 49 51.3333 49Z" fill="#542AC4"/>
<path d="M57.3333 49C57.5322 49 57.7229 48.921 57.8636 48.7803C58.0042 48.6397 58.0833 48.4489 58.0833 48.25V45.25C58.0833 45.0511 58.0042 44.8603 57.8636 44.7197C57.7229 44.579 57.5322 44.5 57.3333 44.5C57.1343 44.5 56.9436 44.579 56.8029 44.7197C56.6623 44.8603 56.5833 45.0511 56.5833 45.25V48.25C56.5833 48.4489 56.6623 48.6397 56.8029 48.7803C56.9436 48.921 57.1343 49 57.3333 49Z" fill="#542AC4"/>
<path d="M54.3311 55.0547C55.8144 55.0547 57.2645 54.6148 58.4978 53.7907C59.7312 52.9666 60.6925 51.7953 61.2602 50.4248C61.8278 49.0544 61.9763 47.5464 61.6869 46.0915C61.3976 44.6367 60.6832 43.3003 59.6344 42.2514C58.5855 41.2025 57.2491 40.4882 55.7942 40.1988C54.3394 39.9094 52.8314 40.0579 51.4609 40.6256C50.0905 41.1933 48.9191 42.1545 48.095 43.3879C47.2709 44.6213 46.8311 46.0713 46.8311 47.5547C46.8333 49.5431 47.6242 51.4495 49.0302 52.8555C50.4363 54.2615 52.3426 55.0524 54.3311 55.0547ZM54.3311 41.5547C55.5177 41.5547 56.6778 41.9066 57.6645 42.5659C58.6512 43.2252 59.4202 44.1622 59.8743 45.2586C60.3285 46.3549 60.4473 47.5613 60.2158 48.7252C59.9843 49.8891 59.4128 50.9582 58.5737 51.7973C57.7346 52.6364 56.6655 53.2079 55.5016 53.4394C54.3377 53.6709 53.1313 53.5521 52.035 53.098C50.9386 52.6438 50.0015 51.8748 49.3422 50.8881C48.6829 49.9014 48.3311 48.7414 48.3311 47.5547C48.3329 45.9639 48.9656 44.4389 50.0904 43.3141C51.2152 42.1892 52.7403 41.5565 54.3311 41.5547Z" fill="#542AC4"/>
</svg>




                <div class="advantage__card">
                    <span class="advantage__title1">
                    SEO - копирайтер 
                    </span>
                    <span class="advantage__text1">
                    Пишет оптимизированные тексты с<br> естественным включением поисковых<br> запросов.
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
            
<svg width="89" height="88" viewBox="0 0 89 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.6948 3.01261C-7.29589 15.7992 -2.82306 72.9122 19.9477 85.2725C42.7185 97.6328 88.6668 65.2402 88.6668 43.077C88.6668 20.9137 40.6854 -9.77395 16.6948 3.01261Z" fill="#6430E8"/>
<path d="M34.7746 57.5822L34.8716 57H34.2814H19.4173C18.9532 56.9995 18.5083 56.8148 18.1801 56.4867C17.852 56.1585 17.6674 55.7137 17.6667 55.2497V23.7503C17.6674 23.2863 17.852 22.8414 18.1801 22.5133C18.5082 22.1852 18.953 22.0006 19.4171 22H59.9164C60.3805 22.0006 60.8253 22.1852 61.1534 22.5133C61.4816 22.8415 61.6662 23.2865 61.6667 23.7506V55.2494C61.6662 55.7135 61.4816 56.1585 61.1534 56.4867C60.8252 56.8148 60.3803 56.9995 59.9162 57H57.8485H56.6414L57.495 57.8536L60.8366 61.1951C61.1644 61.5237 61.3484 61.9689 61.3484 62.433C61.3484 62.8969 61.1645 63.3419 60.837 63.6704C60.5088 63.9986 60.0637 64.183 59.5995 64.183C59.1354 64.183 58.6903 63.9986 58.3621 63.6704L51.8381 57.1464L51.6917 57H51.4846H45.0521H44.4619L44.5589 57.5822L45.8089 65.0822L45.8785 65.5H46.3021H49.4167C49.4831 65.5 49.5466 65.5263 49.5935 65.5732C49.6404 65.6201 49.6667 65.6837 49.6667 65.75C49.6667 65.8163 49.6404 65.8799 49.5935 65.9268C49.5466 65.9737 49.4831 66 49.4167 66H29.9167C29.8504 66 29.7869 65.9737 29.74 65.9268C29.6931 65.8799 29.6667 65.8163 29.6667 65.75C29.6667 65.6837 29.6931 65.6201 29.74 65.5732C29.7869 65.5263 29.8504 65.5 29.9167 65.5H33.0314H33.455L33.5246 65.0822L34.7746 57.5822ZM45.4576 49.3517L45.1041 49.7052L45.4576 50.0588L48.6394 53.241L48.993 53.5947L49.3466 53.241L50.4073 52.1799L50.7607 51.8264L50.4072 51.4729L47.2254 48.291L46.8718 47.9374L46.5182 48.291L45.4576 49.3517ZM44.3995 49.3595L44.6741 49.4282L44.8743 49.228L46.3947 47.7076L46.5949 47.5074L46.5263 47.2327L46.0144 45.1855C46.0144 45.1853 46.0144 45.1852 46.0144 45.1851C45.8926 44.6925 45.6364 44.2433 45.2743 43.8877C44.9124 43.5323 44.4589 43.2843 43.9644 43.1714C43.964 43.1713 43.9637 43.1712 43.9633 43.1712L40.0298 42.2634L39.2503 42.0835L39.4301 42.863L40.3379 46.7966C40.338 46.7969 40.3381 46.7973 40.3381 46.7976C40.4511 47.2921 40.699 47.7456 41.0544 48.1075C41.41 48.4696 41.8592 48.7258 42.3519 48.8476C42.352 48.8476 42.3521 48.8477 42.3522 48.8477L44.3995 49.3595ZM47.0638 47.3218L47.0974 47.4562L47.1953 47.5541L48.495 48.8536L48.6414 49H48.8485H60.6667H61.1667V48.5V29V28.5H60.6667H18.6667H18.1667V29V48.5V49H18.6667H40.0713H41.101L40.4642 48.1908C40.168 47.8144 39.9587 47.3772 39.8512 46.9105L39.8511 46.9103L38.6733 41.8062C38.6637 41.7649 38.6649 41.7218 38.6765 41.6811C38.6882 41.6403 38.7101 41.6032 38.7401 41.5732C38.7701 41.5433 38.8072 41.5214 38.8479 41.5097C38.8887 41.498 38.9318 41.4969 38.9731 41.5064L38.9731 41.5064L44.0768 42.6839L44.0781 42.6842C44.6622 42.8173 45.1978 43.1101 45.6252 43.5297C46.0526 43.9494 46.355 44.4796 46.4987 45.0611L46.499 45.0624L47.0638 47.3218ZM19.4167 22.5L19.4162 22.5C19.0849 22.5004 18.7673 22.6321 18.5331 22.8664C18.2989 23.1006 18.1671 23.4182 18.1667 23.7494V23.75V27.5V28H18.6667H60.6667H61.1667V27.5V23.75V23.7494C61.1664 23.4182 61.0346 23.1006 60.8004 22.8664C60.5662 22.6321 60.2486 22.5004 59.9173 22.5H59.9167L19.4167 22.5ZM44.7814 65.5H45.3716L45.2746 64.9178L44.0246 57.4178L43.955 57H43.5314H35.8021H35.3785L35.3089 57.4178L34.0589 64.9178L33.9619 65.5H34.5521H44.7814ZM19.4162 56.5H19.4167H49.9846H51.1917L50.3382 55.6465L44.7204 50.0286L44.6224 49.9306L44.4881 49.897L42.9594 49.5149L42.8997 49.5H42.8381H18.6667H18.1667V50L18.1667 55.25L18.1667 55.2506C18.1671 55.5818 18.2989 55.8994 18.5331 56.1336C18.7673 56.3679 19.0849 56.4996 19.4162 56.5ZM60.4834 63.3168L60.484 63.3163C60.7177 63.0818 60.8489 62.7642 60.849 62.4331C60.8489 62.102 60.7177 61.7845 60.484 61.55L60.4834 61.5494L51.4679 52.5339L51.1144 52.1805L50.7609 52.5339L49.7002 53.5942L49.3465 53.9478L49.7001 54.3014L58.7156 63.3168C58.8317 63.4329 58.9695 63.525 59.1211 63.5878C59.2728 63.6506 59.4353 63.683 59.5995 63.683C59.7637 63.683 59.9262 63.6506 60.0779 63.5878L59.8865 63.1259L60.0779 63.5878C60.2295 63.525 60.3673 63.4329 60.4834 63.3168ZM50.3485 49.5H49.1414L49.995 50.3536L55.995 56.3536L56.1414 56.5H56.3485H59.9167H59.9173C60.2486 56.4996 60.5662 56.3679 60.8004 56.1336C61.0346 55.8994 61.1664 55.5818 61.1667 55.2506V55.25V50V49.5H60.6667H50.3485Z" fill="white" stroke="white"/>
<path d="M38.1667 52H41.1667C41.2331 52 41.2966 52.0263 41.3435 52.0732C41.3904 52.1201 41.4167 52.1837 41.4167 52.25C41.4167 52.3163 41.3904 52.3799 41.3435 52.4268C41.2966 52.4737 41.2331 52.5 41.1667 52.5H38.1667C38.1004 52.5 38.0369 52.4737 37.99 52.4268C37.9431 52.3799 37.9167 52.3163 37.9167 52.25C37.9167 52.1837 37.9431 52.1201 37.99 52.0732C38.0369 52.0263 38.1004 52 38.1667 52Z" fill="white" stroke="white"/>
<path d="M21.1667 25.25C21.1667 25.3881 21.0548 25.5 20.9167 25.5C20.7787 25.5 20.6667 25.3881 20.6667 25.25C20.6667 25.1119 20.7787 25 20.9167 25C21.0548 25 21.1667 25.1119 21.1667 25.25Z" fill="white" stroke="white"/>
<path d="M23.9167 26C24.331 26 24.6667 25.6642 24.6667 25.25C24.6667 24.8358 24.331 24.5 23.9167 24.5C23.5025 24.5 23.1667 24.8358 23.1667 25.25C23.1667 25.6642 23.5025 26 23.9167 26Z" fill="white"/>
<path d="M26.9167 26C27.331 26 27.6667 25.6642 27.6667 25.25C27.6667 24.8358 27.331 24.5 26.9167 24.5C26.5025 24.5 26.1667 24.8358 26.1667 25.25C26.1667 25.6642 26.5025 26 26.9167 26Z" fill="white"/>
<path d="M25.4167 32H26.9167C27.1157 32 27.3064 31.921 27.4471 31.7803C27.5877 31.6397 27.6667 31.4489 27.6667 31.25C27.6667 31.0511 27.5877 30.8603 27.4471 30.7197C27.3064 30.579 27.1157 30.5 26.9167 30.5H25.4167C25.2178 30.5 25.0271 30.579 24.8864 30.7197C24.7458 30.8603 24.6667 31.0511 24.6667 31.25C24.6667 31.4489 24.7458 31.6397 24.8864 31.7803C25.0271 31.921 25.2178 32 25.4167 32Z" fill="white"/>
<path d="M29.9167 32H31.4167C31.6157 32 31.8064 31.921 31.9471 31.7803C32.0877 31.6397 32.1667 31.4489 32.1667 31.25C32.1667 31.0511 32.0877 30.8603 31.9471 30.7197C31.8064 30.579 31.6157 30.5 31.4167 30.5H29.9167C29.7178 30.5 29.5271 30.579 29.3864 30.7197C29.2458 30.8603 29.1667 31.0511 29.1667 31.25C29.1667 31.4489 29.2458 31.6397 29.3864 31.7803C29.5271 31.921 29.7178 32 29.9167 32Z" fill="white"/>
<path d="M22.4167 45.5H21.6667V44.75C21.6667 44.5511 21.5877 44.3603 21.4471 44.2197C21.3064 44.079 21.1157 44 20.9167 44C20.7178 44 20.5271 44.079 20.3864 44.2197C20.2458 44.3603 20.1667 44.5511 20.1667 44.75V46.25C20.1667 46.4489 20.2458 46.6397 20.3864 46.7803C20.5271 46.921 20.7178 47 20.9167 47H22.4167C22.6157 47 22.8064 46.921 22.9471 46.7803C23.0877 46.6397 23.1667 46.4489 23.1667 46.25C23.1667 46.0511 23.0877 45.8603 22.9471 45.7197C22.8064 45.579 22.6157 45.5 22.4167 45.5Z" fill="white"/>
<path d="M26.9167 45.5H25.4167C25.2178 45.5 25.0271 45.579 24.8864 45.7197C24.7458 45.8603 24.6667 46.0511 24.6667 46.25C24.6667 46.4489 24.7458 46.6397 24.8864 46.7803C25.0271 46.921 25.2178 47 25.4167 47H26.9167C27.1157 47 27.3064 46.921 27.4471 46.7803C27.5877 46.6397 27.6667 46.4489 27.6667 46.25C27.6667 46.0511 27.5877 45.8603 27.4471 45.7197C27.3064 45.579 27.1157 45.5 26.9167 45.5Z" fill="white"/>
<path d="M31.4167 45.5H29.9167C29.7178 45.5 29.5271 45.579 29.3864 45.7197C29.2458 45.8603 29.1667 46.0511 29.1667 46.25C29.1667 46.4489 29.2458 46.6397 29.3864 46.7803C29.5271 46.921 29.7178 47 29.9167 47H31.4167C31.6157 47 31.8064 46.921 31.9471 46.7803C32.0877 46.6397 32.1667 46.4489 32.1667 46.25C32.1667 46.0511 32.0877 45.8603 31.9471 45.7197C31.8064 45.579 31.6157 45.5 31.4167 45.5Z" fill="white"/>
<path d="M35.9167 30.5H34.4167C34.2178 30.5 34.0271 30.579 33.8864 30.7197C33.7458 30.8603 33.6667 31.0511 33.6667 31.25C33.6667 31.4489 33.7458 31.6397 33.8864 31.7803C34.0271 31.921 34.2178 32 34.4167 32H35.1667V32.75C35.1667 32.9489 35.2458 33.1397 35.3864 33.2803C35.5271 33.421 35.7178 33.5 35.9167 33.5C36.1157 33.5 36.3064 33.421 36.4471 33.2803C36.5877 33.1397 36.6667 32.9489 36.6667 32.75V31.25C36.6667 31.0511 36.5877 30.8603 36.4471 30.7197C36.3064 30.579 36.1157 30.5 35.9167 30.5Z" fill="white"/>
<path d="M35.9167 35C35.7178 35 35.5271 35.079 35.3864 35.2197C35.2458 35.3603 35.1667 35.5511 35.1667 35.75V37.25C35.1667 37.4489 35.2458 37.6397 35.3864 37.7803C35.5271 37.921 35.7178 38 35.9167 38C36.1157 38 36.3064 37.921 36.4471 37.7803C36.5877 37.6397 36.6667 37.4489 36.6667 37.25V35.75C36.6667 35.5511 36.5877 35.3603 36.4471 35.2197C36.3064 35.079 36.1157 35 35.9167 35Z" fill="white"/>
<path d="M35.9167 39.5C35.7178 39.5 35.5271 39.579 35.3864 39.7197C35.2458 39.8603 35.1667 40.0511 35.1667 40.25V41.75C35.1667 41.9489 35.2458 42.1397 35.3864 42.2803C35.5271 42.421 35.7178 42.5 35.9167 42.5C36.1157 42.5 36.3064 42.421 36.4471 42.2803C36.5877 42.1397 36.6667 41.9489 36.6667 41.75V40.25C36.6667 40.0511 36.5877 39.8603 36.4471 39.7197C36.3064 39.579 36.1157 39.5 35.9167 39.5Z" fill="white"/>
<path d="M35.9167 44C35.7178 44 35.5271 44.079 35.3864 44.2197C35.2458 44.3603 35.1667 44.5511 35.1667 44.75V45.5H34.4167C34.2178 45.5 34.0271 45.579 33.8864 45.7197C33.7458 45.8603 33.6667 46.0511 33.6667 46.25C33.6667 46.4489 33.7458 46.6397 33.8864 46.7803C34.0271 46.921 34.2178 47 34.4167 47H35.9167C36.1157 47 36.3064 46.921 36.4471 46.7803C36.5877 46.6397 36.6667 46.4489 36.6667 46.25V44.75C36.6667 44.5511 36.5877 44.3603 36.4471 44.2197C36.3064 44.079 36.1157 44 35.9167 44Z" fill="white"/>
<path d="M20.9167 33.5C21.1157 33.5 21.3064 33.421 21.4471 33.2803C21.5877 33.1397 21.6667 32.9489 21.6667 32.75V32H22.4167C22.6157 32 22.8064 31.921 22.9471 31.7803C23.0877 31.6397 23.1667 31.4489 23.1667 31.25C23.1667 31.0511 23.0877 30.8603 22.9471 30.7197C22.8064 30.579 22.6157 30.5 22.4167 30.5H20.9167C20.7178 30.5 20.5271 30.579 20.3864 30.7197C20.2458 30.8603 20.1667 31.0511 20.1667 31.25V32.75C20.1667 32.9489 20.2458 33.1397 20.3864 33.2803C20.5271 33.421 20.7178 33.5 20.9167 33.5Z" fill="white"/>
<path d="M20.9167 38C21.1157 38 21.3064 37.921 21.4471 37.7803C21.5877 37.6397 21.6667 37.4489 21.6667 37.25V35.75C21.6667 35.5511 21.5877 35.3603 21.4471 35.2197C21.3064 35.079 21.1157 35 20.9167 35C20.7178 35 20.5271 35.079 20.3864 35.2197C20.2458 35.3603 20.1667 35.5511 20.1667 35.75V37.25C20.1667 37.4489 20.2458 37.6397 20.3864 37.7803C20.5271 37.921 20.7178 38 20.9167 38Z" fill="white"/>
<path d="M20.9167 42.5C21.1157 42.5 21.3064 42.421 21.4471 42.2803C21.5877 42.1397 21.6667 41.9489 21.6667 41.75V40.25C21.6667 40.0511 21.5877 39.8603 21.4471 39.7197C21.3064 39.579 21.1157 39.5 20.9167 39.5C20.7178 39.5 20.5271 39.579 20.3864 39.7197C20.2458 39.8603 20.1667 40.0511 20.1667 40.25V41.75C20.1667 41.9489 20.2458 42.1397 20.3864 42.2803C20.5271 42.421 20.7178 42.5 20.9167 42.5Z" fill="white"/>
<path d="M43.4167 38H38.9167C38.7178 38 38.5271 38.079 38.3864 38.2197C38.2458 38.3603 38.1667 38.5511 38.1667 38.75C38.1667 38.9489 38.2458 39.1397 38.3864 39.2803C38.5271 39.421 38.7178 39.5 38.9167 39.5H43.4167C43.6157 39.5 43.8064 39.421 43.9471 39.2803C44.0877 39.1397 44.1667 38.9489 44.1667 38.75C44.1667 38.5511 44.0877 38.3603 43.9471 38.2197C43.8064 38.079 43.6157 38 43.4167 38Z" fill="white"/>
<path d="M58.4167 38H46.4167C46.2178 38 46.0271 38.079 45.8864 38.2197C45.7458 38.3603 45.6667 38.5511 45.6667 38.75C45.6667 38.9489 45.7458 39.1397 45.8864 39.2803C46.0271 39.421 46.2178 39.5 46.4167 39.5H58.4167C58.6157 39.5 58.8064 39.421 58.9471 39.2803C59.0877 39.1397 59.1667 38.9489 59.1667 38.75C59.1667 38.5511 59.0877 38.3603 58.9471 38.2197C58.8064 38.079 58.6157 38 58.4167 38Z" fill="white"/>
<path d="M58.4167 41H47.9167C47.7178 41 47.5271 41.079 47.3864 41.2197C47.2458 41.3603 47.1667 41.5511 47.1667 41.75C47.1667 41.9489 47.2458 42.1397 47.3864 42.2803C47.5271 42.421 47.7178 42.5 47.9167 42.5H58.4167C58.6157 42.5 58.8064 42.421 58.9471 42.2803C59.0877 42.1397 59.1667 41.9489 59.1667 41.75C59.1667 41.5511 59.0877 41.3603 58.9471 41.2197C58.8064 41.079 58.6157 41 58.4167 41Z" fill="white"/>
<path d="M58.4167 30.5H38.9167C38.7178 30.5 38.5271 30.579 38.3864 30.7197C38.2458 30.8603 38.1667 31.0511 38.1667 31.25V35.75C38.1667 35.9489 38.2458 36.1397 38.3864 36.2803C38.5271 36.421 38.7178 36.5 38.9167 36.5H58.4167C58.6157 36.5 58.8064 36.421 58.9471 36.2803C59.0877 36.1397 59.1667 35.9489 59.1667 35.75V31.25C59.1667 31.0511 59.0877 30.8603 58.9471 30.7197C58.8064 30.579 58.6157 30.5 58.4167 30.5ZM57.6667 35H39.6667V32H57.6667V35Z" fill="white"/>
<path d="M33.6667 34.25C33.6667 34.0511 33.5877 33.8603 33.4471 33.7197C33.3064 33.579 33.1157 33.5 32.9167 33.5H23.9167C23.7178 33.5 23.5271 33.579 23.3864 33.7197C23.2458 33.8603 23.1667 34.0511 23.1667 34.25V43.25C23.1667 43.4489 23.2458 43.6397 23.3864 43.7803C23.5271 43.921 23.7178 44 23.9167 44H32.9167C33.1157 44 33.3064 43.921 33.4471 43.7803C33.5877 43.6397 33.6667 43.4489 33.6667 43.25V34.25ZM32.1667 42.5H24.6667V35H32.1667V42.5Z" fill="white"/>
</svg>



                <div class="advantage__card">
                    <span class="advantage__title1">
                    Верстальщик
                    </span>
                    <span class="advantage__text1">
                    Работает над внешним видом сайта, его<br> версткой, помогает провести аудит юзабилити.
                    </span>
                </div>
            </div>



            <div class="col-sm-4">
            
<svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.01262 72.972C16.7992 96.9626 73.9122 92.4898 86.2725 69.719C98.6328 46.9482 66.2402 0.999999 44.077 0.999998C21.9137 0.999997 -8.77394 48.9813 4.01262 72.972Z" stroke="#542AC4"/>
<mask id="path-2-inside-1_574_9919" fill="white">
<path d="M30.9698 35.7197L28.7198 37.9697C28.5792 38.1104 28.5002 38.3011 28.5002 38.5C28.5002 38.6988 28.5792 38.8896 28.7198 39.0302L30.9698 41.2802L32.0303 40.2197L30.3106 38.5L32.0303 36.7802L30.9698 35.7197Z"/>
</mask>
<path d="M30.9698 35.7197L28.7198 37.9697C28.5792 38.1104 28.5002 38.3011 28.5002 38.5C28.5002 38.6988 28.5792 38.8896 28.7198 39.0302L30.9698 41.2802L32.0303 40.2197L30.3106 38.5L32.0303 36.7802L30.9698 35.7197Z" fill="#542AC4"/>
<path d="M30.9698 35.7197L36.6267 30.0629L30.9698 24.406L25.313 30.0629L30.9698 35.7197ZM28.7198 37.9697L23.063 32.3129L23.0621 32.3137L28.7198 37.9697ZM28.7198 39.0302L23.0621 44.6862L23.063 44.6871L28.7198 39.0302ZM30.9698 41.2802L25.313 46.9371L30.9698 52.5939L36.6267 46.9371L30.9698 41.2802ZM32.0303 40.2197L37.6872 45.8766L43.344 40.2197L37.6872 34.5629L32.0303 40.2197ZM30.3106 38.5L24.6537 32.8431L18.9969 38.5L24.6537 44.1568L30.3106 38.5ZM32.0303 36.7802L37.6872 42.4371L43.344 36.7802L37.6872 31.1234L32.0303 36.7802ZM25.313 30.0629L23.063 32.3129L34.3767 43.6266L36.6267 41.3766L25.313 30.0629ZM23.0621 32.3137C21.4218 33.9546 20.5002 36.1798 20.5002 38.5H36.5002C36.5002 40.4224 35.7367 42.2661 34.3775 43.6257L23.0621 32.3137ZM20.5002 38.5C20.5002 40.8202 21.4218 43.0454 23.0621 44.6862L34.3775 33.3742C35.7367 34.7338 36.5002 36.5775 36.5002 38.5H20.5002ZM23.063 44.6871L25.313 46.9371L36.6267 35.6234L34.3767 33.3734L23.063 44.6871ZM36.6267 46.9371L37.6872 45.8766L26.3735 34.5629L25.313 35.6234L36.6267 46.9371ZM37.6872 34.5629L35.9674 32.8431L24.6537 44.1568L26.3735 45.8766L37.6872 34.5629ZM35.9674 44.1568L37.6872 42.4371L26.3735 31.1234L24.6537 32.8431L35.9674 44.1568ZM37.6872 31.1234L36.6267 30.0629L25.313 41.3766L26.3735 42.4371L37.6872 31.1234Z" fill="#542AC4" mask="url(#path-2-inside-1_574_9919)"/>
<mask id="path-4-inside-2_574_9919" fill="white">
<path d="M33.042 41.2383L35.2912 35.2404L36.6952 35.7669L34.446 41.7648L33.042 41.2383Z"/>
</mask>
<path d="M33.042 41.2383L35.2912 35.2404L36.6952 35.7669L34.446 41.7648L33.042 41.2383Z" fill="#542AC4"/>
<path d="M33.042 41.2383L25.554 38.4303L22.746 45.9183L30.234 48.7263L33.042 41.2383ZM35.2912 35.2404L38.0992 27.7524L30.6112 24.9444L27.8032 32.4324L35.2912 35.2404ZM36.6952 35.7669L44.1832 38.5749L46.9912 31.0869L39.5032 28.2789L36.6952 35.7669ZM34.446 41.7648L31.638 49.2528L39.126 52.0608L41.934 44.5728L34.446 41.7648ZM40.53 44.0463L42.7792 38.0484L27.8032 32.4324L25.554 38.4303L40.53 44.0463ZM32.4832 42.7284L33.8872 43.2549L39.5032 28.2789L38.0992 27.7524L32.4832 42.7284ZM29.2072 32.9589L26.958 38.9568L41.934 44.5728L44.1832 38.5749L29.2072 32.9589ZM37.254 34.2768L35.85 33.7503L30.234 48.7263L31.638 49.2528L37.254 34.2768Z" fill="#542AC4" mask="url(#path-4-inside-2_574_9919)"/>
<mask id="path-6-inside-3_574_9919" fill="white">
<path d="M38.7802 41.2802L41.0302 39.0302C41.1708 38.8896 41.2498 38.6988 41.2498 38.5C41.2498 38.3011 41.1708 38.1104 41.0302 37.9697L38.7802 35.7197L37.7197 36.7802L39.4395 38.5L37.7197 40.2197L38.7802 41.2802Z"/>
</mask>
<path d="M38.7802 41.2802L41.0302 39.0302C41.1708 38.8896 41.2498 38.6988 41.2498 38.5C41.2498 38.3011 41.1708 38.1104 41.0302 37.9697L38.7802 35.7197L37.7197 36.7802L39.4395 38.5L37.7197 40.2197L38.7802 41.2802Z" fill="#542AC4"/>
<path d="M38.7802 41.2802L33.1234 46.9371L38.7802 52.5939L44.4371 46.9371L38.7802 41.2802ZM41.0302 39.0302L46.6871 44.6871L46.6879 44.6862L41.0302 39.0302ZM41.0302 37.9697L46.6879 32.3137L46.6871 32.3129L41.0302 37.9697ZM38.7802 35.7197L44.4371 30.0629L38.7802 24.406L33.1234 30.0629L38.7802 35.7197ZM37.7197 36.7802L32.0629 31.1234L26.406 36.7802L32.0629 42.4371L37.7197 36.7802ZM39.4395 38.5L45.0963 44.1568L50.7532 38.5L45.0963 32.8431L39.4395 38.5ZM37.7197 40.2197L32.0629 34.5629L26.406 40.2197L32.0629 45.8766L37.7197 40.2197ZM44.4371 46.9371L46.6871 44.6871L35.3734 33.3734L33.1234 35.6234L44.4371 46.9371ZM46.6879 44.6862C48.3283 43.0453 49.2498 40.8201 49.2498 38.5H33.2498C33.2498 36.5776 34.0133 34.7338 35.3725 33.3742L46.6879 44.6862ZM49.2498 38.5C49.2498 36.1798 48.3283 33.9546 46.6879 32.3137L35.3725 43.6257C34.0133 42.2661 33.2498 40.4224 33.2498 38.5H49.2498ZM46.6871 32.3129L44.4371 30.0629L33.1234 41.3766L35.3734 43.6266L46.6871 32.3129ZM33.1234 30.0629L32.0629 31.1234L43.3766 42.4371L44.4371 41.3766L33.1234 30.0629ZM32.0629 42.4371L33.7826 44.1568L45.0963 32.8431L43.3766 31.1234L32.0629 42.4371ZM33.7826 32.8431L32.0629 34.5629L43.3766 45.8766L45.0963 44.1568L33.7826 32.8431ZM32.0629 45.8766L33.1234 46.9371L44.4371 35.6234L43.3766 34.5629L32.0629 45.8766Z" fill="#542AC4" mask="url(#path-6-inside-3_574_9919)"/>
<path d="M28.5 44.5H31.5V46H28.5V44.5Z" fill="#542AC4"/>
<path d="M33 44.5H40.5V46H33V44.5Z" fill="#542AC4"/>
<path d="M30 47.5H33V49H30V47.5Z" fill="#542AC4"/>
<path d="M34.5 47.5H42V49H34.5V47.5Z" fill="#542AC4"/>
<path d="M43.5 47.5H45V49H43.5V47.5Z" fill="#542AC4"/>
<path d="M30 50.5H33V52H30V50.5Z" fill="#542AC4"/>
<path d="M34.5 50.5H42V52H34.5V50.5Z" fill="#542AC4"/>
<path d="M43.5 50.5H45V52H43.5V50.5Z" fill="#542AC4"/>
<path d="M66.8565 34.7575L64.845 34.4703C64.7091 34.0473 64.5387 33.6362 64.3357 33.241L65.5545 31.6165C65.6628 31.4721 65.7154 31.2934 65.7025 31.1134C65.6897 30.9333 65.6124 30.7639 65.4847 30.6363L63.3638 28.5152C63.2362 28.3878 63.0669 28.3106 62.887 28.2978C62.7071 28.285 62.5286 28.3374 62.3843 28.4455L60.759 29.6635C60.3637 29.4609 59.9526 29.2908 59.5298 29.155L59.2425 27.1435C59.2169 26.9649 59.1277 26.8014 58.9913 26.6832C58.8549 26.565 58.6805 26.5 58.5 26.5H55.5C55.3195 26.5 55.1451 26.565 55.0087 26.6832C54.8723 26.8014 54.7831 26.9649 54.7575 27.1435L54.4702 29.155C54.0473 29.2907 53.6362 29.4608 53.241 29.6635L51.6157 28.4455C51.4714 28.3374 51.2929 28.285 51.113 28.2978C50.9331 28.3106 50.7639 28.3878 50.6362 28.5152L48.5153 30.6363C48.3876 30.7639 48.3103 30.9333 48.2975 31.1134C48.2846 31.2934 48.3372 31.4721 48.4455 31.6165L49.6643 33.241C49.4613 33.6362 49.2909 34.0473 49.155 34.4703L47.1435 34.7575C46.9649 34.7831 46.8014 34.8723 46.6832 35.0087C46.565 35.1451 46.5 35.3195 46.5 35.5V38.5C46.5 38.6805 46.565 38.8549 46.6832 38.9913C46.8014 39.1277 46.9649 39.2169 47.1435 39.2425L49.155 39.5297C49.2909 39.9527 49.4613 40.3638 49.6643 40.759L48.4455 42.3835C48.3372 42.5279 48.2846 42.7066 48.2975 42.8866C48.3103 43.0667 48.3876 43.2361 48.5153 43.3638L50.6362 45.4847C50.7639 45.6122 50.9331 45.6894 51.113 45.7022C51.2929 45.715 51.4714 45.6626 51.6157 45.5545L53.241 44.3365C53.6362 44.5392 54.0473 44.7093 54.4702 44.845L54.7575 46.8565C54.7831 47.0351 54.8723 47.1986 55.0087 47.3168C55.1451 47.435 55.3195 47.5 55.5 47.5H58.5C58.6805 47.5 58.8549 47.435 58.9913 47.3168C59.1277 47.1986 59.2169 47.0351 59.2425 46.8565L59.5298 44.845C59.9526 44.7092 60.3637 44.5391 60.759 44.3365L62.3843 45.5545C62.5286 45.6626 62.7071 45.715 62.887 45.7022C63.0669 45.6894 63.2362 45.6122 63.3638 45.4847L65.4847 43.3638C65.6124 43.2361 65.6897 43.0667 65.7025 42.8866C65.7154 42.7066 65.6628 42.5279 65.5545 42.3835L64.3357 40.759C64.5387 40.3638 64.7091 39.9527 64.845 39.5297L66.8565 39.2425C67.0351 39.2169 67.1986 39.1277 67.3168 38.9913C67.435 38.8549 67.5 38.6805 67.5 38.5V35.5C67.5 35.3195 67.435 35.1451 67.3168 35.0087C67.1986 34.8723 67.0351 34.7831 66.8565 34.7575ZM66 37.8497L64.1527 38.1138C64.0059 38.1348 63.8686 38.1989 63.7582 38.2979C63.6478 38.397 63.5693 38.5266 63.5325 38.6702C63.3742 39.2916 63.1274 39.8869 62.7998 40.438C62.724 40.5658 62.6879 40.7132 62.696 40.8616C62.7042 41.0099 62.7562 41.1525 62.8455 41.2712L63.9645 42.7638L62.7645 43.9637L61.2712 42.8447C61.1525 42.7557 61.01 42.7039 60.8618 42.6959C60.7136 42.6879 60.5664 42.724 60.4387 42.7997C59.8881 43.1274 59.2929 43.3737 58.6718 43.531C58.5277 43.5676 58.3977 43.6461 58.2984 43.7567C58.199 43.8672 58.1348 44.0048 58.1138 44.152L57.8497 46H56.1503L55.887 44.1528C55.866 44.0056 55.8017 43.868 55.7024 43.7574C55.603 43.6469 55.4731 43.5683 55.329 43.5317C54.7078 43.3745 54.1127 43.1282 53.562 42.8005C53.4344 42.7248 53.2871 42.6887 53.1389 42.6967C52.9907 42.7047 52.8482 42.7565 52.7295 42.8455L51.2362 43.9645L50.0363 42.7645L51.1553 41.272C51.2446 41.1533 51.2966 41.0107 51.3047 40.8623C51.3129 40.714 51.2768 40.5666 51.201 40.4387C50.8733 39.8876 50.6266 39.2923 50.4683 38.671C50.4315 38.5273 50.3529 38.3977 50.2425 38.2987C50.1321 38.1996 49.9948 38.1355 49.848 38.1145L48 37.8497V36.1502L49.8473 35.8863C49.9941 35.8652 50.1314 35.8011 50.2418 35.7021C50.3522 35.603 50.4307 35.4734 50.4675 35.3298C50.6258 34.7084 50.8726 34.1131 51.2002 33.562C51.276 33.4342 51.3121 33.2868 51.304 33.1384C51.2958 32.9901 51.2438 32.8475 51.1545 32.7288L50.0355 31.2362L51.2355 30.0363L52.7288 31.1552C52.8475 31.2443 52.99 31.2961 53.1382 31.3041C53.2864 31.3121 53.4336 31.276 53.5613 31.2003C54.1119 30.8726 54.7071 30.6263 55.3282 30.469C55.4723 30.4324 55.6023 30.3539 55.7016 30.2433C55.801 30.1328 55.8652 29.9952 55.8862 29.848L56.1503 28H57.8497L58.113 29.8472C58.134 29.9944 58.1983 30.132 58.2976 30.2426C58.397 30.3531 58.5269 30.4317 58.671 30.4682C59.2922 30.6255 59.8873 30.8718 60.438 31.1995C60.5656 31.2752 60.7129 31.3113 60.8611 31.3033C61.0093 31.2953 61.1518 31.2435 61.2705 31.1545L62.7638 30.0355L63.9637 31.2355L62.8447 32.728C62.7554 32.8467 62.7034 32.9893 62.6953 33.1377C62.6871 33.286 62.7232 33.4334 62.799 33.5612C63.1267 34.1124 63.3734 34.7077 63.5317 35.329C63.5685 35.4727 63.6471 35.6023 63.7575 35.7013C63.8679 35.8004 64.0052 35.8645 64.152 35.8855L66 36.1502V37.8497Z" fill="#542AC4"/>
<path d="M57 32.5C56.11 32.5 55.24 32.7639 54.4999 33.2584C53.7599 33.7529 53.1831 34.4557 52.8425 35.2779C52.5019 36.1002 52.4128 37.005 52.5865 37.8779C52.7601 38.7508 53.1887 39.5526 53.818 40.182C54.4474 40.8113 55.2492 41.2399 56.1221 41.4135C56.995 41.5872 57.8998 41.4981 58.7221 41.1575C59.5443 40.8169 60.2471 40.2401 60.7416 39.5001C61.2361 38.76 61.5 37.89 61.5 37C61.4988 35.8069 61.0243 34.663 60.1807 33.8193C59.337 32.9757 58.1931 32.5012 57 32.5ZM57 40C56.4067 40 55.8266 39.8241 55.3333 39.4944C54.8399 39.1648 54.4554 38.6962 54.2284 38.148C54.0013 37.5999 53.9419 36.9967 54.0576 36.4147C54.1734 35.8328 54.4591 35.2982 54.8787 34.8787C55.2982 34.4591 55.8328 34.1734 56.4147 34.0576C56.9967 33.9419 57.5999 34.0013 58.1481 34.2284C58.6962 34.4554 59.1648 34.8399 59.4944 35.3333C59.8241 35.8266 60 36.4067 60 37C60 37.7956 59.6839 38.5587 59.1213 39.1213C58.5587 39.6839 57.7957 40 57 40Z" fill="#542AC4"/>
<path d="M60 55H24V36.25C24 35.6533 24.2371 35.081 24.659 34.659C25.081 34.2371 25.6533 34 26.25 34H47.25V32.5H26.25C25.2558 32.5012 24.3027 32.8967 23.5997 33.5997C22.8967 34.3027 22.5012 35.2558 22.5 36.25V58.75C22.5012 59.7442 22.8967 60.6973 23.5997 61.4003C24.3027 62.1033 25.2558 62.4988 26.25 62.5H35.9003L35.3378 67H33.75C33.3522 67 32.9706 67.158 32.6893 67.4393C32.408 67.7206 32.25 68.1022 32.25 68.5V70C32.25 70.3978 32.408 70.7794 32.6893 71.0607C32.9706 71.342 33.3522 71.5 33.75 71.5H50.25C50.6478 71.5 51.0294 71.342 51.3107 71.0607C51.592 70.7794 51.75 70.3978 51.75 70V68.5C51.75 68.1022 51.592 67.7206 51.3107 67.4393C51.0294 67.158 50.6478 67 50.25 67H48.6623L48.0998 62.5H57.75C58.7442 62.4988 59.6973 62.1033 60.4003 61.4003C61.1033 60.6973 61.4988 59.7442 61.5 58.75V46.75H60V55ZM50.25 70H33.75V68.5H50.25V70ZM47.1502 67H36.8497L37.4122 62.5H46.5877L47.1502 67ZM57.75 61H26.25C25.6533 61 25.081 60.7629 24.659 60.341C24.2371 59.919 24 59.3467 24 58.75V56.5H60V58.75C60 59.3467 59.7629 59.919 59.341 60.341C58.919 60.7629 58.3467 61 57.75 61Z" fill="#542AC4"/>
<path d="M55.5 58H57V59.5H55.5V58Z" fill="#542AC4"/>
</svg>




                <div class="advantage__card">
                    <span class="advantage__title1">
                    Программист
                    </span>
                    <span class="advantage__text1">
                    Занимается технической составляющей,<br> подключением модулей, чатов, программ.
                    </span>
                </div>
            </div>

            <div class="col-sm-4">
            
<svg width="89" height="88" viewBox="0 0 89 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.3613 3.01261C-7.62939 15.7992 -3.15655 72.9122 19.6142 85.2725C42.385 97.6328 88.3333 65.2402 88.3333 43.077C88.3333 20.9137 40.3519 -9.77395 16.3613 3.01261Z" fill="#6430E8"/>
<g clip-path="url(#clip0_574_9941)">
<mask id="path-2-inside-1_574_9941" fill="white">
<path d="M61.0833 26H17.5833C16.3428 26 15.3333 27.0095 15.3333 28.25V59.75C15.3333 60.9905 16.3428 62 17.5833 62H61.0833C62.3238 62 63.3333 60.9905 63.3333 59.75V28.25C63.3333 27.0095 62.3238 26 61.0833 26ZM17.5833 27.5H61.0833C61.4965 27.5 61.8333 27.8368 61.8333 28.25V32H16.8333V28.25C16.8333 27.8368 17.17 27.5 17.5833 27.5ZM61.0833 60.5H17.5833C17.17 60.5 16.8333 60.1632 16.8333 59.75V33.5H61.8333V59.75C61.8333 60.1632 61.4965 60.5 61.0833 60.5Z"/>
</mask>
<path d="M61.0833 26H17.5833C16.3428 26 15.3333 27.0095 15.3333 28.25V59.75C15.3333 60.9905 16.3428 62 17.5833 62H61.0833C62.3238 62 63.3333 60.9905 63.3333 59.75V28.25C63.3333 27.0095 62.3238 26 61.0833 26ZM17.5833 27.5H61.0833C61.4965 27.5 61.8333 27.8368 61.8333 28.25V32H16.8333V28.25C16.8333 27.8368 17.17 27.5 17.5833 27.5ZM61.0833 60.5H17.5833C17.17 60.5 16.8333 60.1632 16.8333 59.75V33.5H61.8333V59.75C61.8333 60.1632 61.4965 60.5 61.0833 60.5Z" fill="white"/>
<path d="M61.8333 32V40H69.8333V32H61.8333ZM16.8333 32H8.83325V40H16.8333V32ZM16.8333 33.5V25.5H8.83325V33.5H16.8333ZM61.8333 33.5H69.8333V25.5H61.8333V33.5ZM61.0833 18H17.5833V34H61.0833V18ZM17.5833 18C11.9245 18 7.33325 22.5912 7.33325 28.25H23.3333C23.3333 31.4278 20.761 34 17.5833 34V18ZM7.33325 28.25V59.75H23.3333V28.25H7.33325ZM7.33325 59.75C7.33325 65.4088 11.9245 70 17.5833 70V54C20.761 54 23.3333 56.5722 23.3333 59.75H7.33325ZM17.5833 70H61.0833V54H17.5833V70ZM61.0833 70C66.742 70 71.3333 65.4088 71.3333 59.75H55.3333C55.3333 56.5722 57.9055 54 61.0833 54V70ZM71.3333 59.75V28.25H55.3333V59.75H71.3333ZM71.3333 28.25C71.3333 22.5912 66.742 18 61.0833 18V34C57.9055 34 55.3333 31.4278 55.3333 28.25H71.3333ZM17.5833 35.5H61.0833V19.5H17.5833V35.5ZM61.0833 35.5C57.0782 35.5 53.8333 32.255 53.8333 28.25H69.8333C69.8333 23.4185 65.9148 19.5 61.0833 19.5V35.5ZM53.8333 28.25V32H69.8333V28.25H53.8333ZM61.8333 24H16.8333V40H61.8333V24ZM24.8333 32V28.25H8.83325V32H24.8333ZM24.8333 28.25C24.8333 32.255 21.5883 35.5 17.5833 35.5V19.5C12.7517 19.5 8.83325 23.4185 8.83325 28.25H24.8333ZM61.0833 52.5H17.5833V68.5H61.0833V52.5ZM17.5833 52.5C21.5883 52.5 24.8333 55.745 24.8333 59.75H8.83325C8.83325 64.5815 12.7517 68.5 17.5833 68.5V52.5ZM24.8333 59.75V33.5H8.83325V59.75H24.8333ZM16.8333 41.5H61.8333V25.5H16.8333V41.5ZM53.8333 33.5V59.75H69.8333V33.5H53.8333ZM53.8333 59.75C53.8333 55.745 57.0782 52.5 61.0833 52.5V68.5C65.9148 68.5 69.8333 64.5815 69.8333 59.75H53.8333Z" fill="white" mask="url(#path-2-inside-1_574_9941)"/>
<path d="M20.5833 30.5C20.9975 30.5 21.3333 30.1642 21.3333 29.75C21.3333 29.3358 20.9975 29 20.5833 29C20.169 29 19.8333 29.3358 19.8333 29.75C19.8333 30.1642 20.169 30.5 20.5833 30.5Z" fill="white" stroke="white" stroke-width="8"/>
<path d="M23.5833 30.5C23.9975 30.5 24.3333 30.1642 24.3333 29.75C24.3333 29.3358 23.9975 29 23.5833 29C23.169 29 22.8333 29.3358 22.8333 29.75C22.8333 30.1642 23.169 30.5 23.5833 30.5Z" fill="white" stroke="white" stroke-width="8"/>
<path d="M26.5833 30.5C26.9975 30.5 27.3333 30.1642 27.3333 29.75C27.3333 29.3358 26.9975 29 26.5833 29C26.169 29 25.8333 29.3358 25.8333 29.75C25.8333 30.1642 26.169 30.5 26.5833 30.5Z" fill="white"/>
<path d="M41.986 50.6262C43.1035 49.8065 43.8333 48.4887 43.8333 47C43.8333 44.5182 41.815 42.5 39.3333 42.5C36.8515 42.5 34.8333 44.5182 34.8333 47C34.8333 48.4887 35.563 49.8072 36.6798 50.6262C34.7005 51.608 33.3333 53.645 33.3333 56V58.25C33.3333 58.664 33.6693 59 34.0833 59H44.5833C44.9973 59 45.3333 58.664 45.3333 58.25V56C45.3333 53.645 43.966 51.608 41.986 50.6262ZM36.3333 47C36.3333 45.3455 37.6788 44 39.3333 44C40.9878 44 42.3333 45.3455 42.3333 47C42.3333 48.6545 40.9878 50 39.3333 50C37.6788 50 36.3333 48.6545 36.3333 47ZM43.8333 57.5H34.8333V56C34.8333 53.5182 36.8515 51.5 39.3333 51.5C41.815 51.5 43.8333 53.5182 43.8333 56V57.5Z" fill="white"/>
<path d="M38.3634 37.7804L38.5832 37.5607V40.2502C38.5832 40.6642 38.9192 41.0002 39.3332 41.0002C39.7472 41.0002 40.0832 40.6642 40.0832 40.2502V37.5607L40.3029 37.7804C40.4492 37.9267 40.6412 38.0002 40.8332 38.0002C41.0252 38.0002 41.2172 37.9267 41.3634 37.7804C41.6567 37.4872 41.6567 37.0132 41.3634 36.7199L39.8634 35.2199C39.5702 34.9267 39.0962 34.9267 38.8029 35.2199L37.3029 36.7199C37.0097 37.0132 37.0097 37.4872 37.3029 37.7804C37.5962 38.0737 38.0702 38.0737 38.3634 37.7804Z" fill="white"/>
<path d="M53.3635 50.2199C53.0703 49.9267 52.5963 49.9267 52.303 50.2199C52.0098 50.5132 52.0098 50.9872 52.303 51.2804L52.5228 51.5002H49.8333C49.4193 51.5002 49.0833 51.8362 49.0833 52.2502C49.0833 52.6642 49.4193 53.0002 49.8333 53.0002H52.5228L52.303 53.2199C52.0098 53.5132 52.0098 53.9872 52.303 54.2804C52.4493 54.4267 52.6413 54.5002 52.8333 54.5002C53.0253 54.5002 53.2173 54.4267 53.3635 54.2804L54.8635 52.7804C55.1568 52.4872 55.1568 52.0132 54.8635 51.7199L53.3635 50.2199Z" fill="white"/>
<path d="M28.8332 51.5002H26.1437L26.3634 51.2804C26.6567 50.9872 26.6567 50.5132 26.3634 50.2199C26.0702 49.9267 25.5962 49.9267 25.3029 50.2199L23.8029 51.7199C23.5097 52.0132 23.5097 52.4872 23.8029 52.7804L25.3029 54.2804C25.4492 54.4267 25.6412 54.5002 25.8332 54.5002C26.0252 54.5002 26.2172 54.4267 26.3634 54.2804C26.6567 53.9872 26.6567 53.5132 26.3634 53.2199L26.1437 53.0002H28.8332C29.2472 53.0002 29.5832 52.6642 29.5832 52.2502C29.5832 51.8362 29.2472 51.5002 28.8332 51.5002Z" fill="white"/>
<path d="M57.3333 35H46.8333C46.006 35 45.3333 35.6727 45.3333 36.5V44C45.3333 44.8273 46.006 45.5 46.8333 45.5H48.3333V47.75C48.3333 48.0267 48.4855 48.281 48.7293 48.4115C48.8395 48.4707 48.9618 48.5 49.0833 48.5C49.2288 48.5 49.3735 48.4573 49.4995 48.374L53.8105 45.5H57.3333C58.1605 45.5 58.8333 44.8273 58.8333 44V36.5C58.8333 35.6727 58.1605 35 57.3333 35ZM57.3333 44H53.5833C53.4355 44 53.29 44.0442 53.167 44.126L49.8333 46.3483V44.75C49.8333 44.336 49.4973 44 49.0833 44H46.8333V36.5H57.3333V44Z" fill="white"/>
<path d="M49.0833 39.5H55.0833C55.4973 39.5 55.8333 39.164 55.8333 38.75C55.8333 38.336 55.4973 38 55.0833 38H49.0833C48.6693 38 48.3333 38.336 48.3333 38.75C48.3333 39.164 48.6693 39.5 49.0833 39.5Z" fill="white"/>
<path d="M49.0833 42.5H52.8333C53.2473 42.5 53.5833 42.164 53.5833 41.75C53.5833 41.336 53.2473 41 52.8333 41H49.0833C48.6693 41 48.3333 41.336 48.3333 41.75C48.3333 42.164 48.6693 42.5 49.0833 42.5Z" fill="white"/>
<path d="M33.3333 36.5C33.3333 35.6727 32.6605 35 31.8333 35H21.3333C20.506 35 19.8333 35.6727 19.8333 36.5V44C19.8333 44.8273 20.506 45.5 21.3333 45.5H24.856L29.167 48.374C29.2923 48.458 29.4378 48.5 29.5833 48.5C29.7048 48.5 29.8263 48.4707 29.9373 48.4115C30.181 48.281 30.3333 48.0267 30.3333 47.75V45.5H31.8333C32.6605 45.5 33.3333 44.8273 33.3333 44V36.5ZM31.8333 44H29.5833C29.1693 44 28.8333 44.336 28.8333 44.75V46.3483L25.4995 44.126C25.3765 44.0442 25.2318 44 25.0833 44H21.3333V36.5L31.8333 36.4985V44Z" fill="white"/>
<path d="M23.5833 39.5H29.5833C29.9973 39.5 30.3333 39.164 30.3333 38.75C30.3333 38.336 29.9973 38 29.5833 38H23.5833C23.1693 38 22.8333 38.336 22.8333 38.75C22.8333 39.164 23.1693 39.5 23.5833 39.5Z" fill="white"/>
<path d="M29.5833 41H25.8333C25.4193 41 25.0833 41.336 25.0833 41.75C25.0833 42.164 25.4193 42.5 25.8333 42.5H29.5833C29.9973 42.5 30.3333 42.164 30.3333 41.75C30.3333 41.336 29.9973 41 29.5833 41Z" fill="white"/>
</g>
<defs>
<clipPath id="clip0_574_9941">
<rect width="48" height="48" fill="white" transform="translate(15.3333 20)"/>
</clipPath>
</defs>
</svg>



                <div class="advantage__card">
                    <span class="advantage__title1">
                    Аккаунт-менеджер
                    </span>
                    <span class="advantage__text1">
                    На аккаунт-менеджера возлагается обязанность<br> консультировать заказчика работ по всем<br> вопросам.
                    </span>
                </div>
            </div>

            <div class="col-sm-4">
            
<svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M85.6541 17.028C72.8676 -6.96265 15.7545 -2.48981 3.39422 20.281C-8.96606 43.0518 23.4266 89 45.5898 89C67.753 89 98.4407 41.0187 85.6541 17.028Z" stroke="#542AC4"/>
<mask id="path-2-inside-1_574_9961" fill="white">
<path d="M35.796 19.4121H26.2666C25.0666 19.4121 24.0784 20.4003 24.0784 21.6003V31.1298C24.0784 32.3298 25.0666 33.318 26.2666 33.318H35.796C36.996 33.318 37.9843 32.3298 37.9843 31.1298V21.6003C37.9843 20.4003 36.996 19.4121 35.796 19.4121ZM28.2431 31.9062C28.3843 30.4945 29.5843 29.4356 31.0666 29.4356C32.4784 29.4356 33.6784 30.4945 33.8195 31.9062H28.2431ZM36.5725 31.1298C36.5725 31.5533 36.2195 31.9062 35.796 31.9062H35.2313C35.0901 29.718 33.2548 28.0239 30.996 28.0239C28.8078 28.0239 26.9725 29.718 26.7607 31.9062H26.2666C25.8431 31.9062 25.4901 31.5533 25.4901 31.1298V21.6003C25.4901 21.1768 25.8431 20.8239 26.2666 20.8239H35.796C36.2195 20.8239 36.5725 21.1768 36.5725 21.6003V31.1298Z"/>
</mask>
<path d="M35.796 19.4121H26.2666C25.0666 19.4121 24.0784 20.4003 24.0784 21.6003V31.1298C24.0784 32.3298 25.0666 33.318 26.2666 33.318H35.796C36.996 33.318 37.9843 32.3298 37.9843 31.1298V21.6003C37.9843 20.4003 36.996 19.4121 35.796 19.4121ZM28.2431 31.9062C28.3843 30.4945 29.5843 29.4356 31.0666 29.4356C32.4784 29.4356 33.6784 30.4945 33.8195 31.9062H28.2431ZM36.5725 31.1298C36.5725 31.5533 36.2195 31.9062 35.796 31.9062H35.2313C35.0901 29.718 33.2548 28.0239 30.996 28.0239C28.8078 28.0239 26.9725 29.718 26.7607 31.9062H26.2666C25.8431 31.9062 25.4901 31.5533 25.4901 31.1298V21.6003C25.4901 21.1768 25.8431 20.8239 26.2666 20.8239H35.796C36.2195 20.8239 36.5725 21.1768 36.5725 21.6003V31.1298Z" fill="#542AC4"/>
<path d="M28.2431 31.9062L20.751 31.157L19.9232 39.4356H28.2431V31.9062ZM33.8195 31.9062V39.4356H42.1395L41.3116 31.157L33.8195 31.9062ZM35.2313 31.9062L27.7175 32.391L28.172 39.4356H35.2313V31.9062ZM26.7607 31.9062V39.4356H33.5967L34.2551 32.6315L26.7607 31.9062ZM35.796 11.8827H26.2666V26.9415H35.796V11.8827ZM26.2666 11.8827C20.9082 11.8827 16.549 16.242 16.549 21.6003H31.6078C31.6078 24.5587 29.225 26.9415 26.2666 26.9415V11.8827ZM16.549 21.6003V31.1298H31.6078V21.6003H16.549ZM16.549 31.1298C16.549 36.4881 20.9082 40.8474 26.2666 40.8474V25.7886C29.225 25.7886 31.6078 28.1714 31.6078 31.1298H16.549ZM26.2666 40.8474H35.796V25.7886H26.2666V40.8474ZM35.796 40.8474C41.1544 40.8474 45.5137 36.4881 45.5137 31.1298H30.4548C30.4548 28.1714 32.8376 25.7886 35.796 25.7886V40.8474ZM45.5137 31.1298V21.6003H30.4548V31.1298H45.5137ZM45.5137 21.6003C45.5137 16.242 41.1544 11.8827 35.796 11.8827V26.9415C32.8376 26.9415 30.4548 24.5587 30.4548 21.6003H45.5137ZM35.7351 32.6554C35.4707 35.2997 33.2409 36.9651 31.0666 36.9651V21.9062C25.9276 21.9062 21.2978 25.6893 20.751 31.157L35.7351 32.6554ZM31.0666 36.9651C28.7013 36.9651 26.5802 35.1828 26.3275 32.6554L41.3116 31.157C40.7765 25.8062 36.2554 21.9062 31.0666 21.9062V36.9651ZM33.8195 24.3768H28.2431V39.4356H33.8195V24.3768ZM29.0431 31.1298C29.0431 27.3949 32.0612 24.3768 35.796 24.3768V39.4356C40.3779 39.4356 44.1019 35.7117 44.1019 31.1298H29.0431ZM35.796 24.3768H35.2313V39.4356H35.796V24.3768ZM42.7451 31.4215C42.3393 25.1322 37.0841 20.4945 30.996 20.4945V35.5533C29.4256 35.5533 27.8409 34.3038 27.7175 32.391L42.7451 31.4215ZM30.996 20.4945C24.8514 20.4945 19.8439 25.2123 19.2663 31.181L34.2551 32.6315C34.101 34.2236 32.7641 35.5533 30.996 35.5533V20.4945ZM26.7607 24.3768H26.2666V39.4356H26.7607V24.3768ZM26.2666 24.3768C30.0015 24.3768 33.0195 27.3949 33.0195 31.1298H17.9607C17.9607 35.7117 21.6847 39.4356 26.2666 39.4356V24.3768ZM33.0195 31.1298V21.6003H17.9607V31.1298H33.0195ZM33.0195 21.6003C33.0195 25.3352 30.0015 28.3533 26.2666 28.3533V13.2945C21.6847 13.2945 17.9607 17.0184 17.9607 21.6003H33.0195ZM26.2666 28.3533H35.796V13.2945H26.2666V28.3533ZM35.796 28.3533C32.0612 28.3533 29.0431 25.3352 29.0431 21.6003H44.1019C44.1019 17.0184 40.3779 13.2945 35.796 13.2945V28.3533ZM29.0431 21.6003V31.1298H44.1019V21.6003H29.0431Z" fill="#542AC4" mask="url(#path-2-inside-1_574_9961)"/>
<mask id="path-4-inside-2_574_9961" fill="white">
<path d="M31.0666 22.165C29.6548 22.165 28.4548 23.365 28.4548 24.7768C28.4548 26.1886 29.6548 27.3886 31.0666 27.3886C32.4784 27.3886 33.6784 26.1886 33.6784 24.7768C33.6784 23.365 32.4784 22.165 31.0666 22.165ZM31.0666 25.9768C30.4313 25.9768 29.8666 25.4121 29.8666 24.7768C29.8666 24.1415 30.4313 23.5768 31.0666 23.5768C31.7019 23.5768 32.2666 24.1415 32.2666 24.7768C32.2666 25.4121 31.7019 25.9768 31.0666 25.9768Z"/>
</mask>
<path d="M31.0666 22.165C29.6548 22.165 28.4548 23.365 28.4548 24.7768C28.4548 26.1886 29.6548 27.3886 31.0666 27.3886C32.4784 27.3886 33.6784 26.1886 33.6784 24.7768C33.6784 23.365 32.4784 22.165 31.0666 22.165ZM31.0666 25.9768C30.4313 25.9768 29.8666 25.4121 29.8666 24.7768C29.8666 24.1415 30.4313 23.5768 31.0666 23.5768C31.7019 23.5768 32.2666 24.1415 32.2666 24.7768C32.2666 25.4121 31.7019 25.9768 31.0666 25.9768Z" fill="#542AC4"/>
<path d="M31.0666 14.6356C25.4965 14.6356 20.9254 19.2067 20.9254 24.7768H35.9842C35.9842 27.5234 33.8132 29.6945 31.0666 29.6945V14.6356ZM20.9254 24.7768C20.9254 30.3469 25.4965 34.918 31.0666 34.918V19.8592C33.8132 19.8592 35.9842 22.0302 35.9842 24.7768H20.9254ZM31.0666 34.918C36.6367 34.918 41.2078 30.347 41.2078 24.7768H26.149C26.149 22.0302 28.32 19.8592 31.0666 19.8592V34.918ZM41.2078 24.7768C41.2078 19.2067 36.6367 14.6356 31.0666 14.6356V29.6945C28.32 29.6945 26.149 27.5234 26.149 24.7768H41.2078ZM31.0666 18.4474C32.9926 18.4474 34.5456 19.2841 35.5525 20.2909C36.5593 21.2978 37.396 22.8508 37.396 24.7768H22.3372C22.3372 29.5705 26.2729 33.5062 31.0666 33.5062V18.4474ZM37.396 24.7768C37.396 26.7028 36.5593 28.2558 35.5525 29.2627C34.5456 30.2695 32.9926 31.1062 31.0666 31.1062V16.0474C26.2729 16.0474 22.3372 19.9831 22.3372 24.7768H37.396ZM31.0666 31.1062C29.1406 31.1062 27.5876 30.2695 26.5807 29.2627C25.5739 28.2558 24.7372 26.7028 24.7372 24.7768H39.796C39.796 19.9831 35.8603 16.0474 31.0666 16.0474V31.1062ZM24.7372 24.7768C24.7372 22.8508 25.5739 21.2978 26.5807 20.2909C27.5876 19.2841 29.1406 18.4474 31.0666 18.4474V33.5062C35.8603 33.5062 39.796 29.5705 39.796 24.7768H24.7372Z" fill="#542AC4" mask="url(#path-4-inside-2_574_9961)"/>
<mask id="path-6-inside-3_574_9961" fill="white">
<path d="M67.0665 19.4121H57.5371C56.3371 19.4121 55.3489 20.4003 55.3489 21.6003V31.1298C55.3489 32.3298 56.3371 33.318 57.5371 33.318H67.0665C68.2665 33.318 69.2548 32.3298 69.2548 31.1298V21.6003C69.2548 20.4003 68.2665 19.4121 67.0665 19.4121ZM59.5136 31.9062C59.6548 30.4945 60.8548 29.4356 62.3371 29.4356C63.7489 29.4356 64.9489 30.4945 65.0901 31.9062H59.5136ZM67.843 31.1298C67.843 31.5533 67.4901 31.9062 67.0665 31.9062H66.5018C66.3606 29.718 64.5253 28.0239 62.2665 28.0239C60.0783 28.0239 58.243 29.718 58.0312 31.9062H57.4665C57.043 31.9062 56.6901 31.5533 56.6901 31.1298V21.6003C56.6901 21.1768 57.043 20.8239 57.4665 20.8239H66.9959C67.4901 20.8239 67.843 21.1768 67.843 21.6003V31.1298Z"/>
</mask>
<path d="M67.0665 19.4121H57.5371C56.3371 19.4121 55.3489 20.4003 55.3489 21.6003V31.1298C55.3489 32.3298 56.3371 33.318 57.5371 33.318H67.0665C68.2665 33.318 69.2548 32.3298 69.2548 31.1298V21.6003C69.2548 20.4003 68.2665 19.4121 67.0665 19.4121ZM59.5136 31.9062C59.6548 30.4945 60.8548 29.4356 62.3371 29.4356C63.7489 29.4356 64.9489 30.4945 65.0901 31.9062H59.5136ZM67.843 31.1298C67.843 31.5533 67.4901 31.9062 67.0665 31.9062H66.5018C66.3606 29.718 64.5253 28.0239 62.2665 28.0239C60.0783 28.0239 58.243 29.718 58.0312 31.9062H57.4665C57.043 31.9062 56.6901 31.5533 56.6901 31.1298V21.6003C56.6901 21.1768 57.043 20.8239 57.4665 20.8239H66.9959C67.4901 20.8239 67.843 21.1768 67.843 21.6003V31.1298Z" fill="#542AC4"/>
<path d="M59.5136 31.9062L52.0215 31.157L51.1937 39.4356H59.5136V31.9062ZM65.0901 31.9062V39.4356H73.41L72.5821 31.157L65.0901 31.9062ZM66.5018 31.9062L58.988 32.391L59.4425 39.4356H66.5018V31.9062ZM58.0312 31.9062V39.4356H64.8672L65.5256 32.6315L58.0312 31.9062ZM67.0665 11.8827H57.5371V26.9415H67.0665V11.8827ZM57.5371 11.8827C52.1787 11.8827 47.8195 16.242 47.8195 21.6003H62.8783C62.8783 24.5587 60.4955 26.9415 57.5371 26.9415V11.8827ZM47.8195 21.6003V31.1298H62.8783V21.6003H47.8195ZM47.8195 31.1298C47.8195 36.4881 52.1787 40.8474 57.5371 40.8474V25.7886C60.4955 25.7886 62.8783 28.1714 62.8783 31.1298H47.8195ZM57.5371 40.8474H67.0665V25.7886H57.5371V40.8474ZM67.0665 40.8474C72.4249 40.8474 76.7842 36.4881 76.7842 31.1298H61.7253C61.7253 28.1714 64.1081 25.7886 67.0665 25.7886V40.8474ZM76.7842 31.1298V21.6003H61.7253V31.1298H76.7842ZM76.7842 21.6003C76.7842 16.242 72.4249 11.8827 67.0665 11.8827V26.9415C64.1081 26.9415 61.7253 24.5587 61.7253 21.6003H76.7842ZM67.0056 32.6554C66.7412 35.2997 64.5114 36.9651 62.3371 36.9651V21.9062C57.1981 21.9062 52.5683 25.6893 52.0215 31.157L67.0056 32.6554ZM62.3371 36.9651C59.9718 36.9651 57.8507 35.1828 57.598 32.6554L72.5821 31.157C72.047 25.8062 67.526 21.9062 62.3371 21.9062V36.9651ZM65.0901 24.3768H59.5136V39.4356H65.0901V24.3768ZM60.3136 31.1298C60.3136 27.3949 63.3317 24.3768 67.0665 24.3768V39.4356C71.6485 39.4356 75.3724 35.7116 75.3724 31.1298H60.3136ZM67.0665 24.3768H66.5018V39.4356H67.0665V24.3768ZM74.0156 31.4215C73.6098 25.1322 68.3546 20.4945 62.2665 20.4945V35.5533C60.6961 35.5533 59.1114 34.3038 58.988 32.391L74.0156 31.4215ZM62.2665 20.4945C56.1219 20.4945 51.1144 25.2123 50.5368 31.181L65.5256 32.6315C65.3716 34.2236 64.0347 35.5533 62.2665 35.5533V20.4945ZM58.0312 24.3768H57.4665V39.4356H58.0312V24.3768ZM57.4665 24.3768C61.2014 24.3768 64.2195 27.3949 64.2195 31.1298H49.1606C49.1606 35.7116 52.8846 39.4356 57.4665 39.4356V24.3768ZM64.2195 31.1298V21.6003H49.1606V31.1298H64.2195ZM64.2195 21.6003C64.2195 25.3352 61.2014 28.3533 57.4665 28.3533V13.2945C52.8846 13.2945 49.1606 17.0184 49.1606 21.6003H64.2195ZM57.4665 28.3533H66.9959V13.2945H57.4665V28.3533ZM66.9959 28.3533C63.7682 28.3533 60.3136 25.7587 60.3136 21.6003H75.3724C75.3724 16.5949 71.2119 13.2945 66.9959 13.2945V28.3533ZM60.3136 21.6003V31.1298H75.3724V21.6003H60.3136Z" fill="#542AC4" mask="url(#path-6-inside-3_574_9961)"/>
<path d="M62.2665 22.165C60.8548 22.165 59.6548 23.365 59.6548 24.7768C59.6548 26.1886 60.8548 27.3886 62.2665 27.3886C63.6783 27.3886 64.8783 26.1886 64.8783 24.7768C64.8783 23.365 63.7489 22.165 62.2665 22.165ZM62.2665 25.9768C61.6313 25.9768 61.0665 25.4121 61.0665 24.7768C61.0665 24.1415 61.6313 23.5768 62.2665 23.5768C62.9018 23.5768 63.4665 24.1415 63.4665 24.7768C63.4665 25.4121 62.9724 25.9768 62.2665 25.9768Z" fill="#542AC4"/>
<path d="M24.0784 62.4003C24.0784 63.6003 25.0666 64.5885 26.2666 64.5885H35.796C36.996 64.5885 37.9843 63.6003 37.9843 62.4003V52.8709C37.9843 51.6709 36.996 50.6826 35.796 50.6826H26.2666C25.0666 50.6826 24.0784 51.6709 24.0784 52.8709V62.4003ZM28.2431 63.1767C28.3843 61.765 29.5843 60.7061 31.0666 60.7061C32.4784 60.7061 33.6784 61.765 33.8195 63.1767H28.2431ZM25.4901 52.8709C25.4901 52.4473 25.8431 52.0944 26.2666 52.0944H35.796C36.2195 52.0944 36.5725 52.4473 36.5725 52.8709V62.4003C36.5725 62.8238 36.2195 63.1767 35.796 63.1767H35.2313C35.0901 60.9885 33.2548 59.2944 30.996 59.2944C28.8078 59.2944 26.9725 60.9885 26.7607 63.1767H26.2666C25.8431 63.1767 25.4901 62.8238 25.4901 62.4003V52.8709Z" fill="#542AC4"/>
<path d="M31.0666 58.6591C32.4784 58.6591 33.6784 57.4591 33.6784 56.0473C33.6784 54.6355 32.4784 53.4355 31.0666 53.4355C29.6548 53.4355 28.4548 54.6355 28.4548 56.0473C28.4548 57.4591 29.5842 58.6591 31.0666 58.6591ZM31.0666 54.8473C31.7019 54.8473 32.2666 55.412 32.2666 56.0473C32.2666 56.6826 31.7019 57.2473 31.0666 57.2473C30.4313 57.2473 29.8666 56.6826 29.8666 56.0473C29.8666 55.412 30.3607 54.8473 31.0666 54.8473Z" fill="#542AC4"/>
<path d="M67.0665 50.6826H57.5371C56.3371 50.6826 55.3489 51.6709 55.3489 52.8709V62.4003C55.3489 63.6003 56.3371 64.5885 57.5371 64.5885H67.0665C68.2665 64.5885 69.2548 63.6003 69.2548 62.4003V52.8709C69.2548 51.6709 68.2665 50.6826 67.0665 50.6826ZM59.5136 63.1767C59.6548 61.765 60.8548 60.7061 62.3371 60.7061C63.7489 60.7061 64.9489 61.765 65.0901 63.1767H59.5136ZM67.843 62.4003C67.843 62.8238 67.4901 63.1767 67.0665 63.1767H66.5018C66.3606 60.9885 64.5253 59.2944 62.2665 59.2944C60.0783 59.2944 58.243 60.9885 58.0312 63.1767H57.4665C57.043 63.1767 56.6901 62.8238 56.6901 62.4003V52.8709C56.6901 52.4473 57.043 52.0944 57.4665 52.0944H66.9959C67.4195 52.0944 67.7724 52.4473 67.7724 52.8709V62.4003H67.843Z" fill="#542AC4"/>
<path d="M62.2665 53.4355C60.8548 53.4355 59.6548 54.6355 59.6548 56.0473C59.6548 57.4591 60.8548 58.6591 62.2665 58.6591C63.6783 58.6591 64.8783 57.4591 64.8783 56.0473C64.8783 54.6355 63.7489 53.4355 62.2665 53.4355ZM62.2665 57.2473C61.6313 57.2473 61.0665 56.6826 61.0665 56.0473C61.0665 55.412 61.6313 54.8473 62.2665 54.8473C62.9018 54.8473 63.4665 55.412 63.4665 56.0473C63.4665 56.6826 62.9724 57.2473 62.2665 57.2473Z" fill="#542AC4"/>
<path d="M58.102 37.4119L56.3373 34.3766C56.1255 34.0942 55.7726 33.9531 55.4196 34.0942L53.0902 35.0825C52.0314 34.0942 50.7608 33.3178 49.349 32.8942L49.0667 30.3531C48.9961 30.0001 48.7137 29.7178 48.3608 29.7178H44.902C44.549 29.7178 44.2667 30.0001 44.1961 30.3531L43.9137 32.8942C42.502 33.3178 41.2314 34.0237 40.1726 35.0825L37.8432 34.0942C37.4902 33.9531 37.1373 34.0942 36.9255 34.3766L35.1608 37.4119C34.949 37.6942 35.0902 38.1178 35.3726 38.3295L37.4196 39.8825C37.0667 41.2942 37.0667 42.8472 37.4196 44.1884L35.3726 45.6707C35.0902 45.8825 35.0196 46.306 35.1608 46.5884L36.9255 49.6237C37.1373 49.906 37.4902 50.0472 37.8432 49.906L40.1726 48.9178C41.2314 49.906 42.502 50.6825 43.9137 51.106L44.1961 53.6472C44.2667 54.0001 44.549 54.2825 44.902 54.2825H48.3608C48.7137 54.2825 48.9961 54.0001 49.0667 53.6472L49.349 51.106C50.7608 50.6825 52.0314 49.9766 53.0902 48.9178L55.4196 49.906C55.7726 50.0472 56.1255 49.906 56.3373 49.6237L58.102 46.5884C58.3137 46.306 58.1726 45.8825 57.8902 45.6707L55.8432 44.1884C56.1961 42.7766 56.1961 41.2942 55.8432 39.8825L57.8902 38.3295C58.2432 38.1178 58.3137 37.6942 58.102 37.4119ZM54.6432 38.9648C54.4314 39.1766 54.2902 39.4589 54.4314 39.7413C54.8549 41.1531 54.8549 42.7766 54.4314 44.259C54.3608 44.5413 54.4314 44.8237 54.7137 45.0354L56.6196 46.4472L55.4902 48.3531L53.302 47.4354C53.0196 47.2942 52.7373 47.3648 52.5255 47.5766C51.4667 48.706 50.1255 49.4825 48.6432 49.8354C48.3608 49.906 48.149 50.1178 48.0784 50.4707L47.7961 52.8707H45.6079L45.2549 50.4001C45.2549 50.1178 44.9726 49.8354 44.6902 49.7648C43.2079 49.4119 41.8667 48.6354 40.8079 47.506C40.5961 47.2942 40.3137 47.2237 40.0314 47.3648L37.8432 48.3531L36.7843 46.4472L38.6902 45.0354C38.902 44.8237 39.0432 44.5413 38.9726 44.259C38.549 42.8472 38.549 41.2237 38.9726 39.7413C39.0432 39.4589 38.9726 39.1766 38.6902 38.9648L36.7843 37.5531L37.9137 35.6472L40.102 36.5648C40.3843 36.706 40.6667 36.6354 40.8784 36.4237C41.9373 35.2942 43.2784 34.5178 44.7608 34.1648C45.0431 34.0942 45.2549 33.8825 45.3255 33.5295L45.6079 31.1295H47.7961L48.0784 33.5295C48.0784 33.8119 48.3608 34.0942 48.6432 34.1648C50.1255 34.5178 51.4667 35.2942 52.5255 36.4237C52.7373 36.6354 53.0196 36.706 53.302 36.5648L55.4902 35.6472L56.6196 37.5531L54.6432 38.9648Z" fill="#542AC4"/>
<path d="M46.6666 35.2236C42.9254 35.2236 39.8901 38.2589 39.8901 42.0001C39.8901 46.0236 43.2078 48.8472 46.7372 48.7766C50.2666 48.7766 53.4431 45.8119 53.4431 42.0001C53.4431 38.2589 50.4078 35.2236 46.6666 35.2236ZM43.5607 46.3766C43.9137 44.9648 45.1843 43.906 46.6666 43.906C48.149 43.906 49.4195 44.9648 49.7725 46.3766C47.8666 47.7178 45.396 47.6472 43.5607 46.3766ZM45.396 41.2942C45.396 40.5883 45.9607 40.0236 46.6666 40.0236C47.3725 40.0236 47.9372 40.5883 47.9372 41.2942C47.9372 42.0001 47.3725 42.5648 46.6666 42.5648C45.9607 42.5648 45.396 42.0001 45.396 41.2942ZM50.9019 45.3178C50.4784 44.3295 49.7019 43.4825 48.7137 42.9883C49.1372 42.4942 49.349 41.9295 49.349 41.2942C49.349 39.8119 48.149 38.6119 46.6666 38.6119C45.1843 38.6119 43.9843 39.8119 43.9843 41.2942C43.9843 41.9295 44.2666 42.5648 44.6195 42.9883C43.6313 43.4825 42.8548 44.2589 42.4313 45.3178C41.6548 44.3295 41.3019 43.2001 41.3019 42.0707C41.3019 39.3177 43.4901 36.6354 46.6666 36.6354C49.6313 36.6354 52.0313 39.0354 52.0313 42.0001C52.0313 43.2707 51.6078 44.4001 50.9019 45.3178Z" fill="#542AC4"/>
<path d="M67.2077 38.4713L68.0548 39.3183C68.3371 39.6007 68.7607 39.6007 69.043 39.3183C69.3254 39.036 69.3254 38.6125 69.043 38.3301L66.996 36.2831C66.7136 36.0007 66.2901 36.0007 66.0077 36.2831L63.9607 38.3301C63.6783 38.6125 63.6783 39.036 63.9607 39.3183C64.243 39.6007 64.6665 39.6007 64.9489 39.3183L65.796 38.4713V41.2948H58.7371C58.3136 41.2948 58.0312 41.5772 58.0312 42.0007C58.0312 42.4242 58.3136 42.7066 58.7371 42.7066H65.796V45.5301L65.0195 44.6831C64.7371 44.4007 64.3136 44.4007 64.0312 44.6831C63.7489 44.9654 63.7489 45.3889 64.0312 45.6713L66.0783 47.7183C66.3607 48.0007 66.7842 48.0007 67.0665 47.7183L69.1136 45.6713C69.396 45.3889 69.396 44.9654 69.1136 44.6831C68.8313 44.4007 68.4077 44.4007 68.1254 44.6831L67.2077 45.5301C67.2077 45.3889 67.2077 38.1889 67.2077 38.4713Z" fill="#542AC4"/>
<path d="M26.1255 45.5301L25.2784 44.6831C24.996 44.4007 24.5725 44.4007 24.2902 44.6831C24.0078 44.9654 24.0078 45.3889 24.2902 45.6713L26.3372 47.7183C26.6196 48.0007 27.0431 48.0007 27.3255 47.7183L29.3725 45.6713C29.6549 45.3889 29.6549 44.9654 29.3725 44.6831C29.0902 44.4007 28.6666 44.4007 28.3843 44.6831L27.5372 45.5301V42.7066H34.596C35.0196 42.7066 35.3019 42.4242 35.3019 42.0007C35.3019 41.5772 35.0196 41.2948 34.596 41.2948H27.5372V38.4713L28.3137 39.3183C28.596 39.6007 29.0196 39.6007 29.3019 39.3183C29.5843 39.036 29.5843 38.6125 29.3019 38.3301L27.2549 36.2831C26.9725 36.0007 26.549 36.0007 26.2666 36.2831L24.2196 38.3301C23.9372 38.6125 23.9372 39.036 24.2196 39.3183C24.5019 39.6007 24.9255 39.6007 25.2078 39.3183L26.1255 38.4713C26.1255 38.6125 26.1255 45.8125 26.1255 45.5301Z" fill="#542AC4"/>
</svg>




                <div class="advantage__card">
                    <span class="advantage__title1">
                    Контент-менеджер
                    </span>
                    <span class="advantage__text1">
                    Отвечает за создание, публикацию,<br> обновление, анализ контента на сайте,<br> заполнение карточек товаров<br> интернет-магазинов.
                    </span>
                </div>
            </div>

           
            
          
        </div>
    </div>
</section>

<!-- Top-page -->
<div class="top-page top-page--another bg--dark">
    <div class="top-page__decor"></div>
    <div class="top-page__body container">
        <div class="top-page__inner">
            <div class="top-page__info">
                <h1 class="top-page__heading title title--huge title--white title--w-extra-bold title--indent">
                    Выстроим маркетинговую систему для роста
                    выручки на <span class="top-page__accent-title title title--pink">30-100% за 6-12 месяцев</span>
                </h1>
                <div class="top-page__subtitle title title--big-medium title--white title--w-regular">
                    Предоставим Digital-маркетолога на аутсорсе
                </div>
                <ul class="top-page__list title title--medium title--white title--w-light">
                    <li class="top-page__item-list">
                        <img class="top-page__icon" src="<?= STANDART_DIR; ?>/img/top-page/top-page-1.svg" alt="">
                        Увеличим эффективность рекламных бюджетов на 30-50%
                    </li>
                    <li class="top-page__item-list">
                        <img class="top-page__icon" src="<?= STANDART_DIR; ?>/img/top-page/top-page-2.svg" alt="">
                        Оцифруем все показатели маркетинга и продаж  для полного контроля над бизнесом
                    </li>
                    <li class="top-page__item-list">
                        <img class="top-page__icon" src="<?= STANDART_DIR; ?>/img/top-page/top-page-3.svg" alt="">
                        Предоставим готовую команду  специалистов по маркетингу или усилим вашу
                    </li>
                </ul>
                <div class="top-page__action">
                    <a href="javascript:;" class="top-page__button button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Обсудить проект
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ Top-page -->

<section class="section__wrap grayback pb-1 pb-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 style="text-align:center;">Часто задаваемые вопросы</h2>
            </div>
        </div>
        <div class="row qa-elem">
            <div class="qa-title">
             Что включает в себя SEO продвижение сайта?
            </div>
            <div class="qa-content">
              Для продвижения интернет требует, чтобы площадка находилась в состоянии, отвечающем требованиям поисковых алгоритмов. Поэтому услуга включает аудит сайта (при необходимости создание сайта), SEO-оптимизацию, анализ статистики заходов, после получения результата — коррекцию первичной стратегии.
            </div>
        </div>
		<div class="row qa-elem">
            <div class="qa-title">
               Как делать SEO продвижение?
            </div>
            <div class="qa-content">
              Нужно составить бриф для клиента, проанализировать ресурс, определить стратегию ведения проекта, создать техническое задание для команды специалистов. После выполнения всех пунктов ТЗ проверяются результаты работы. На основе отчетов определяется дальнейшая стратегия.
            </div>
        </div>
		<div class="row qa-elem">
            <div class="qa-title">
               Что такое SEO?
            </div>
            <div class="qa-content">
             Дословно с английского — оптимизация сайта для поисковых машин. Если смотреть шире — бюджетный способ увеличить конверсию продаж.
            </div>
        </div>
        <div class="row qa-elem">
            <div class="qa-title">
              Сколько стоит заказать продвижение SEO?
            </div>
            <div class="qa-content">
             Стоимость продвижения сайта зависит от выбранной методики работы, начального состояния и вида онлайн-ресурса.
            </div>
        </div>
    </div>
</section>

<section class="section__wrap grayback pb-1 pb-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="mob-center">Другие услуги</h2>
            </div>
        </div>
        <div class="os-cards">
            <div class="col-sm-3 os-card">
                <h3>SEO продвижение по лидам<br></h3>
                <div class="os-card-content">
                    Продвижение сайта по лидам подразумевает, что заказчик оплачивает исключительно результат.
                </div>
                <div class="os-price">
                    от 60 000 ₽
                </div>
                <div class="os-btn">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Заказать
                    </a>
                </div>
                <div class="os-more">
                    <a href="/uslugi/seo-prodvizhenie/po-lidam/" class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.09009 8.99987C9.57552 7.61991 10.9855 6.79128 12.4273 7.03858C13.8691 7.28589 14.9223 8.53702 14.9201 9.99987C14.9201 11.9999 11.9201 12.9999 11.9201 12.9999" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="17" r="1" fill="#818181"/>
                        </svg>Подробнее
                    </a>
                </div>
            </div>
			<div class="col-sm-3 os-card">
                <h3>SEO продвижение по трафику</h3>
                <div class="os-card-content">
Такая методика позволяет меньше зависеть от поисковых алгоритмов и получать более стабильный результат.
                </div>
                <div class="os-price">
                    от 60 000 ₽
                </div>
                <div class="os-btn">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Заказать
                    </a>
                </div>
                <div class="os-more">
                    <a href="/uslugi/seo-prodvizhenie/po-trafiku/" class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.09009 8.99987C9.57552 7.61991 10.9855 6.79128 12.4273 7.03858C13.8691 7.28589 14.9223 8.53702 14.9201 9.99987C14.9201 11.9999 11.9201 12.9999 11.9201 12.9999" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="17" r="1" fill="#818181"/>
                        </svg>Подробнее
                    </a>
                </div>
            </div>
            <div class="col-sm-3 os-card">
                <h3>SEO продвижение в Яндекс</h3>
                <div class="os-card-content">
                  Продвижение сайта в Яндексе — это комплекс работ по оптимизации ресурса с целью выведения его в топ выдачи ведущей поисковой системы Рунета.
                </div>
                <div class="os-price">
                    от 60 000 ₽
                </div>
                <div class="os-btn">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Заказать
                    </a>
                </div>
                <div class="os-more">
                    <a href="/uslugi/seo-prodvizhenie/yandex/" class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.09009 8.99987C9.57552 7.61991 10.9855 6.79128 12.4273 7.03858C13.8691 7.28589 14.9223 8.53702 14.9201 9.99987C14.9201 11.9999 11.9201 12.9999 11.9201 12.9999" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="17" r="1" fill="#818181"/>
                        </svg>Подробнее
                    </a>
                </div>
            </div>
            <div class="col-sm-3 os-card">
                <h3>SEO продвижение в Google</h3>
                <div class="os-card-content">
                   Продвижение сайта в Google — это комплекс мероприятий, призванных повысить значимость ресурса для алгоритмов данной поисковой системы.
                </div>
                <div class="os-price">
                    от 60 000 ₽
                </div>
                <div class="os-btn">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Заказать
                    </a>
                </div>
                <div class="os-more">
                    <a href="/uslugi/seo-prodvizhenie/google/" class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.09009 8.99987C9.57552 7.61991 10.9855 6.79128 12.4273 7.03858C13.8691 7.28589 14.9223 8.53702 14.9201 9.99987C14.9201 11.9999 11.9201 12.9999 11.9201 12.9999" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="17" r="1" fill="#818181"/>
                        </svg>Подробнее
                    </a>
                </div>
            </div>
        <div class="col-sm-3 os-card">
                <h3>SEO продвижение сайтов на Wordpress</h3>
                <div class="os-card-content">
                  Продвинули уже больше 100 сайтов на Wordpress. Эффективно настраиваем CMS для получения максимальной отдачи в поиске.
                </div>
                <div class="os-price">
                    от 60 000 ₽
                </div>
                <div class="os-btn">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Заказать
                    </a>
                </div>
                <div class="os-more">
                    <a href="/uslugi/seo-prodvizhenie/wordpress/" class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.09009 8.99987C9.57552 7.61991 10.9855 6.79128 12.4273 7.03858C13.8691 7.28589 14.9223 8.53702 14.9201 9.99987C14.9201 11.9999 11.9201 12.9999 11.9201 12.9999" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="17" r="1" fill="#818181"/>
                        </svg>Подробнее
                    </a>
                </div>
            </div>
			<div class="col-sm-3 os-card">
                <h3>SEO продвижение сайтов на Bitrix</h3>
                <div class="os-card-content">
                Знаем CMS Bitrix как свои 5 пальцев. Выводим сайты на Битриксе в ТОП10 уже через 2-3 месяца.
                </div>
                <div class="os-price">
                    от 60 000 ₽
                </div>
                <div class="os-btn">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Заказать
                    </a>
                </div>
                <div class="os-more">
                    <a href="/uslugi/seo-prodvizhenie/bitrix/" class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.09009 8.99987C9.57552 7.61991 10.9855 6.79128 12.4273 7.03858C13.8691 7.28589 14.9223 8.53702 14.9201 9.99987C14.9201 11.9999 11.9201 12.9999 11.9201 12.9999" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="17" r="1" fill="#818181"/>
                        </svg>Подробнее
                    </a>
                </div>
            </div>
			<div class="col-sm-3 os-card">
                <h3>SEO продвижение промышленных сайтов</h3>
                <div class="os-card-content">
                 Мы — эксперты в продвижении промышленных сайтов. Увеличим количество продаж заводу, промышленной компании
                </div>
                <div class="os-price">
                    от 60 000 ₽
                </div>
                <div class="os-btn">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Заказать
                    </a>
                </div>
                <div class="os-more">
                    <a href="/uslugi/seo-prodvizhenie/promyshlenny-sajt/" class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.09009 8.99987C9.57552 7.61991 10.9855 6.79128 12.4273 7.03858C13.8691 7.28589 14.9223 8.53702 14.9201 9.99987C14.9201 11.9999 11.9201 12.9999 11.9201 12.9999" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="17" r="1" fill="#818181"/>
                        </svg>Подробнее
                    </a>
                </div>
            </div>
			<div class="col-sm-3 os-card">
                <h3>SEO продвижение медицинских сайтов</h3>
                <div class="os-card-content">
                  Знаем все особенности продвижения медицинских сайтов. Привлечем качественный трафик и увеличим количество записей
                </div>
                <div class="os-price">
                    от 60 000 ₽
                </div>
                <div class="os-btn">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Заказать
                    </a>
                </div>
                <div class="os-more">
                    <a href="/uslugi/seo-prodvizhenie/meditsinskiy-sayt/" class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.09009 8.99987C9.57552 7.61991 10.9855 6.79128 12.4273 7.03858C13.8691 7.28589 14.9223 8.53702 14.9201 9.99987C14.9201 11.9999 11.9201 12.9999 11.9201 12.9999" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="17" r="1" fill="#818181"/>
                        </svg>Подробнее
                    </a>
                </div>
            </div>
			<div class="col-sm-3 os-card">
                <h3>SEO продвижение интернет-магазинов</h3>
                <div class="os-card-content">
                  Привлечем максимально большой объем целевого трафика естественными методами. Обеспечим кратный рост продаж из поиска
                </div>
                <div class="os-price">
                    от 60 000 ₽
                </div>
                <div class="os-btn">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Заказать
                    </a>
                </div>
                <div class="os-more">
                    <a href="/uslugi/seo-prodvizhenie/internet-magazin/" class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.09009 8.99987C9.57552 7.61991 10.9855 6.79128 12.4273 7.03858C13.8691 7.28589 14.9223 8.53702 14.9201 9.99987C14.9201 11.9999 11.9201 12.9999 11.9201 12.9999" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="17" r="1" fill="#818181"/>
                        </svg>Подробнее
                    </a>
                </div>
            </div>
			<div class="col-sm-3 os-card">
                <h3>SEO продвижение b2b сайтов</h3>
                <div class="os-card-content">
                Продвигаем B2B-сайты, прорабатывая внутреннюю и внешнюю оптимизацию сайта компании.
                </div>
                <div class="os-price">
                    от 60 000 ₽
                </div>
                <div class="os-btn">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Заказать
                    </a>
                </div>
                <div class="os-more">
                    <a href="/uslugi/seo-prodvizhenie/b2b-sajt/" class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.09009 8.99987C9.57552 7.61991 10.9855 6.79128 12.4273 7.03858C13.8691 7.28589 14.9223 8.53702 14.9201 9.99987C14.9201 11.9999 11.9201 12.9999 11.9201 12.9999" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="17" r="1" fill="#818181"/>
                        </svg>Подробнее
                    </a>
                </div>
            </div>
<div class="col-sm-3 os-card">
                <h3>SEO продвижение корпоративных сайтов</h3>
                <div class="os-card-content">
                 Привлекаем новых клиентов на всех этапах воронки (горячий, теплый, холодный трафик).
                </div>
                <div class="os-price">
                    от 60 000 ₽
                </div>
                <div class="os-btn">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Заказать
                    </a>
                </div>
                <div class="os-more">
                    <a href="/uslugi/seo-prodvizhenie/korporativny-sajt/" class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.09009 8.99987C9.57552 7.61991 10.9855 6.79128 12.4273 7.03858C13.8691 7.28589 14.9223 8.53702 14.9201 9.99987C14.9201 11.9999 11.9201 12.9999 11.9201 12.9999" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="17" r="1" fill="#818181"/>
                        </svg>Подробнее
                    </a>
                </div>
            </div>
			<div class="col-sm-3 os-card">
                <h3>SEO продвижение строительных сайтов</h3>
                <div class="os-card-content">
                Привлечем целевой трафик на ваш сайт. Имеем большой опыт в продвижении строительных сайтов
                </div>
                <div class="os-price">
                    от 60 000 ₽
                </div>
                <div class="os-btn">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Заказать
                    </a>
                </div>
                <div class="os-more">
                    <a href="/uslugi/seo-prodvizhenie/stroitelny-sajt/" class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.09009 8.99987C9.57552 7.61991 10.9855 6.79128 12.4273 7.03858C13.8691 7.28589 14.9223 8.53702 14.9201 9.99987C14.9201 11.9999 11.9201 12.9999 11.9201 12.9999" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="17" r="1" fill="#818181"/>
                        </svg>Подробнее
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
	<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product", 
  "name": "SEO-продвижение сайта в Москве",
  "image": "https://saitcraft.ru/wp-content/uploads/2022/03/mask-group-8.png",
  "description": "SEO-продвижение сайта в Москве: цена сео раскрутки сайта❗ Заказать услуги SEO продвижения сайтов в интернет-агентстве Сайткрафт",
  "brand": {
    "@type": "Brand",
    "name": "Сайткрафт"
  },
 
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "10"
  }
}
</script>
</section>

<?php
get_footer();