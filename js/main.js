$(document).ready(function() {
            $("#owl-demo").owlCarousel({
                        autoPlay: 3000,      
                        items : 6,      
                        itemsDesktop : [1199,3],      
                        itemsDesktopSmall : [979,3]      
            }); 
});

$(document).ready(function() {
            $("#owl-demo2").owlCarousel({
                        autoPlay: 3000,      
                        items : 4,
                        itemsDesktop : [1199,3],      
                        itemsDesktopSmall : [979,3]         
            }); 
});


$(".dropdown-container").click(function(){
    $(this).next('p').toggle();
    $(this).toggleClass('svg-rotate');
    $(this).toggleClass('active');
});

(function(){

	var parallax = document.querySelectorAll(".homepage_banner"),
	speed = -0.5;

	window.onscroll = function(){
		[].slice.call(parallax).forEach(function(el,i){

			var windowYOffset = window.pageYOffset,
			elBackgrounPos = "0 " + (windowYOffset * speed) + "px";

			el.style.backgroundPosition = elBackgrounPos;

		});
	};

})();


$(".hamburger").click(function(){
  $("nav").toggle(400);
});

$(window).resize(function(){  
    var w = $(window).width();
    menu        = $('nav');

    if(w > 320 && menu.is(':hidden')) {  
        menu.removeAttr('style');  
    }  
});   