$(document).ready(function() {
            $("#owl-demo").owlCarousel({
                        autoPlay: 3000,      
                        items : 6,      
                        itemsDesktop : [1199,3],      
                        itemsDesktopSmall : [979,3]      
            }); 
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


