<?php
/*
Template Name: Вакансии
*/
get_header();
?>
<div class="page__vacancy">
<section class="team__wrap">
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
                    <h1>Вакансии или добро пожаловать в семью</h1>
                   
                </div>
            </div>
        </div>
        <img src="/wp-content/uploads/2022/10/mask-group-5.png" alt="Групповое фото сотрудников, страница Вакансии">
    </section>
    <section class="dev__banner2 context__banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 my-auto">

                <div class="quote__block">
                    <span class="quote__text">
                    Мы ищем новых<br> сотрудников, с которыми<br> <span>будем идти к общей цели:</span><br>
помогать B2B-компаниям<br> России привлекать новых<br> клиентов и развиваться.
                    </span>
                    <span class="quote__name">Евгений Циберный </span>
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
						alt="Евгений Циберный"
					/>
				</div>
			</div>
        </div>
    </div>
</section>
    </div>
<section class="section__wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Открытые вакансии:</h2>				
			</div>
        </div>
    </div>
<?php
// задаем нужные нам критерии выборки данных из БД
$args = array(
    'cat'=> 18
);
$query = new WP_Query( $args ); 
if ( $query->have_posts() ) : 
	while ( $query->have_posts() ) : $query->the_post(); 	
		if (get_field('activity',get_the_ID()) == 'Открытые вакансии'): ?>

			<div class="vacancy__section-border">
				<div class="container">	
					<div class="vacancy__section">
						<div class="vacancy__section-name"><?php the_title(); ?><span class="vacancy__section-icon"></span></div>			
						<div class="vacancy__section-wrapper" style="display: none;">				
							<div class="vacancy__section-main">
								<div class="col-md-4 vacancy__section-main-text">
									<p>Уровень зарплаты</p>
									<p><?php the_field('salary',get_the_ID());?></p>
								</div>
								<div class="col-md-4 vacancy__section-main-text">
									<p>Город</p>
									<p><?php the_field('cities',get_the_ID());?></p>
								</div>
								<div class="col-md-4 vacancy__section-main-text">
									<p>Требуемый опыт работы</p>
									<p><?php the_field('work_experience',get_the_ID());?></p>						
								</div>
							</div>
							<div class="vacancy__section-text">
								<?php the_content(); ?>	
							</div>
							<a href="javascript:;" class="button button--icon js-btn-vacancy" data-stc-modal="#feedback-stc" data-title="Отправить резюме" data-vacancy="<?php the_title(); ?>">
								<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M23.5 12C23.5 18.0751 18.5751 23 12.5 23C10.7804 23 2.5 23 2.5 23C2.5 23 2.5 23 5.09717 20.1363C2.88713 18.1244 1.5 15.2242 1.5 12C1.5 5.92487 6.42487 1 12.5 1C18.5751 1 23.5 5.92487 23.5 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M13.5 14H9.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M16.5 10H9.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
								Откликнуться
							</a>
							<?php if (get_field('link_hh',get_the_ID())): ?>
								<a href="<?php the_field('link_hh',get_the_ID());?>" class="btn btn__hh" target="_blank">Откликнуться на Head Hunter</a>
							<?php endif; ?>			
						</div>
					</div>
				</div>
			</div>
			
		<?php elseif (get_field('activity',get_the_ID()) == 'Архивные вакансии'): 
			ob_start(); ?>
			<div class="vacancy__section-border">
				<div class="container">	
					<div class="vacancy__section">
						<div class="vacancy__section-name"><?php the_title(); ?><span class="vacancy__section-icon"></span></div>			
						<div class="vacancy__section-wrapper" style="display: none;">				
							<div class="vacancy__section-main">
								<div class="col-md-4">
									<p>Уровень зарплаты</p>
									<p><?php the_field('salary',get_the_ID());?></p>
								</div>
								<div class="col-md-4">
									<p>Город</p>
									<p><?php the_field('cities',get_the_ID());?></p>
								</div>
								<div class="col-md-4">
									<p>Требуемый опыт работы</p>
									<p><?php the_field('work_experience',get_the_ID());?></p>						
								</div>
							</div>
							<div class="vacancy__section-text">
								<?php the_content(); ?>	
							</div>
							<a href="#" class="btn btn__vacancy" data-bs-toggle="modal" data-bs-target="#exampleModal">Откликнуться на Head Hunter</a>			
						</div>
					</div>
				</div>
			</div>
			<?php $archivalVacancies .= ob_get_clean();
		endif; ?>	
	<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php else : ?>
