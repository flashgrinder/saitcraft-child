<?php if( !is_page_template('page-director.php' ) ): ?>
<!-- Form Page-->
<section class="form-page">
	<div class="form-page__body container">
		<div class="form-page__col form-page__col--left">
			<div class="form-page__info">
				<h3 class="form-page__heading title title--big title--white title--w-extra-bold">
					Обсудим ваш проект
				</h3>
				<p class="form-page__subtitle text text--large text--white text--w-semi-bold">
					Расскажите о задачах и задайте вопросы — <br>мы перезвоним в течение рабочего дня
				</p>
			</div>
			<div class="form-page__contacts">
				<a href="tel:8 (800) 500-98-49" class="form-page__link link title title--large title--white title--w-extra-bold">
					8 (800) 500-98-49
				</a>
				<a href="https://t.me/saitcraft_ru" class="form-page__link form-page__link--tg link">
					<svg width="44" height="37" viewBox="0 0 44 37" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M42.8125 4.28125C43.375 1.65625 41.875 0.625 40.1875 1.28125L2.875 15.625C0.34375 16.6562 0.4375 18.0625 2.5 18.7188L11.9688 21.625L34.0938 7.75C35.125 7 36.1562 7.46875 35.3125 8.125L17.4062 24.25L16.75 34.0938C17.7812 34.0938 18.1562 33.7188 18.7188 33.1562L23.3125 28.6562L32.9688 35.7812C34.75 36.8125 36.0625 36.25 36.5312 34.1875L42.8125 4.28125Z" fill="white" />
					</svg>
				</a>
			</div>
		</div>
		<div class="form-page__col form-page__col-right">
			<div class="form-page__inner">
				<?= do_shortcode('[contact-form-7 id="8fcb573" title="Контактная форма в подвале" html_class="form-page__form"]'); ?>
			</div>
		</div>
	</div>
</section>
<!-- Form Page-->
<?php endif; ?>

</main>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
<!--				<span class="contacts__city">--><?php //echo do_shortcode('[widget_city]') ?><!--</span>-->
				<a href="tel:+ 7 (351) 242-02-48" class="contacts__phone">
					<?php //echo do_shortcode('[city_phone]') ?>
					+ 7 (351) 242-02-48
				</a>
