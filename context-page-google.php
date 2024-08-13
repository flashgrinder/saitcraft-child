<?php
/*
Template Name: Контекстная реклама в Google
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
                <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
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
</section>
<section class="cases__section">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2>К каким результатам может <br>
привести <span>контекстная реклама?</span></h2>
                      </div>
                      <?php
                  // задаем нужные нам критерии выборки данных из БД

$args = array(
	'posts_per_page' => 10,
    'cat'=> 23
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
                                        <img src="<?php the_field('logotip',get_the_ID());?>" alt="<?php the_title(); ?>">
                                    </div>
                                    <div>
                                        <span class="cases__section-card__header-name"><?php the_title(); ?></span>
                                        <span class="cases__section-card__header-short"><?php echo $short; ?></span>
                                    </div>
                                </div>
                                <div class="cases__section-card__body">
                                    <?php the_field('kratkoe_opisanie',get_the_ID());?>
                                </div>
                                <img src="<?php echo get_the_post_thumbnail_url();?>" class="cases__section-card-img" alt="">
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
<section class="section__wrap crm__page context__page-rows">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Кому подойдет контекстная реклама</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-7 left-seo" >
                <h3 style="margin-bottom: 5px;"><span>
<svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24.6666 3.33325L9.99992 17.9999L3.33325 11.3333" stroke="#00ADA8" stroke-width="4" stroke-linecap="square"/>
</svg>

</span>Индивидуальным предпринимателям</h3>
<div style="margin-left: 55px; margin-bottom: 20px;">
	
				
<span style="font-size:16px; color:#667399">Фотографам, дизайнерам, мастерам ногтевого сервиса, косметологам, мастерам ремонта и другим ИП, которые предоставляют свои услуги.
<br></span>
				</div>
				<h3 style="margin-bottom: 5px;"><span>
<svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24.6666 3.33325L9.99992 17.9999L3.33325 11.3333" stroke="#00ADA8" stroke-width="4" stroke-linecap="square"/>
</svg>

</span>Малому и среднему бизнесу</h3>
<div style="margin-left: 55px; margin-bottom: 20px;">
	
				
<span style="font-size:16px; color:#667399"> Ниша и сфера бизнеса чаще не имеют значения — контекстная реклама найдёт вашу целевую аудиторию.<br></span>
				</div>
				<h3 style="margin-bottom: 5px;"><span>
<svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24.6666 3.33325L9.99992 17.9999L3.33325 11.3333" stroke="#00ADA8" stroke-width="4" stroke-linecap="square"/>
</svg>

</span>Информационным порталам</h3>
<div style="margin-left: 55px; margin-bottom: 20px;">
	
				
<span style="font-size:16px; color:#667399">Журналы, СМИ, сайты-отзовики или сайты с обзорами тоже успешно продвигаются через контекст.<br></span>
				</div>
				<h3 style="margin-bottom: 5px;"><span>
<svg width="28" height="21" viewBox="0 0 28 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M24.6666 3.33325L9.99992 17.9999L3.33325 11.3333" stroke="#00ADA8" stroke-width="4" stroke-linecap="square"/>
</svg>

</span>Узким нишам бизнеса</h3>
<div style="margin-left: 55px; margin-bottom: 20px;">
	
				
<span style="font-size:16px; color:#667399">Контекстную рекламу увидят только заинтересованные пользователи, даже если сфера очень ограничена, а спрос низкий.<br></span><br><br>
				</div>
				
			</div>
	
            <div class="col-sm-4 right-seo" >
                 <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2>Кому не подойдет<br> контекстная реклама</h2>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12" >
                                <h3 style="margin-bottom: 5px;"><span>
                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.184 0.199999H16.992L11.616 8.432L17.352 17H11.544L8.736 11.84L5.832 17H0.048L5.904 8.432L0.648 0.199999H6.432L8.784 4.664L11.184 0.199999Z" fill="#D24A43"/>
                                </svg>


                                </span>Для привлечения <br>«холодной» аудитории</h3>
                                <div style="margin-left: 55px;">
                                    
                                                
                                <span style="font-size:16px; color:#667399">затраты просто не окупятся.<br></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12" >
                                <h3 style="margin-bottom: 5px;"><span>
                                <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.184 0.199999H16.992L11.616 8.432L17.352 17H11.544L8.736 11.84L5.832 17H0.048L5.904 8.432L0.648 0.199999H6.432L8.784 4.664L11.184 0.199999Z" fill="#D24A43"/>
                                </svg>

                                </span>Низкомаржинальные товары</h3>
                                <div style="margin-left: 55px;">
                                    
                                                
                                <span style="font-size:16px; color:#667399">товары или услуги с очень низкой маржой или низкой конкурентоспособностью.<br></span>
                                </div>
                            </div>
                        </div>
                      
                    </div>


            </div>
        </div>
	</div>
	</section>
<section class="section__wrap pb-1 pb-sm-5 otlichie-yandex">
    <div class="container">
        <div class="row mb-0 mb-md-3">
            <div class="col-12 text-center">
                <h2>Почему стоит заказать настройку Google Ads у нас</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-3 d-flex nandtitle">
                <span class="number__slide">1</span>
                <span class="title ms-3">Точная настройка целевой аудитории</span>
            </div>
            <div class="col-12 col-md-9">
         Точная настройка целевой аудитории с помощью метода таргетинга в аккаунте Гугл Рекламы поможет выбрать подходящий кластер для продукта или бренда; стандартные таргетинги настраиваются на пол, возраст, географию; детальная настройка целевой аудитории учитывает поведенческие и социальные характеристики, интересы, сегменты, погодные показатели.
            </div>            
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-3 d-flex nandtitle">
                <span class="number__slide">2</span>
                <span class="title ms-3">Глубокая аналитика</span>
            </div>
            <div class="col-12 col-md-9">
       Глубокая аналитика, которая собирает в отчёт информацию о продажах, об источниках лидов, о рентабельных и убыточных каналах привлечения клиентов, рассчитывает расходы на вовлеченность покупателя; анализ рекламной кампании проводится в разрезе ключевых фраз, лидов, конверсий, трафика, популярных страниц.
            </div>            
        </div>
        <div class="row mb-5">
            <div class="col-12 col-md-3 d-flex nandtitle">
                <span class="number__slide">3</span>
                <span class="title ms-3">Ремаркетинг</span>
            </div>
            <div class="col-12 col-md-9">
           Ремаркетинг, с помощью которого повторно привлекаются потенциальные клиенты на веб-ресурс или в приложение; для этого формируют списки пользователей, на которые настраивается таргетинг объявлений.
            </div>            
        </div>
		
    </div>
</section>
<section class="section__wrap grayback pb-1 pb-sm-5" style="background-color:white">
	<div class="container">
		<div class="row">
		
		
		<div class="col-sm-12" style="text-align: center;">
                <h2>Преимущества Google Ads</h2>
            </div>
		<div class="col-sm-4">
           
                
					

                    <span class="seo__banner1-title" style="color: black;  font-size:20px">
                    <span style="font-size:24px">01</span> Не вызывает раздражение
                </span>
                    <span class="seo__banner1-text" style="color: black;  font-size:18px;padding-left: 45px;">Объявление всплывает на экранах у тех потенциальных клиентов, которые заинтересованы в рекламируемом продукте. Форма и представление разработаны так, что не провоцируют нареканий, рассчитаны на определённый сегмент целевой аудитории.
                    </span>
                
            </div>
			
			<div class="col-sm-4">
           
                
					

<span class="seo__banner1-title" style="color: black; font-size:20px">
                    <span style="font-size:24px">02</span>Таргетирование аудитории
                </span>
                    
                  <span class="seo__banner1-text" style="color: black;  font-size:18px;padding-left: 45px;">
                С помощью контекстной рекламы можно настроить точную таргетировку аудитории по ключевым словам, демографическим параметрам, географии, интересам и поведению пользователей. Таким образом, объявления показываются только тем, кто их реально интересует, улучшая показатели конверсии.
                    </span>
                
            </div>
			<div class="col-sm-4">
           
               
					

<span class="seo__banner1-title" style="color: black; font-size:20px">
                    <span style="font-size:24px">03</span> Гибкая настройка кампаний
                </span>

                  <span class="seo__banner1-text" style="color: black;  font-size:18px;padding-left: 45px;">
           Контекстная реклама позволяет настраивать и изменять кампании в режиме реального времени, оптимизируя их под конкретные цели и результаты.
                    </span>
               
            </div>
			<div class="col-sm-4" style="margin-top: 20px;">
           
             
					



<span class="seo__banner1-title" style="color: black; font-size:20px">
                    <span style="font-size:24px">04</span> Широкий охват аудитории
                </span>


                    
                    <span class="seo__banner1-text" style="color: black;  font-size:18px;padding-left: 45px;">
               Google является самым популярным поисковиком в мире с более чем миллиардом активных пользователей каждый месяц. Это позволяет увеличить охват аудитории и повысить узнаваемость бренда.

                    </span>
                
            </div>
			<div class="col-sm-4" style="margin-top: 20px;">
       
<span class="seo__banner1-title" style="color: black; font-size:20px">
                    <span style="font-size:24px">05</span>Результативность
                </span>

                    <span class="seo__banner1-text" style="color: black;  font-size:18px;padding-left: 45px;">
           Контекстная реклама позволяет быстро получить результаты и отслеживать эффективность кампаний в режиме реального времени с помощью аналитических инструментов.
                    </span>
                
            </div>
			<div class="col-sm-4" style="margin-top: 20px;">
       
<span class="seo__banner1-title" style="color: black; font-size:20px">
                    <span style="font-size:24px">06</span>Ремаркетинговый механизм
                </span>

                    <span class="seo__banner1-text" style="color: black;  font-size:18px;padding-left: 45px;">
       Гугл предлагает дополнительный инструмент, позволяющий отправлять клиентам сообщение о товарах, если они уже совершал покупку ранее на этом ресурсе. Ремаркетинг активно работает в КМС (контекстно-медийной сети) для реализации повторных продаж.
                    </span>
                
            </div>
			
		</div>
	</div>
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
                    Разрабатываем стратегию по контекстной<br> рекламе и работаем по ней
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M52.3498 37.6666C51.9831 37.6666 51.5998 37.55 51.2331 37.4666C50.4912 37.3007 49.7617 37.0836 49.0498 36.8166C48.2766 36.5354 47.4267 36.55 46.6636 36.8577C45.9006 37.1653 45.2783 37.7444 44.9165 38.4833L44.5498 39.25C42.9312 38.332 41.4358 37.2119 40.0998 35.9166C38.8046 34.5806 37.6845 33.0853 36.7665 31.4666L37.5331 31.1166C38.2721 30.7548 38.8511 30.1325 39.1588 29.3695C39.4665 28.6064 39.4811 27.7565 39.1998 26.9833C38.9351 26.265 38.718 25.5301 38.5498 24.7833C38.4665 24.4166 38.3998 24.0333 38.3498 23.6666C38.1474 22.4927 37.5325 21.4295 36.6158 20.6687C35.6992 19.9079 34.541 19.4993 33.3498 19.5166H28.3331C27.6285 19.5157 26.9317 19.6637 26.2883 19.951C25.6449 20.2382 25.0695 20.6581 24.5998 21.1833C24.1203 21.7227 23.7633 22.3596 23.5533 23.05C23.3433 23.7405 23.2852 24.4683 23.3831 25.1833C24.2891 32.1202 27.4585 38.5644 32.3998 43.5166C37.352 48.458 43.7962 51.6273 50.7331 52.5333C50.9495 52.5498 51.1668 52.5498 51.3831 52.5333C52.6122 52.5351 53.7988 52.0842 54.7165 51.2666C55.2416 50.7969 55.6616 50.2215 55.9488 49.5781C56.2361 48.9347 56.3841 48.2379 56.3831 47.5333V42.5333C56.3741 41.3817 55.9679 40.2685 55.233 39.3818C54.4982 38.4951 53.4797 37.8893 52.3498 37.6666ZM53.1665 47.6666C53.1659 47.8992 53.1167 48.1291 53.022 48.3415C52.9273 48.5539 52.7891 48.7442 52.6165 48.9C52.4338 49.0664 52.2164 49.1901 51.98 49.2622C51.7437 49.3343 51.4942 49.3529 51.2498 49.3166C45.0303 48.5044 39.2502 45.67 34.7998 41.25C30.3456 36.7958 27.4865 30.9956 26.6665 24.75C26.6303 24.5055 26.6489 24.2561 26.7209 24.0197C26.793 23.7834 26.9167 23.566 27.0831 23.3833C27.2408 23.2086 27.4338 23.0692 27.6492 22.9744C27.8647 22.8796 28.0978 22.8315 28.3331 22.8333H33.3331C33.7184 22.8239 34.095 22.9483 34.3989 23.1853C34.7028 23.4223 34.9151 23.7573 34.9998 24.1333C34.9998 24.5833 35.1498 25.05 35.2498 25.5C35.4424 26.3731 35.6987 27.2309 36.0165 28.0666L33.6831 29.1666C33.2821 29.3508 32.9704 29.6864 32.8165 30.1C32.6498 30.5057 32.6498 30.9609 32.8165 31.3666C35.2151 36.5046 39.3452 40.6346 44.4831 43.0333C44.8889 43.2 45.344 43.2 45.7498 43.0333C46.1634 42.8794 46.499 42.5677 46.6831 42.1666L47.7331 39.8333C48.593 40.1468 49.4727 40.403 50.3665 40.6C50.7998 40.7 51.2665 40.7833 51.7165 40.85C52.0924 40.9346 52.4274 41.147 52.6645 41.4509C52.9015 41.7547 53.0259 42.1314 53.0165 42.5166L53.1665 47.6666ZM43.3331 19.3333C42.9498 19.3333 42.5498 19.3333 42.1665 19.3333C41.7244 19.3709 41.3154 19.5825 41.0294 19.9216C40.7435 20.2608 40.6039 20.6996 40.6415 21.1416C40.679 21.5837 40.8907 21.9927 41.2298 22.2787C41.5689 22.5647 42.0078 22.7042 42.4498 22.6666H43.3331C45.9853 22.6666 48.5288 23.7202 50.4042 25.5956C52.2796 27.4709 53.3331 30.0145 53.3331 32.6666C53.3331 32.9666 53.3331 33.25 53.3331 33.55C53.2962 33.9897 53.4351 34.4261 53.7194 34.7635C54.0037 35.1009 54.4102 35.3118 54.8498 35.35H54.9831C55.4004 35.3517 55.803 35.1968 56.1116 34.916C56.4202 34.6352 56.6123 34.2488 56.6498 33.8333C56.6498 33.45 56.6498 33.05 56.6498 32.6666C56.6498 29.1333 55.2473 25.7444 52.7505 23.2444C50.2536 20.7444 46.8665 19.3377 43.3331 19.3333V19.3333ZM46.6665 32.6666C46.6665 33.1087 46.8421 33.5326 47.1546 33.8452C47.4672 34.1577 47.8911 34.3333 48.3331 34.3333C48.7752 34.3333 49.1991 34.1577 49.5116 33.8452C49.8242 33.5326 49.9998 33.1087 49.9998 32.6666C49.9998 30.8985 49.2974 29.2028 48.0472 27.9526C46.7969 26.7024 45.1012 26 43.3331 26C42.8911 26 42.4672 26.1756 42.1546 26.4881C41.8421 26.8007 41.6665 27.2246 41.6665 27.6666C41.6665 28.1087 41.8421 28.5326 42.1546 28.8452C42.4672 29.1577 42.8911 29.3333 43.3331 29.3333C44.2172 29.3333 45.065 29.6845 45.6902 30.3096C46.3153 30.9347 46.6665 31.7826 46.6665 32.6666Z" fill="white"/>
</svg>


                <div class="advantage__card">
                    <span class="advantage__title">
                    Ставка на звонки и заявки, <br>а не на количество кликов
                    </span>
                    <span class="advantage__text">
                    Приводим посетителей, которые оставят заявки<br> и станут покупателями
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M51.6663 29.3333H49.9997V24.3333C49.9997 23.0072 49.4729 21.7355 48.5352 20.7978C47.5975 19.8601 46.3258 19.3333 44.9997 19.3333H28.333C27.0069 19.3333 25.7352 19.8601 24.7975 20.7978C23.8598 21.7355 23.333 23.0072 23.333 24.3333V44.3333C23.3347 44.6624 23.4337 44.9835 23.6175 45.2564C23.8014 45.5293 24.062 45.7416 24.3663 45.8666C24.5641 45.9599 24.781 46.0056 24.9997 46C25.219 46.0012 25.4365 45.9592 25.6395 45.8763C25.8426 45.7933 26.0273 45.6711 26.183 45.5166L30.8663 40.8166H33.333V43.2166C33.333 44.5427 33.8598 45.8145 34.7975 46.7522C35.7352 47.6899 37.0069 48.2166 38.333 48.2166H49.8663L53.8163 52.1833C53.9721 52.3378 54.1568 52.46 54.3598 52.5429C54.5629 52.6259 54.7803 52.6679 54.9997 52.6666C55.2183 52.6723 55.4352 52.6266 55.633 52.5333C55.9374 52.4083 56.1979 52.1959 56.3818 51.9231C56.5657 51.6502 56.6647 51.329 56.6663 51V34.3333C56.6663 33.0072 56.1396 31.7355 55.2019 30.7978C54.2642 29.8601 52.9924 29.3333 51.6663 29.3333ZM33.333 34.3333V37.4833H30.183C29.9637 37.482 29.7462 37.5241 29.5432 37.607C29.3401 37.69 29.1554 37.8122 28.9997 37.9666L26.6663 40.3166V24.3333C26.6663 23.8913 26.8419 23.4674 27.1545 23.1548C27.4671 22.8422 27.891 22.6666 28.333 22.6666H44.9997C45.4417 22.6666 45.8656 22.8422 46.1782 23.1548C46.4907 23.4674 46.6663 23.8913 46.6663 24.3333V29.3333H38.333C37.0069 29.3333 35.7352 29.8601 34.7975 30.7978C33.8598 31.7355 33.333 33.0072 33.333 34.3333ZM53.333 46.9833L51.6663 45.3166C51.512 45.1592 51.3279 45.0339 51.1248 44.9481C50.9217 44.8622 50.7035 44.8176 50.483 44.8166H38.333C37.891 44.8166 37.4671 44.6411 37.1545 44.3285C36.8419 44.0159 36.6663 43.592 36.6663 43.15V34.3333C36.6663 33.8913 36.8419 33.4674 37.1545 33.1548C37.4671 32.8422 37.891 32.6666 38.333 32.6666H51.6663C52.1084 32.6666 52.5323 32.8422 52.8449 33.1548C53.1574 33.4674 53.333 33.8913 53.333 34.3333V46.9833Z" fill="white"/>
</svg>


                <div class="advantage__card">
                    <span class="advantage__title">
                    Честность и долгосрочные отношения<br> с клиентами
                    </span>
                    <span class="advantage__text">
                    Берём проекты в работу, только когда на<br> 100% уверены в результате
                    </span>
                </div>
            </div>



            <div class="col-sm-4">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M51.6663 26H46.6663V24.3333C46.6663 23.4493 46.3152 22.6014 45.69 21.9763C45.0649 21.3512 44.2171 21 43.333 21H36.6663C35.7823 21 34.9344 21.3512 34.3093 21.9763C33.6842 22.6014 33.333 23.4493 33.333 24.3333V26H28.333C27.0069 26 25.7352 26.5268 24.7975 27.4645C23.8598 28.4021 23.333 29.6739 23.333 31V46C23.333 47.3261 23.8598 48.5979 24.7975 49.5355C25.7352 50.4732 27.0069 51 28.333 51H51.6663C52.9924 51 54.2642 50.4732 55.2019 49.5355C56.1396 48.5979 56.6663 47.3261 56.6663 46V31C56.6663 29.6739 56.1396 28.4021 55.2019 27.4645C54.2642 26.5268 52.9924 26 51.6663 26ZM36.6663 24.3333H43.333V26H36.6663V24.3333ZM53.333 46C53.333 46.442 53.1574 46.866 52.8449 47.1785C52.5323 47.4911 52.1084 47.6667 51.6663 47.6667H28.333C27.891 47.6667 27.4671 47.4911 27.1545 47.1785C26.8419 46.866 26.6663 46.442 26.6663 46V36.65L34.4663 39.3333C34.6433 39.3573 34.8227 39.3573 34.9997 39.3333H44.9997C45.1804 39.33 45.3599 39.302 45.533 39.25L53.333 36.65V46ZM53.333 33.1333L44.733 36H35.2663L26.6663 33.1333V31C26.6663 30.558 26.8419 30.134 27.1545 29.8215C27.4671 29.5089 27.891 29.3333 28.333 29.3333H51.6663C52.1084 29.3333 52.5323 29.5089 52.8449 29.8215C53.1574 30.134 53.333 30.558 53.333 31V33.1333Z" fill="white"/>
</svg>


                <div class="advantage__card">
                    <span class="advantage__title">
                    Занимаемся контекстной<br> рекламой с 2011 г.
                    </span>
                    <span class="advantage__text">
                    Накоплен огромный опыт. Постоянно следим<br> за трендами и внедряем их в работу
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
<path d="M51.6663 19.3334H28.333C27.0069 19.3334 25.7352 19.8602 24.7975 20.7978C23.8598 21.7355 23.333 23.0073 23.333 24.3334V26.2834C23.3328 26.9716 23.4746 27.6525 23.7497 28.2834V28.3834C23.9851 28.9183 24.3187 29.4045 24.733 29.8167L34.9997 40.0167V51C34.9991 51.2833 35.0707 51.562 35.2078 51.8099C35.3449 52.0577 35.5428 52.2666 35.783 52.4167C36.0482 52.5811 36.3543 52.6677 36.6663 52.6667C36.9272 52.6651 37.1841 52.6023 37.4163 52.4834L44.083 49.15C44.3579 49.0115 44.589 48.7996 44.7508 48.5378C44.9126 48.276 44.9987 47.9745 44.9997 47.6667V40.0167L55.1997 29.8167C55.614 29.4045 55.9475 28.9183 56.183 28.3834V28.2834C56.481 27.6574 56.6456 26.9763 56.6663 26.2834V24.3334C56.6663 23.0073 56.1396 21.7355 55.2019 20.7978C54.2642 19.8602 52.9924 19.3334 51.6663 19.3334ZM42.1497 38.15C41.9952 38.3058 41.873 38.4905 41.7901 38.6935C41.7071 38.8966 41.6651 39.114 41.6663 39.3334V46.6334L38.333 48.3V39.3334C38.3343 39.114 38.2922 38.8966 38.2093 38.6935C38.1264 38.4905 38.0041 38.3058 37.8497 38.15L29.0163 29.3334H50.983L42.1497 38.15ZM53.333 26H26.6663V24.3334C26.6663 23.8913 26.8419 23.4674 27.1545 23.1549C27.4671 22.8423 27.891 22.6667 28.333 22.6667H51.6663C52.1084 22.6667 52.5323 22.8423 52.8449 23.1549C53.1574 23.4674 53.333 23.8913 53.333 24.3334V26Z" fill="white"/>
</svg>


                <div class="advantage__card">
                    <span class="advantage__title">
                    Профессиональная настройка без<br> «экспериментов» над бизнесом
                    </span>
                    <span class="advantage__text">
                    Все наши специалисты сертифицированы 
                    </span>
                </div>
            </div>
            <div class="col-sm-12 mt-4 mb-5 d-flex flex-lg-row flex-column align-items-center justify-content-center justify-content-lg-start gap-4">
                <a href="javascript:;" class="button button--icon mb-4 mb-sm-0" data-stc-modal="#feedback-stc">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Ок, давайте попробуем!
                </a>
                <span class="poprobuem__text">
                    В некоторых нишах конверсия сайта<br>
                    в обращение с рекламы достигала 14% <img src="/wp-content/uploads/2022/03/image-59.png" alt="конверсия сайта">
                </span>
            </div>
        </div>
    </div>
</section>

<section class="section__wrap grayback pb-1 pb-sm-5" style="background: #1A1E23 url(/img/team/2.svg);
    background-position: right bottom;
    background-size: 60%;
    background-repeat: no-repeat;
    
    padding-top: 70px;
    
}">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" >
                <h2 style="color:white">Цена настройки и ведения контекстной рекламы в Google Ads</h2>
            </div>	
			<div style="margin-bottom: 40px">
				<span class="advantage__text1" style="color:white">
                   Точная сумма будет индивидуальна для каждого сайта. Она сильно зависит от конкуренции в нише и региона.

                </span>
			</div>
            <div class="col-sm-12">
                <div class="">
                <table class="tarifs-table">
                    <tr>
                        <td>
                            <svg class="mob-before-svg" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg>
                          Изучение ниши и анализ конкурентов
                        </td>
                        <td><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg></td>
                    </tr>
                    <tr>
                        <td><svg class="mob-before-svg" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg>
                          Изучение целевой аудитории и особенностей продукта</td>
                        <td><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg></td>
                    </tr>
                    <tr>
                        <td><svg class="mob-before-svg" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg>
                           Проведение usability аудита</td>
                        <td><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg></td>
                    </tr>
                    <tr>
                        <td><svg class="mob-before-svg" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg>
                           Разработка стратегии продвижения</td>
                        <td><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg></td>
                    </tr>
                    <tr>
                        <td><svg class="mob-before-svg" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg>
                           Настройка систем аналитики и статистики</td>
                        <td><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg></td>
                    </tr>
                    <tr>
                        <td><svg class="mob-before-svg" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg>
                            Сбор и группировка ключевых запросов</td>
                        <td><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg></td>
                    </tr>
                    <tr>
                        <td><svg class="mob-before-svg" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg>
                            Написание объявлений с учетом УТП продукта</td>
                        <td><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg></td>
                    </tr>
                    <tr>
                        <td><svg class="mob-before-svg" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg>
                           Анализ и оптимизация рекламных кампаний</td>
                        <td><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg></td>
                    </tr>
                    <tr>
                        <td><svg class="mob-before-svg" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg>
                          Персональный менеджер</td>
                        <td><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg></td>
                    </tr>
                    <tr>
                        <td><svg class="mob-before-svg" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg>
                            Ежемесячные отчеты</td>
                        <td><svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5 3L7.5 14L2.5 9" stroke="white" stroke-width="3" stroke-linecap="square" stroke-linejoin="round"/></svg></td>
                    </tr>
                    <tr>
                        <td class="mob-div-ta-c">
                            <div>KPI по проекту</div>
                            <div class="mob-table-info"><b>Количество и цена заявок</b></div> 
                        </td>
                        <td><b>Позиции + трафик + лиды</b></td>
                    </tr>
                    <tr>
                        <td style="flex-direction: column;" class="mob-div-ta-c">
                            <div>Ключевых запросов в продвижении</div>
                            <div class="mob-table-info"><b>Неограниченно</b></div>
                        </td>
                        <td><b>Неограниченно</b></td>
                    </tr>
                    <tr>
                        <td style="flex-direction: column;" class="mob-div-ta-c">
                            <div>Специалистов работает над проектом</div>
                            <div class="mob-table-info"><b>6 +</b></div>
                        </td>
                        <td><b>6 +</b></td>
                    </tr>
                    <tr>
                        <td style="flex-direction: column;" class="mob-div-ta-c">
                            <div>Стоимость за месяц (рублей)</div>
                            <div class="mob-table-info exb"><b>от 40 000 ₽</b></div>
                        </td>
                        <td><b class="exb">от 40 000 ₽</b></td>
                    </tr>
                </table>
            </div>
        </div>
            <div class="col-sm-12 text-center text-lg-end text-md-center mt-4">
                <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Отправить заявку
                </a>
            </div>
		</div>
	</div>
</section>
<section class="slider__wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Что входит в настройку <span>Google Ads</span> </h2>
            </div>
            <div class="col-sm-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" data-total="6" role="tablist">
                <span class="line" data-percent="1"></span>
                <li class="nav-item" role="presentation">
                    <button data-id="1" class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">
                        <span class="number__slide">1</span>
                        <span class="text__slide">
                       Сбор семантики
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="2" class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">
                    <span class="number__slide">2</span>
                        <span class="text__slide">
                       Группировка запросов
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="3" class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">
                    <span class="number__slide">3</span>
                        <span class="text__slide">
                       Подбор посадочных страниц
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="4" class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">
                    <span class="number__slide">4</span>
                        <span class="text__slide">
                        Настройка аналитики
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="5" class="nav-link" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false">
                    <span class="number__slide">5</span>
                        <span class="text__slide">
                        Написание текстов
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="6" class="nav-link" id="pills-6-tab" data-bs-toggle="pill" data-bs-target="#pills-6" type="button" role="tab" aria-controls="pills-6" aria-selected="false">
                    <span class="number__slide">6</span>
                        <span class="text__slide">
                        Выбор стратегии
                        </span>
                    </button>
                </li>
				<li class="nav-item" role="presentation">
                    <button data-id="7" class="nav-link" id="pills-7-tab" data-bs-toggle="pill" data-bs-target="#pills-7" type="button" role="tab" aria-controls="pills-7" aria-selected="false">
                    <span class="number__slide">7</span>
                        <span class="text__slide">
                       Подбор ставок
                        </span>
                    </button>
                </li>
				
                </ul>
                <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>01</span>Сбор семантики</h3>
                            <div class="padding__content">
                                <ul class="checklist">
									<li>формирование базового семантического ядра вручную или с привлечением специального сервиса;</li>
<li>расширение семантики при помощи планировщика ключевых слов Google, Serp Stat, Key Collector;</li>
<li>удаление нерелевантных слов и фраз;</li>
<li>формирование групп по запросам;</li>
<li>привлечение дополнительных методов.</li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/device-macbook-pro-2.png" alt="контекст-1">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>02</span>Группировка запросов</h3>
                            <div class="padding__content">
								 Группировка запросов по:
                                <ul class="checklist">
									<li>тематике;</li>
<li>частоте применения;</li>
<li>целевому действию пользователя;</li>
<li>привязке к определённому месту;</li>
<li>бренду. </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/contex-2.png" alt="контекст-2">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>03</span>Подбор посадочных страниц</h3>
                            <div class="padding__content">
								 Страница перехода должна быть:
                                <ul class="checklist">
									<li>созданы для конкретной рекламной компании с соблюдением Google adwords Policy;</li>
                                    <li>оптимизированы под запрос;</li>
                                    <li>простое и понятное изложение информации;</li>
                                    <li>призыв к действию, которое можно совершить легко и быстро, расположен на видном месте страничного пространства.</li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/contex-3.png" alt="контекст-3">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>04</span>Настраиваем аналитику</h3>
                            <div class="padding__content">
                                <ul class="checklist">
									<li> создание аккаунта в ГУГЛ Аналитикс;</li>
<li>анализ данных о посетителях в режиме отслеживания;</li>
<li>установление связи Гугл Аналитики и Рекламы;</li>
<li>настройка целей;</li>
<li>изучение статистики по источникам трафика, событиям, конверсии;</li>
<li>составление отчётов.</li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/contex-4.png" alt="контекс-4">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>05</span>Написание текстов</h3>
                            <div class="padding__content">
								 Написание текстов связано со следующими требованиями:
                                <ul class="checklist">
									<li>	включение в заголовок ключей;</li>
<li>отображение URL;</li>
<li>краткое и ёмкое описание рекламируемого продукта с призывом к действию; </li>
<li>ограниченное количество символов;</li>
<li>указание дополнительных сведений о компании.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/contex-5.png" alt="контекст-5">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>06</span>Выбор стратегии</h3>
                            <div class="padding__content">
                                <ul class="checklist">
									<li>рост конверсий и их ценности;</li>
                                    <li>увеличение количества кликов;</li>
                                    <li>повышение видимости объявлений;</li>
                                    <li>целевая рентабельность инвестиций в рекламу.</li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/contex-6.png" alt="контектс-6">
                        </div>
                    </div>
                </div>
					<div class="tab-pane fade" id="pills-7" role="tabpanel" aria-labelledby="pills-7-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>07</span>Подбор ставок</h3>
                            <div class="padding__content">
                                <ul class="checklist">
								<li>с помощью стратегий автоматического назначения ставок;</li>
<li>установление максимального количества кликов вручную с учётом группы объявлений, отдельных ключей или места размещения;</li>
									<li>использование функции корректировки ставок.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2022/03/contex-6.png" alt="контектс-6">
                        </div>
                    </div>
                </div>
            </div>
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
                    Качественный контекст -<br> это скрупулезный сбор<br> семантики, математические<br> расчеты и <span>капелька<br> творчества</span>
                    </span>
                    <span class="quote__name">Татьяна</span>
                    <span class="quote__job">Интернет-маркетолог</span>
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
						data-src="/img/team/Tanya.png"
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
</span>Отчётность по продажам</h3>
<ul class="graydot">
<li>Оценка данных CRM-системы</li>
<li>Количество продаж с контекстной рекламы</li>
<li>Стоимость привлечения клиента из контекстной рекламы</li>
<li>Средний чек сделки за период</li>
<li>Выручка от клиентов из контекстной рекламы</li>
<li>Доля затрат на рекламу в выручке</li>
</ul>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/Отчётность по продажам.png" alt="контекст1">
            </div>
        </div>
        <div class="row invert">
            <div class="col-sm-6">
                <h3><span><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M29.3498 18.6668C28.9831 18.6668 28.5998 18.5502 28.2331 18.4668C27.4912 18.3009 26.7617 18.0837 26.0498 17.8168C25.2766 17.5355 24.4267 17.5502 23.6636 17.8578C22.9006 18.1655 22.2783 18.7446 21.9165 19.4835L21.5498 20.2502C19.9312 19.3322 18.4358 18.2121 17.0998 16.9168C15.8046 15.5808 14.6845 14.0855 13.7665 12.4668L14.5331 12.1168C15.2721 11.755 15.8511 11.1327 16.1588 10.3696C16.4665 9.60658 16.4811 8.75668 16.1998 7.9835C15.9351 7.26521 15.718 6.53029 15.5498 5.7835C15.4665 5.41683 15.3998 5.0335 15.3498 4.66683C15.1474 3.49286 14.5325 2.42973 13.6158 1.66889C12.6992 0.908057 11.541 0.499511 10.3498 0.516829H5.33313C4.62854 0.515906 3.93172 0.663909 3.28833 0.951136C2.64494 1.23836 2.06952 1.65833 1.5998 2.1835C1.12033 2.72292 0.763324 3.35975 0.553304 4.05022C0.343284 4.7407 0.28523 5.46846 0.383132 6.1835C1.28911 13.1204 4.45848 19.5646 9.3998 24.5168C14.352 29.4581 20.7962 32.6275 27.7331 33.5335C27.9495 33.55 28.1668 33.55 28.3831 33.5335C29.6122 33.5353 30.7988 33.0844 31.7165 32.2668C32.2416 31.7971 32.6616 31.2217 32.9488 30.5783C33.2361 29.9349 33.3841 29.2381 33.3831 28.5335V23.5335C33.3741 22.3819 32.9679 21.2687 32.233 20.382C31.4982 19.4953 30.4797 18.8894 29.3498 18.6668ZM30.1665 28.6668C30.1659 28.8994 30.1167 29.1293 30.022 29.3417C29.9272 29.5541 29.7891 29.7443 29.6165 29.9002C29.4338 30.0666 29.2164 30.1903 28.98 30.2624C28.7437 30.3344 28.4942 30.353 28.2498 30.3168C22.0303 29.5045 16.2502 26.6702 11.7998 22.2502C7.34559 17.7959 4.48652 11.9958 3.66647 5.75016C3.63026 5.50572 3.64886 5.25628 3.72092 5.01992C3.79299 4.78355 3.91671 4.56616 4.08313 4.3835C4.24083 4.20875 4.43376 4.06939 4.64921 3.97459C4.86466 3.87979 5.09775 3.8317 5.33313 3.8335H10.3331C10.7184 3.82408 11.095 3.94847 11.3989 4.18549C11.7028 4.42252 11.9151 4.75753 11.9998 5.1335C11.9998 5.5835 12.1498 6.05016 12.2498 6.50016C12.4424 7.37327 12.6987 8.23111 13.0165 9.06683L10.6831 10.1668C10.2821 10.3509 9.9704 10.6866 9.81647 11.1002C9.64977 11.5059 9.64977 11.9611 9.81647 12.3668C12.2151 17.5048 16.3452 21.6348 21.4831 24.0335C21.8889 24.2002 22.344 24.2002 22.7498 24.0335C23.1634 23.8796 23.499 23.5679 23.6831 23.1668L24.7331 20.8335C25.593 21.147 26.4727 21.4032 27.3665 21.6002C27.7998 21.7002 28.2665 21.7835 28.7165 21.8502C29.0924 21.9348 29.4274 22.1472 29.6645 22.4511C29.9015 22.7549 30.0259 23.1316 30.0165 23.5168L30.1665 28.6668ZM20.3331 0.333496C19.9498 0.333496 19.5498 0.333496 19.1665 0.333496C18.7244 0.371068 18.3154 0.582697 18.0294 0.921825C17.7435 1.26095 17.6039 1.6998 17.6415 2.14183C17.679 2.58386 17.8907 2.99285 18.2298 3.27885C18.5689 3.56484 19.0078 3.7044 19.4498 3.66683H20.3331C22.9853 3.66683 25.5288 4.7204 27.4042 6.59576C29.2796 8.47113 30.3331 11.0147 30.3331 13.6668C30.3331 13.9668 30.3331 14.2502 30.3331 14.5502C30.2962 14.9898 30.4351 15.4262 30.7194 15.7637C31.0037 16.1011 31.4102 16.312 31.8498 16.3502H31.9831C32.4004 16.3519 32.803 16.197 33.1116 15.9162C33.4202 15.6354 33.6123 15.249 33.6498 14.8335C33.6498 14.4502 33.6498 14.0502 33.6498 13.6668C33.6498 10.1335 32.2473 6.74463 29.7505 4.24463C27.2536 1.74462 23.8665 0.337913 20.3331 0.333496ZM23.6665 13.6668C23.6665 14.1089 23.8421 14.5328 24.1546 14.8453C24.4672 15.1579 24.8911 15.3335 25.3331 15.3335C25.7752 15.3335 26.1991 15.1579 26.5116 14.8453C26.8242 14.5328 26.9998 14.1089 26.9998 13.6668C26.9998 11.8987 26.2974 10.203 25.0472 8.95278C23.7969 7.70254 22.1012 7.00016 20.3331 7.00016C19.8911 7.00016 19.4672 7.17576 19.1546 7.48832C18.8421 7.80088 18.6665 8.2248 18.6665 8.66683C18.6665 9.10886 18.8421 9.53278 19.1546 9.84534C19.4672 10.1579 19.8911 10.3335 20.3331 10.3335C21.2172 10.3335 22.065 10.6847 22.6902 11.3098C23.3153 11.9349 23.6665 12.7828 23.6665 13.6668Z" fill="#6430E8"/>
</svg></span>
Ежемесячные отчёты по обращениям</h3>
                <ul class="graydot">
<li>Оценка данных IP-телефонии</li>
<li>Количество звонков и других обращений из контекстной рекламы</li>
<li>Количество обращений по форматам рекламы и рекламным системам</li>
<li>Количество обращений по сегментам целевой аудитории</li>
<li>Обращения по рекламным кампаниям и посадочным страницам</li>
<li>Стоимость обращения из контекстной рекламы</li>
</ul>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/Ежемесячные отчёты по обращениям.png" alt="контекст2">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <h3><span><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.66667 23.6668C10.3297 23.6668 10.9656 23.4034 11.4344 22.9346C11.9033 22.4658 12.1667 21.8299 12.1667 21.1668C12.1748 21.0837 12.1748 21 12.1667 20.9168L16.8167 16.2668H17.2H17.5833L20.2667 18.9502C20.2667 18.9502 20.2667 19.0335 20.2667 19.0835C20.2667 19.7465 20.5301 20.3824 20.9989 20.8513C21.4677 21.3201 22.1036 21.5835 22.7667 21.5835C23.4297 21.5835 24.0656 21.3201 24.5344 20.8513C25.0033 20.3824 25.2667 19.7465 25.2667 19.0835V18.9502L31.3333 12.8335C31.8278 12.8335 32.3111 12.6869 32.7223 12.4122C33.1334 12.1375 33.4538 11.747 33.643 11.2902C33.8322 10.8334 33.8818 10.3307 33.7853 9.84577C33.6888 9.36082 33.4507 8.91536 33.1011 8.56573C32.7515 8.2161 32.306 7.978 31.8211 7.88153C31.3361 7.78507 30.8334 7.83458 30.3766 8.0238C29.9198 8.21302 29.5294 8.53345 29.2547 8.94457C28.98 9.35569 28.8333 9.83904 28.8333 10.3335C28.8252 10.4166 28.8252 10.5004 28.8333 10.5835L22.8167 16.6002H22.55L19.6667 13.6668C19.6667 13.0038 19.4033 12.3679 18.9344 11.8991C18.4656 11.4302 17.8297 11.1668 17.1667 11.1668C16.5036 11.1668 15.8677 11.4302 15.3989 11.8991C14.9301 12.3679 14.6667 13.0038 14.6667 13.6668L9.66667 18.6668C9.00362 18.6668 8.36774 18.9302 7.8989 19.3991C7.43006 19.8679 7.16667 20.5038 7.16667 21.1668C7.16667 21.8299 7.43006 22.4658 7.8989 22.9346C8.36774 23.4034 9.00362 23.6668 9.66667 23.6668ZM32.1667 30.3335H3.83333V2.00016C3.83333 1.55814 3.65774 1.13421 3.34518 0.821651C3.03262 0.509091 2.60869 0.333496 2.16667 0.333496C1.72464 0.333496 1.30072 0.509091 0.988155 0.821651C0.675595 1.13421 0.5 1.55814 0.5 2.00016V32.0002C0.5 32.4422 0.675595 32.8661 0.988155 33.1787C1.30072 33.4912 1.72464 33.6668 2.16667 33.6668H32.1667C32.6087 33.6668 33.0326 33.4912 33.3452 33.1787C33.6577 32.8661 33.8333 32.4422 33.8333 32.0002C33.8333 31.5581 33.6577 31.1342 33.3452 30.8217C33.0326 30.5091 32.6087 30.3335 32.1667 30.3335Z" fill="#6430E8"/>
</svg></span>
Ежемесячные отчёты по трафику</h3>
                <ul class="graydot">
<li>Анализ данных Яндекс.Метрики и Google Analytics</li>
<li>Количество переходов из контекстной рекламы</li>
<li>Оценка переходов в разрезе кампаний и объявлений</li>
<li>Кликабельность (CTR) объявлений</li>
<li>Конверсия сайта</li>
<li>Стоимость перехода из контекстной рекламы</li>
</ul>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/Ежемесячные отчёты по трафику.png" alt="контекст3">
            </div>
        </div>
        <div class="row invert">
            <div class="col-sm-6">
                <h3><span><svg width="34" height="20" viewBox="0 0 34 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.1834 17.15C3.02489 16.9983 2.83798 16.8793 2.6334 16.8C2.22763 16.6333 1.7725 16.6333 1.36673 16.8C1.16214 16.8793 0.975235 16.9983 0.816729 17.15C0.664994 17.3085 0.546053 17.4954 0.466729 17.7C0.339096 18.0035 0.304225 18.338 0.366515 18.6614C0.428806 18.9847 0.585466 19.2823 0.816729 19.5167C0.97873 19.6639 1.16475 19.7823 1.36673 19.8667C1.56623 19.9548 1.78194 20.0004 2.00006 20.0004C2.21818 20.0004 2.43389 19.9548 2.6334 19.8667C2.83537 19.7823 3.02139 19.6639 3.1834 19.5167C3.41466 19.2823 3.57132 18.9847 3.63361 18.6614C3.6959 18.338 3.66103 18.0035 3.5334 17.7C3.45407 17.4954 3.33513 17.3085 3.1834 17.15ZM8.66673 3.33333H32.0001C32.4421 3.33333 32.866 3.15774 33.1786 2.84518C33.4911 2.53262 33.6667 2.10869 33.6667 1.66667C33.6667 1.22464 33.4911 0.800716 33.1786 0.488156C32.866 0.175595 32.4421 0 32.0001 0H8.66673C8.2247 0 7.80078 0.175595 7.48822 0.488156C7.17566 0.800716 7.00006 1.22464 7.00006 1.66667C7.00006 2.10869 7.17566 2.53262 7.48822 2.84518C7.80078 3.15774 8.2247 3.33333 8.66673 3.33333ZM3.1834 8.81667C2.94902 8.5854 2.6514 8.42874 2.32808 8.36645C2.00477 8.30416 1.67025 8.33903 1.36673 8.46667C1.16475 8.55107 0.97873 8.66945 0.816729 8.81667C0.664994 8.97517 0.546053 9.16208 0.466729 9.36667C0.378553 9.56617 0.333008 9.78188 0.333008 10C0.333008 10.2181 0.378553 10.4338 0.466729 10.6333C0.551132 10.8353 0.66951 11.0213 0.816729 11.1833C0.97873 11.3306 1.16475 11.4489 1.36673 11.5333C1.56623 11.6215 1.78194 11.6671 2.00006 11.6671C2.21818 11.6671 2.43389 11.6215 2.6334 11.5333C2.83537 11.4489 3.02139 11.3306 3.1834 11.1833C3.33061 11.0213 3.44899 10.8353 3.5334 10.6333C3.62157 10.4338 3.66712 10.2181 3.66712 10C3.66712 9.78188 3.62157 9.56617 3.5334 9.36667C3.45407 9.16208 3.33513 8.97517 3.1834 8.81667ZM32.0001 8.33333H8.66673C8.2247 8.33333 7.80078 8.50893 7.48822 8.82149C7.17566 9.13405 7.00006 9.55797 7.00006 10C7.00006 10.442 7.17566 10.866 7.48822 11.1785C7.80078 11.4911 8.2247 11.6667 8.66673 11.6667H32.0001C32.4421 11.6667 32.866 11.4911 33.1786 11.1785C33.4911 10.866 33.6667 10.442 33.6667 10C33.6667 9.55797 33.4911 9.13405 33.1786 8.82149C32.866 8.50893 32.4421 8.33333 32.0001 8.33333ZM3.1834 0.483333C3.02489 0.331599 2.83798 0.212657 2.6334 0.133333C2.32988 0.00570082 1.99536 -0.0291699 1.67204 0.0331203C1.34872 0.0954105 1.0511 0.252071 0.816729 0.483333C0.66951 0.645335 0.551132 0.831358 0.466729 1.03333C0.378553 1.23283 0.333008 1.44855 0.333008 1.66667C0.333008 1.88478 0.378553 2.1005 0.466729 2.3C0.551132 2.50198 0.66951 2.688 0.816729 2.85C0.97873 2.99722 1.16475 3.1156 1.36673 3.2C1.67025 3.32763 2.00477 3.3625 2.32808 3.30021C2.6514 3.23792 2.94902 3.08126 3.1834 2.85C3.33061 2.688 3.44899 2.50198 3.5334 2.3C3.62157 2.1005 3.66712 1.88478 3.66712 1.66667C3.66712 1.44855 3.62157 1.23283 3.5334 1.03333C3.44899 0.831358 3.33061 0.645335 3.1834 0.483333ZM32.0001 16.6667H8.66673C8.2247 16.6667 7.80078 16.8423 7.48822 17.1548C7.17566 17.4674 7.00006 17.8913 7.00006 18.3333C7.00006 18.7754 7.17566 19.1993 7.48822 19.5118C7.80078 19.8244 8.2247 20 8.66673 20H32.0001C32.4421 20 32.866 19.8244 33.1786 19.5118C33.4911 19.1993 33.6667 18.7754 33.6667 18.3333C33.6667 17.8913 33.4911 17.4674 33.1786 17.1548C32.866 16.8423 32.4421 16.6667 32.0001 16.6667Z" fill="#6430E8"/>
</svg>
</span>Отчёт о проделанных работах за прошлый месяц</h3>
                <ul class="graydot">
<li>Срез по эффективности работы проекта в целом и по кампаниям</li>
<li>Срез по параметрам кампаний (возраст, пол, регионы, устройства и т.п.)</li>
<li>Список добавленных минус-слов</li>
<li>Количество переходов, обращений и продаж из контекстной рекламы</li>
<li>Оценка стоимости перехода, обращения и клиента</li>
<li>Перечень выполненных работ и план на будущий месяц</li>
</ul>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/Отчёт о проделанных работах за прошлый месяц.png" alt="контекст4">
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6">
                <h3><span><svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.667 7.33317C15.3374 7.33317 15.0151 7.43092 14.741 7.61405C14.467 7.79719 14.2533 8.05749 14.1272 8.36203C14.001 8.66657 13.968 9.00169 14.0323 9.32499C14.0967 9.64829 14.2554 9.94526 14.4885 10.1783C14.7216 10.4114 15.0185 10.5702 15.3418 10.6345C15.6651 10.6988 16.0003 10.6658 16.3048 10.5396C16.6093 10.4135 16.8696 10.1999 17.0528 9.92579C17.2359 9.6517 17.3337 9.32947 17.3337 8.99984C17.3337 8.55781 17.1581 8.13389 16.8455 7.82133C16.5329 7.50876 16.109 7.33317 15.667 7.33317ZM9.00032 7.33317C8.67069 7.33317 8.34846 7.43092 8.07437 7.61405C7.80029 7.79719 7.58667 8.05749 7.46053 8.36203C7.33438 8.66657 7.30137 9.00169 7.36568 9.32499C7.42999 9.64829 7.58873 9.94526 7.82181 10.1783C8.0549 10.4114 8.35187 10.5702 8.67517 10.6345C8.99848 10.6988 9.33359 10.6658 9.63813 10.5396C9.94267 10.4135 10.203 10.1999 10.3861 9.92579C10.5692 9.6517 10.667 9.32947 10.667 8.99984C10.667 8.55781 10.4914 8.13389 10.1788 7.82133C9.86627 7.50876 9.44235 7.33317 9.00032 7.33317ZM22.3337 7.33317C22.004 7.33317 21.6818 7.43092 21.4077 7.61405C21.1336 7.79719 20.92 8.05749 20.7939 8.36203C20.6677 8.66657 20.6347 9.00169 20.699 9.32499C20.7633 9.64829 20.9221 9.94526 21.1551 10.1783C21.3882 10.4114 21.6852 10.5702 22.0085 10.6345C22.3318 10.6988 22.6669 10.6658 22.9715 10.5396C23.276 10.4135 23.5363 10.1999 23.7194 9.92579C23.9026 9.6517 24.0003 9.32947 24.0003 8.99984C24.0003 8.55781 23.8247 8.13389 23.5122 7.82133C23.1996 7.50876 22.7757 7.33317 22.3337 7.33317ZM32.3337 0.666504H5.66699C4.34091 0.666504 3.06914 1.19329 2.13146 2.13097C1.19378 3.06865 0.666992 4.34042 0.666992 5.6665V32.3332C0.666992 33.6592 1.19378 34.931 2.13146 35.8687C3.06914 36.8064 4.34091 37.3332 5.66699 37.3332H32.3337C33.6597 37.3332 34.9315 36.8064 35.8692 35.8687C36.8069 34.931 37.3337 33.6592 37.3337 32.3332V5.6665C37.3337 4.34042 36.8069 3.06865 35.8692 2.13097C34.9315 1.19329 33.6597 0.666504 32.3337 0.666504ZM34.0003 32.3332C34.0003 32.7752 33.8247 33.1991 33.5122 33.5117C33.1996 33.8242 32.7757 33.9998 32.3337 33.9998H5.66699C5.22496 33.9998 4.80104 33.8242 4.48848 33.5117C4.17592 33.1991 4.00033 32.7752 4.00033 32.3332V17.3332H34.0003V32.3332ZM34.0003 13.9998H4.00033V5.6665C4.00033 5.22448 4.17592 4.80055 4.48848 4.48799C4.80104 4.17543 5.22496 3.99984 5.66699 3.99984H32.3337C32.7757 3.99984 33.1996 4.17543 33.5122 4.48799C33.8247 4.80055 34.0003 5.22448 34.0003 5.6665V13.9998Z" fill="#6430E8"/>
</svg></span>Доступы к сервисам</h3>
                <ul class="graydot">
<li>Счетчики посещаемости Яндекс.Метрика и Google Analytics</li>
<li>Интерфейс рекламных кампаний в Яндекс.Директ и Google.Adwords</li>
<li>Доступ к рекламным кабинетам Facebook, ВКонтакте, Instagram и т.п.</li>
<li>Личный кабинет виртуальной АТС динамический коллтрекинг</li>
<li>CRM системы</li>
<li>Сервисы сквозной аналитики</li>
</ul>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/Доступы к сервисам.png" alt="контекст5">
            </div>
        </div>
       

        
          </div>
</section>
<section class="context__banner2 section__wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>А можете ли вы сделать <span>адекватные<br> прогнозы</span> до старта рекламной кампании?</h2>
                <div class="subtext">Да, мы можем сделать адекватные прогнозы по:</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
                    <path d="M39.9997 25.9997C39.5576 25.9997 39.1337 26.1753 38.8212 26.4878C38.5086 26.8004 38.333 27.2243 38.333 27.6663V30.9997C38.333 31.4417 38.5086 31.8656 38.8212 32.1782C39.1337 32.4907 39.5576 32.6663 39.9997 32.6663C40.4417 32.6663 40.8656 32.4907 41.1782 32.1782C41.4907 31.8656 41.6663 31.4417 41.6663 30.9997V27.6663C41.6663 27.2243 41.4907 26.8004 41.1782 26.4878C40.8656 26.1753 40.4417 25.9997 39.9997 25.9997ZM39.9997 19.333C36.9055 19.333 33.938 20.5622 31.7501 22.7501C29.5622 24.938 28.333 27.9055 28.333 30.9997V40.9997C28.333 44.0939 29.5622 47.0613 31.7501 49.2493C33.938 51.4372 36.9055 52.6663 39.9997 52.6663C43.0939 52.6663 46.0613 51.4372 48.2493 49.2493C50.4372 47.0613 51.6663 44.0939 51.6663 40.9997V30.9997C51.6663 27.9055 50.4372 24.938 48.2493 22.7501C46.0613 20.5622 43.0939 19.333 39.9997 19.333ZM48.333 40.9997C48.333 43.2098 47.455 45.3294 45.8922 46.8922C44.3294 48.455 42.2098 49.333 39.9997 49.333C37.7895 49.333 35.6699 48.455 34.1071 46.8922C32.5443 45.3294 31.6663 43.2098 31.6663 40.9997V30.9997C31.6663 28.7895 32.5443 26.6699 34.1071 25.1071C35.6699 23.5443 37.7895 22.6663 39.9997 22.6663C42.2098 22.6663 44.3294 23.5443 45.8922 25.1071C47.455 26.6699 48.333 28.7895 48.333 30.9997V40.9997Z" fill="white"/>
                </svg>
                <span class="context__banner2-title">
                Стоимости клика
                </span>
            </div>
            <div class="col">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M49.5003 33.132C49.0804 33.132 48.6777 33.2988 48.3807 33.5957C48.0838 33.8927 47.917 34.2954 47.917 34.7153V46.0837C47.917 46.5036 47.7502 46.9063 47.4532 47.2032C47.1563 47.5002 46.7536 47.667 46.3337 47.667H28.917C28.4971 47.667 28.0943 47.5002 27.7974 47.2032C27.5005 46.9063 27.3337 46.5036 27.3337 46.0837V28.667C27.3337 28.2471 27.5005 27.8443 27.7974 27.5474C28.0943 27.2505 28.4971 27.0837 28.917 27.0837H40.2853C40.7053 27.0837 41.108 26.9168 41.4049 26.6199C41.7018 26.323 41.8687 25.9203 41.8687 25.5003C41.8687 25.0804 41.7018 24.6777 41.4049 24.3807C41.108 24.0838 40.7053 23.917 40.2853 23.917H28.917C27.6572 23.917 26.449 24.4174 25.5582 25.3082C24.6674 26.199 24.167 27.4072 24.167 28.667V46.0837C24.167 47.3434 24.6674 48.5516 25.5582 49.4424C26.449 50.3332 27.6572 50.8337 28.917 50.8337H46.3337C47.5934 50.8337 48.8016 50.3332 49.6924 49.4424C50.5832 48.5516 51.0837 47.3434 51.0837 46.0837V34.7153C51.0837 34.2954 50.9168 33.8927 50.6199 33.5957C50.323 33.2988 49.9202 33.132 49.5003 33.132ZM55.707 20.1487C55.5463 19.7618 55.2389 19.4543 54.852 19.2937C54.6616 19.2125 54.4572 19.1695 54.2503 19.167H44.7503C44.3304 19.167 43.9277 19.3338 43.6307 19.6307C43.3338 19.9277 43.167 20.3304 43.167 20.7503C43.167 21.1703 43.3338 21.573 43.6307 21.8699C43.9277 22.1668 44.3304 22.3337 44.7503 22.3337H50.4345L34.1262 38.6262C33.9778 38.7733 33.86 38.9485 33.7796 39.1414C33.6992 39.3344 33.6578 39.5413 33.6578 39.7503C33.6578 39.9593 33.6992 40.1663 33.7796 40.3592C33.86 40.5522 33.9778 40.7273 34.1262 40.8745C34.2733 41.0229 34.4485 41.1407 34.6414 41.2211C34.8344 41.3015 35.0413 41.3428 35.2503 41.3428C35.4593 41.3428 35.6663 41.3015 35.8592 41.2211C36.0522 41.1407 36.2273 41.0229 36.3745 40.8745L52.667 24.5662V30.2503C52.667 30.6703 52.8338 31.073 53.1307 31.3699C53.4277 31.6668 53.8304 31.8337 54.2503 31.8337C54.6702 31.8337 55.073 31.6668 55.3699 31.3699C55.6668 31.073 55.8337 30.6703 55.8337 30.2503V20.7503C55.8312 20.5434 55.7881 20.339 55.707 20.1487Z" fill="white"/>
</svg>

                <span class="context__banner2-title">
                Количеству переходов
                </span>
            </div>
            <div class="col">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M52.3498 37.6663C51.9831 37.6663 51.5998 37.5497 51.2331 37.4663C50.4912 37.3004 49.7617 37.0833 49.0498 36.8163C48.2766 36.5351 47.4267 36.5497 46.6636 36.8574C45.9006 37.165 45.2783 37.7441 44.9165 38.483L44.5498 39.2497C42.9312 38.3317 41.4358 37.2116 40.0998 35.9163C38.8046 34.5803 37.6845 33.085 36.7665 31.4663L37.5331 31.1163C38.2721 30.7545 38.8511 30.1322 39.1588 29.3692C39.4665 28.6061 39.4811 27.7562 39.1998 26.983C38.9351 26.2647 38.718 25.5298 38.5498 24.783C38.4665 24.4163 38.3998 24.033 38.3498 23.6663C38.1474 22.4924 37.5325 21.4292 36.6158 20.6684C35.6992 19.9076 34.541 19.499 33.3498 19.5163H28.3331C27.6285 19.5154 26.9317 19.6634 26.2883 19.9506C25.6449 20.2379 25.0695 20.6578 24.5998 21.183C24.1203 21.7224 23.7633 22.3593 23.5533 23.0497C23.3433 23.7402 23.2852 24.468 23.3831 25.183C24.2891 32.1199 27.4585 38.5641 32.3998 43.5163C37.352 48.4577 43.7962 51.627 50.7331 52.533C50.9495 52.5495 51.1668 52.5495 51.3831 52.533C52.6122 52.5348 53.7988 52.0839 54.7165 51.2663C55.2416 50.7966 55.6616 50.2212 55.9488 49.5778C56.2361 48.9344 56.3841 48.2376 56.3831 47.533V42.533C56.3741 41.3814 55.9679 40.2682 55.233 39.3815C54.4982 38.4948 53.4797 37.889 52.3498 37.6663ZM53.1665 47.6663C53.1659 47.8989 53.1167 48.1288 53.022 48.3412C52.9272 48.5536 52.7891 48.7439 52.6165 48.8997C52.4338 49.0661 52.2164 49.1898 51.98 49.2619C51.7437 49.3339 51.4942 49.3525 51.2498 49.3163C45.0303 48.5041 39.2502 45.6697 34.7998 41.2497C30.3456 36.7954 27.4865 30.9953 26.6665 24.7497C26.6303 24.5052 26.6489 24.2558 26.7209 24.0194C26.793 23.7831 26.9167 23.5657 27.0831 23.383C27.2408 23.2083 27.4338 23.0689 27.6492 22.9741C27.8647 22.8793 28.0978 22.8312 28.3331 22.833H33.3331C33.7184 22.8236 34.095 22.948 34.3989 23.185C34.7028 23.422 34.9151 23.757 34.9998 24.133C34.9998 24.583 35.1498 25.0497 35.2498 25.4997C35.4424 26.3728 35.6987 27.2306 36.0165 28.0663L33.6831 29.1663C33.2821 29.3504 32.9704 29.6861 32.8165 30.0997C32.6498 30.5054 32.6498 30.9606 32.8165 31.3663C35.2151 36.5043 39.3452 40.6343 44.4831 43.033C44.8889 43.1997 45.344 43.1997 45.7498 43.033C46.1634 42.8791 46.499 42.5674 46.6831 42.1663L47.7331 39.833C48.593 40.1465 49.4727 40.4027 50.3665 40.5997C50.7998 40.6997 51.2665 40.783 51.7165 40.8497C52.0924 40.9343 52.4274 41.1467 52.6645 41.4506C52.9015 41.7544 53.0259 42.1311 53.0165 42.5163L53.1665 47.6663ZM43.3331 19.333C42.9498 19.333 42.5498 19.333 42.1665 19.333C41.7244 19.3706 41.3154 19.5822 41.0294 19.9213C40.7435 20.2605 40.6039 20.6993 40.6415 21.1413C40.679 21.5834 40.8907 21.9924 41.2298 22.2784C41.5689 22.5644 42.0078 22.7039 42.4498 22.6663H43.3331C45.9853 22.6663 48.5288 23.7199 50.4042 25.5953C52.2796 27.4706 53.3331 30.0142 53.3331 32.6663C53.3331 32.9663 53.3331 33.2497 53.3331 33.5497C53.2962 33.9894 53.4351 34.4258 53.7194 34.7632C54.0037 35.1006 54.4102 35.3115 54.8498 35.3497H54.9831C55.4004 35.3514 55.803 35.1965 56.1116 34.9157C56.4202 34.6349 56.6123 34.2485 56.6498 33.833C56.6498 33.4497 56.6498 33.0497 56.6498 32.6663C56.6498 29.133 55.2473 25.7441 52.7505 23.2441C50.2536 20.7441 46.8665 19.3374 43.3331 19.333ZM46.6665 32.6663C46.6665 33.1084 46.8421 33.5323 47.1546 33.8449C47.4672 34.1574 47.8911 34.333 48.3331 34.333C48.7752 34.333 49.1991 34.1574 49.5116 33.8449C49.8242 33.5323 49.9998 33.1084 49.9998 32.6663C49.9998 30.8982 49.2974 29.2025 48.0472 27.9523C46.7969 26.7021 45.1012 25.9997 43.3331 25.9997C42.8911 25.9997 42.4672 26.1753 42.1546 26.4878C41.8421 26.8004 41.6665 27.2243 41.6665 27.6663C41.6665 28.1084 41.8421 28.5323 42.1546 28.8449C42.4672 29.1574 42.8911 29.333 43.3331 29.333C44.2172 29.333 45.065 29.6842 45.6902 30.3093C46.3153 30.9344 46.6665 31.7823 46.6665 32.6663Z" fill="white"/>
</svg>

                <span class="context__banner2-title">
                Количеству обращений
                </span>
            </div>
            <div class="col">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M32.4997 25.9997C32.0052 25.9997 31.5219 26.1463 31.1108 26.421C30.6997 26.6957 30.3792 27.0862 30.19 27.543C30.0008 27.9998 29.9513 28.5025 30.0477 28.9874C30.1442 29.4724 30.3823 29.9178 30.7319 30.2675C31.0816 30.6171 31.527 30.8552 32.012 30.9517C32.4969 31.0481 32.9996 30.9986 33.4564 30.8094C33.9132 30.6202 34.3037 30.2998 34.5784 29.8886C34.8531 29.4775 34.9997 28.9942 34.9997 28.4997C34.9997 27.8367 34.7363 27.2008 34.2675 26.7319C33.7986 26.2631 33.1627 25.9997 32.4997 25.9997ZM55.1997 33.8497L41.183 19.8164C41.0273 19.6619 40.8426 19.5397 40.6395 19.4568C40.4365 19.3738 40.219 19.3318 39.9997 19.333H24.9997C24.5577 19.333 24.1338 19.5086 23.8212 19.8212C23.5086 20.1338 23.333 20.5577 23.333 20.9997V35.9997C23.3318 36.219 23.3738 36.4365 23.4568 36.6395C23.5397 36.8426 23.6619 37.0273 23.8164 37.183L37.8497 51.1997C38.7872 52.136 40.058 52.662 41.383 52.662C42.708 52.662 43.9789 52.136 44.9164 51.1997L55.1997 40.9997C56.136 40.0622 56.662 38.7914 56.662 37.4664C56.662 36.1414 56.136 34.8705 55.1997 33.933V33.8497ZM52.8497 38.5497L42.5497 48.833C42.2374 49.1435 41.815 49.3177 41.3747 49.3177C40.9344 49.3177 40.512 49.1435 40.1997 48.833L26.6664 35.3164V22.6664H39.3164L52.8497 36.1997C53.0042 36.3554 53.1264 36.5401 53.2093 36.7432C53.2923 36.9463 53.3343 37.1637 53.333 37.383C53.3312 37.8203 53.1576 38.2393 52.8497 38.5497Z" fill="white"/>
</svg>

                <span class="context__banner2-title">
                Стоимости обращений
                </span>
            </div>
            <div class="col">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M51.6663 19.333H28.333C27.0069 19.333 25.7352 19.8598 24.7975 20.7975C23.8598 21.7352 23.333 23.0069 23.333 24.333V26.283C23.3328 26.9712 23.4746 27.6521 23.7497 28.283V28.383C23.9851 28.918 24.3187 29.4041 24.733 29.8163L34.9997 40.0163V50.9997C34.9991 51.2829 35.0707 51.5616 35.2078 51.8095C35.3449 52.0574 35.5428 52.2662 35.783 52.4163C36.0482 52.5807 36.3543 52.6673 36.6663 52.6663C36.9272 52.6648 37.1841 52.602 37.4163 52.483L44.083 49.1497C44.3579 49.0112 44.589 48.7993 44.7508 48.5375C44.9126 48.2756 44.9987 47.9741 44.9997 47.6663V40.0163L55.1997 29.8163C55.614 29.4041 55.9475 28.918 56.183 28.383V28.283C56.481 27.6571 56.6456 26.976 56.6663 26.283V24.333C56.6663 23.0069 56.1396 21.7352 55.2019 20.7975C54.2642 19.8598 52.9924 19.333 51.6663 19.333ZM42.1497 38.1497C41.9952 38.3054 41.873 38.4901 41.7901 38.6932C41.7071 38.8962 41.6651 39.1137 41.6663 39.333V46.633L38.333 48.2997V39.333C38.3343 39.1137 38.2922 38.8962 38.2093 38.6932C38.1264 38.4901 38.0041 38.3054 37.8497 38.1497L29.0163 29.333H50.983L42.1497 38.1497ZM53.333 25.9997H26.6663V24.333C26.6663 23.891 26.8419 23.4671 27.1545 23.1545C27.4671 22.8419 27.891 22.6663 28.333 22.6663H51.6663C52.1084 22.6663 52.5323 22.8419 52.8449 23.1545C53.1574 23.4671 53.333 23.891 53.333 24.333V25.9997Z" fill="white"/>
</svg>

                <span class="context__banner2-title">
                Конверсии сайта
                </span>
            </div>
            <div class="col-sm-12 mt-5 text-center text-lg-start text-md-center">
                <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Обсудить проект
                </a>
            </div>
        </div>
    </div>
</section>
	<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product", 
  "name": "Настройка и ведение контекстной рекламы в Москве",
  "image": "https://saitcraft.ru/wp-content/uploads/2022/03/kontekstnaya-reklama.png",
  "description": "Заказать услуги по настройке и ведению контекстной рекламы в Москве в Яндекс и Гугл в интернет-агентстве Сайткрафт.❗ Выгодная цена, опытные специалисты по рекламе.⭐ Звоните",
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
			<section class="section__wrap grayback pb-1 pb-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Кто будет работать над проектом</h2>
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
                   Интернет-маркетолог
                    </span>
                    <span class="advantage__text1">
					Подбирает инструменты продвижения, составляет стратегию, проводит маркетинговые исследования и разрабатывает рекламные предложения.
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
                   Контекстолог
                    </span>
                    <span class="advantage__text1">
                   Оценивает прошлые рекламные компании, настраивает и ведёт контекстную и таргетированную рекламу, отслеживает показатели, корректирует и оптимизирует бюджет

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
                   Сопровождает заказчика от начала до конца проекта, отвечает на возникшие вопросы и рассказывает о результатах работы команды.
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
                 Анализирует и обновляет контент рекламных объявлений, прорабатывает офферы и призывы к действию, участвует в разработке стратегии продвижения.
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
                  Дизайнер
                    </span>
                    <span class="advantage__text1">
					Разрабатывает концепт рекламного объявления, создает визуальный макет, адаптирует под все устройства.
                    </span>
                </div>
            </div>
            
          
        </div>
    </div>
</section>
												  <section class="section__wrap grayback pb-1 pb-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 style="text-align:center;">Часто задаваемые вопросы</h2>
            </div>
        </div>
        <div class="row qa-elem">
            <div class="qa-title">
             Что такое контекстная реклама в Гугл Адс?
            </div>
            <div class="qa-content">
             Контекстная реклама Google Ads - это формат онлайн-рекламы, который позволяет показывать рекламные объявления пользователям, которые ищут определенные товары или услуги в поисковой системе Google или на сайтах-партнерах Google. Рекламные объявления отображаются в контексте запросов пользователей, т.е. адаптируются под содержание страницы сайта, на которой пользователь находится, и/или ключевые слова, которые он ищет. Рекламодатель платит только за клики пользователей на рекламу, т.е. за фактические переходы на сайт компании.
            </div>
        </div>
		<div class="row qa-elem">
            <div class="qa-title">
            Как запустить контекстную рекламу в Google Ads?
            </div>
            <div class="qa-content">
          Для запуска контекстной рекламы в Google Ads нужно выполнить следующие шаги:
<ol>
<li>Создать аккаунт в Google Ads.</li>
<li>Создать кампанию. Выбрать тип кампании, выбрать язык и регион, настроить бюджет и ставки.</li>
<li>Создать группу объявлений. В группе должны быть объединены ключевые слова и объявления.</li>
<li>Выбрать ключевые слова. Ключевые слова определяются на основе тематики продукта и услуги, которые вы хотите рекламировать.</li>
<li>Создать объявления. Рекламные объявления должны соответствовать ключевым словам и быть привлекательными для потенциального клиента.
<li>Запустить рекламную кампанию.</li>
				</ol>
После того, как кампания будет запущена, вам будут доступны отчеты о том, как она работает. Вы сможете узнать, сколько кликов получает каждое объявление, какое значение CTR (кликабельность) и сколько денег вы тратите на каждое объявление.

            </div>
        </div>
		<div class="row qa-elem">
            <div class="qa-title">
          Сколько стоит контекстная реклама в Гугле?
            </div>
            <div class="qa-content">
				На стоимость клика влияют заданные параметры в настройках, конкуренция по запросам. С помощью инструмента планирования можно узнать, во сколько обойдётся реклама. Для этого в Google Ads во вкладке «Инструменты и настройки» зайдите в «Планировщик ключевых слов», введите ключи. В таблице появится минимальный и максимальный ориентир по цене за клик, уровень конкуренции. Показы в контекстно-медийной сети можно оценить при помощи раздела «Ключевые слова в КМС/видео».
            </div>
        </div>
        <div class="row qa-elem">
            <div class="qa-title">
            В чем разница между SEO и контекстной рекламой?
            </div>
            <div class="qa-content">
            SEO и контекстная реклама нацелены на увеличение трафика на сайт, однако они реализуются разными методами. SEO позволяет получить бесплатный трафик, но это занимает время и усилия, а контекстная реклама обеспечивает быстрый и контролируемый трафик за плату. В зависимости от целей и бюджета рекламной кампании, можно использовать одну или обе формы рекламы.

            </div>
        </div>
								   
								   <div class="row qa-elem">
            <div class="qa-title">
             Где показывается контекстная реклама Гугл?
            </div>
            <div class="qa-content">
           Контекстная реклама в Google Ads показывается в результатах поиска Google и на сайтах партнеров Google, которые участвуют в программе Google AdSense. Реклама может быть показана пользователю, если его запрос содержит ключевые слова, соответствующие ключевым словам, выбранным для конкретной рекламной кампании. Реклама также может быть показана на сайтах-партнерах, если контент сайта соответствует ключевым словам, указанным в рекламной кампании.
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
                <h3>Контекстная реклама</h3>
                <div class="os-card-content">
                  Настройка и ведение контекстной рекламы в Яндекс. Директ и Google Ads
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
                    <a href="/uslugi/kontekstnaya-reklama/" class="">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.09009 8.99987C9.57552 7.61991 10.9855 6.79128 12.4273 7.03858C13.8691 7.28589 14.9223 8.53702 14.9201 9.99987C14.9201 11.9999 11.9201 12.9999 11.9201 12.9999" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#818181" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="17" r="1" fill="#818181"/>
                        </svg>Подробнее
                    </a>
                </div>
            </div>
            <div class="col-sm-3 os-card">
                <h3>Контекстная реклама в Яндекс. Директ</h3>
                <div class="os-card-content">
                 Настройка и ведение контекстной рекламы в Яндекс. Директ
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
                    <a href="/uslugi/kontekstnaya-reklama/yandex/" class="">
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
<?php
get_footer();