<p><?php esc_html_e( 'Нет постов по вашим критериям.' ); ?></p>				
<?php endif; ?>		
</section>			

<?php if(!empty($archivalVacancies)): ?>
<section class="section__wrap" style="background: #F6F8FD;s">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Архивные вакансии:</h2>
            </div>
        </div>
    </div>
	<?php echo $archivalVacancies ?>
</section>
<?php endif; ?>
<section class="vacancy__banner" style="margin-top:40px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <span>Если вы хотите работать у нас, но не нашли подходящей вакансии,  просто напишите<br> нам об этом или позвоните.  Нам всегда будет о чём поговорить. Возможно нам очень<br> нужны именно вы, просто мы пока об этом не знаем.</span>
                <a href="javascript:;" class="button button--icon" data-stc-modal="#feedback-stc">
	                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M23 12C23 18.0751 18.0751 23 12 23C10.2804 23 2 23 2 23C2 23 2 23 4.59717 20.1363C2.38713 18.1244 1 15.2242 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M13 14H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M16 10H9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
					Отправить резюме
                </a>
            </div>
            <div class="col-sm-4">
                <img src="/wp-content/uploads/2022/03/startup_svg-1.png" alt="">
            </div>
        </div>
    </div>
</section>


<section class="vacancy__banner2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Наши сотрудники растут в<br> интересных проектах и задачах</h2>
                <span>
                Маркетологам точно понравится управлять большими<br> бюджетами — некоторые задачи станут для вас вызовами. 
<br><br>
Вам придётся быстро учиться.
<br><br>
Среди наших клиентов — миллиардные компании.
                </span>
            </div>
        </div>
    </div>
</section>
<section class="logos__section">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2>Наши клиенты — средние и крупные<br> промышленные компании</h2>
                      </div>
                      <div class="col-sm-12">
                        <div class="logos__grid">
                            <div><img src="/img/logos/1-truba-ru.png" alt="Труба на складе.ру"></div>
                            <div><img src="/img/logos/4-polimer.png" alt="союз полимер"></div>
                            <div><img src="/img/logos/azpt.png" alt="азпт"></div>
                            <div><img src="/img/logos/upsk.png" alt="упск"></div>
                            <div><img src="/img/logos/Галсен.png" alt="галсен"></div>
                            <div><img src="/img/logos/белый кит 1.png" alt="белый кит"></div>
                            <div><img src="/img/logos/ажурсталь 1.png" alt="ажурсталь"></div>
                            <div><img src="/img/logos/еметалл 1.png" alt="еметал"></div>
                            <div><img src="/img/logos/челиндбанк 1.png" alt="челиндбанк"></div>
                           	<div><img src="/img/logos/инокс 1.png" alt="инокс"></div>
							<div><img src="/img/logos/стальмаксимум 1.png" alt="стальмаксимум"></div>
							<div><img src="/img/logos/тезтур 1.png" alt="тезтур"></div>
							<div><img src="/img/logos/семейная стоматология 1.png" alt="семейная стоматология"></div>
							<div><img src="/img/logos/rgk.png" alt="русгазкрио"></div>
							<div><img src="/img/logos/baae04a20c6f0cf43c73d4f2b06e2e6e_0x60x0 1.png" alt="нпо урал"></div>
							<div><img src="/img/logos/деловая россия1 1.png" alt="деловая Россия"></div>
							<div><img src="/img/logos/металл сканнер 1.png" alt="металлсканер"></div>
							<div><img src="/img/logos/автодоркомплект 1.png" alt="автодор"></div>
							<div><img src="/img/logos/stonetrade.png" alt="монолит"></div>
							<div><img src="/img/logos/профильарма 1.png" alt="профильарма"></div>
                        </div>
                      </div>
                  </div>
              </div>
          </section>

          <section class="vacancy__banner3">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-12">

                      </div>
                  </div>
              </div>
          </section>
          <section class="vacancy__team">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-12">
                          <h2>Мнения сотрудников о Сайткрафт</h2>
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-sm-6 my-auto">
                        <div class="vacancy__quote">
                        <svg class="quote__svg" width="46" height="26" viewBox="0 0 46 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.616 25.952L22.608 0.799995H10.704L0.72 25.952H17.616ZM40.656 25.952L45.648 0.799995H33.744L23.76 25.952H40.656Z" fill="#6430E8"/>
