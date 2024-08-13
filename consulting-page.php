<?php
/*
Template Name: Консалтинг
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
                <div class="button-wraper mt-5">
                    <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Оставить заявку на консультацию
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section__wrap grayback pb-1 pb-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>В каких ситуациях консультация <span>принесёт пользу?</span></h2>
            </div>
            <div class="col-sm-4">
                <div class="consult__card">
                    <span class="consult__card-title">
                    Хотите стать <br>лидером рынка
                    </span>
                    <span class="consult__card-text">
                    Оценим вместе ёмкость ниши, уровень конкуренции и возможные перспективы 
                    </span>
                    <span class="consult__card-number">01</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="consult__card">
                    <span class="consult__card-title">
					Сайт плохо <br>конвертит
                    </span>
                    <span class="consult__card-text">
                    Разберём, возможно ли в вашем случае изменить ситуацию без увеличения бюджета на рекламу
                    </span>
                    <span class="consult__card-number">02</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="consult__card">
                    <span class="consult__card-title">
                    Вроде всё делаете, <br>а роста продаж нет
                    </span>
                    <span class="consult__card-text">
                    Поможем понять, какие инструменты дадут нужный результат в вашем случае 
                    </span>
                    <span class="consult__card-number">03</span>
                </div>
            </div>
            <div class="col-sm-12 d-flex align-items-center justify-content-center mt-5 mb-5 flex-wrap gap-4">
                <span class="problem__ask"><img src="/wp-content/uploads/2022/03/image-2-1.png" alt="">Эти проблемы вам знакомы?</span>
                <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Оставить заявку на консультацию
                </a>
            </div>
          
        </div>
    </div>
</section>
<section class="section__wrap section__saitcraft-right pb-1 pb-sm-5">
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h2>Почему важно получить консультацию <span>до начала сотрудничества</span> с маркетинговым агентством?</h2>
            <div class="advantages__list">
                <div class="advantage__item">
                    <div class="advantage__icon">
                    <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M84.9874 16.028C72.2008 -7.96264 15.0878 -3.48981 2.72747 19.281C-9.6328 42.0518 22.7598 88 44.923 88C67.0863 88 97.7739 40.0187 84.9874 16.028Z" fill="#6430E8"/>
<path d="M55.6663 24.3335H32.333C31.0069 24.3335 29.7352 24.8603 28.7975 25.798C27.8598 26.7356 27.333 28.0074 27.333 29.3335V31.2835C27.3328 31.9717 27.4746 32.6526 27.7497 33.2835V33.3835C27.9851 33.9184 28.3187 34.4046 28.733 34.8168L38.9997 45.0168V56.0002C38.9991 56.2834 39.0707 56.5621 39.2078 56.81C39.3449 57.0579 39.5428 57.2667 39.783 57.4168C40.0482 57.5812 40.3543 57.6678 40.6663 57.6668C40.9272 57.6653 41.1841 57.6025 41.4163 57.4835L48.083 54.1502C48.3579 54.0117 48.589 53.7998 48.7508 53.5379C48.9126 53.2761 48.9987 52.9746 48.9997 52.6668V45.0168L59.1997 34.8168C59.614 34.4046 59.9475 33.9184 60.183 33.3835V33.2835C60.481 32.6575 60.6456 31.9765 60.6663 31.2835V29.3335C60.6663 28.0074 60.1396 26.7356 59.2019 25.798C58.2642 24.8603 56.9924 24.3335 55.6663 24.3335ZM46.1497 43.1502C45.9952 43.3059 45.873 43.4906 45.7901 43.6937C45.7071 43.8967 45.6651 44.1142 45.6663 44.3335V51.6335L42.333 53.3002V44.3335C42.3343 44.1142 42.2922 43.8967 42.2093 43.6937C42.1264 43.4906 42.0041 43.3059 41.8497 43.1502L33.0163 34.3335H54.983L46.1497 43.1502ZM57.333 31.0002H30.6663V29.3335C30.6663 28.8915 30.8419 28.4675 31.1545 28.155C31.4671 27.8424 31.891 27.6668 32.333 27.6668H55.6663C56.1084 27.6668 56.5323 27.8424 56.8449 28.155C57.1574 28.4675 57.333 28.8915 57.333 29.3335V31.0002Z" fill="white"/>
</svg>


                    </div>
                    <div>
                    <span class="advantage__item-title">
                    Найдём пробоины в вашей воронке продаж
                    </span>
                    <span class="advantage__item-text">
                    Вы поймёте что можно сделать здесь и сейчас для роста продаж на 20-40% <br>без дополнительных вложений в рекламу
                    </span>
</div>
                </div>
                <div class="advantage__item">
                    <div class="advantage__icon">
                    <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M84.9874 16.028C72.2008 -7.96264 15.0878 -3.48981 2.72747 19.281C-9.6328 42.0518 22.7598 88 44.923 88C67.0863 88 97.7739 40.0187 84.9874 16.028Z" fill="#6430E8"/>
<path d="M35.6667 45.6666C36.3297 45.6666 36.9656 45.4032 37.4344 44.9344C37.9033 44.4655 38.1667 43.8296 38.1667 43.1666C38.1748 43.0835 38.1748 42.9997 38.1667 42.9166L42.8167 38.2666H43.2H43.5833L46.2667 40.9499C46.2667 40.9499 46.2667 41.0333 46.2667 41.0833C46.2667 41.7463 46.5301 42.3822 46.9989 42.851C47.4677 43.3199 48.1036 43.5833 48.7667 43.5833C49.4297 43.5833 50.0656 43.3199 50.5344 42.851C51.0033 42.3822 51.2667 41.7463 51.2667 41.0833V40.9499L57.3333 34.8333C57.8278 34.8333 58.3111 34.6866 58.7223 34.4119C59.1334 34.1372 59.4538 33.7468 59.643 33.29C59.8322 32.8331 59.8818 32.3305 59.7853 31.8455C59.6888 31.3606 59.4507 30.9151 59.1011 30.5655C58.7515 30.2159 58.306 29.9778 57.8211 29.8813C57.3361 29.7848 56.8334 29.8343 56.3766 30.0236C55.9198 30.2128 55.5294 30.5332 55.2547 30.9443C54.98 31.3554 54.8333 31.8388 54.8333 32.3333C54.8252 32.4164 54.8252 32.5001 54.8333 32.5833L48.8167 38.5999H48.55L45.6667 35.6666C45.6667 35.0035 45.4033 34.3677 44.9344 33.8988C44.4656 33.43 43.8297 33.1666 43.1667 33.1666C42.5036 33.1666 41.8677 33.43 41.3989 33.8988C40.9301 34.3677 40.6667 35.0035 40.6667 35.6666L35.6667 40.6666C35.0036 40.6666 34.3677 40.93 33.8989 41.3988C33.4301 41.8677 33.1667 42.5035 33.1667 43.1666C33.1667 43.8296 33.4301 44.4655 33.8989 44.9344C34.3677 45.4032 35.0036 45.6666 35.6667 45.6666ZM58.1667 52.3333H29.8333V23.9999C29.8333 23.5579 29.6577 23.134 29.3452 22.8214C29.0326 22.5088 28.6087 22.3333 28.1667 22.3333C27.7246 22.3333 27.3007 22.5088 26.9882 22.8214C26.6756 23.134 26.5 23.5579 26.5 23.9999V53.9999C26.5 54.4419 26.6756 54.8659 26.9882 55.1784C27.3007 55.491 27.7246 55.6666 28.1667 55.6666H58.1667C58.6087 55.6666 59.0326 55.491 59.3452 55.1784C59.6577 54.8659 59.8333 54.4419 59.8333 53.9999C59.8333 53.5579 59.6577 53.134 59.3452 52.8214C59.0326 52.5088 58.6087 52.3333 58.1667 52.3333Z" fill="white"/>
</svg>


                    </div>
                    <div>
                    <span class="advantage__item-title">
                    Покажем новые недорогие источники роста трафика
                    </span>
                    <span class="advantage__item-text">
                    Оценим ваше предприятие и нишу и сделаем предварительные прогнозы по каждому <br>инструменту. Мы 10 лет в В2В-сегменте, мы на этом «кошку съели»
                    </span>
</div>
                </div>
                <div class="advantage__item">
                    <div class="advantage__icon">
					<svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M84.9874 16.028C72.2008 -7.96264 15.0878 -3.48981 2.72747 19.281C-9.6328 42.0518 22.7598 88 44.923 88C67.0863 88 97.7739 40.0187 84.9874 16.028Z" fill="#6430E8"/>
<path d="M38.1667 51.6667C37.6723 51.6667 37.1889 51.8133 36.7778 52.088C36.3667 52.3627 36.0462 52.7531 35.857 53.21C35.6678 53.6668 35.6183 54.1694 35.7147 54.6544C35.8112 55.1393 36.0493 55.5848 36.3989 55.9344C36.7486 56.2841 37.194 56.5222 37.679 56.6186C38.1639 56.7151 38.6666 56.6656 39.1234 56.4764C39.5802 56.2871 39.9707 55.9667 40.2454 55.5556C40.5201 55.1445 40.6667 54.6611 40.6667 54.1667C40.6667 53.5036 40.4033 52.8677 39.9345 52.3989C39.4656 51.9301 38.8297 51.6667 38.1667 51.6667ZM55.6667 46.6667H35.6667C35.2247 46.6667 34.8008 46.4911 34.4882 46.1785C34.1756 45.866 34 45.442 34 45C34 44.558 34.1756 44.1341 34.4882 43.8215C34.8008 43.5089 35.2247 43.3333 35.6667 43.3333H49.8187C50.9044 43.3298 51.9598 42.9746 52.8266 42.3208C53.6934 41.667 54.325 40.75 54.6267 39.707L57.2691 30.4582C57.34 30.2101 57.3523 29.949 57.3051 29.6954C57.258 29.4417 57.1526 29.2025 56.9972 28.9966C56.8419 28.7906 56.6409 28.6235 56.41 28.5084C56.1791 28.3933 55.9247 28.3334 55.6667 28.3333H35.2318C34.8868 27.3623 34.2508 26.5212 33.4104 25.9247C32.5701 25.3282 31.5662 25.0053 30.5357 25H29C28.558 25 28.1341 25.1756 27.8215 25.4882C27.509 25.8007 27.3334 26.2246 27.3334 26.6667C27.3334 27.1087 27.509 27.5326 27.8215 27.8452C28.1341 28.1577 28.558 28.3333 29 28.3333H30.5357C30.8975 28.3346 31.2492 28.453 31.538 28.6709C31.8269 28.8887 32.0374 29.1943 32.1381 29.5418L32.3973 30.4497L32.3977 30.4582L35.132 40.0285C33.8596 40.1654 32.6882 40.7849 31.8588 41.7595C31.0295 42.7342 30.6054 43.9897 30.6739 45.2676C30.7424 46.5455 31.2983 47.7485 32.2271 48.6289C33.156 49.5092 34.387 50 35.6667 50H55.6667C56.1087 50 56.5327 49.8244 56.8452 49.5118C57.1578 49.1993 57.3334 48.7754 57.3334 48.3333C57.3334 47.8913 57.1578 47.4674 56.8452 47.1548C56.5327 46.8423 56.1087 46.6667 55.6667 46.6667ZM53.4572 31.6667L51.4219 38.7907C51.3214 39.1385 51.1108 39.4443 50.8217 39.6624C50.5327 39.8804 50.1808 39.9989 49.8187 40H38.5907L38.1658 38.513L36.2107 31.6667H53.4572ZM51.5 51.6667C51.0056 51.6667 50.5222 51.8133 50.1111 52.088C49.7 52.3627 49.3796 52.7531 49.1903 53.21C49.0011 53.6668 48.9516 54.1694 49.0481 54.6544C49.1445 55.1393 49.3826 55.5848 49.7323 55.9344C50.0819 56.2841 50.5274 56.5222 51.0123 56.6186C51.4973 56.7151 51.9999 56.6656 52.4567 56.4764C52.9136 56.2871 53.304 55.9667 53.5787 55.5556C53.8534 55.1445 54 54.6611 54 54.1667C54 53.5036 53.7366 52.8677 53.2678 52.3989C52.799 51.9301 52.1631 51.6667 51.5 51.6667Z" fill="white"/>
</svg>


                    </div>
                    <div>
                    <span class="advantage__item-title">
                    Найдём способы повысить удобство и конверсию сайта
                    </span>
                    <span class="advantage__item-text">
                    Представьте, с каждой 1000 посетителей 32 оставляли заявку, а после внесений <br>изменений в сайт — 48. Обращений стало на 50% больше. А значит, вырастут и продажи
                    </span>
</div>
                </div>
                <div class="advantage__item">
                    <div class="advantage__icon">
                    <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M84.9874 16.028C72.2008 -7.96264 15.0878 -3.48981 2.72747 19.281C-9.6328 42.0518 22.7598 88 44.923 88C67.0863 88 97.7739 40.0187 84.9874 16.028Z" fill="#6430E8"/>
<path d="M44.5003 39.3666C45.3896 38.5968 46.1029 37.6447 46.5918 36.575C47.0807 35.5052 47.3337 34.3428 47.3337 33.1666C47.3337 30.9564 46.4557 28.8368 44.8929 27.274C43.3301 25.7112 41.2105 24.8333 39.0003 24.8333C36.7902 24.8333 34.6706 25.7112 33.1078 27.274C31.545 28.8368 30.667 30.9564 30.667 33.1666C30.667 34.3428 30.92 35.5052 31.4089 36.575C31.8977 37.6447 32.611 38.5968 33.5003 39.3666C31.1672 40.4231 29.1878 42.1291 27.7986 44.2808C26.4095 46.4325 25.6694 48.9388 25.667 51.4999C25.667 51.9419 25.8426 52.3659 26.1551 52.6784C26.4677 52.991 26.8916 53.1666 27.3337 53.1666C27.7757 53.1666 28.1996 52.991 28.5122 52.6784C28.8247 52.3659 29.0003 51.9419 29.0003 51.4999C29.0003 48.8478 30.0539 46.3042 31.9293 44.4289C33.8046 42.5535 36.3482 41.4999 39.0003 41.4999C41.6525 41.4999 44.196 42.5535 46.0714 44.4289C47.9468 46.3042 49.0003 48.8478 49.0003 51.4999C49.0003 51.9419 49.1759 52.3659 49.4885 52.6784C49.801 52.991 50.225 53.1666 50.667 53.1666C51.109 53.1666 51.5329 52.991 51.8455 52.6784C52.1581 52.3659 52.3337 51.9419 52.3337 51.4999C52.3312 48.9388 51.5912 46.4325 50.202 44.2808C48.8129 42.1291 46.8334 40.4231 44.5003 39.3666ZM39.0003 38.1666C38.0114 38.1666 37.0447 37.8733 36.2225 37.3239C35.4002 36.7745 34.7594 35.9936 34.3809 35.08C34.0025 34.1664 33.9035 33.161 34.0964 32.1911C34.2893 31.2212 34.7655 30.3303 35.4648 29.6311C36.1641 28.9318 37.055 28.4556 38.0249 28.2627C38.9948 28.0697 40.0001 28.1688 40.9137 28.5472C41.8274 28.9256 42.6083 29.5665 43.1577 30.3887C43.7071 31.211 44.0003 32.1777 44.0003 33.1666C44.0003 34.4927 43.4735 35.7644 42.5359 36.7021C41.5982 37.6398 40.3264 38.1666 39.0003 38.1666ZM55.2337 38.6999C56.3003 37.4988 56.997 36.015 57.24 34.4271C57.483 32.8393 57.2619 31.215 56.6033 29.7499C55.9447 28.2848 54.8766 27.0412 53.5278 26.169C52.1789 25.2967 50.6067 24.8328 49.0003 24.8333C48.5583 24.8333 48.1344 25.0088 47.8218 25.3214C47.5093 25.634 47.3337 26.0579 47.3337 26.4999C47.3337 26.9419 47.5093 27.3659 47.8218 27.6784C48.1344 27.991 48.5583 28.1666 49.0003 28.1666C50.3264 28.1666 51.5982 28.6934 52.5359 29.6311C53.4735 30.5687 54.0003 31.8405 54.0003 33.1666C53.998 34.042 53.7658 34.9014 53.3271 35.659C52.8884 36.4165 52.2584 37.0456 51.5003 37.4833C51.2532 37.6258 51.0468 37.8294 50.9009 38.0745C50.755 38.3196 50.6745 38.5981 50.667 38.8833C50.66 39.1662 50.7252 39.4462 50.8564 39.697C50.9876 39.9478 51.1806 40.161 51.417 40.3166L52.067 40.7499L52.2837 40.8666C54.2927 41.8194 55.9875 43.3266 57.1686 45.2104C58.3497 47.0943 58.9679 49.2765 58.9503 51.4999C58.9503 51.9419 59.1259 52.3659 59.4385 52.6784C59.751 52.991 60.175 53.1666 60.617 53.1666C61.059 53.1666 61.4829 52.991 61.7955 52.6784C62.1081 52.3659 62.2837 51.9419 62.2837 51.4999C62.2973 48.9423 61.6567 46.4237 60.4228 44.1834C59.1888 41.943 57.4026 40.0554 55.2337 38.6999Z" fill="white"/>
</svg>


                    </div>
                    <div>
                    <span class="advantage__item-title">
                    Разберём стратегии нескольких самых сильных конкурентов
                    </span>
                    <span class="advantage__item-text">
                    Зачем изобретать велосипед, если работающие идеи и фишки можно перенять у <br>конкурентов. Вместе посмотрим конкурентов и определим, что в их стратегии работает, <br>а чего лучше избежать
                    </span>
</div>
                </div>
                <div class="advantage__item">
                    <div class="advantage__icon">
                    <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<g opacity="0.98">
<path d="M84.9874 16.028C72.2008 -7.96264 15.0878 -3.48981 2.72747 19.281C-9.6328 42.0518 22.7598 88 44.923 88C67.0863 88 97.7739 40.0187 84.9874 16.028Z" fill="#6430E8"/>
<path d="M55.6663 34.3333H53.9997V29.3333C53.9997 28.0072 53.4729 26.7354 52.5352 25.7977C51.5975 24.86 50.3258 24.3333 48.9997 24.3333H32.333C31.0069 24.3333 29.7352 24.86 28.7975 25.7977C27.8598 26.7354 27.333 28.0072 27.333 29.3333V49.3333C27.3347 49.6623 27.4337 49.9835 27.6175 50.2564C27.8014 50.5292 28.062 50.7416 28.3663 50.8666C28.5641 50.9599 28.781 51.0056 28.9997 50.9999C29.219 51.0012 29.4365 50.9591 29.6395 50.8762C29.8426 50.7933 30.0273 50.6711 30.183 50.5166L34.8663 45.8166H37.333V48.2166C37.333 49.5427 37.8598 50.8144 38.7975 51.7521C39.7352 52.6898 41.0069 53.2166 42.333 53.2166H53.8663L57.8163 57.1833C57.9721 57.3377 58.1568 57.4599 58.3598 57.5429C58.5629 57.6258 58.7803 57.6679 58.9997 57.6666C59.2183 57.6722 59.4352 57.6266 59.633 57.5333C59.9374 57.4082 60.1979 57.1959 60.3818 56.923C60.5657 56.6502 60.6647 56.329 60.6663 55.9999V39.3333C60.6663 38.0072 60.1396 36.7354 59.2019 35.7977C58.2642 34.86 56.9924 34.3333 55.6663 34.3333ZM37.333 39.3333V42.4833H34.183C33.9637 42.482 33.7462 42.524 33.5432 42.607C33.3401 42.6899 33.1554 42.8121 32.9997 42.9666L30.6663 45.3166V29.3333C30.6663 28.8912 30.8419 28.4673 31.1545 28.1547C31.4671 27.8422 31.891 27.6666 32.333 27.6666H48.9997C49.4417 27.6666 49.8656 27.8422 50.1782 28.1547C50.4907 28.4673 50.6663 28.8912 50.6663 29.3333V34.3333H42.333C41.0069 34.3333 39.7352 34.86 38.7975 35.7977C37.8598 36.7354 37.333 38.0072 37.333 39.3333ZM57.333 51.9833L55.6663 50.3166C55.512 50.1591 55.3279 50.0338 55.1248 49.948C54.9217 49.8622 54.7035 49.8175 54.483 49.8166H42.333C41.891 49.8166 41.4671 49.641 41.1545 49.3284C40.8419 49.0159 40.6663 48.5919 40.6663 48.1499V39.3333C40.6663 38.8912 40.8419 38.4673 41.1545 38.1547C41.4671 37.8422 41.891 37.6666 42.333 37.6666H55.6663C56.1084 37.6666 56.5323 37.8422 56.8449 38.1547C57.1574 38.4673 57.333 38.8912 57.333 39.3333V51.9833Z" fill="white"/>
</g>
</svg>


                    </div>
                    <div>
                    <span class="advantage__item-title">
                    Вы сможете оценить наш профессионализм и принять взвешенное решение о сотрудничестве
                    </span>
                    <span class="advantage__item-text">
                    Консультация поможет понять, подходим ли мы друг другу для длительного <br>сотрудничества. Осознанный выбор подрядчика сэкономит ваши нервы, время и деньги
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="bg-usluga-black">
<section class="withbg__section section__wrap consulting__first-back" style="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <h2>Уже <span>10 лет</span> выстраиваем<br> 
                    стабильные системы по<br> привлечению и удержанию<br> клиентов через интернет
                </h2>
                <span class="subtext">
                    Помогли промышленным
                    компаниям заработать:
                </span>
                <span class="subtext_colored">более 11 000 000 000 рублей</span>
                <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Оставить заявку на консультацию
                </a>
            </div>
        </div>
    </div>
</section>

<section class="withbg__section section__wrap consulting__second-back" style="">
    <div class="container">
        <div class="row">
        
            <div class="col-md-7">
                <h2>2,5 часа с собственником Сайткрафт<br><span>Дмитрием Шестаковым</span></h2>

                <ul class="dots__opacity">
                    <li>
                    Провёл более 100 рекламных кампаний в В2В-сегменте
                    </li>
                    <li>
                    Опыт в маркетинге более 10 лет
                    </li>
                    <li>
                    Реализовал более 300 крупных проектов
                    </li>
                </ul>
			<div class="card__consult">
				<span>Обсудим ваш маркетинг за чашкой<br> 
			кофе или назначим онлайн-консультацию?</span>
                <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                        Оставить заявку на консультацию
                </a>

			</div> 
            </div>		
			<div class="col-12 col-md-5 mt-auto text-center">
				<div class="team-circle team-circle-height">
					<img
						data-src="/img/team/circle.svg"
						class="js-lazyload circle-svg"
						style="opacity:0"
						alt="circle-svg"
					/>
					<img
						data-src="/img/team/Dmitry.png"
						class="js-lazyload team-img"
						style="opacity:0"
						alt="Дмитрий Шестаков"
					/>
				</div>
			</div>
        </div>
    </div>
</section>
<section class="withbg__section section__wrap consulting__third-back" style="">
    <div class="container">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <h2> </h2>
                <h2>У вас изменится<br> <span>картина мира</span></h2>
<span class="subtext">
и будет огромный перечень новых гипотез к <br> внедрению на каждом этапе воронки продаж
</span>

                <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Оставить заявку на консультацию
                </a>
            </div>
        </div>
    </div>
</section>
</section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product", 
  "name": "Консалтинг по маркетингу",
  "image": "https://saitcraft.ru/wp-content/uploads/2022/03/Mask-Group.jpg",
  "description": "Заказать услуги по внедрению и интеграции CRM систем: 1с Bitrix, AmoCRM. CRM показывает эффективность каналов продвижения, работы менеджеров.",
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
<?php
get_footer();