// JavaScript Document
$(document).ready(function(){
	//$('#main').fadeIn('slow');
	$("a.description-info-button").click(function(){
		$("div.project-description").fadeToggle('slow');
		$("div.description-info").fadeToggle('slow');
	});
});

