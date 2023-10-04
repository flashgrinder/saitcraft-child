<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="10.125" y="31.3382" width="30" height="1.5" transform="rotate(-45 10.125 31.3382)"
                              fill="#1A1E23"/>
                        <rect x="10.875" y="10.3381" width="30" height="1.5" transform="rotate(45 10.875 10.3381)"
                              fill="#1A1E23"/>
                    </svg>

                </span>
			</button>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<span class="h2__form">Обсудим ваш проект</span>
							<span class="subtitle">
                                Расскажите о задачах и задайте вопросы — мы перезвоним<br> в течение рабочего дня
                            </span>
							<form method="POST" action="/form-send.php" enctype="multipart/form-data">
								<input type="hidden" name="tokenkey">
								<input type="hidden" name="titlepage">
								<div class="input__group">
									<div class="col-12 col-md-4">
										<input type="text" name="name" placeholder="Имя">
									</div>
									<div class="col-12 col-md-4">
										<label class="required" style="width:100%;"><input type="text" name="tel"
										                                                   required
										                                                   placeholder="Телефон"><font>*</font></label>
									</div>
									<div class="col-12 col-md-4">
										<input type="email" name="email" placeholder="E-mail">
									</div>
								</div>
								<textarea name="comment"
								          placeholder="Расскажите о целях, задачах, сроках и бюджете проекта."></textarea>
								<div class="upload__file">
									<label for="upload-filem">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										     xmlns="http://www.w3.org/2000/svg">
											<path
												d="M17 18C17 18.5523 17.4477 19 18 19C18.5523 19 19 18.5523 19 18H17ZM9 18C9 18.5523 9.44772 19 10 19C10.5523 19 11 18.5523 11 18H9ZM19 18V7H17V18H19ZM5 7V19H7V7H5ZM15 19V9H13V19H15ZM9 9V18H11V9H9ZM12 6C10.3431 6 9 7.34315 9 9H11C11 8.44772 11.4477 8 12 8V6ZM15 9C15 7.34315 13.6569 6 12 6V8C12.5523 8 13 8.44772 13 9H15ZM10 24C12.7614 24 15 21.7614 15 19H13C13 20.6569 11.6569 22 10 22V24ZM5 19C5 21.7614 7.23858 24 10 24V22C8.34315 22 7 20.6569 7 19H5ZM12 0C8.13401 0 5 3.13401 5 7H7C7 4.23858 9.23858 2 12 2V0ZM19 7C19 3.13401 15.866 0 12 0V2C14.7614 2 17 4.23858 17 7H19Z"
												fill="#6430E8"/>
										</svg>
										Прикрепить файл</label>
									<input type="file" name="file" id="upload-filem">
									<span class="filename"></span>
								</div>
								<div class="form__bottom-sub">
                                    <span>
                                        Нажимая на кнопку, вы соглашаетесь с правилами<br> обработки <a
	                                    href="/privacy-policy/">персональных данных</a></span>
									<button type="submit">Отправить
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										     xmlns="http://www.w3.org/2000/svg">
											<path
												d="M1.33036 4.4338L3.00049 10L15.0005 12L3.00049 13L1.1772 19.6843C0.72225 21.3522 2.45482 22.7726 4.00112 21.9995L20.4227 13.7889C21.8968 13.0518 21.8968 10.9482 20.4227 10.2111L4.1404 2.07016C2.57266 1.2863 0.826623 2.75496 1.33036 4.4338Z"
												stroke="white" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"/>
										</svg>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<section class="bottom__form">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div>
					<span class="h2__form">Обсудим ваш проект</span>
					<span class="subtitle">
                        Расскажите о задачах и задайте вопросы —<br> мы перезвоним в течение рабочего дня
                    </span>
				</div>
				<div class="bottom__form_contacts">
					<a href="tel:<?php echo do_shortcode('[city_phone]')?>"
					   class="bottom__form-tel"><?php echo do_shortcode('[city_phone]')?></a>
					<a href="https://t.me/saitcraft_ru" class="bottom__form-telegram">
						<svg width="44" height="37" viewBox="0 0 44 37" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M42.8125 4.28125C43.375 1.65625 41.875 0.625 40.1875 1.28125L2.875 15.625C0.34375 16.6562 0.4375 18.0625 2.5 18.7188L11.9688 21.625L34.0938 7.75C35.125 7 36.1562 7.46875 35.3125 8.125L17.4062 24.25L16.75 34.0938C17.7812 34.0938 18.1562 33.7188 18.7188 33.1562L23.3125 28.6562L32.9688 35.7812C34.75 36.8125 36.0625 36.25 36.5312 34.1875L42.8125 4.28125Z"
								fill="white"/>
						</svg>
					</a>
				</div>
			</div>
			<div class="col-sm-6">
				<form method="POST" action="/form-send.php" enctype="multipart/form-data">
					<input type="hidden" name="tokenkey">
					<input type="hidden" name="titlepage">
					<div class="input__group">
						<input type="text" name="name" placeholder="Имя">
						<input type="text" name="tel" required placeholder="Телефон">
					</div>
					<input type="text" name="email" placeholder="E-mail">
					<textarea name="comment"
					          placeholder="Расскажите о целях, задачах, сроках и бюджете проекта."></textarea>
					<div class="upload__file">
						<label for="upload-file">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<path
									d="M17 18C17 18.5523 17.4477 19 18 19C18.5523 19 19 18.5523 19 18H17ZM9 18C9 18.5523 9.44772 19 10 19C10.5523 19 11 18.5523 11 18H9ZM19 18V7H17V18H19ZM5 7V19H7V7H5ZM15 19V9H13V19H15ZM9 9V18H11V9H9ZM12 6C10.3431 6 9 7.34315 9 9H11C11 8.44772 11.4477 8 12 8V6ZM15 9C15 7.34315 13.6569 6 12 6V8C12.5523 8 13 8.44772 13 9H15ZM10 24C12.7614 24 15 21.7614 15 19H13C13 20.6569 11.6569 22 10 22V24ZM5 19C5 21.7614 7.23858 24 10 24V22C8.34315 22 7 20.6569 7 19H5ZM12 0C8.13401 0 5 3.13401 5 7H7C7 4.23858 9.23858 2 12 2V0ZM19 7C19 3.13401 15.866 0 12 0V2C14.7614 2 17 4.23858 17 7H19Z"
									fill="#6430E8"/>
							</svg>
							Прикрепить файл</label>
						<input type="file" name="file" id="upload-file">
						<span class="filename"></span>
					</div>
					<div class="form__bottom-sub">
                        <span>
                            Нажимая на кнопку, вы соглашаетесь с правилами<br> обработки <a href="/privacy-policy/">персональных данных</a></span>
						<button type="submit">Отправить
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<path
									d="M1.33036 4.4338L3.00049 10L15.0005 12L3.00049 13L1.1772 19.6843C0.72225 21.3522 2.45482 22.7726 4.00112 21.9995L20.4227 13.7889C21.8968 13.0518 21.8968 10.9482 20.4227 10.2111L4.1404 2.07016C2.57266 1.2863 0.826623 2.75496 1.33036 4.4338Z"
									stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
