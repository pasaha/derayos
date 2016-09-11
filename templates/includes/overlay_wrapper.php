<div class="overlay js-overlay" style="display: none">
	<div class="overlay__wrapper">
		<div class="overlay__inner">
			<div class="overlay__close js-overlay__close"><i class="fa fa-times"></i></div>
			<div class="overlay__content js-overlay__content">

			</div>
		</div>
	</div>
</div>
<script>


$('.js-ajaxform').each(function() {
	var $frm = $(this);
	$frm.submit(function(e) {
		//function() {
			var message = function(msg) {
				$('.js-overlay').show().find('.js-overlay__content').html(msg);
			};
			$.ajax({
				type: $frm.attr('method'),
				url: $frm.attr('action'),
				data: $frm.serialize(),
				success: function(data) {
					$frm[0].reset();
					message(data);
				},
				error: function(xhr, str) {
					message('Ошибка: ' + xhr.responseCode);
				}
			});
		//};
		e.preventDefault();
	});
});

$('.js-overlay-video').each(function() {
	var $frm = $(this);
	$frm.click(function(e) {
			var urlCoded = this.getAttribute('data-frame');

			$('.js-overlay').addClass('overlay_video').show().find('.js-overlay__content').html(urlCoded);

		e.preventDefault();
	});
});


$('.js-overlay__close').click(function(e) {
	$(this).parents('.js-overlay').removeClass('overlay_video').hide().find('.js-overlay__content').html('');
})

</script>
