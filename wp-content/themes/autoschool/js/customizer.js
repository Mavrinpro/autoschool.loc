/* global wp, jQuery */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */



( function( $ ) {
	$('li.menu-item-has-children').addClass('nav-item dropdown');
	$('.nav-item.dropdown').children('a.nav-link.waves-effect.waves-light').addClass('nav-link dropdown-toggle waves-effect waves-light').attr('data-toggle', 'dropdown');

$('.dropdown-primary').find('a').removeClass('nav-link');

	$(document).ready(function() {
		//$('.mdb-select').material_select();

		$(".hamburger").click(function() {

			$(this).toggleClass('is-active');
			// if ($(this).hasClass('is-active')){
			// 	$('.navbar').removeClass('bg_transparent').addClass('bg-light');
			// }else{
			// 	$('.navbar').removeClass('bg-light').addClass('bg_transparent');
			// }

		});



	});

	// wow.js
	$( document ).ready(function() {


	const wow = new WOW({
		boxClass: 'wow', /* класс, который необходим для работы wow.js */
		animateClass: 'animated', /* класс, который будет автоматически добавляться анимируемым элементам при прокрутке страницы */
		offset: 0, /* по-умолчанию установлено значение 0, то есть как только при прокрутке страницы, элемент
		 достигает низа окна браузера проигрываться анимация, в данном случае анимация начнется на 30px выше от низа окна браузера */
		mobile: true, /* если true, то на мобильных тоже будет анимация, если false, то на мобильных анимация отключается */
		live: true /* если true, то анимация будет работать даже на динамически добавляемых элементах, если false, то только на тех элементах, которые были на странице при ее загрузке */
	})
	wow.init(); /* Инициализация плагина с установленными выше свойствами */
	});
}( jQuery ) );


// Ajax send form
$('form').not('#searchform').on('submit', function (e) {
	e.preventDefault();
	var button = $(this).find('.btn_submit_form'),

		btn_text = button.data('text_btn'),
		url = button.attr("data-url"),
		id = $(this).data('post_id'),
		inputName = $(this).find('input[name="name"]'),
		inputPhone = $(this).find('input[name="phone"]'),
		inputCard = $(this).find('input[name="card"]'),
		textArea = $(this).find('textarea[name="comment"]');
	//console.log(id);
	console.log(url);
	$this = $(this).serialize();
	$.ajax({
		type: 'POST',
		url: url,
		data: $this + '&action=send_form',
		dataType: "json",

		beforeSend: function (xhr) {
			button.addClass('border_none');
			button.html('<img src="/wp-content/themes/autoschool/img/svg/loader.svg" width="25">');
		},
		success: function (data) {
			if (data.name === 1) {
				button.html(btn_text);
				inputName.prev('.before_error').text('Введите имя!');
				inputName.addClass('border_err_form');
			}
			else{
				inputName.removeClass('border_err_form');
				inputName.prev('.before_error').text('');
			}
			if (data.phone === 1) {
				button.html(btn_text);
				inputPhone.prev('.before_error').text('Введите корректный номер!');
				inputPhone.addClass('border_err_form');
			}else{
				inputPhone.removeClass('border_err_form');
				inputPhone.prev('.before_error').text('');
			}
			if (data.card === 1) {
				button.html(btn_text);
				inputCard.prev('.before_error').text('Введите номер мед. карты');
				inputCard.addClass('border_err_form');
			}else{
				inputCard.removeClass('border_err_form');
				inputCard.prev('.before_error').text('');
			}
			if (data.comments === 1){
				button.html(btn_text);
				textArea.prev('.before_error').text('Введите текст отзыва');
				textArea.addClass('border_err_form');
			}
			else{
				textArea.removeClass('border_err_form');
				textArea.prev('.before_error').text('');
			}
			if(data.success) {
				inputName.removeClass('border_err_form');
				inputName.prev('.before_error').text('');
				inputPhone.removeClass('border_err_form');
				inputPhone.prev('.before_error').text('');
				inputCard.removeClass('border_err_form');
				inputCard.prev('.before_error').text('');

				button.text(btn_text);
				console.log(data);
				$('.block_success_form').addClass('fadeInLeft').css('display', 'block');
				setTimeout(function () {
					$('form').trigger("reset");
				}, 3000)
			}
		},
		error: function (xhr) {
			console.log(xhr.statusText);
		}
	});
})
// End ajax form