<!--				<span class="contacts__address">--><?php //echo do_shortcode('[city_address] ') ?><!--</span>-->
				<a href="/contacts/" class="connect__btn">Как связаться
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						<path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<a href="/projects/" class="footer__menu-title none">Кейсы</a>
				<ul class="sub-menu opened__menu footer__menu-list">
					<li><a href="https://saitcraft.ru/blog/tag/kompleksnye-proekty/">Комплексные проекты</a></li>
					<li><a href="https://saitcraft.ru/blog/tag/razrabotka-sajta/">Разработка сайта</a></li>
					<li><a href="https://saitcraft.ru/blog/tag/seo-prodvizhenie/">SEO-продвижение</a></li>
					<li><a href="https://saitcraft.ru/blog/tag/kontekstnaya-reklama/">Контекстная реклама</a></li>
					<li><a href="https://saitcraft.ru/blog/tag/metalloprokat/">Металлопрокат</a></li>
					<li><a href="https://saitcraft.ru/blog/tag/specztehnika-i-zapchasti/">Спецтехника и запчасти</a>
					</li>
					<li><a href="https://saitcraft.ru/blog/tag/trubnyj-metalloprokat/">Трубный металлопрокат</a></li>
					<li><a href="https://saitcraft.ru/blog/tag/elementy-truboprovoda/">Элементы трубопровода</a></li>
					<li><a href="https://saitcraft.ru/blog/tag/promyshlennyj-marketplejs/">Промышленный маркетплейс</a>
					</li>
					<li><a href="https://saitcraft.ru/blog/tag/oborudovanie/">Оборудование</a></li>
					<li><a href="https://saitcraft.ru/blog/tag/stroitelstvo/">Строительство</a></li>
					<li><a href="https://saitcraft.ru/blog/tag/drugoe/">Другое</a></li>
				</ul>
			</div>
			<div class="col-sm-4">
				<a href="/uslugi/" class="footer__menu-title">Услуги</a>
				<ul class="footer__menu-list">
					<li>
						<a href="/uslugi/razrabotka-digital-strategiidlya-b2b-kompanii/">
							Разработка
							digital-стратегии
						</a>
					</li>
					<li>
						<a href="/uslugi/razrabotka-sajtov/">Разработка сайтов</a>
					</li>
					<li>
						<a href="/uslugi/seo-prodvizhenie/">SEO-продвижение</a>
					</li>
					<li>
						<a href="/uslugi/kontekstnaya-reklama/">Контекстная реклама</a>
					</li>
					<li>
						<a href="/uslugi/direktor-po-marketingu-na-autsorse/">
							Директор по маркетингу на аутсорсе
						</a>
					</li>
					<li>
						<a href="/uslugi/vnedrite-amocrm-ili-bitriks-24/">Внедрение CRM</a>
					</li>
					<li>
						<a href="/uslugi/voprosy-po-internet-marketingu/">Горячая линия по маркетингу</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<a href="/about/" class="footer__menu-title">Об агентстве</a>
				<ul class="footer__menu-list">
					<li>
						<a href="/klienty-i-otzyvy/">Клиенты и отзывы</a>
					</li>
					<li>
						<a href="/vacancy/">Вакансии</a>
					</li>
					<li>
						<a href="/events/">Мероприятия</a>
					</li>

					<li>
						<a href="/contacts/">Контакты</a>
					</li>
				</ul>
				<div class="social__footer">
					<a href="https://t.me/saitcraft" target="_blank">
						<svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M21.9062 2.64062C22.1875 1.32812 21.4375 0.8125 20.5938 1.14062L1.9375 8.3125C0.671875 8.82812 0.71875 9.53125 1.75 9.85938L6.48438 11.3125L17.5469 4.375C18.0625 4 18.5781 4.23438 18.1562 4.5625L9.20312 12.625L8.875 17.5469C9.39062 17.5469 9.57812 17.3594 9.85938 17.0781L12.1562 14.8281L16.9844 18.3906C17.875 18.9062 18.5312 18.625 18.7656 17.5938L21.9062 2.64062Z" fill="#667399" />
						</svg>
					</a>
					<a href="https://api.whatsapp.com/send?phone=79995838586">
						<svg width="26" height="26" viewBox="0 0 26 26" fill="#667399" xmlns="http://www.w3.org/2000/svg">
							<path d="M13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26Z" fill="#667399"></path>
							<path d="M18.7318 7.26844C17.3793 5.9024 15.5831 5.06466 13.6673 4.90631C11.7515 4.74797 9.84213 5.27945 8.28367 6.40489C6.72521 7.53033 5.62021 9.17563 5.168 11.044C4.7158 12.9124 4.94614 14.8809 5.8175 16.5945L4.96215 20.7471C4.95328 20.7884 4.95303 20.8311 4.96142 20.8726C4.9698 20.914 4.98665 20.9532 5.0109 20.9879C5.04643 21.0404 5.09715 21.0809 5.15628 21.1038C5.2154 21.1268 5.28013 21.1312 5.34181 21.1164L9.4117 20.1517C11.1204 21.001 13.075 21.2166 14.9277 20.76C16.7804 20.3034 18.4111 19.2043 19.5295 17.6583C20.6479 16.1123 21.1815 14.2197 21.0355 12.3172C20.8894 10.4146 20.0731 8.6256 18.7318 7.26844ZM17.4628 17.3966C16.527 18.3298 15.322 18.9458 14.0175 19.1578C12.713 19.3699 11.3749 19.1672 10.1917 18.5784L9.62443 18.2978L7.12931 18.8887L7.1367 18.8576L7.65375 16.3463L7.37602 15.7982C6.77146 14.6109 6.55819 13.2627 6.76677 11.9467C6.97535 10.6308 7.59507 9.4146 8.53716 8.47242C9.7209 7.28904 11.3262 6.62425 13 6.62425C14.6738 6.62425 16.2791 7.28904 17.4628 8.47242C17.4729 8.48398 17.4838 8.49484 17.4953 8.50492C18.6644 9.69135 19.317 11.2918 19.311 12.9575C19.3049 14.6231 18.6406 16.2188 17.4628 17.3966Z" fill="#1A1E23"></path>
							<path d="M17.2413 15.5543C16.9355 16.0359 16.4524 16.6254 15.8452 16.7716C14.7816 17.0287 13.1492 16.7805 11.118 14.8866L11.0928 14.8645C9.30682 13.2084 8.84296 11.8301 8.95523 10.737C9.01728 10.1165 9.53432 9.55514 9.97012 9.18877C10.039 9.12997 10.1207 9.0881 10.2087 9.06652C10.2967 9.04494 10.3885 9.04424 10.4768 9.06449C10.565 9.08473 10.6474 9.12535 10.7172 9.1831C10.7869 9.24085 10.8422 9.31412 10.8786 9.39707L11.536 10.8743C11.5787 10.9701 11.5946 11.0757 11.5818 11.1798C11.5691 11.2839 11.5282 11.3826 11.4636 11.4653L11.1313 11.8966C11.0599 11.9857 11.0169 12.0941 11.0077 12.2078C10.9985 12.3215 11.0235 12.4354 11.0795 12.5348C11.2657 12.8613 11.7118 13.3414 12.2067 13.786C12.7622 14.2883 13.3782 14.7478 13.7682 14.9043C13.8725 14.947 13.9873 14.9574 14.0976 14.9342C14.2079 14.911 14.3088 14.8554 14.3872 14.7743L14.7727 14.3858C14.8471 14.3125 14.9396 14.2601 15.0409 14.2342C15.1421 14.2082 15.2483 14.2096 15.3489 14.2381L16.9103 14.6813C16.9965 14.7077 17.0754 14.7535 17.1412 14.8151C17.2069 14.8767 17.2577 14.9525 17.2896 15.0368C17.3215 15.121 17.3338 15.2115 17.3254 15.3012C17.317 15.3909 17.2882 15.4775 17.2413 15.5543Z" fill="#1A1E23"></path>
							<defs>
								<linearGradient id="paint0_linear_39_3438" x1="0.438819" y1="13" x2="26.5485" y2="13" gradientUnits="userSpaceOnUse">
									<stop stop-color="#8341EF"></stop>
									<stop offset="1" stop-color="#EB469F"></stop>
								</linearGradient>
							</defs>
						</svg>
					</a>
					<a href="http://vk.com/saitcraft" target="_blank">
						<svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M25.5469 1.53125C25.6875 0.96875 25.5469 0.5 24.7031 0.5H21.9375C21.2344 0.5 20.9062 0.875 20.7188 1.29688C20.7188 1.29688 19.3125 4.71875 17.3438 6.96875C16.6875 7.57812 16.4062 7.8125 16.0312 7.8125C15.8906 7.8125 15.6094 7.57812 15.6094 7.01562V1.53125C15.6094 0.828125 15.4219 0.5 14.8125 0.5H10.5C10.0312 0.5 9.79688 0.828125 9.79688 1.15625C9.79688 1.8125 10.7812 1.95312 10.875 3.82812V7.90625C10.875 8.79688 10.7344 8.98438 10.3594 8.98438C9.42188 8.98438 7.17188 5.51562 5.8125 1.57812C5.53125 0.828125 5.25 0.5 4.54688 0.5H1.78125C1.03125 0.5 0.84375 0.875 0.84375 1.29688C0.84375 2.04688 1.78125 5.65625 5.20312 10.4844C7.5 13.7656 10.7344 15.5 13.6406 15.5C15.375 15.5 15.6094 15.125 15.6094 14.4688C15.6094 11.3281 15.4688 11 16.3125 11C16.7344 11 17.4375 11.2344 19.0781 12.8281C20.9531 14.7031 21.2812 15.5 22.3125 15.5H25.0781C25.875 15.5 26.25 15.125 26.0156 14.3281C25.5 12.7344 21.9844 9.35938 21.7969 9.125C21.375 8.60938 21.5156 8.375 21.7969 7.90625C21.7969 7.90625 25.1719 3.125 25.5469 1.53125Z" fill="#667399" />
						</svg>
					</a>
					<a href="https://agima.partners/?utm_source=together-with-agima&utm_medium=beydzh&utm_campaign=saitcraft" target="_blank">
						<img src="/img/together.png" width="71" height="32" style="opacity: 0.3;" />
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="mobile__footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 d-flex justify-content-center flex-column align-items-center">
					<a href="/contacts/" class="connect__btn">Как связаться
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
					<div class="social__footer-mobile">
						<a href="https://t.me/saitcraft_ru">
							<svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21.9062 2.64062C22.1875 1.32812 21.4375 0.8125 20.5938 1.14062L1.9375 8.3125C0.671875 8.82812 0.71875 9.53125 1.75 9.85938L6.48438 11.3125L17.5469 4.375C18.0625 4 18.5781 4.23438 18.1562 4.5625L9.20312 12.625L8.875 17.5469C9.39062 17.5469 9.57812 17.3594 9.85938 17.0781L12.1562 14.8281L16.9844 18.3906C17.875 18.9062 18.5312 18.625 18.7656 17.5938L21.9062 2.64062Z" fill="#667399" />
							</svg>
						</a>
						<a href="https://api.whatsapp.com/send?phone=79995838586">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="#667399" xmlns="http://www.w3.org/2000/svg">
								<path d="M13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26Z" fill="#667399"></path>
								<path d="M18.7318 7.26844C17.3793 5.9024 15.5831 5.06466 13.6673 4.90631C11.7515 4.74797 9.84213 5.27945 8.28367 6.40489C6.72521 7.53033 5.62021 9.17563 5.168 11.044C4.7158 12.9124 4.94614 14.8809 5.8175 16.5945L4.96215 20.7471C4.95328 20.7884 4.95303 20.8311 4.96142 20.8726C4.9698 20.914 4.98665 20.9532 5.0109 20.9879C5.04643 21.0404 5.09715 21.0809 5.15628 21.1038C5.2154 21.1268 5.28013 21.1312 5.34181 21.1164L9.4117 20.1517C11.1204 21.001 13.075 21.2166 14.9277 20.76C16.7804 20.3034 18.4111 19.2043 19.5295 17.6583C20.6479 16.1123 21.1815 14.2197 21.0355 12.3172C20.8894 10.4146 20.0731 8.6256 18.7318 7.26844ZM17.4628 17.3966C16.527 18.3298 15.322 18.9458 14.0175 19.1578C12.713 19.3699 11.3749 19.1672 10.1917 18.5784L9.62443 18.2978L7.12931 18.8887L7.1367 18.8576L7.65375 16.3463L7.37602 15.7982C6.77146 14.6109 6.55819 13.2627 6.76677 11.9467C6.97535 10.6308 7.59507 9.4146 8.53716 8.47242C9.7209 7.28904 11.3262 6.62425 13 6.62425C14.6738 6.62425 16.2791 7.28904 17.4628 8.47242C17.4729 8.48398 17.4838 8.49484 17.4953 8.50492C18.6644 9.69135 19.317 11.2918 19.311 12.9575C19.3049 14.6231 18.6406 16.2188 17.4628 17.3966Z" fill="#1A1E23"></path>
								<path d="M17.2413 15.5543C16.9355 16.0359 16.4524 16.6254 15.8452 16.7716C14.7816 17.0287 13.1492 16.7805 11.118 14.8866L11.0928 14.8645C9.30682 13.2084 8.84296 11.8301 8.95523 10.737C9.01728 10.1165 9.53432 9.55514 9.97012 9.18877C10.039 9.12997 10.1207 9.0881 10.2087 9.06652C10.2967 9.04494 10.3885 9.04424 10.4768 9.06449C10.565 9.08473 10.6474 9.12535 10.7172 9.1831C10.7869 9.24085 10.8422 9.31412 10.8786 9.39707L11.536 10.8743C11.5787 10.9701 11.5946 11.0757 11.5818 11.1798C11.5691 11.2839 11.5282 11.3826 11.4636 11.4653L11.1313 11.8966C11.0599 11.9857 11.0169 12.0941 11.0077 12.2078C10.9985 12.3215 11.0235 12.4354 11.0795 12.5348C11.2657 12.8613 11.7118 13.3414 12.2067 13.786C12.7622 14.2883 13.3782 14.7478 13.7682 14.9043C13.8725 14.947 13.9873 14.9574 14.0976 14.9342C14.2079 14.911 14.3088 14.8554 14.3872 14.7743L14.7727 14.3858C14.8471 14.3125 14.9396 14.2601 15.0409 14.2342C15.1421 14.2082 15.2483 14.2096 15.3489 14.2381L16.9103 14.6813C16.9965 14.7077 17.0754 14.7535 17.1412 14.8151C17.2069 14.8767 17.2577 14.9525 17.2896 15.0368C17.3215 15.121 17.3338 15.2115 17.3254 15.3012C17.317 15.3909 17.2882 15.4775 17.2413 15.5543Z" fill="#1A1E23"></path>
								<defs>
									<linearGradient id="paint0_linear_39_3438" x1="0.438819" y1="13" x2="26.5485" y2="13" gradientUnits="userSpaceOnUse">
										<stop stop-color="#8341EF"></stop>
										<stop offset="1" stop-color="#EB469F"></stop>
									</linearGradient>
								</defs>
							</svg>
						</a>
						<a href="http://vk.com/saitcraft">
							<svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M25.5469 1.53125C25.6875 0.96875 25.5469 0.5 24.7031 0.5H21.9375C21.2344 0.5 20.9062 0.875 20.7188 1.29688C20.7188 1.29688 19.3125 4.71875 17.3438 6.96875C16.6875 7.57812 16.4062 7.8125 16.0312 7.8125C15.8906 7.8125 15.6094 7.57812 15.6094 7.01562V1.53125C15.6094 0.828125 15.4219 0.5 14.8125 0.5H10.5C10.0312 0.5 9.79688 0.828125 9.79688 1.15625C9.79688 1.8125 10.7812 1.95312 10.875 3.82812V7.90625C10.875 8.79688 10.7344 8.98438 10.3594 8.98438C9.42188 8.98438 7.17188 5.51562 5.8125 1.57812C5.53125 0.828125 5.25 0.5 4.54688 0.5H1.78125C1.03125 0.5 0.84375 0.875 0.84375 1.29688C0.84375 2.04688 1.78125 5.65625 5.20312 10.4844C7.5 13.7656 10.7344 15.5 13.6406 15.5C15.375 15.5 15.6094 15.125 15.6094 14.4688C15.6094 11.3281 15.4688 11 16.3125 11C16.7344 11 17.4375 11.2344 19.0781 12.8281C20.9531 14.7031 21.2812 15.5 22.3125 15.5H25.0781C25.875 15.5 26.25 15.125 26.0156 14.3281C25.5 12.7344 21.9844 9.35938 21.7969 9.125C21.375 8.60938 21.5156 8.375 21.7969 7.90625C21.7969 7.90625 25.1719 3.125 25.5469 1.53125Z" fill="#667399" />
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<hr>
			</div>
			<div class="col">
				<span class="copyright">© 2023 Сайткрафт</span>
			</div>
			<div class="col">
				<a href="/privacy-policy/" class="policy__footer">Политика конфиденциальности</a>
			</div>
		</div>
	</div>
