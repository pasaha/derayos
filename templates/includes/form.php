<?php
$form_id = $form_id || 1 + 1;

?>
<form class="js-ajaxform" action="/send-contact.php" method="post" id="form<?php echo $form_id ?>">
	<input type="hidden" value="send" name="action"/>
	<div class="row" style="display:none">
		<div class="col-lg-12" style="text-align: left">
			<div class="alt-placeholder placeholder1">Введите ваше имя</div>
			<br>
			<div class="alt-placeholder placeholder2">Введите адрес электронной почты</div>
		</div>
	</div>
	<input type="text"  name="your-name" maxlength="40" minlength="2" required placeholder="Введите ваше имя"/>
	<input type="email" name="your-email" maxlength="40" required placeholder="Введите Email"/>

	<input type="submit" class="pm-workshop-newsletter-submit-btn" value="Подписаться" />
</form>
