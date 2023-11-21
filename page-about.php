<?php
/*
Template Name: Об агентстве
*/
get_header();
?>
<div class="about__page">
    <section class="about__section">
<div class="container breadcrumbs__block">
        <div class="row">
            <div class="col-sm-12">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Маркетинговое агентство<br> Сайткрафт</h1>
                <span class="about__subtitle">Более 13 лет в интернет-маркетинге для B2B</span>
                <span class="about__text d-block mb-5">Реализуем сложные проекты в промышленной сфере: нефтегазовая,<br> металлы, оборудование, спец.техника, строительство, производство.</span>
                <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
	                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.5 12C23.5 18.0751 18.5751 23 12.5 23C10.7804 23 2.5 23 2.5 23C2.5 23 2.5 23 5.09717 20.1363C2.88713 18.1244 1.5 15.2242 1.5 12C1.5 5.92487 6.42487 1 12.5 1C18.5751 1 23.5 5.92487 23.5 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M13.5 14H9.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16.5 10H9.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Обсудить проект
                </a>
                                <span class="scroll__btn">
                                <svg width="22" height="33" viewBox="0 0 22 33" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="1" y="1" width="20" height="31" rx="10" stroke="#667399" stroke-width="2"/>
<rect x="9.625" y="6.875" width="2.75" height="6.875" rx="1.375" fill="#667399"/>
</svg>

                                </span>
            </div>			
			<div class="col-12 col-md-5 m-auto text-center">
				<div class="team-circle photo__label-wra">
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
					<div class="photo__label">
						<span class="photo__label-name">Дмитрий Шестаков</span>
						<span class="photo__label-job">Управляющий партнер</span>
					</div>
				</div>
			</div>
        </div>
    </div>
    </section>
    <section class="about__inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span class="bigplus">
                    > <span>11 000 000 000</span> ₽
                    </span>
                    <span class="bigplus__text">
                    Помогли заработать клиентам за последние 5 лет
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="team__wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2><span>35</span> сотрудников в офисе и на удалёнке</h2>
                    <span class="team__wrap-text">
                    Мы работаем только проектными командами, максимально<br> системно. Никакого потока, конвейера, шаблонных услуг
                    </span>
                </div>
            </div>
        </div>
        <img src="/wp-content/uploads/2022/10/mask-group-5.png" alt="Групповое фото сотрудников СайтКрафт">
    </section>
    <section class="about__advantages">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Работаем на<br> показатели бизнеса</h2>
                    <span>Строим управляемую систему по привлечению<br> клиентов через интернет: от стратегии, до реализации.<br>
                    Главное — финансовый результат, а не лиды, звонки,<br> запросы в ТОП или трафик на сайт.</span>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h2>Сайткрафт — это про<br> дело и про любовь</h2>
                    <span>Ставим заботу, сервис и ваше спокойствие во главу угла.<br> С вас —задачи, с нас идея и реализация. Работаем в срок и без<br> напоминаний. Помогаем решать проблемы, даже если они вне зоны<br> нашей ответственности. Говорим с вами на понятном языке.</span>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();