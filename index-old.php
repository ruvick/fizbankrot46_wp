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
        <h1 class="h1">Банкротство<br> физических лиц</h1>
        <div class="top-section-descr">
          Начните жизнь с чистого лиcта
        </div>
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

    <section class="steps" id="etapi">
      <div class="container">
        <h2 class="section-title">Этапы работы</h2>
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