</footer>
<noindex>
	<div class="mobile__menu">
		<div style="position: relative;padding-bottom:60px">
			<div class="container">
				<div class="row">

					<div class="menu-mobile-container">

						<ul id="menu-mobile" class="menu-mobile">
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
								<a href="/projects/">Кейсы</a>
								<ul class="sub-menu opened__menu">
									<?php
									$postIDs = get_objects_in_term(23, 'category');
									foreach ($postIDs as $key => $postID) {
										if (get_post_status($postID) != 'publish') {
											unset($postIDs[$key]);
										}
									}
									if (!empty($postIDs) && !is_wp_error($postIDs)) {
										$tags = wp_get_object_terms($postIDs, 'post_tag');
										if (!empty($tags) && !is_wp_error($tags)) {
											foreach ($tags as $tag) { ?>
												<li><a href="<?php echo get_term_link($tag, 'post_tag') ?>"><?php echo $tag->name ?></a>
												</li>
											<?php } ?>
										<?php } ?>
									<?php } ?>
								</ul>
							</li>

							<?php
							wp_nav_menu([
								'theme_location' => '',
								'menu' => 'mobile',
								'container' => 'false',
								'menu_class' => '',
								'echo' => true,
								'fallback_cb' => 'wp_page_menu',
								'items_wrap' => '%3$s',
								'depth' => 0,
							]); ?>
						</ul>
					</div>

					<div class="col-sm-12">
						<a class="mobile__tel" href="tel:+ 7 (351) 242-02-48">+ 7 (351) 242-02-48</a>
						<a href="javascript:;" data-stc-modal="#feedback-stc" class="btn__header">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							Обсудить проект
						</a>
					</div>
				</div>
			</div>
			<div class="social__header-mobile">
				<a href="https://t.me/saitcraft_ru">
					<svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21.9062 2.64062C22.1875 1.32812 21.4375 0.8125 20.5938 1.14062L1.9375 8.3125C0.671875 8.82812 0.71875 9.53125 1.75 9.85938L6.48438 11.3125L17.5469 4.375C18.0625 4 18.5781 4.23438 18.1562 4.5625L9.20312 12.625L8.875 17.5469C9.39062 17.5469 9.57812 17.3594 9.85938 17.0781L12.1562 14.8281L16.9844 18.3906C17.875 18.9062 18.5312 18.625 18.7656 17.5938L21.9062 2.64062Z" fill="#667399" />
					</svg>
				</a>
				<a href="https://api.whatsapp.com/send?phone=89995838586">
					<svg width="26" height="26" viewBox="0 0 26 26" fill="#667399" xmlns="http://www.w3.org/2000/svg">
						<path d="M13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26Z" fill="#667399"></path>
						<path d="M18.7318 7.26844C17.3793 5.9024 15.5831 5.06466 13.6673 4.90631C11.7515 4.74797 9.84213 5.27945 8.28367 6.40489C6.72521 7.53033 5.62021 9.17563 5.168 11.044C4.7158 12.9124 4.94614 14.8809 5.8175 16.5945L4.96215 20.7471C4.95328 20.7884 4.95303 20.8311 4.96142 20.8726C4.9698 20.914 4.98665 20.9532 5.0109 20.9879C5.04643 21.0404 5.09715 21.0809 5.15628 21.1038C5.2154 21.1268 5.28013 21.1312 5.34181 21.1164L9.4117 20.1517C11.1204 21.001 13.075 21.2166 14.9277 20.76C16.7804 20.3034 18.4111 19.2043 19.5295 17.6583C20.6479 16.1123 21.1815 14.2197 21.0355 12.3172C20.8894 10.4146 20.0731 8.6256 18.7318 7.26844ZM17.4628 17.3966C16.527 18.3298 15.322 18.9458 14.0175 19.1578C12.713 19.3699 11.3749 19.1672 10.1917 18.5784L9.62443 18.2978L7.12931 18.8887L7.1367 18.8576L7.65375 16.3463L7.37602 15.7982C6.77146 14.6109 6.55819 13.2627 6.76677 11.9467C6.97535 10.6308 7.59507 9.4146 8.53716 8.47242C9.7209 7.28904 11.3262 6.62425 13 6.62425C14.6738 6.62425 16.2791 7.28904 17.4628 8.47242C17.4729 8.48398 17.4838 8.49484 17.4953 8.50492C18.6644 9.69135 19.317 11.2918 19.311 12.9575C19.3049 14.6231 18.6406 16.2188 17.4628 17.3966Z" fill="#1A1E23"></path>
						<path d="M17.2413 15.5543C16.9355 16.0359 16.4524 16.6254 15.8452 16.7716C14.7816 17.0287 13.1492 16.7805 11.118 14.8866L11.0928 14.8645C9.30682 13.2084 8.84296 11.8301 8.95523 10.737C9.01728 10.1165 9.53432 9.55514 9.97012 9.18877C10.039 9.12997 10.1207 9.0881 10.2087 9.06652C10.2967 9.04494 10.3885 9.04424 10.4768 9.06449C10.565 9.08473 10.6474 9.12535 10.7172 9.1831C10.7869 9.24085 10.8422 9.31412 10.8786 9.39707L11.536 10.8743C11.5787 10.9701 11.5946 11.0757 11.5818 11.1798C11.5691 11.2839 11.5282 11.3826 11.4636 11.4653L11.1313 11.8966C11.0599 11.9857 11.0169 12.0941 11.0077 12.2078C10.9985 12.3215 11.0235 12.4354 11.0795 12.5348C11.2657 12.8613 11.7118 13.3414 12.2067 13.786C12.7622 14.2883 13.3782 14.7478 13.7682 14.9043C13.8725 14.947 13.9873 14.9574 14.0976 14.9342C14.2079 14.911 14.3088 14.8554 14.3872 14.7743L14.7727 14.3858C14.8471 14.3125 14.9396 14.2601 15.0409 14.2342C15.1421 14.2082 15.2483 14.2096 15.3489 14.2381L16.9103 14.6813C16.9965 14.7077 17.0754 14.7535 17.1412 14.8151C17.2069 14.8767 17.2577 14.9525 17.2896 15.0368C17.3215 15.121 17.3338 15.2115 17.3254 15.3012C17.317 15.3909 17.2882 15.4775 17.2413 15.5543Z" fill="#1A1E23"></path>
						<defs>
							<linearGradient id="paint0_linear_39_3438" x1="0.438819" y1="13" x2="26.5485" y2="13" gradientUnits="userSpaceOnUse">
								<stop stop-color="#8341EF"></stop>
								<stop offset="1" stop-color="#EB469F"></stop>
							</linearGradient>
						</defs>
					</svg>
				</a>
				<a href="http://vk.com/saitcraft">
					<svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M25.5469 1.53125C25.6875 0.96875 25.5469 0.5 24.7031 0.5H21.9375C21.2344 0.5 20.9062 0.875 20.7188 1.29688C20.7188 1.29688 19.3125 4.71875 17.3438 6.96875C16.6875 7.57812 16.4062 7.8125 16.0312 7.8125C15.8906 7.8125 15.6094 7.57812 15.6094 7.01562V1.53125C15.6094 0.828125 15.4219 0.5 14.8125 0.5H10.5C10.0312 0.5 9.79688 0.828125 9.79688 1.15625C9.79688 1.8125 10.7812 1.95312 10.875 3.82812V7.90625C10.875 8.79688 10.7344 8.98438 10.3594 8.98438C9.42188 8.98438 7.17188 5.51562 5.8125 1.57812C5.53125 0.828125 5.25 0.5 4.54688 0.5H1.78125C1.03125 0.5 0.84375 0.875 0.84375 1.29688C0.84375 2.04688 1.78125 5.65625 5.20312 10.4844C7.5 13.7656 10.7344 15.5 13.6406 15.5C15.375 15.5 15.6094 15.125 15.6094 14.4688C15.6094 11.3281 15.4688 11 16.3125 11C16.7344 11 17.4375 11.2344 19.0781 12.8281C20.9531 14.7031 21.2812 15.5 22.3125 15.5H25.0781C25.875 15.5 26.25 15.125 26.0156 14.3281C25.5 12.7344 21.9844 9.35938 21.7969 9.125C21.375 8.60938 21.5156 8.375 21.7969 7.90625C21.7969 7.90625 25.1719 3.125 25.5469 1.53125Z" fill="#667399" />
					</svg>
				</a>
			</div>
		</div>
	</div>
