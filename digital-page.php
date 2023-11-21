<?php
/*
Template Name: Digital
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
                <h1><?php the_field('title_banner');?> <?php echo do_shortcode('[city_padej1]')?></h1>
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
             
                </div>
            </div>
        </div>
    </div>
</section>
<secion class="section__wrap grayback pb-1 pb-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2>Устали от интернет-маркетинга<br> <span>с фокусом на процесс?</span></h2>
                <ul class="checklist">
                    <li>Cделать красивый сайт</li>
                    <li>Запустить контекст</li>
                    <li>Продвинуть сайт в ТОП-10</li>
                    <li>Сделать рассылку</li>
                </ul>
                <h2 style="margin-top:20px" class="mb-5 pb-1 pb-sm-5">А на самом деле хотите вложить <span>Х</span> руб<br> 
и увеличить выручку и чистую прибыль<br> на <span>Y</span> руб за <span>t</span> времени при <span>Z</span> условиях</h2>
            </div>
            <div class="col-sm-4">
                <img class="mt-1 mt-sm-5 pt-1 pt-sm-5" src="/wp-content/uploads/2022/03/data_analysis_svg-1.png" alt="Схема пункты плана">
            </div>
        </div>
    </div>
</secion>
<section class="rost">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Начните путь к росту прибыли<br> с разработки <span>digital-стратегии</span></h2>
            </div>
        </div>
    </div>
</section>
<section class="section__wrap grayback pb-1 pb-sm-5 wave__wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>На какие вопросы <br>
ответит digital-стратегия?</span></h2>
            </div>
            <div class="col-sm-4">
                <div class="block__wave">
                <svg width="360" height="580" viewBox="0 0 360 580" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="mask0_552_4036" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="360" height="580">
<rect width="360" height="580" rx="20" fill="#C4C4C4"/>
</mask>
<g mask="url(#mask0_552_4036)">
<g filter="url(#filter0_f_552_4036)">
<path d="M165.5 153.5C88.7 184.3 23.1667 172 0 162V581.5H358.5V118C300 108 261.5 115 165.5 153.5Z" fill="url(#paint0_linear_552_4036)"/>
</g>
<path d="M165.5 153.5C88.7 184.3 23.1667 172 0 162V581.5H358.5V118C300 108 261.5 115 165.5 153.5Z" fill="url(#paint1_linear_552_4036)"/>
</g>
<defs>
<filter id="filter0_f_552_4036" x="-100" y="13.9014" width="558.5" height="667.599" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="50" result="effect1_foregroundBlur_552_4036"/>
</filter>
<linearGradient id="paint0_linear_552_4036" x1="12.0959" y1="195.731" x2="365.098" y2="203.804" gradientUnits="userSpaceOnUse">
<stop stop-color="#7823EB"/>
<stop offset="1" stop-color="#3123C7"/>
</linearGradient>
<linearGradient id="paint1_linear_552_4036" x1="6.16172" y1="132.086" x2="440.661" y2="235.161" gradientUnits="userSpaceOnUse">
<stop stop-color="#9600FE"/>
<stop offset="1" stop-color="#6700FF"/>
</linearGradient>
</defs>
</svg>
<span class="wave__title">75%</span>
<span class="wave__text">
успеха зависит<br>
от правильно<br> выбранной<br> стратегии
</span>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    
                    <div class="col-sm-6">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
                        <path d="M34.1668 47.6667C33.6724 47.6667 33.189 47.8133 32.7779 48.088C32.3668 48.3627 32.0463 48.7531 31.8571 49.21C31.6679 49.6668 31.6184 50.1694 31.7149 50.6544C31.8113 51.1393 32.0494 51.5848 32.3991 51.9344C32.7487 52.2841 33.1941 52.5222 33.6791 52.6186C34.1641 52.7151 34.6667 52.6656 35.1235 52.4764C35.5804 52.2871 35.9708 51.9667 36.2455 51.5556C36.5202 51.1445 36.6668 50.6611 36.6668 50.1667C36.6668 49.5036 36.4034 48.8677 35.9346 48.3989C35.4658 47.9301 34.8299 47.6667 34.1668 47.6667ZM51.6668 42.6667H31.6668C31.2248 42.6667 30.8009 42.4911 30.4883 42.1785C30.1758 41.866 30.0002 41.442 30.0002 41C30.0002 40.558 30.1758 40.1341 30.4883 39.8215C30.8009 39.5089 31.2248 39.3333 31.6668 39.3333H45.8188C46.9045 39.3298 47.9599 38.9746 48.8267 38.3208C49.6935 37.667 50.3251 36.75 50.6268 35.707L53.2692 26.4582C53.3401 26.2101 53.3524 25.949 53.3053 25.6954C53.2581 25.4417 53.1527 25.2025 52.9974 24.9966C52.842 24.7906 52.641 24.6235 52.4101 24.5084C52.1793 24.3933 51.9248 24.3334 51.6668 24.3333H31.2319C30.8869 23.3623 30.2509 22.5212 29.4105 21.9247C28.5702 21.3282 27.5663 21.0053 26.5358 21H25.0002C24.5581 21 24.1342 21.1756 23.8217 21.4882C23.5091 21.8007 23.3335 22.2246 23.3335 22.6667C23.3335 23.1087 23.5091 23.5326 23.8217 23.8452C24.1342 24.1577 24.5581 24.3333 25.0002 24.3333H26.5358C26.8976 24.3346 27.2493 24.453 27.5381 24.6709C27.827 24.8887 28.0375 25.1943 28.1382 25.5418L28.3974 26.4497L28.3978 26.4582L31.1322 36.0285C29.8598 36.1654 28.6883 36.7849 27.8589 37.7595C27.0296 38.7342 26.6055 39.9897 26.674 41.2676C26.7426 42.5455 27.2985 43.7485 28.2273 44.6289C29.1561 45.5092 30.3871 46 31.6668 46H51.6668C52.1089 46 52.5328 45.8244 52.8453 45.5118C53.1579 45.1993 53.3335 44.7754 53.3335 44.3333C53.3335 43.8913 53.1579 43.4674 52.8453 43.1548C52.5328 42.8423 52.1089 42.6667 51.6668 42.6667ZM49.4574 27.6667L47.422 34.7907C47.3215 35.1385 47.1109 35.4443 46.8219 35.6624C46.5328 35.8804 46.1809 35.9989 45.8188 36H34.5908L34.1659 34.513L32.2109 27.6667H49.4574ZM47.5002 47.6667C47.0057 47.6667 46.5224 47.8133 46.1112 48.088C45.7001 48.3627 45.3797 48.7531 45.1905 49.21C45.0012 49.6668 44.9517 50.1694 45.0482 50.6544C45.1447 51.1393 45.3828 51.5848 45.7324 51.9344C46.082 52.2841 46.5275 52.5222 47.0124 52.6186C47.4974 52.7151 48.0001 52.6656 48.4569 52.4764C48.9137 52.2871 49.3041 51.9667 49.5788 51.5556C49.8535 51.1445 50.0002 50.6611 50.0002 50.1667C50.0002 49.5036 49.7368 48.8677 49.2679 48.3989C48.7991 47.9301 48.1632 47.6667 47.5002 47.6667Z" fill="white"/>
                        </svg>
                        <div class="advantage__card">
                            <span class="advantage__title">
                            Рынок
                            </span>
                            <ul class="graydot">
                                <li>Что происходит на рынке?</li>
                                <li>Какие есть тренды?</li>
                                <li>Какой объем спроса?</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M40.4998 36.3667C41.3891 35.5969 42.1024 34.6448 42.5913 33.5751C43.0802 32.5053 43.3332 31.3429 43.3332 30.1667C43.3332 27.9566 42.4552 25.837 40.8924 24.2742C39.3296 22.7113 37.21 21.8334 34.9998 21.8334C32.7897 21.8334 30.6701 22.7113 29.1073 24.2742C27.5445 25.837 26.6665 27.9566 26.6665 30.1667C26.6665 31.3429 26.9195 32.5053 27.4084 33.5751C27.8973 34.6448 28.6105 35.5969 29.4998 36.3667C27.1667 37.4232 25.1873 39.1293 23.7981 41.2809C22.409 43.4326 21.669 45.9389 21.6665 48.5C21.6665 48.9421 21.8421 49.366 22.1547 49.6786C22.4672 49.9911 22.8911 50.1667 23.3332 50.1667C23.7752 50.1667 24.1991 49.9911 24.5117 49.6786C24.8242 49.366 24.9998 48.9421 24.9998 48.5C24.9998 45.8479 26.0534 43.3043 27.9288 41.429C29.8041 39.5536 32.3477 38.5 34.9998 38.5C37.652 38.5 40.1955 39.5536 42.0709 41.429C43.9463 43.3043 44.9998 45.8479 44.9998 48.5C44.9998 48.9421 45.1754 49.366 45.488 49.6786C45.8006 49.9911 46.2245 50.1667 46.6665 50.1667C47.1085 50.1667 47.5325 49.9911 47.845 49.6786C48.1576 49.366 48.3332 48.9421 48.3332 48.5C48.3307 45.9389 47.5907 43.4326 46.2015 41.2809C44.8124 39.1293 42.8329 37.4232 40.4998 36.3667ZM34.9998 35.1667C34.0109 35.1667 33.0442 34.8735 32.222 34.3241C31.3997 33.7746 30.7589 32.9938 30.3804 32.0801C30.002 31.1665 29.903 30.1612 30.0959 29.1913C30.2888 28.2214 30.765 27.3304 31.4643 26.6312C32.1636 25.9319 33.0545 25.4557 34.0244 25.2628C34.9943 25.0699 35.9996 25.1689 36.9133 25.5473C37.8269 25.9257 38.6078 26.5666 39.1572 27.3889C39.7066 28.2111 39.9998 29.1778 39.9998 30.1667C39.9998 31.4928 39.4731 32.7646 38.5354 33.7022C37.5977 34.6399 36.3259 35.1667 34.9998 35.1667ZM51.2332 35.7C52.2998 34.4989 52.9965 33.0151 53.2395 31.4273C53.4825 29.8394 53.2614 28.2152 52.6028 26.75C51.9442 25.2849 50.8762 24.0414 49.5273 23.1691C48.1784 22.2968 46.6062 21.8329 44.9998 21.8334C44.5578 21.8334 44.1339 22.009 43.8213 22.3215C43.5088 22.6341 43.3332 23.058 43.3332 23.5C43.3332 23.9421 43.5088 24.366 43.8213 24.6786C44.1339 24.9911 44.5578 25.1667 44.9998 25.1667C46.3259 25.1667 47.5977 25.6935 48.5354 26.6312C49.4731 27.5689 49.9998 28.8406 49.9998 30.1667C49.9975 31.0421 49.7653 31.9015 49.3266 32.6591C48.8879 33.4166 48.258 34.0457 47.4998 34.4834C47.2527 34.6259 47.0464 34.8295 46.9004 35.0746C46.7545 35.3197 46.674 35.5982 46.6665 35.8834C46.6595 36.1663 46.7247 36.4464 46.8559 36.6971C46.9872 36.9479 47.1801 37.1611 47.4165 37.3167L48.0665 37.75L48.2832 37.8667C50.2922 38.8196 51.987 40.3267 53.1681 42.2106C54.3492 44.0944 54.9674 46.2766 54.9498 48.5C54.9498 48.9421 55.1254 49.366 55.438 49.6786C55.7506 49.9911 56.1745 50.1667 56.6165 50.1667C57.0585 50.1667 57.4825 49.9911 57.795 49.6786C58.1076 49.366 58.2832 48.9421 58.2832 48.5C58.2968 45.9424 57.6562 43.4238 56.4223 41.1835C55.1884 38.9432 53.4021 37.0556 51.2332 35.7Z" fill="white"/>
</svg>

                        <div class="advantage__card">
                            <span class="advantage__title">
                            Конкуренты
                            </span>
                            <ul class="graydot">
                                <li>В чем их преимущества?</li>
                                <li>Как они продвигаются?</li>
                                <li>Как их победить?</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M55.0002 33.4999H53.3335V31.8333C53.3335 31.3912 53.1579 30.9673 52.8453 30.6547C52.5328 30.3422 52.1089 30.1666 51.6668 30.1666C51.2248 30.1666 50.8009 30.3422 50.4883 30.6547C50.1758 30.9673 50.0002 31.3912 50.0002 31.8333V33.4999H48.3335C47.8915 33.4999 47.4675 33.6755 47.155 33.9881C46.8424 34.3006 46.6668 34.7246 46.6668 35.1666C46.6668 35.6086 46.8424 36.0325 47.155 36.3451C47.4675 36.6577 47.8915 36.8333 48.3335 36.8333H50.0002V38.4999C50.0002 38.9419 50.1758 39.3659 50.4883 39.6784C50.8009 39.991 51.2248 40.1666 51.6668 40.1666C52.1089 40.1666 52.5328 39.991 52.8453 39.6784C53.1579 39.3659 53.3335 38.9419 53.3335 38.4999V36.8333H55.0002C55.4422 36.8333 55.8661 36.6577 56.1787 36.3451C56.4912 36.0325 56.6668 35.6086 56.6668 35.1666C56.6668 34.7246 56.4912 34.3006 56.1787 33.9881C55.8661 33.6755 55.4422 33.4999 55.0002 33.4999ZM42.1668 36.3666C43.0561 35.5968 43.7694 34.6447 44.2583 33.575C44.7472 32.5052 45.0002 31.3428 45.0002 30.1666C45.0002 27.9564 44.1222 25.8368 42.5594 24.274C40.9966 22.7112 38.877 21.8333 36.6668 21.8333C34.4567 21.8333 32.3371 22.7112 30.7743 24.274C29.2115 25.8368 28.3335 27.9564 28.3335 30.1666C28.3335 31.3428 28.5865 32.5052 29.0754 33.575C29.5642 34.6447 30.2775 35.5968 31.1668 36.3666C28.8337 37.4231 26.8543 39.1291 25.4651 41.2808C24.076 43.4325 23.3359 45.9388 23.3335 48.4999C23.3335 48.9419 23.5091 49.3659 23.8217 49.6784C24.1342 49.991 24.5581 50.1666 25.0002 50.1666C25.4422 50.1666 25.8661 49.991 26.1787 49.6784C26.4912 49.3659 26.6668 48.9419 26.6668 48.4999C26.6668 45.8478 27.7204 43.3042 29.5958 41.4289C31.4711 39.5535 34.0147 38.4999 36.6668 38.4999C39.319 38.4999 41.8625 39.5535 43.7379 41.4289C45.6133 43.3042 46.6668 45.8478 46.6668 48.4999C46.6668 48.9419 46.8424 49.3659 47.155 49.6784C47.4675 49.991 47.8915 50.1666 48.3335 50.1666C48.7755 50.1666 49.1994 49.991 49.512 49.6784C49.8246 49.3659 50.0002 48.9419 50.0002 48.4999C49.9977 45.9388 49.2577 43.4325 47.8685 41.2808C46.4794 39.1291 44.4999 37.4231 42.1668 36.3666ZM36.6668 35.1666C35.6779 35.1666 34.7112 34.8733 33.889 34.3239C33.0667 33.7745 32.4259 32.9936 32.0474 32.08C31.669 31.1664 31.57 30.161 31.7629 29.1911C31.9558 28.2212 32.432 27.3303 33.1313 26.6311C33.8306 25.9318 34.7215 25.4556 35.6914 25.2627C36.6613 25.0697 37.6666 25.1688 38.5802 25.5472C39.4939 25.9256 40.2748 26.5665 40.8242 27.3887C41.3736 28.211 41.6668 29.1777 41.6668 30.1666C41.6668 31.4927 41.14 32.7644 40.2024 33.7021C39.2647 34.6398 37.9929 35.1666 36.6668 35.1666Z" fill="white"/>
</svg>

                        <div class="advantage__card">
                            <span class="advantage__title">
                            Клиенты
                            </span>
                            <ul class="graydot">
                                <li>Кто ваши клиенты?</li>
                                <li>Где они находятся и чего хотят?</li>
                                <li>Как их убедить купить?</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M51.6668 19.3333H28.3335C27.0074 19.3333 25.7356 19.86 24.798 20.7977C23.8603 21.7354 23.3335 23.0072 23.3335 24.3333V47.6666C23.3335 48.9927 23.8603 50.2644 24.798 51.2021C25.7356 52.1398 27.0074 52.6666 28.3335 52.6666H51.6668C52.9929 52.6666 54.2647 52.1398 55.2024 51.2021C56.14 50.2644 56.6668 48.9927 56.6668 47.6666V24.3333C56.6668 23.0072 56.14 21.7354 55.2024 20.7977C54.2647 19.86 52.9929 19.3333 51.6668 19.3333ZM36.6668 22.6666H43.3335V27.8833L40.9168 26.2166C40.6447 26.0374 40.326 25.9419 40.0002 25.9419C39.6743 25.9419 39.3556 26.0374 39.0835 26.2166L36.6668 27.8833V22.6666ZM53.3335 47.6666C53.3335 48.1086 53.1579 48.5325 52.8453 48.8451C52.5328 49.1577 52.1089 49.3333 51.6668 49.3333H28.3335C27.8915 49.3333 27.4675 49.1577 27.155 48.8451C26.8424 48.5325 26.6668 48.1086 26.6668 47.6666V24.3333C26.6668 23.8912 26.8424 23.4673 27.155 23.1547C27.4675 22.8422 27.8915 22.6666 28.3335 22.6666H33.3335V30.9999C33.3343 31.3014 33.4169 31.5971 33.5724 31.8553C33.728 32.1136 33.9507 32.3249 34.2168 32.4666C34.4775 32.6004 34.7687 32.6632 35.0613 32.6485C35.3539 32.6339 35.6375 32.5424 35.8835 32.3833L40.0002 29.6666L44.0835 32.3833C44.3342 32.5483 44.6248 32.6427 44.9246 32.6563C45.2244 32.6699 45.5224 32.6023 45.787 32.4606C46.0516 32.3189 46.273 32.1084 46.4278 31.8513C46.5827 31.5942 46.6653 31.3001 46.6668 30.9999V22.6666H51.6668C52.1089 22.6666 52.5328 22.8422 52.8453 23.1547C53.1579 23.4673 53.3335 23.8912 53.3335 24.3333V47.6666Z" fill="white"/>
</svg>

                        <div class="advantage__card">
                            <span class="advantage__title">
                            Продукт
                            </span>
                            <ul class="graydot">
                                <li>Что и как продавать?</li>
                                <li>Как улучшить?</li>
                                <li>В чем ваши преимущества?</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M31.6667 42.6666C32.3297 42.6666 32.9656 42.4032 33.4344 41.9344C33.9033 41.4655 34.1667 40.8296 34.1667 40.1666C34.1748 40.0835 34.1748 39.9997 34.1667 39.9166L38.8167 35.2666H39.2H39.5833L42.2667 37.9499C42.2667 37.9499 42.2667 38.0333 42.2667 38.0833C42.2667 38.7463 42.5301 39.3822 42.9989 39.851C43.4677 40.3199 44.1036 40.5833 44.7667 40.5833C45.4297 40.5833 46.0656 40.3199 46.5344 39.851C47.0033 39.3822 47.2667 38.7463 47.2667 38.0833V37.9499L53.3333 31.8333C53.8278 31.8333 54.3111 31.6866 54.7223 31.4119C55.1334 31.1372 55.4538 30.7468 55.643 30.29C55.8322 29.8331 55.8818 29.3305 55.7853 28.8455C55.6888 28.3606 55.4507 27.9151 55.1011 27.5655C54.7515 27.2159 54.306 26.9778 53.8211 26.8813C53.3361 26.7848 52.8334 26.8343 52.3766 27.0236C51.9198 27.2128 51.5294 27.5332 51.2547 27.9443C50.98 28.3554 50.8333 28.8388 50.8333 29.3333C50.8252 29.4164 50.8252 29.5001 50.8333 29.5833L44.8167 35.5999H44.55L41.6667 32.6666C41.6667 32.0035 41.4033 31.3677 40.9344 30.8988C40.4656 30.43 39.8297 30.1666 39.1667 30.1666C38.5036 30.1666 37.8677 30.43 37.3989 30.8988C36.9301 31.3677 36.6667 32.0035 36.6667 32.6666L31.6667 37.6666C31.0036 37.6666 30.3677 37.93 29.8989 38.3988C29.4301 38.8677 29.1667 39.5035 29.1667 40.1666C29.1667 40.8296 29.4301 41.4655 29.8989 41.9344C30.3677 42.4032 31.0036 42.6666 31.6667 42.6666ZM54.1667 49.3333H25.8333V20.9999C25.8333 20.5579 25.6577 20.134 25.3452 19.8214C25.0326 19.5088 24.6087 19.3333 24.1667 19.3333C23.7246 19.3333 23.3007 19.5088 22.9882 19.8214C22.6756 20.134 22.5 20.5579 22.5 20.9999V50.9999C22.5 51.4419 22.6756 51.8659 22.9882 52.1784C23.3007 52.491 23.7246 52.6666 24.1667 52.6666H54.1667C54.6087 52.6666 55.0326 52.491 55.3452 52.1784C55.6577 51.8659 55.8333 51.4419 55.8333 50.9999C55.8333 50.5579 55.6577 50.134 55.3452 49.8214C55.0326 49.5088 54.6087 49.3333 54.1667 49.3333Z" fill="white"/>
</svg>

                        <div class="advantage__card">
                            <span class="advantage__title">
                            Продвижение
                            </span>
                            <ul class="graydot">
                                <li>Какие рекламные каналы выбрать?</li>
                                <li>А что не сработает?</li>
                                <li>Какие офферы использовать?</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M31.6668 40.9999H36.6668C37.1089 40.9999 37.5328 40.8243 37.8453 40.5118C38.1579 40.1992 38.3335 39.7753 38.3335 39.3333C38.3335 38.8912 38.1579 38.4673 37.8453 38.1547C37.5328 37.8422 37.1089 37.6666 36.6668 37.6666H31.6668C31.2248 37.6666 30.8009 37.8422 30.4883 38.1547C30.1758 38.4673 30.0002 38.8912 30.0002 39.3333C30.0002 39.7753 30.1758 40.1992 30.4883 40.5118C30.8009 40.8243 31.2248 40.9999 31.6668 40.9999ZM51.6668 24.3333H28.3335C27.0074 24.3333 25.7356 24.86 24.798 25.7977C23.8603 26.7354 23.3335 28.0072 23.3335 29.3333V44.3333C23.3335 45.6593 23.8603 46.9311 24.798 47.8688C25.7356 48.8065 27.0074 49.3333 28.3335 49.3333H51.6668C52.9929 49.3333 54.2647 48.8065 55.2024 47.8688C56.14 46.9311 56.6668 45.6593 56.6668 44.3333V29.3333C56.6668 28.0072 56.14 26.7354 55.2024 25.7977C54.2647 24.86 52.9929 24.3333 51.6668 24.3333ZM53.3335 44.3333C53.3335 44.7753 53.1579 45.1992 52.8453 45.5118C52.5328 45.8243 52.1089 45.9999 51.6668 45.9999H28.3335C27.8915 45.9999 27.4675 45.8243 27.155 45.5118C26.8424 45.1992 26.6668 44.7753 26.6668 44.3333V34.3333H53.3335V44.3333ZM53.3335 30.9999H26.6668V29.3333C26.6668 28.8912 26.8424 28.4673 27.155 28.1547C27.4675 27.8422 27.8915 27.6666 28.3335 27.6666H51.6668C52.1089 27.6666 52.5328 27.8422 52.8453 28.1547C53.1579 28.4673 53.3335 28.8912 53.3335 29.3333V30.9999Z" fill="white"/>
</svg>

                        <div class="advantage__card">
                            <span class="advantage__title">
                            Прибыль
                            </span>
                            <ul class="graydot">
                                <li>Сколько денег и времени потребуется?</li>
                                <li>Как повысить конверсию?</li>
                                <li>Как увеличить оборот?</li>
                            </ul>
                        </div>
                    </div>
           

            </div>
            </div>
            <!-- <div class="col-sm-12 mt-4 mb-5 d-flex align-items-center">
            <a href="#" class="usluga__btn poprobuem__btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
Ок, давайте попробуем!
                </a>
                <span class="poprobuem__text">
                В некоторых нишах конверсия сайта<br> 
в обращение с рекламы достигала 14% <img src="/wp-content/uploads/2022/03/image-59.png" alt="">
                </span>
            </div> -->
            
          
        </div>
    </div>
</section>

<section class="dev__banner2 context__banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 my-auto">

                <div class="quote__block">
                    <span class="quote__text">
                    Мы уже многократно<br> убеждались, что <span>работа без<br> стратегии</span> – это как пальба<br> из пушки по воробьям...
                    </span>
                    <span class="quote__name">Евгений</span>
                    <span class="quote__job">Управляющий партнер</span>
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
						data-src="/img/team/Evgeniy.png"
						class="js-lazyload team-img"
						style="opacity:0"
						alt="Евгений"
					/>
				</div>
			</div>
        </div>
    </div>
</section>
<section class="cases__section">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2>К каким результатам может <br>
привести <span>работа по стратегии?</span></h2>
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
                            <a href="javascript:;" class="btn btn__cases btn__cases-form" data-stc-modal="#feedback-stc">Хочу так же!</a>
                            <a href="/projects/" class="btn btn__cases btn__cases-link">Больше кейсов</a>
                        </div>
                  </div>
              </div>
          </section>

<section class="slider__wrap ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Какие <span>исследования и работы</span> <br>
входят в digital-стратегию?</h2>
            </div>
            <div class="col-sm-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" data-total="6" role="tablist">
                <span class="line" data-percent="1"></span>
                <li class="nav-item" role="presentation">
                    <button data-id="1" class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">
                        <span class="number__slide">1</span>
                        <span class="text__slide">
                        Анализируем рынок, <br>
продукт и конкурентов
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="2" class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">
                    <span class="number__slide">2</span>
                        <span class="text__slide">
                        Исследуем целевую <br>
аудиторию
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="3" class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">
                    <span class="number__slide">3</span>
                        <span class="text__slide">
                        Оцениваем ситуацию <br>
в интернет-маркетинге
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="4" class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">
                    <span class="number__slide">4</span>
                        <span class="text__slide">
                        Формируем УТП
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="5" class="nav-link" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false">
                    <span class="number__slide">5</span>
                        <span class="text__slide">
                       Проектируем сайт
                        </span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button data-id="6" class="nav-link" id="pills-6-tab" data-bs-toggle="pill" data-bs-target="#pills-6" type="button" role="tab" aria-controls="pills-6" aria-selected="false">
                    <span class="number__slide">6</span>
                        <span class="text__slide">
                        Формируем стратегию <br/> по рекламным каналам
                        </span>
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button data-id="7" class="nav-link" id="pills-7-tab" data-bs-toggle="pill" data-bs-target="#pills-7" type="button" role="tab" aria-controls="pills-7" aria-selected="false">
                    <span class="number__slide">7</span>
                        <span class="text__slide">
                        Создаём план работ
                        </span>
                    </button>
                </li>
           
                </ul>
                <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>01</span>Анализируем рынок, продукт и конкурентов
</h3>
                            <div class="padding__content">
                                <ul class="checklist">
									 <li>Формулируем цели и задачи стратегии</li>
                                    <li>Изучаем линейку продуктов и услуг компании</li>
                                    <li>Замеряем объем целевой аудитории (интернет-спрос)</li>
                                    <li>Оцениваем конкурентов: продукт, тех. параметры сайта, юзабилити, источники трафика (минимум 10 конкурентов)</li>
                                    <li>Составляем семантическое ядро базовое</li>
                                    <li>Составляем семантическое ядро расширенное</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2023/01/slide_01.png" alt="Рынок, продукт и конкуренты">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>02</span>Исследуем целевую аудиторию</h3>
                            <div class="padding__content">
                                <ul class="checklist">
                                    <li>Анализируем типовых персонажей</li>
                                    <li>Ищем новые сегменты целевой аудитории</li>
                                    <li>Изучаем требования аудитории к продукту, ключевые барьеры аудитории к покупке</li>
									 <li>Прописываем триггеры целевой аудитории к покупке</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2023/01/slide_02.png" alt="Целевая аудитория">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>03</span>Оцениваем ситуацию в интернет-маркетинге</h3>
                            <div class="padding__content">
                               <ul class="checklist">
                                    <li>Делаем аудит текущего сайта и других точек контакта</li>
                                    <li>Анализируем текущие показатели по трафику в разрезе рекламных каналов</li>

								   <li>Оцениваем конверсии, количество и стоимость обращений и продаж</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2023/01/slide_03.png" alt="Аудит текущей ситуации в интернет-маркетинге">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>04</span>Формируем УТП</h3>
                            <div class="padding__content">
                                <ul class="checklist">
                                    <li>Выявляем позиционирование продукта</li>
                                    <li>Составляем УТП компании в сравнении с конкурентами</li>
									<li>Разрабатываем упаковку продукта</li>
									<li>Делаем триггерные посылы для разных каналов и сегментов целевой аудитории</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2023/01/slide_04.png" alt="Формируем УТП">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>05</span>Проектируем сайт</h3>
                            <div class="padding__content">
                                <ul class="checklist">
                                    <li>Формируем структуру сайта, правильные каталоги и прайсы</li>
                                    <li>Разрабатываем прототипы всех страниц сайта с учетом требования поисковых систем</li>
                                    <li>Описываем рекомендации по доработке сайта</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2023/01/slide_05.png" alt="Рынок, продукт и конкуренты">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>06</span>Формируем стратегию по рекламным каналам</h3>
                            <div class="padding__content">
                                <ul class="checklist">
                                    <li>Поисковое продвижение (SEO)</li>
                                    <li>Контекстная реклама и таргетированная реклама</li>
                                    <li>Контент-маркетинг. SMM. Реклама в тематических сообществах и на порталах. E-mail маркетинг и т.п.</li>
									<li>Прописываем KPI и прогнозируем объем заказов через интернет по всем каналам</li>
                                </ul>
                            </div>
                        </div> 
						  <div class="col-sm-6">
                            <img src="/wp-content/uploads/2023/01/slide_06.png" alt="Рынок, продукт и конкуренты">
                        </div>
                </div>
                </div>
					
					  <div class="tab-pane fade" id="pills-7" role="tabpanel" aria-labelledby="pills-7-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3><span>07</span>Создаём план работ</h3>
                            <div class="padding__content">
                                <ul class="checklist">
                                    <li>Проводим оценку необходимых бюджетов</li>
                                    <li>Понимаем сколько человеческих ресурсов нам потребуется</li>
                                    <li>Составляем график работ по месяцам</li>
									<li>Прогнозируем результаты по всем каналам интернет-маркетинга</li>

<li>Составляем прогноз по отдаче от вложений</li>
                                </ul>
                            </div>
                        </div>
                
				
				        <div class="col-sm-6">
                            <img src="/wp-content/uploads/2023/01/slide_07.png" alt="Рынок, продукт и конкуренты">
                        </div>
                    </div>
					</div>	
            </div>			
            </div>
        </div>
    </div>
</section>
<!-- <section class="digital__banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span class="subtext">
                А что на выходе?
                </span>
                <h2>Пошаговый план действий<br> 
для получения заветного результата</h2>
            </div>
            <div class="col-sm-6">
            <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      Все о ваших конкурентах
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      Готовое семантическое ядро
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      Типы клиентов и как им продавать
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/diagramm.png" alt="диаграма">
            </div>
        </div>
    </div>
</section> -->

<section class="section__wrap digital__wrap pb-1 pb-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Примеры наших digital-стратегий</h2>
                <span class="subtitle">В среднем объем стратегии — <strong>67 страниц документа + таблицы</strong></span>
            </div>
            <div class="col-sm-6">
                <a href="/wp-content/uploads/2022/03/book-mockup2-3.png" data-fancybox="cc_190_11" class="digital__case">
                    <div class="digital__case-img"> 
                        <img src="/wp-content/uploads/2022/03/book-mockup2-3.png" alt="Обложка Стратегии">
                    </div>
                    <span class="digital__case-title">Трубный металлопрокат</span>
                    <span class="digital__case-text">
                    Необходимо было увеличить чистую прибыль компании в 1,5 раза. 
С 10 млн. рублей до 15 млн. рублей за 15 месяцев
                    </span>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="/wp-content/uploads/2022/03/book-mockup2-3-1.png" data-fancybox="cc_190_12" class="digital__case">
                    <div class="digital__case-img"> 
                        <img src="/wp-content/uploads/2022/03/book-mockup2-3-1.png" alt="Цели компании">
                    </div>
                    <span class="digital__case-title">Строительные материалы</span>
                    <span class="digital__case-text">
                    Задача привлечь новых клиентов из основных целевых групп — 
строительные магазины и строительные компании
                    </span>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="/wp-content/uploads/2022/03/book-mockup2-5.png" data-fancybox="cc_190_13" class="digital__case">
                    <div class="digital__case-img"> 
                        <img src="/wp-content/uploads/2022/03/book-mockup2-5.png" alt="Привлечь новых клиентов">
                    </div>
                    <span class="digital__case-title">Природный камень</span>
                    <span class="digital__case-text">
                    Цель — привлечь новых клиентов из B2B-сегмента 
и наладить оптовые продажи
                    </span>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="/wp-content/uploads/2022/03/book-mockup2-4.png" data-fancybox="cc_190_14" class="digital__case">
                    <div class="digital__case-img"> 
                        <img src="/wp-content/uploads/2022/03/book-mockup2-4.png" alt="Увеличение интернет-трафика">
                    </div>
                    <span class="digital__case-title">Грузоперевозки</span>
                    <span class="digital__case-text">
                    Увеличение интернет-трафика, повышение 
конверсии сайта, к концу 2021 года ежемесячно
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="black__section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Ок, сделали стратегию.<br>А что дальше?</h2>
            </div>
            <div class="col-sm-6">
                <span class="black__section-title"><span>01</span>Вы можете доверить реализацию<br> 
маркетинговой стратегии нам</span>
<span class="black__section-text">
У нас в штате есть все необходимые специалисты — интернет-маркетологи, SEO-специалисты, таргетологи, дизайнеры, программисты, контент-менеджеры. Если какого-то специалиста будет не хватать, мы привлечём его на подряд
</span>
            </div>
            <div class="col-sm-6">
                <span class="black__section-title"><span>02</span>Вы можете самостоятельно заняться<br> 
реализацией стратегии</span>
<span class="black__section-text">
В таком случае, мы можем рекомендовать вам наше сопровождение. Каждый месяц мы будем проводить с вами сессии, в ходе которых будем корректировать ход работ
</span>
            </div>
        </div>
    </div>
</section>

<section class="section__wrap grayback pb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2><span>Вам понравится</span> с нами работать</h2>
            </div>


            <div class="col-sm-4">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
                    <path d="M51.6668 29.333H50.0002V24.333C50.0002 23.0069 49.4734 21.7352 48.5357 20.7975C47.598 19.8598 46.3262 19.333 45.0002 19.333H28.3335C27.0074 19.333 25.7356 19.8598 24.798 20.7975C23.8603 21.7352 23.3335 23.0069 23.3335 24.333V44.333C23.3351 44.6621 23.4341 44.9832 23.618 45.2561C23.8019 45.529 24.0625 45.7413 24.3668 45.8663C24.5646 45.9596 24.7815 46.0053 25.0002 45.9997C25.2195 46.0009 25.4369 45.9589 25.64 45.876C25.8431 45.793 26.0278 45.6708 26.1835 45.5163L30.8668 40.8163H33.3335V43.2163C33.3335 44.5424 33.8603 45.8142 34.798 46.7519C35.7356 47.6896 37.0074 48.2163 38.3335 48.2163H49.8668L53.8168 52.183C53.9726 52.3375 54.1573 52.4597 54.3603 52.5426C54.5634 52.6256 54.7808 52.6676 55.0002 52.6663C55.2188 52.672 55.4357 52.6263 55.6335 52.533C55.9379 52.408 56.1984 52.1956 56.3823 51.9228C56.5662 51.6499 56.6652 51.3287 56.6668 50.9997V34.333C56.6668 33.0069 56.14 31.7352 55.2024 30.7975C54.2647 29.8598 52.9929 29.333 51.6668 29.333ZM33.3335 34.333V37.483H30.1835C29.9642 37.4817 29.7467 37.5238 29.5437 37.6067C29.3406 37.6897 29.1559 37.8119 29.0002 37.9663L26.6668 40.3163V24.333C26.6668 23.891 26.8424 23.4671 27.155 23.1545C27.4675 22.8419 27.8915 22.6663 28.3335 22.6663H45.0002C45.4422 22.6663 45.8661 22.8419 46.1787 23.1545C46.4912 23.4671 46.6668 23.891 46.6668 24.333V29.333H38.3335C37.0074 29.333 35.7356 29.8598 34.798 30.7975C33.8603 31.7352 33.3335 33.0069 33.3335 34.333ZM53.3335 46.983L51.6668 45.3163C51.5125 45.1589 51.3284 45.0336 51.1253 44.9477C50.9221 44.8619 50.704 44.8173 50.4835 44.8163H38.3335C37.8915 44.8163 37.4675 44.6407 37.155 44.3282C36.8424 44.0156 36.6668 43.5917 36.6668 43.1497V34.333C36.6668 33.891 36.8424 33.4671 37.155 33.1545C37.4675 32.8419 37.8915 32.6663 38.3335 32.6663H51.6668C52.1089 32.6663 52.5328 32.8419 52.8453 33.1545C53.1579 33.4671 53.3335 33.891 53.3335 34.333V46.983Z" fill="white"/>
                </svg>

                <div class="advantage__card">
                    <span class="advantage__title" style="height: auto;">
                    Личный стратег
                    </span>
                    <span class="advantage__text">
                    Полностью погрузится в ваш проект и не<br> будет задавать одни и те же вопросы по<br> несколько раз
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M53.3525 21.3876C53.1492 21.2231 52.9116 21.1063 52.6572 21.0457C52.4028 20.9851 52.1381 20.9824 51.8825 21.0376C50.0125 21.4295 48.0821 21.4344 46.2101 21.0522C44.3381 20.67 42.5642 19.9087 40.9975 18.8151C40.7046 18.6118 40.3565 18.5029 40 18.5029C39.6435 18.5029 39.2955 18.6118 39.0025 18.8151C37.4358 19.9087 35.6619 20.67 33.7899 21.0522C31.9179 21.4344 29.9875 21.4295 28.1175 21.0376C27.8619 20.9824 27.5972 20.9851 27.3428 21.0457C27.0884 21.1063 26.8508 21.2231 26.6475 21.3876C26.4445 21.5523 26.2809 21.7604 26.1689 21.9966C26.0568 22.2328 25.9991 22.4911 26 22.7526V35.7901C25.9985 38.2991 26.5964 40.7722 27.7439 43.0035C28.8915 45.2347 30.5556 47.1595 32.5975 48.6175L38.985 53.1676C39.2814 53.3786 39.6362 53.492 40 53.492C40.3638 53.492 40.7186 53.3786 41.015 53.1676L47.4025 48.6175C49.4444 47.1595 51.1085 45.2347 52.2561 43.0035C53.4037 40.7722 54.0016 38.2991 54 35.7901V22.7526C54.0009 22.4911 53.9432 22.2328 53.8311 21.9966C53.7191 21.7604 53.5555 21.5523 53.3525 21.3876ZM50.5 35.7901C50.5014 37.7409 50.0368 39.6638 49.1449 41.3988C48.253 43.1339 46.9597 44.6308 45.3725 45.7651L40 49.5976L34.6275 45.7651C33.0403 44.6308 31.747 43.1339 30.8551 41.3988C29.9633 39.6638 29.4987 37.7409 29.5 35.7901V24.7651C33.1688 25.0791 36.8431 24.2278 40 22.3326C43.1569 24.2278 46.8313 25.0791 50.5 24.7651V35.7901ZM42.695 31.7826L37.9875 36.5076L36.43 34.9326C36.1005 34.603 35.6535 34.4179 35.1875 34.4179C34.7215 34.4179 34.2745 34.603 33.945 34.9326C33.6155 35.2621 33.4304 35.709 33.4304 36.1751C33.4304 36.6411 33.6155 37.088 33.945 37.4176L36.745 40.2176C36.9077 40.3816 37.1012 40.5118 37.3145 40.6006C37.5278 40.6895 37.7565 40.7352 37.9875 40.7352C38.2185 40.7352 38.4473 40.6895 38.6605 40.6006C38.8738 40.5118 39.0673 40.3816 39.23 40.2176L45.25 34.2501C45.5795 33.9205 45.7647 33.4736 45.7647 33.0076C45.7647 32.5415 45.5795 32.0946 45.25 31.7651C44.9205 31.4355 44.4735 31.2504 44.0075 31.2504C43.5415 31.2504 43.0945 31.4355 42.765 31.7651L42.695 31.7826Z" fill="white"/>
</svg>


                <div class="advantage__card">
                    <span class="advantage__title" style="height: auto;">
                    Конфиденциальность данных
                    </span>
                    <span class="advantage__text">
                    Вы можете нам доверять — со всеми<br> клиентами заключаем договор<br> о неразглашении информации
                    </span>
                </div>
            </div>
            <div class="col-sm-4">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M77.2613 14.5709C65.6371 -7.23877 13.7161 -3.17255 2.47952 17.5282C-8.7571 38.2289 20.6907 80 40.8391 80C60.9875 80 88.8854 36.3806 77.2613 14.5709Z" fill="#6430E8"/>
<path d="M31.6667 42.6663C32.3297 42.6663 32.9656 42.403 33.4344 41.9341C33.9033 41.4653 34.1667 40.8294 34.1667 40.1663C34.1748 40.0832 34.1748 39.9995 34.1667 39.9163L38.8167 35.2663H39.2H39.5833L42.2667 37.9497C42.2667 37.9497 42.2667 38.033 42.2667 38.083C42.2667 38.746 42.5301 39.3819 42.9989 39.8508C43.4677 40.3196 44.1036 40.583 44.7667 40.583C45.4297 40.583 46.0656 40.3196 46.5344 39.8508C47.0033 39.3819 47.2667 38.746 47.2667 38.083V37.9497L53.3333 31.833C53.8278 31.833 54.3111 31.6864 54.7223 31.4117C55.1334 31.137 55.4538 30.7465 55.643 30.2897C55.8322 29.8329 55.8818 29.3302 55.7853 28.8453C55.6888 28.3603 55.4507 27.9149 55.1011 27.5652C54.7515 27.2156 54.306 26.9775 53.8211 26.881C53.3361 26.7846 52.8334 26.8341 52.3766 27.0233C51.9198 27.2125 51.5294 27.533 51.2547 27.9441C50.98 28.3552 50.8333 28.8386 50.8333 29.333C50.8252 29.4161 50.8252 29.4999 50.8333 29.583L44.8167 35.5997H44.55L41.6667 32.6663C41.6667 32.0033 41.4033 31.3674 40.9344 30.8986C40.4656 30.4297 39.8297 30.1663 39.1667 30.1663C38.5036 30.1663 37.8677 30.4297 37.3989 30.8986C36.9301 31.3674 36.6667 32.0033 36.6667 32.6663L31.6667 37.6663C31.0036 37.6663 30.3677 37.9297 29.8989 38.3986C29.4301 38.8674 29.1667 39.5033 29.1667 40.1663C29.1667 40.8294 29.4301 41.4653 29.8989 41.9341C30.3677 42.403 31.0036 42.6663 31.6667 42.6663ZM54.1667 49.333H25.8333V20.9997C25.8333 20.5576 25.6577 20.1337 25.3452 19.8212C25.0326 19.5086 24.6087 19.333 24.1667 19.333C23.7246 19.333 23.3007 19.5086 22.9882 19.8212C22.6756 20.1337 22.5 20.5576 22.5 20.9997V50.9997C22.5 51.4417 22.6756 51.8656 22.9882 52.1782C23.3007 52.4907 23.7246 52.6663 24.1667 52.6663H54.1667C54.6087 52.6663 55.0326 52.4907 55.3452 52.1782C55.6577 51.8656 55.8333 51.4417 55.8333 50.9997C55.8333 50.5576 55.6577 50.1337 55.3452 49.8212C55.0326 49.5086 54.6087 49.333 54.1667 49.333Z" fill="white"/>
</svg>


                <div class="advantage__card">
                    <span class="advantage__title" style="height: auto;">
                    Большой опыт на B2B-рынках
                    </span>
                    <span class="advantage__text">
                    Более 9 лет специализируемся на<br> увеличении продаж для промышленных и<br> B2B компаний
                    </span>
                </div>
            </div>

            <div class="col-sm-12 pb-5 pt-3 d-flex justify-content-center justify-content-lg-start">
                <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Ок, давайте попробуем!
                </a>
            </div>

        </div>
    </div>
</section>
<div style="display:none;">
<a href="/img/стратегия трубный прокат/01_02.jpg" title="Трубный металлопрокат" data-fancybox="cc_190_11" class=""></a>
<a href="/img/стратегия трубный прокат/01_03.jpg" title="Трубный металлопрокат" data-fancybox="cc_190_11" class=""></a>  
<a href="/img/стратегия трубный прокат/01_04.jpg" title="Трубный металлопрокат" data-fancybox="cc_190_11" class=""></a>  
<a href="/img/стратегия трубный прокат/01_05.jpg" title="Трубный металлопрокат" data-fancybox="cc_190_11" class=""></a>  
<a href="/img/стратегия трубный прокат/01_06.jpg" title="Трубный металлопрокат" data-fancybox="cc_190_11" class=""></a>  
<a href="/img/стратегия трубный прокат/01_07.jpg" title="Трубный металлопрокат" data-fancybox="cc_190_11" class=""></a>  
<a href="/img/стратегия трубный прокат/01_08.jpg" title="Трубный металлопрокат" data-fancybox="cc_190_11" class=""></a>  
 </div>

<div style="display:none;">
<a href="/img/Строительные материалы/201.jpg" title="Строительные материалы" data-fancybox="cc_190_12" class=""></a>
<a href="/img/Строительные материалы/202.jpg" title="Строительные материалы" data-fancybox="cc_190_12" class=""></a>  
<a href="/img/Строительные материалы/203.jpg" title="Строительные материалы" data-fancybox="cc_190_12" class=""></a>  
<a href="/img/Строительные материалы/204.jpg" title="Строительные материалы" data-fancybox="cc_190_12" class=""></a>  
<a href="/img/Строительные материалы/205.jpg" title="Строительные материалы" data-fancybox="cc_190_12" class=""></a>  
<a href="/img/Строительные материалы/206.jpg" title="Строительные материалы" data-fancybox="cc_190_12" class=""></a>  
<a href="/img/Строительные материалы/207.jpg" title="Строительные материалы" data-fancybox="cc_190_12" class=""></a>  
<a href="/img/Строительные материалы/208.jpg" title="Строительные материалы" data-fancybox="cc_190_12" class=""></a> 
<a href="/img/Строительные материалы/209.jpg" title="Строительные материалы" data-fancybox="cc_190_12" class=""></a> 
<a href="/img/Строительные материалы/210.jpg" title="Строительные материалы" data-fancybox="cc_190_12" class=""></a> 
<a href="/img/Строительные материалы/211.jpg" title="Строительные материалы" data-fancybox="cc_190_12" class=""></a> 
 </div>

<div style="display:none;">
<a href="/img/Природный камень/03_01.jpg" title="Природный камень" data-fancybox="cc_190_13" class=""></a>
<a href="/img/Природный камень/03_02.jpg" title="Природный камень" data-fancybox="cc_190_13" class=""></a>  
<a href="/img/Природный камень/03_03.jpg" title="Природный камень" data-fancybox="cc_190_13" class=""></a>  
<a href="/img/Природный камень/03_04.jpg" title="Природный камень" data-fancybox="cc_190_13" class=""></a>  
<a href="/img/Природный камень/03_05.jpg" title="Природный камень" data-fancybox="cc_190_13" class=""></a>  
<a href="/img/Природный камень/03_06.jpg" title="Природный камень" data-fancybox="cc_190_13" class=""></a>  
<a href="/img/Природный камень/03_07.jpg" title="Природный камень" data-fancybox="cc_190_13" class=""></a>  
<a href="/img/Природный камень/03_08.jpg" title="Природный камень" data-fancybox="cc_190_13" class=""></a> 
<a href="/img/Природный камень/03_09.jpg" title="Природный камень" data-fancybox="cc_190_13" class=""></a> 
<a href="/img/Природный камень/03_10.jpg" title="Природный камень" data-fancybox="cc_190_13" class=""></a> 
<a href="/img/Природный камень/03_11.jpg" title="Природный камень" data-fancybox="cc_190_13" class=""></a> 
 </div>


<div style="display:none;">
<a href="/img/Продажа спецтехники/401.jpg" title="Продажа спецтехники" data-fancybox="cc_190_14" class=""></a>
<a href="/img/Продажа спецтехники/402.jpg" title="Продажа спецтехники" data-fancybox="cc_190_14" class=""></a>  
<a href="/img/Продажа спецтехники/403.jpg" title="Продажа спецтехники" data-fancybox="cc_190_14" class=""></a>  
<a href="/img/Продажа спецтехники/404.jpg" title="Продажа спецтехники" data-fancybox="cc_190_14" class=""></a>  
<a href="/img/Продажа спецтехники/405.jpg" title="Продажа спецтехники" data-fancybox="cc_190_14" class=""></a>  
<a href="/img/Продажа спецтехники/406.jpg" title="Продажа спецтехники" data-fancybox="cc_190_14" class=""></a>  
<a href="/img/Продажа спецтехники/407.jpg" title="Продажа спецтехники" data-fancybox="cc_190_14" class=""></a>  
<a href="/img/Продажа спецтехники/408.jpg" title="Продажа спецтехники" data-fancybox="cc_190_14" class=""></a> 
 </div>
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product", 
  "name": "Разработка digital-стратегии для B2B-компании",
  "image": "https://saitcraft.ru/wp-content/uploads/2022/03/mask-group-9.png",
  "description": "Наше агентство разрабатывает диджитал-стратегию продвижения, которая позволяет узнать путь от точки А в точку В в min сроки, с max окупаемостью.",
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