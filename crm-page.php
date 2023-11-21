<?php
/*
Template Name: CRM
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
<section class="section__wrap crm__page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2><span>8 аргументов</span> за внедрение CRM<br> в отдел продаж</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3><span>01</span>Систематизируйте работу отдела продаж</h3>
                <p>
                От ощущений к системной работе. К цифрам. К осознанному принятию решений на основе данных по продажам. 
                <br><br>
                Вам больше не придется опрашивать менеджеров, кто, когда и сколько должен оплатить. 
                <br><br>
                В CRM-системе вы увидите всех клиентов, которым выставлен счет и от кого ждать поступлений. Найдёте потери клиентов в вашей воронке продаж
                </p>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/device-macbook-pro.png" alt="crm1">
            </div>
        </div>
        <div class="row invert">
            <div class="col-sm-6">
                <h3><span>02</span>CRM поможет не терять клиентов</h3>
                <p>
                В CRM-систему будут автоматически выгружаться звонки, e-mail’ы, формы обратной связи на сайте, диалоги в чатах и мессенджерах.
<br><br>
Вся клиентская база будет сведена в одном месте, а также договора, акты, счета-фактуры, технические задания, коммерческие предложения, доп. информация.
<br><br>
Теперь при увольнении и передаче дел другому менеджеру можно спокойно продолжить работу
                </p>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/device-macbook-pro-1.png" alt="crm2">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <h3><span>03</span>CRM покажет эффективность каждого<br> менеджера по продажам</h3>
                <p>
                Вы увидете, сколько звонков / обращений поступает на каждого менеджера, и сколько сделок из них успешно закрывается.
<br><br>
Вы также сможете прослушать записи разговоров менеджеров
                </p>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/crm-3.png" alt="crm3">
            </div>
        </div>
        <div class="row invert">
            <div class="col-sm-6">
                <h3><span>04</span>CRM позволит продолжить работу с теми<br> клиентами, кто не купил у вас с первого<br> обращения</h3>
                <p>
                Вы закрываете в сделку 20% новых обратившихся клиентов. А как насчёт повторных продаж и работы с 80% некупивших?
<br><br>
Используйте e-mail-маркетинг и SMS-рассылку, чтобы уведомить их об акциях и спецпредложениях.
                </p>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/crm-4.png" alt="crm4">
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6">
                <h3><span>05</span>Состояние дел в компании на одном экране</h3>
                <p>
                Мы сделали все, чтобы руководителю не надо было искать цифры или строить отчеты. 
<br><br>
CRM покажет все нужные данные на одном экране
                </p>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/crm-5.png" alt="crm5">
            </div>
        </div>
        <div class="row invert">
            <div class="col-sm-6">
                <h3><span>06</span>Полная интеграция с вашей почтой</h3>
                <p>
                Подключите неограниченное количество ящиков, и ваша переписка отобразится в CRM. 
<br><br>
Мы автоматически создадим новые сделки на каждое новое письмо от клиента и даже отследим скорость обработки поступающих запросов. Всё работает автоматически. 
<br><br>
И что самое приятное, настраивается в пару кликов
                </p>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/crm-6.png" alt="crm6">
            </div>
        </div>


        <div class="row">
            <div class="col-sm-6">
                <h3><span>07</span>Доступ из любой точки мира и устройства.<br> Мобильное приложение для iPhone или<br> Android</h3>
                <p>
                Вся информация о клиенте будет «под рукой». В приложении для смартфона вы всегда можете просмотреть и поставить задачи, увидеть список клиентов и сделок
                </p>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/crm-7.png" alt="crm7">
            </div>
        </div>
        <div class="row invert">
            <div class="col-sm-6">
                <h3><span>08</span>CRM заботится о вашей безопасности</h3>
                <p>
                Регулируйте права своих менеджеров. 
<br><br>
CRM содержит важные для вашего бизнеса конфиденциальные данные. Вы сами решаете, какие данные доступны каждому менеджеру
                </p>
            </div>
            <div class="col-sm-6">
                <img src="/wp-content/uploads/2022/03/crm-8.png" alt="crm8">
            </div>
        </div>
    </div>
</section>
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product", 
  "name": "Внедрение AmoCRM или Битрикс 24",
  "image": "https://saitcraft.ru/wp-content/uploads/2022/03/crm-sistema.png",
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