// jquery
jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});

// nb search
new UISearch( document.getElementById( 'sb-search' ) );

// You can also use "$(window).load(function() {"
$(function () {
// Slideshow 4
	$("#slider3").responsiveSlides({
		auto: true,
		pager: false,
		nav: true,
		speed: 500,
		namespace: "callbacks",
	before: function () {
	$('.events').append("<li>before event fired.</li>");
	},
	after: function () {
	$('.events').append("<li>after event fired.</li>");
	}
	});				
});

// yaelahh
$(window).load(function() {
	$("#flexiselDemo1").flexisel({
		visibleItems: 3,
		animationSpeed: 1000,
		autoPlay: false,
		autoPlaySpeed: 3000,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
		responsiveBreakpoints: { 
		portrait: { 
		changePoint:480,
		visibleItems: 1
		}, 
		landscape: { 
		changePoint:640,
		visibleItems:2
		},
		tablet: { 
		changePoint:768,
		visibleItems: 3
		}
		}
	});								
});

// halahhhh
$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion           
		width: 'auto', //auto or any width like 600px
		fit: true   // 100% fit in a container
	});
});

// hahaha
jQuery(function($) {
	$(".swipebox").swipebox();
});