</main>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<span class="contacts__city"><?php echo do_shortcode('[widget_city]')?></span>
				<a href="tel:+7 (499) 288-18-02" class="contacts__phone"><?php echo do_shortcode('[city_phone]')?></a>
				<span class="contacts__address"><?php echo do_shortcode('[city_address] ')?></span>
				<a href="/contacts/" class="connect__btn">Как связаться
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z"
							stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round"
						      stroke-linejoin="round"/>
						<path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round"
						      stroke-linejoin="round"/>
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
						<a href="/uslugi/razrabotka-digital-strategiidlya-b2b-kompanii/">Разработка
							digital-стратегии </a>
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
					<a href="https://t.me/saitcraft_ru" target="_blank">
						<svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M21.9062 2.64062C22.1875 1.32812 21.4375 0.8125 20.5938 1.14062L1.9375 8.3125C0.671875 8.82812 0.71875 9.53125 1.75 9.85938L6.48438 11.3125L17.5469 4.375C18.0625 4 18.5781 4.23438 18.1562 4.5625L9.20312 12.625L8.875 17.5469C9.39062 17.5469 9.57812 17.3594 9.85938 17.0781L12.1562 14.8281L16.9844 18.3906C17.875 18.9062 18.5312 18.625 18.7656 17.5938L21.9062 2.64062Z"
								fill="#667399"/>
						</svg>

					</a>
					<a href="http://vk.com/saitcraft" target="_blank">
						<svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M25.5469 1.53125C25.6875 0.96875 25.5469 0.5 24.7031 0.5H21.9375C21.2344 0.5 20.9062 0.875 20.7188 1.29688C20.7188 1.29688 19.3125 4.71875 17.3438 6.96875C16.6875 7.57812 16.4062 7.8125 16.0312 7.8125C15.8906 7.8125 15.6094 7.57812 15.6094 7.01562V1.53125C15.6094 0.828125 15.4219 0.5 14.8125 0.5H10.5C10.0312 0.5 9.79688 0.828125 9.79688 1.15625C9.79688 1.8125 10.7812 1.95312 10.875 3.82812V7.90625C10.875 8.79688 10.7344 8.98438 10.3594 8.98438C9.42188 8.98438 7.17188 5.51562 5.8125 1.57812C5.53125 0.828125 5.25 0.5 4.54688 0.5H1.78125C1.03125 0.5 0.84375 0.875 0.84375 1.29688C0.84375 2.04688 1.78125 5.65625 5.20312 10.4844C7.5 13.7656 10.7344 15.5 13.6406 15.5C15.375 15.5 15.6094 15.125 15.6094 14.4688C15.6094 11.3281 15.4688 11 16.3125 11C16.7344 11 17.4375 11.2344 19.0781 12.8281C20.9531 14.7031 21.2812 15.5 22.3125 15.5H25.0781C25.875 15.5 26.25 15.125 26.0156 14.3281C25.5 12.7344 21.9844 9.35938 21.7969 9.125C21.375 8.60938 21.5156 8.375 21.7969 7.90625C21.7969 7.90625 25.1719 3.125 25.5469 1.53125Z"
								fill="#667399"/>
						</svg>
					</a>
					<a href="https://agima.partners/?utm_source=together-with-agima&utm_medium=beydzh&utm_campaign=saitcraft"
					   target="_blank">
						<img src="/img/together.png" width="71" height="32" style="opacity: 0.3;"/>
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
							<path
								d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z"
								stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round"
							      stroke-linejoin="round"/>
							<path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round"
							      stroke-linejoin="round"/>
						</svg>
					</a>
					<div class="social__footer-mobile">
						<a href="https://t.me/saitcraft_ru">
							<svg width="23" height="19" viewBox="0 0 23 19" fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<path
									d="M21.9062 2.64062C22.1875 1.32812 21.4375 0.8125 20.5938 1.14062L1.9375 8.3125C0.671875 8.82812 0.71875 9.53125 1.75 9.85938L6.48438 11.3125L17.5469 4.375C18.0625 4 18.5781 4.23438 18.1562 4.5625L9.20312 12.625L8.875 17.5469C9.39062 17.5469 9.57812 17.3594 9.85938 17.0781L12.1562 14.8281L16.9844 18.3906C17.875 18.9062 18.5312 18.625 18.7656 17.5938L21.9062 2.64062Z"
									fill="#667399"/>
							</svg>
						</a>
						<a href="http://vk.com/saitcraft">
							<svg width="27" height="16" viewBox="0 0 27 16" fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<path
									d="M25.5469 1.53125C25.6875 0.96875 25.5469 0.5 24.7031 0.5H21.9375C21.2344 0.5 20.9062 0.875 20.7188 1.29688C20.7188 1.29688 19.3125 4.71875 17.3438 6.96875C16.6875 7.57812 16.4062 7.8125 16.0312 7.8125C15.8906 7.8125 15.6094 7.57812 15.6094 7.01562V1.53125C15.6094 0.828125 15.4219 0.5 14.8125 0.5H10.5C10.0312 0.5 9.79688 0.828125 9.79688 1.15625C9.79688 1.8125 10.7812 1.95312 10.875 3.82812V7.90625C10.875 8.79688 10.7344 8.98438 10.3594 8.98438C9.42188 8.98438 7.17188 5.51562 5.8125 1.57812C5.53125 0.828125 5.25 0.5 4.54688 0.5H1.78125C1.03125 0.5 0.84375 0.875 0.84375 1.29688C0.84375 2.04688 1.78125 5.65625 5.20312 10.4844C7.5 13.7656 10.7344 15.5 13.6406 15.5C15.375 15.5 15.6094 15.125 15.6094 14.4688C15.6094 11.3281 15.4688 11 16.3125 11C16.7344 11 17.4375 11.2344 19.0781 12.8281C20.9531 14.7031 21.2812 15.5 22.3125 15.5H25.0781C25.875 15.5 26.25 15.125 26.0156 14.3281C25.5 12.7344 21.9844 9.35938 21.7969 9.125C21.375 8.60938 21.5156 8.375 21.7969 7.90625C21.7969 7.90625 25.1719 3.125 25.5469 1.53125Z"
									fill="#667399"/>
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
									<li><a
										href="<?php echo get_term_link($tag, 'post_tag') ?>"><?php echo $tag->name ?></a>
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
						<a class="mobile__tel" href="tel:+7 (499) 288-18-02">+7 (499) 288-18-02</a>
						<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn__header">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<path
									d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z"
									stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round"
								      stroke-linejoin="round"/>
								<path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round"
								      stroke-linejoin="round"/>
							</svg>
							Обсудить проект</a>

					</div>
				</div>
			</div>
			<div class="social__header-mobile">
				<a href="https://t.me/saitcraft_ru">
					<svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M21.9062 2.64062C22.1875 1.32812 21.4375 0.8125 20.5938 1.14062L1.9375 8.3125C0.671875 8.82812 0.71875 9.53125 1.75 9.85938L6.48438 11.3125L17.5469 4.375C18.0625 4 18.5781 4.23438 18.1562 4.5625L9.20312 12.625L8.875 17.5469C9.39062 17.5469 9.57812 17.3594 9.85938 17.0781L12.1562 14.8281L16.9844 18.3906C17.875 18.9062 18.5312 18.625 18.7656 17.5938L21.9062 2.64062Z"
							fill="#667399"/>
					</svg>
				</a>
				<a href="http://vk.com/saitcraft">
					<svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M25.5469 1.53125C25.6875 0.96875 25.5469 0.5 24.7031 0.5H21.9375C21.2344 0.5 20.9062 0.875 20.7188 1.29688C20.7188 1.29688 19.3125 4.71875 17.3438 6.96875C16.6875 7.57812 16.4062 7.8125 16.0312 7.8125C15.8906 7.8125 15.6094 7.57812 15.6094 7.01562V1.53125C15.6094 0.828125 15.4219 0.5 14.8125 0.5H10.5C10.0312 0.5 9.79688 0.828125 9.79688 1.15625C9.79688 1.8125 10.7812 1.95312 10.875 3.82812V7.90625C10.875 8.79688 10.7344 8.98438 10.3594 8.98438C9.42188 8.98438 7.17188 5.51562 5.8125 1.57812C5.53125 0.828125 5.25 0.5 4.54688 0.5H1.78125C1.03125 0.5 0.84375 0.875 0.84375 1.29688C0.84375 2.04688 1.78125 5.65625 5.20312 10.4844C7.5 13.7656 10.7344 15.5 13.6406 15.5C15.375 15.5 15.6094 15.125 15.6094 14.4688C15.6094 11.3281 15.4688 11 16.3125 11C16.7344 11 17.4375 11.2344 19.0781 12.8281C20.9531 14.7031 21.2812 15.5 22.3125 15.5H25.0781C25.875 15.5 26.25 15.125 26.0156 14.3281C25.5 12.7344 21.9844 9.35938 21.7969 9.125C21.375 8.60938 21.5156 8.375 21.7969 7.90625C21.7969 7.90625 25.1719 3.125 25.5469 1.53125Z"
							fill="#667399"/>
					</svg>
				</a>
			</div>
		</div>
	</div>