</noindex>

<!-- Модалка обратной связи -->
<div class="modal-sc hystmodal" id="feedback-stc" aria-hidden="true">
	<div class="modal-sc__wrap hystmodal__wrap">
		<div class="hystmodal__window modal-sc__body" role="dialog" aria-modal="true">
			<div class="modal-sc__close hystmodal__close" data-hystclose>
				<svg class="modal-sc__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-linecap="round" />
				</svg>
			</div>
			<h3 class="modal-sc__title title title--big title--dark title--w-extra-bold js-feedback-title js-h3-form" data-title>
				Обсудим ваш проект
			</h3>
			<p class="modal-sc__subtitle title title--small title--dark title--w-regular js-subtitle">
				Расскажите о задачах и задайте вопросы — мы перезвоним <br> в течение рабочего дня
			</p>
			<?= do_shortcode('[contact-form-7 id="fe2e8c1" title="Контактная форма в модальном окне" html_class="modal-sc__form"]'); ?>
		</div>
	</div>
</div>
<!-- /. Модалка обратной связи -->

<!-- Success -->
<div class="modal-sc modal-sc--success hystmodal js-modal-success" id="success" aria-hidden="true">
	<div class="modal-sc__wrap hystmodal__wrap">
		<div class="modal-sc__body hystmodal__window" role="alertdialog" aria-modal="true">
			<div class="modal-sc__close" data-hystclose>
				<svg class="modal-sc__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round" />
				</svg>
			</div>
			<div class="modal-sc__wrapper-success">
				<div class="modal-sc__success-icon">
					<img src="<?= STANDART_DIR; ?>img/upload/check-success.svg" alt="Заявка принята" class="modal-sc__success-img">
				</div>
				<div class="modal-sc__success-text text text--big text--dark text--w-medium">
					Спасибо, ваша заявка принята!
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /. Success -->

<?php wp_footer(); ?>
</body>

</html>