jQuery(document).ready(function ($) {
	
  var inputmask_96e76a5f = {
    "mask": "+7(999)999-99-99"
  };
  jQuery("input[type=tel]").inputmask(inputmask_96e76a5f);

  $(".popup-modal").click(function (e) {
    e.preventDefault();
    var formid = $(this).data('formid');
    var message = $(this).data('mailmsg');
    $('.uniSendBtn').attr('data-formid', formid);
    $('.uniSendBtn').attr('data-mailmsg', message);
    $('#order-modal').arcticmodal();
  });

  $(".download-docs-link").click(function(e) {
    e.preventDefault();
    var formid = $(this).data('formid');
    var message = $(this).data('mailmsg');
    $('.uniSendBtn-2').attr('data-formid', formid);
    $('.uniSendBtn-2').attr('data-mailmsg', message);
    $('#docs-modal').arcticmodal();
  });

  $('.modal-block__close').click(function() {
    $('.modal-block').hide();
  });

  $('.modal-block').hide();
  setTimeout(function() {
    $('.modal-block').css('display', 'flex');
  }, 12000);

  jQuery(".uniSendBtn-2").click(function (e) {
    e.preventDefault();
    var formid = jQuery(this).data("formid");
    var message = jQuery(this).data("mailmsg");
    var phone = $(this).siblings('input[type=tel]').val();
    var name = $(this).siblings('input[name=name]').val();
    var mail = $(this).siblings('input[name=email]').val();

    if ((phone == "") || (phone.indexOf("_") > 0)) {
      $(this).siblings('input[type=tel]').css("background-color", "#ff91a4")
    } else {
      var jqXHR = jQuery.post(
        allAjax.ajaxurl, {
          action: 'universal_send',
          nonce: allAjax.nonce,
          msg: message,
          name: name,
          mail: mail,
          tel: phone
        }

      );


      jqXHR.done(function (responce) {
        $(".docs-modal__wrapper").hide();
        $(".docs-modal__success").css('display', 'flex');

      });

      jqXHR.fail(function (responce) {
        jQuery('#messgeModal #lineIcon').html('');
        jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
        jQuery('#messgeModal').arcticmodal();
      });
    }
  });

  //jQuery(document).snowfall({image :"https://fizbankrot46.ru/wp-content/themes/rasa/img/snow1.png", minSize: 10, maxSize:20});
  
  jQuery(".uniSendBtn").click(function () {
    var formid = jQuery(this).data("formid");
    var message = jQuery(this).data("mailmsg");
    var phone = $(this).siblings('input[type=tel]').val();
    var name = $(this).siblings('input[name=name]').val();

    if ((phone == "") || (phone.indexOf("_") > 0)) {
      $(this).siblings('input[type=tel]').css("background-color", "#ff91a4")
    } else {
      var jqXHR = jQuery.post(
        allAjax.ajaxurl, {
          action: 'universal_send',
          nonce: allAjax.nonce,
          msg: message,
          name: name,
          tel: phone
        }

      );


      jqXHR.done(function (responce) {
        $.arcticmodal('close');
        jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
        jQuery('#messgeModal').arcticmodal();

      });

      jqXHR.fail(function (responce) {
        jQuery('#messgeModal #lineIcon').html('');
        jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
        jQuery('#messgeModal').arcticmodal();
      });
    }
  });

  $(".menu a").click(function() {
    if($('.menu').hasClass("active")) {
      $('.menu').slideUp();
      $('.menu').removeClass('active');
    }
    if($('.hamburger').hasClass('active')) {
      $('.hamburger').removeClass('active');
    }
    var elementClick = $(this).attr("href");
    var destination = $(elementClick).offset().top - 130;
    console.log(destination);
    
    $("html, body").animate({
      scrollTop: destination
    }, 1000);
    return false;
  });

  $('.hamburger').click(function() {
    if($(this).hasClass('active')) {
      $(this).removeClass('active');
      $('.menu').removeClass('active');
      $('.menu').slideUp();
    } else {
      $(this).addClass('active');
      $('.menu').slideDown();
      $('.menu').addClass('active');
    }
  });

});