</svg>
                            <span class="vacancy__quote-text">
                            Для меня Сайткрафт — возможность расти и развиваться. В компании всё настроено на то, чтобы все делились своим опытом. Здесь много  узких специалистов, от которых я обучаюсь скиллам. У руководства крутой опыт в маркетинге, и они готовы им делиться.
<br><br>
Сайткрафт — это удалёнка. Я 1,5 часа экономлю на дороге и отдаю их моей семье.
<br><br>
Это строгость там, где нужно и человеческое отношение в то же время.
<br><br>
А ещё у нас молодой коллектив и интересные проекты.
                            </span>
                            <span class="vacancy__quote-name">Татьяна</span>
                            <span class="vacancy__quote-job">Интернет-маркетолог</span>
                        </div>
                      </div>			
						<div class="col-12 col-md-6 m-auto text-center">
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


              <div class="container">
                  <div class="row invert__row">
                      <div class="col-sm-6 my-auto">
                        <div class="vacancy__quote">
                        <svg class="quote__svg" width="46" height="26" viewBox="0 0 46 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.616 25.952L22.608 0.799995H10.704L0.72 25.952H17.616ZM40.656 25.952L45.648 0.799995H33.744L23.76 25.952H40.656Z" fill="#6430E8"/>
</svg>
                            <span class="vacancy__quote-text">
                           СайтКрафт - это развивающаяся компания, с интересным коллективом и человеческим отношением руководства и собственников.
<br><br>
Если возникают вопросы в процессе работы, то ребята всегда подскажут ответ и даже найдут приободряющие слова.
Атмосфера внутри всего коллектива дружественная и комфортная.<br><br>
Клиенты работают с нами годами, так как команда показывает хорошие результаты на проектах, все честно и открыто.
                            </span>
                            <span class="vacancy__quote-name">Алексей</span>
                            <span class="vacancy__quote-job">Руководитель аккаунт-менеджеров</span>
                        </div>
                      </div>	
						<div class="col-12 col-md-6 m-auto text-center">
							<div class="team-circle">
								<img
									data-src="/img/team/circle.svg"
									class="js-lazyload circle-svg"
									style="opacity:0"
									alt="circle-svg"
								/>
								<img
									data-src="/img/team/Alexey_2023v2.png"
									class="js-lazyload team-img"
									style="opacity:0"
									alt="Алексей"
								/>
							</div>
						</div>
                  </div>
              </div>


              <div class="container">
                  <div class="row ">
                      <div class="col-sm-6 my-auto">
                        <div class="vacancy__quote">
                        <svg class="quote__svg" width="46" height="26" viewBox="0 0 46 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.616 25.952L22.608 0.799995H10.704L0.72 25.952H17.616ZM40.656 25.952L45.648 0.799995H33.744L23.76 25.952H40.656Z" fill="#6430E8"/>
</svg>
                            <span class="vacancy__quote-text">
                            Лично для меня очень важно развиваться, так я чувствую себя лучше, и руководство дает мне такую возможность. 
