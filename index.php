<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tabula-rasa
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <section class="top-section" style="background-image: url(<?php echo get_template_directory_uri();?>/img/header-bg.jpg)">
      <div class="container">
        <h1 class="h1">Банкротство<br> физических <br/>лиц</h1>
        <div class="top-section-descr">
          Гарантия <br/>результата
        </div>
        <a class="button download-docs-link" data-formid="Заявка Получить документы с баннера" data-mailmsg="Заявка Получить документы с баннера" href="#">Начать процедуру бесплатно</a>
      </div>
    </section>
    
	<section class="facts" id="result">
      <div class="container">
        <div class="facts-title">Что даст вам банкротство</div>
        <div class="facts-item">
          <h3 class="facts-item__title">Избавитесь</h3>
          <div class="facts-item__text">от незаконного давления коллекторов и кредиторов</div>
        </div>
        <div class="facts-item">
          <h3 class="facts-item__title">Получите</h3>
          <div class="facts-item__text">надежное правовое сопровождение</div>
        </div>
        <div class="facts-item">
          <h3 class="facts-item__title">Решите</h3>
          <div class="facts-item__text">проблемы по все долгам</div>
        </div>
      </div>
    </section>
	
	<section class="kogda" id="kogda">
		<div class="container">
			<h2>Вы можете стать банкротом если:</h2>
			<div class = "tripleblk">
				<div class = "oneblk">
					<img src = "<?php bloginfo("template_url");?>/img/dolgsumm.svg" />
					<span>Ваша задолженность <br/>не менее 500 000 руб.</span>
				</div>
				
				<div class = "oneblk">
					<img src = "<?php bloginfo("template_url");?>/img/prtime.svg" />
					<span>Просрочка по обязательствам <br/>не менее 3-х месяцев</span>
				</div>
				
				<div class = "oneblk">
					<img src = "<?php bloginfo("template_url");?>/img/nobankrot.svg" />
					<span>В течении 5 лет Вы <br/>не признавались банкротом</span>
				</div>
			</div>
		</div>
	</section>
	
	<section class="kakie_dolgi">
      <div class="container">
        <div class="facts-title">Какие долги можно списать</div>
        <div class="kakie_dolgi-item">
			<img src = "<?php bloginfo("template_url");?>/img/kredit.svg" />
			<hr/>
			<span>Кредитные и <br/>долговые <br/>обязательства</span>
        </div>
        <div class="kakie_dolgi-item">
			<img src = "<?php bloginfo("template_url");?>/img/komunalka.svg" />
			<hr/>
			<span>Задолженность <br/>за коммунальные <br/>услуги</span>
        </div>
        <div class="kakie_dolgi-item">
			<img src = "<?php bloginfo("template_url");?>/img/nalogi.svg" />
			<hr/>
			<span>Задолженность <br/>по налогам <br/>и сборам</span>
        </div>
      </div>
    </section>
	
	<section class="steps" id="etapi">
      <div class="container">
        <h2 class="section-title">Этапы процедуры банкротства</h2>
        <div class="steps-wrapper">
          <div class="steps-item steps-item-1 steps-odd">
            <div class="steps-item__number">1</div>
            <div class="steps-item__text">Звонок нашим<br> специалистам</div>
          </div>
          <div class="steps-item steps-item-2 steps-even">
            <div class="steps-item__number">2</div>
            <div class="steps-item__text">Консультация<br> (бесплатная)</div>
          </div>
          <div class="steps-item steps-item-3 steps-odd">
            <div class="steps-item__number">3</div>
            <div class="steps-item__text">Заключение<br> договора</div>
          </div>
          <div class="steps-item steps-item-4 steps-even">
            <div class="steps-item__number">4</div>
            <div class="steps-item__text">Сбор<br> документов</div>
          </div>
          <div class="steps-item steps-item-5 steps-odd">
            <div class="steps-item__number">5</div>
            <div class="steps-item__text">Подготовка и<br> подача документов</div>
          </div>
          <div class="steps-item steps-item-6 steps-even">
            <div class="steps-item__number">6</div>
            <div class="steps-item__text">Сопровождение<br> процедуры банкротства</div>
          </div>
          <div class="steps-item steps-item-7 steps-odd">
            <div class="steps-item__number">7</div>
            <div class="steps-item__text">Освобождение<br> от долгов</div>
          </div>
        </div>
      </div>
    </section>
	
	<section class="facts" id="preim">
      <div class="container">
        <div class="facts-title">Наши<br> преимущества</div>
        <div class="facts-item">
          <div class="facts-item__number">1</div>
          <div class="facts-item__text">Детальное сопровождение каждого этапа процедуры банкротства</div>
        </div>
        <div class="facts-item">
          <div class="facts-item__number">2</div>
          <div class="facts-item__text">Опыт в сфере банкротства более 10 лет, банкротства граждан - 3 года</div>
        </div>
        <div class="facts-item">
          <div class="facts-item__number">3</div>
          <div class="facts-item__text">Все сопровождаемые нами процедуры были окончены освобождением от долгов наших клиентов</div>
        </div>
		

	  </div>
		<span class = "ptext">
			<span class = "noteb">ВАЖНО</span> Сопровождение банкротства для нас – это не новый модный тренд или возможность быстро заработать на проблемах закредитованных людей, <strong>сопровождение банкротства для нас – это профессия.</strong>
		</span>
	  
    </section>
	
	<section class="price" id="price">
		<div class="container">
			<div class="price-title">Цены на услуги сопровождения банкротства</div>
			<div class = "price_tarif">
				
				<div class = "price_tarif__blk">
					<span class = "price_cr">от 0 руб.</span>
					Мы предоставляем Вам <a class = "ared download-docs-link" data-formid="Заявка Получить документы" data-mailmsg="Заявка Получить документы" href = "<?php bloginfo("template_url");?>/docs/bankrotstvo.zip">пакет документов</a> для самостоятельного осуществления процедуры банкротства и наш специалист консультирует Вас и расказывает порядок действий и нюансы оформления документов.
				</div>
				
				<div class = "price_tarif__blk">
					<span class = "price_cr">от 7000 руб.</span>
					Мы полностью берем на себя процедуру банкротства и взаимодействие с финансовым управляющим, Вам остается только предоставить нам все необходимые данные. 
					<br/>
					<br/>
					<span class = "smiletext"><span class = "noteb">ВАЖНО</span> Конечная цена обсуждается индивидуально, поскольку мы стремимся решать проблемы наших клиентов комплексно.</span>
				</div>
				
				
			</div>
		</div>
	</section>
	
	<section class="facts">
      <div class="container">
        <div class="facts-title">Несколько фактов о кредитовании в РФ</div>
        <div class="facts-item">
          <h3 class="facts-item__title">1 триллион</h3>
          <div class="facts-item__text">рублей кредиторской задолженности</div>
        </div>
        <div class="facts-item">
          <h3 class="facts-item__title">65%</h3>
          <div class="facts-item__text">задолженностей граждан просрочено</div>
        </div>
        <div class="facts-item">
          <h3 class="facts-item__title">3 миллиона</h3>
          <div class="facts-item__text">граждан избавились от долгов в 2018 г.</div>
        </div>
      </div>
    </section>
    
	<section class="order-section">
      <div class="container">
        <div class="order-section__content-wrap">
          <div class="order-section__content">
            <div class="order-section__content-title">Вы не один!</div>
            <div class="order-section__content-descr">Мы поможем начать жизнь<br> с чистого листа</div>
          </div>
          <a href="#" class="button popup-modal" data-formid="Заявка с секции Вы не один" data-mailmsg="Заявка с секции Вы не один">Заказать консультацию</a>
        </div>
      </div>
    </section>

	<section class="infoblk">
      <div class="container">
		<h2>Почему лучше обратиться к нам, а не к другим компаниям?</h2>
		<p>Наша компания занимается юридическим сопровождением банкротства юридических лиц больше 10 лет, а банкротства граждан - с первых дней его введения в российскую правовую систему.</p>
		<p>Мы работаем с финансовыми управляющими исключительно высокого уровня с многолетним стажем работы.</p>
		
		<h2>Почему лучше обратиться к нам, а не к финансовым управляющим?</h2>
		<p>Финансовые управляющие не вправе оказывать такие услуги. Они обязаны действовать в интересах как должника, так и его кредиторов. Мы же оказываем полное правовое сопровождение и выстраиваем юридическую работу с финансовым управляющим, кредиторами, налоговыми органами и т.д. таким образом, чтобы по итогам процедуры Вы были освобождены от долгов.</p>
		
		<h2>Почему на сайте у нас нет отзывов?</h2>
		<p>Конфиденциальность информации наших клиентов для нас важнее возможной прибыли. Отсутствие публикаций отзывов не мешает нам завершать все проекты освобождением от долгового бремени, исключать имущество из конкурной массы и решать иные проблемы наших клиентов.</p>
	  </div>
	</section>
	
    <section class="map" id="kontakta">
      <div id="mapLine" class="mapLine"></div>
      <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
      <script>
        ymaps.ready(init);

        function init() {

          var myMap = new ymaps.Map("mapLine", {
              center: [51.72769457226839,36.164475499999966],
              zoom: 14,
              controls: ['zoomControl']
            }),

            myPlacemarkAdr = new ymaps.Placemark([51.72769457226839,36.164475499999966], {
              iconContent: '',
              balloonContent: 'Наш адрес: <b></b><br/>Телефон: <b>',
              hintContent: 'Наш адрес: <b></b><br/>Телефон: <b>',
            }, {
              iconLayout: 'default#image',
              iconImageHref: '<?php echo get_template_directory_uri();?>/img/map.svg',
              iconImageSize: [70, 50],
              iconImageOffset: [-15, -54]
            });

          myMap.geoObjects.add(myPlacemarkAdr);






          myMap.behaviors.disable('scrollZoom');
        }

      </script>
      <div class="map-content">
        <h2>Контакты</h2>
        <div class="address">
          г. Курск,<br>
          ул. Павлуновского,<br>
          д. 48а
        </div>
        <a href="tel:+79192701919" onclick="ym(54022006, 'reachGoal', 'calltap');" class="map-content-phone">+7 919 270 19 19</a><br/>
		<a href="tel:+79510761819" onclick="ym(54022006, 'reachGoal', 'calltap');" class="map-content-phone">+7 951 076 18 19</a>
		
      </div>
    </section>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