</noindex>
<?php if (is_page(336)) : ?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=736355d5-5d91-496e-ae7d-a4c971063fc1"
        type="text/javascript"></script>
<?php endif; ?>
<script src="/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
<script src="/js/jquery.vide.min.js"></script>
<script src="/js/app.js?<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '/js/app.js') ?>"></script>

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


</body>

</html>
<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
        integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
      integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>

<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>

<!-- Модалка обратной связи -->
<div class="modal hystmodal" id="feedback-stc" aria-hidden="true">
	<div class="modal__wrap hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="modal window service" aria-modal="true">
			<div class="modal__close" data-hystclose>
				<svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-linecap="round"/>
				</svg>
			</div>
			<h3 class="modal__title title title--big title--dark title--w-extra-bold js-feedback-title">
				Обсудим ваш проект
			</h3>
			<p class="modal__subtitle title title--small title--dark title--w-regular">
				Расскажите о задачах и задайте вопросы — мы перезвоним <br> в течение рабочего дня
			</p>
			<?= do_shortcode('[contact-form-7 id="fe2e8c1" title="Контактная форма в модальном окне" html_class="modal__form"]'); ?>
		</div>
	</div>
</div>
<!-- /. Модалка обратной связи -->

<!-- Success -->
<div class="modal modal--success hystmodal js-modal-success" id="success" aria-hidden="true">
	<div class="modal__wrap hystmodal__wrap">
		<div class="modal__body hystmodal__window" role="modal window feedback" aria-modal="true">
			<div class="modal__close" data-hystclose>
				<svg class="modal__close-svg" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L12 12M12 1L1 12" stroke-width="1.5" stroke-linecap="round"/>
				</svg>
			</div>
			<div class="modal__wrapper-success">
				<div class="modal__success-icon">
					<img src="<?= STANDART_DIR; ?>img/upload/check-success.svg" alt="Заявка принята" class="modal__success-img">
				</div>
				<div class="modal__success-text text text--big text--dark text--w-medium">
					Спасибо, ваша заявка принята!
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /. Success -->

</body>
</html>