$(function () {

	'use strict';

	// dashboard 

	$('.toggle-info').click(function () {

		$(this).toggleClass('selected').parent().next('.card-body').fadeToggle(100);

		if ($(this).hasClass('selected')) {

			$(this).html('<i class="fa fa-minus fa-lg"></i>');

		} else {

			$(this).html('<i class="fa fa-plus fa-lg"></i>');

		}

	});

	// trigger the selectbox 

	$("select").selectBoxIt();

	// Hide Placeholder On Form Focus

	$('[placeholder]').focus(function () {

		$(this).attr('data-text', $(this).attr('placeholder'));

		$(this).attr('placeholder', '');

	}).blur(function () {

		$(this).attr('placeholder', $(this).attr('data-text'));

	});




	var passField = $('.password');

	$('.show-pass').hover(function () {
		
		passField.attr('type', 'text')

	}, function(){

		passField.attr('type', 'password')

	});

	// confrim messege on delete btn 


	$('.confirm').click(function(){

		return confirm('Are you sure?');
	});


	// cat show view option 

	$('.cat h3').click(function () {

		$(this).next('.full-view').fadeToggle(200);
	});
});