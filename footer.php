<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tabula-rasa
 */

?>

</div><!-- #content -->

<footer class="footer">
  <div class="container">
    <div class="logo logo-center" style="background-image: url(<?php echo get_template_directory_uri();?>/img/logo-white.svg)"></div>
    
	<div class = "rekvizits">
		ООО "Консалтинговая гркппа "Грандъ"<br/>
		ИНН: 4632103720<br/>
		ОГРН: 1094632001056<br/>
	</div>
	
	<div class="contacts">
      <a href="tel:+79510761819" onclick="ym(54022006, 'reachGoal', 'calltap');" class="phone-link">+7 951 076 18 19</a>
      <a href="#" class="button popup-modal" data-formid="Заявка с подвала сайта" data-mailmsg="Заявка с подвала сайта" onclick="ym(54022006, 'reachGoal', 'winopen');">Заказать звонок</a>
    </div>
  </div>
</footer>
</div><!-- #page -->

<?php
 //if(isset($_GET['modal'])):
	?>
	<div class="modal-block">
		<div class="modal-block__photo"></div>
		<div class="modal-block__content">
			<div class="modal-block__close"></div>
			<div class="modal-block__title modal-block__title_sale">Эксклюзивное предложение<br><span class="color-red">персональная скидка 10%</span></div>
			<div class="modal-block__sales">
				<span class = "msOld">7000</span> <span class = "msNew">6300</span> <span class = "msCur">рублей / месяц</span>
				<!--
				<div class="modal-block__sales-item modal-block__sales-item-throught">7000</div>
				<div class="modal-block__sales-item msOld">6300</div>
				<div class="modal-block__sales-item msPrice">р./месяц</div>
				-->
			</div>
			<div class="modal-block__title modal-block__title_date">Скидка действует <span class="color-red">до 25 <?php date_action();?></span></div>
			<form class="modal-block__btn">
				<!-- <a href="tel:+79510761819" class="modal-block__phone">+7 951 076 18 19</a> -->
				<input type="tel" name="tel" placeholder="+7(___)___-__-__">
				<a href="#" class="button uniSendBtn" data-formid="Заявка с блока Скидка на процедуру банкротства 10%" data-mailmsg="Заявка с блока Скидка на процедуру банкротства 10%">Получить скидку</a>
			</form>
		</div>
	</div>
	
<?php //endif;?>

<?php wp_footer(); ?>

</body>

</html>
