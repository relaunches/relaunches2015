// Design Journal 2015 - core JS file

$(document).ready(function() {
	$(".spalte1 ul li:even").addClass("evenItem");
	$(".spalte2 ul li:even").addClass("evenItem");
	$(".spalte3 ul li:even").addClass("evenItem");
	$(".boxlist ul li:even").addClass("evenItem");
	$(".boxlist2 ul li:even").addClass("evenItem");
	
	$("#sidebar img").hover(function(){
	$(this).fadeTo("slow", 0.85);
	},function(){
	$(this).fadeTo("slow", 1.0);
	});
	
	$("#content-register img").hover(function(){
	$(this).fadeTo("slow", 0.85);
	},function(){
	$(this).fadeTo("slow", 1.0);
	});
	
	
	// Slideshow
	// besonders interessant rotation - erstmal deaktiviert
	// $('#features-single').cycle({
	//	fx: 'fade', timeout: 9000   
	// });
	$('#teaser').cycle({
		fx: 'fade', speed: 1000, timeout: 8000 
	});


});