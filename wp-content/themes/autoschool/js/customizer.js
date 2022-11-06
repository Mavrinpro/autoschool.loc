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
