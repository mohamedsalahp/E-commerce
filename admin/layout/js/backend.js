$(function () {

	'use strict';

	// Trigger The Selectboxit

	// Hide Placeholder On Form Focus

	$('[placeholder]').focus(function () {

		$(this).attr('data-text', $(this).attr('placeholder'));

		$(this).attr('placeholder', '');

	}).blur(function () {

		$(this).attr('placeholder', $(this).attr('data-text'));

	});

	// Add Asterisk On Required Field


	// Convert Password Field To Text Field On Hover

	
	// Confirmation Message On Button

	
	// Category View Option

	

	// Show Delete Button On Child Cats


});