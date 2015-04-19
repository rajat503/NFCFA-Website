$(document).ready(function() {
	$(".button-collapse").sideNav();
	
	$('.button-collapse').sideNav({
		menuWidth: 250, // Default is 240
		edge: 'left', // Choose the horizontal origin
		closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    });
	
	$('.slider').slider({full_width: true});
});