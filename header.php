<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tabula-rasa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta name="cmsmagazine" content="f7245597f5b3579a3db3d69ddef2a8bf" />
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/icon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/icon-16x16.png">
  <!-- <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#00abaf"> -->
  <meta name="theme-color" content="#cfcfd1">

  <?php wp_head(); ?>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(54022006, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true
    });
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/54022006" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W3BHLQP');
  </script>
  <!-- End Google Tag Manager -->
  <script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>
</head>

<?php
var_dump($_COOKIE['modal-cookie']); ?>

<body <?php body_class(); ?>>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3BHLQP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div style="display: none;">
    <div class="box-modal" id="messgeModal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class="modalline" id="lineIcon">
      </div>

      <div class="modalline" id="lineMsg">
      </div>
    </div>
  </div>
  <div style="display: none;">
    <div class="box-modal" id="order-modal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class="modalline" id="lineIcon">
        <h2 class="section-title">Обратный звонок</h2>
        <form action="">
          <input type="text" name="name" placeholder="Ваше имя">
          <input type="tel" name="tel" placeholder="Ваш телефон">
          <a href="#" class="button uniSendBtn" onclick="ym(54022006, 'reachGoal', 'oformlenie');">Отправить</a>
        </form>
      </div>

      <div class="modalline" id="lineMsg">
      </div>
    </div>
  </div>
  <div style="display: none;">
    <div class="box-modal" id="docs-modal">
      <div class="box-modal_close arcticmodal-close">закрыть</div>
      <div class="modalline" id="lineIcon">
        <div class="docs-modal__wrapper">
          <div class="docs-modal__photo-wrapper">
            <div class="docs-modal__photo"></div>
            <div class="docs-modal__photo-text">
              Заполните форму и получите бесплатный комплект документов для оформления процедуры банкротства.
            </div>
          </div>
          <div class="docs-modal__form">
            <form action="">
              <input type="text" name="name" placeholder="Имя">
              <input type="tel" name="tel" placeholder="Телефон">
              <input type="email" name="email" placeholder="E-mail">
              <a href="#" class="button uniSendBtn-2">Отправить</a>
            </form>
          </div>
        </div>
        <div class="docs-modal__success">
          <div class="docs-modal__success-icon"></div>
          <a href="<?php bloginfo("template_url"); ?>/docs/bankrotstvo.zip" class="docs-modal__link">Скачать бесплатный пакет документов</a>
        </div>
      </div>

      <div class="modalline" id="lineMsg">
      </div>
    </div>
  </div>
  <div id="page" class="site">

    <header class="header">
      <div class="container">
        <div class="logo" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/logo.svg)"></div>
        <a href="tel:+79102171919" onclick="ym(54022006, 'reachGoal', 'calltap');" class="mob-phone-link">+7 910 217 19 19</a>
        <a href="tel:+79102171919" onclick="ym(54022006, 'reachGoal', 'calltap');" class="mob-phone-link__icon"></a>
        <div class="hamburger">
          <span class="hamburger-top"></span>
          <span class="hamburger-middle"></span>
          <span class="hamburger-bottom"></span>
        </div>
        <ul class="menu ul-clean">
          <li><a href="#result">О банкротстве</a></li>
          <li><a href="#etapi">Процедура</a></li>
          <li><a href="#preim">Наши преимущества</a></li>
          <li><a href="#price">Цены</a></li>
          <li><a href="#kontakta">Контакты</a></li>
        </ul>
        <div class="contacts">
          <a href="tel:+79102171919" onclick="ym(54022006, 'reachGoal', 'calltap');" class="phone-link">+7 910 217 19 19</a>
          <a href="#" class="button popup-modal" data-formid="Заявка с шапки сайта" data-mailmsg="Заявка с шапки сайта" onclick="ym(54022006, 'reachGoal', 'winopen');">Заказать звонок</a>
        </div>
      </div>
    </header>

    <div class="callbuttonbuttom">
      <a href="tel:+79102171919" onclick="ym(54022006, 'reachGoal', 'bigredbutton');" class="phone-link">Получить консультацию</a>
    </div>

    <div id="content" class="site-content">