<br><br>
Мне также нравится сплоченность, что каждый из нас может прийти на помощь другому. Что можно делиться своими идеями и пожеланиями, и ты всегда будешь услышан. 
<br><br>
Еще мне нравится свобода — ты сам решаешь, что будет лучше для проекта, и можешь работать из любой точки мира, главное, оставайся на связи!)
                            </span>
                            <span class="vacancy__quote-name">Ольга</span>
                            <span class="vacancy__quote-job">Руководитель SEO-отдела</span>
                        </div>
                      </div>
						<div class="col-12 col-md-6 m-auto text-center">
							<div class="team-circle">
								<img
									data-src="/img/team/circle.svg"
									class="js-lazyload circle-svg"
									style="opacity:0"
									alt="circle-svg"
								/>
								<img
									data-src="/img/team/Olga.png"
									class="js-lazyload team-img"
									style="opacity:0"
									alt="Ольга"
								/>
							</div>
						</div>
                  </div>
              </div>


              <div class="container">
                  <div class="row invert__row">
                      <div class="col-sm-6 my-auto">
                        <div class="vacancy__quote">
                        <svg class="quote__svg" width="46" height="26" viewBox="0 0 46 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.616 25.952L22.608 0.799995H10.704L0.72 25.952H17.616ZM40.656 25.952L45.648 0.799995H33.744L23.76 25.952H40.656Z" fill="#6430E8"/>
</svg>
                            <span class="vacancy__quote-text">
                            Сайткрафт — это про любовь к своему делу, профессионализм и общую цель.
<br><br>
Сайткрафт — это про развитие и самореализацию. Компания постоянно движется вперед, и это позволяет развиваться каждому члену команды.
<br><br>
Сайткрафт — это про людей. Команда открытых, молодых, талантливых, сплоченных профессионалов с одной общей «безуминкой» — безусловной любовью к тому, что мы делаем.
                            </span>
                            <span class="vacancy__quote-name">Валерия</span>
                            <span class="vacancy__quote-job">Исполнительный директор</span>
                        </div>
                      </div>
						<div class="col-12 col-md-6 mt-auto text-center">
							<div class="team-circle">
								<img
									data-src="/img/team/circle.svg"
									class="js-lazyload circle-svg"
									style="opacity:0"
									alt="circle-svg"
								/>
								<img
									data-src="/img/team/Valeria.png"
									class="js-lazyload team-img"
									style="opacity:0"
									alt="Валерия"
								/>
							</div>
						</div>
                  </div>
              </div>


              <div class="container">
                  <div class="row ">
                      <div class="col-sm-6 my-auto">
                        <div class="vacancy__quote">
                        <svg class="quote__svg" width="46" height="26" viewBox="0 0 46 26" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.616 25.952L22.608 0.799995H10.704L0.72 25.952H17.616ZM40.656 25.952L45.648 0.799995H33.744L23.76 25.952H40.656Z" fill="#6430E8"/>
</svg>
                            <span class="vacancy__quote-text">
                           Сайткрафт уже давно и тесно связан с моей жизнью.<br>
Вместе с агентством я росла в профессиональном и личностном планах, общаясь с приятными, умными и понимающими людьми, работая над проектами, которые зачастую предлагают вызов твоим способностям. И это по-настоящему здорово! Каждый день я получаю новые знания и навыки, мне нравится, что здесь мы всегда стремимся к чему-то большему и лучшему.
<br><br>
Даже перейдя на удалённую работу, мы всегда остаёмся на связи, много общаемся. Мне приятна эта забота о том, чтобы в компании, несмотря на расстояние между сотрудниками, царила дружелюбная непринужденная атмосфера.
                            </span>
                            <span class="vacancy__quote-name">Анна</span>
                            <span class="vacancy__quote-job">Контент-менеджер</span>
                        </div>
                      </div>
						<div class="col-12 col-md-6 mt-auto text-center">
							<div class="team-circle">
								<img
									data-src="/img/team/circle.svg"
									class="js-lazyload circle-svg"
									style="opacity:0"
									alt="circle-svg"
								/>
								<img
									data-src="/img/team/Anna_Sh.png"
									class="js-lazyload team-img"
									style="opacity:0"
									alt="Анна"
								/>
							</div>
						</div>
                  </div>
              </div>


          </section>
<?php get_footer(); ?>