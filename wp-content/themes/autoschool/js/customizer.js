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

}( jQuery ) );
