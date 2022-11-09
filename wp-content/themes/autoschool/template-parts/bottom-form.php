<form action="" method="post" class="needs-validation col-md-12" novalidate id="bottom_form">
	<!-- Default input -->
	<!-- Material input -->
	<div class="row justify-content-center shadow-lg p-4 p-md-5 rounded">
		<div class="col-lg-3 col-md-4 mb-2 mb-md-0">
			<input class="wm-input-default" placeholder="* Ваше имя: " type="text" size="1" maxlength="100" value="" name="name" id="name" required="">

		</div>

		<!-- Default input -->

		<div class="col-lg-3 col-md-4 mb-2 mb-md-0">
			<input class="wm-input-default phone" placeholder="* Телефон: " type="text" size="1" maxlength="100" value="" name="phone" id="phone" required="">
			<input type="hidden" name="form_position" value="Низ страницы">
			<input type="hidden" name="title_page" value="<?php echo wp_title() ?>">

		</div>
		<div class=" col-lg-2 col-md-3">
			<div class="more text-center">
				<button type="submit" class="w-100 btn_submit_form" data-url="<?php echo admin_url('admin-ajax.php'); ?>" data-text_btn="Записаться"><span class="align-elem">Записаться</span></button>
			</div>
		</div>
	</div>
</form>