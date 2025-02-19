(function ($) {
	"use strict";

    jQuery(document).ready(function($){


		$(".searchIcon").click(function(){
			$(".searchBar").addClass("showSearch")
		})

		$(".remove").click(function(){
			$(".searchBar").removeClass("showSearch")
		})


       
 /*---------- menu js start---------*/  
     $('.stellarnav').stellarNav({
				theme: 'dark',
				breakpoint: 660,
				position: 'static',
				phoneBtn: false,
				locationBtn: false,
				sticky:false,
				showArrows:true,
				openingSpeed: 500,
				closingDelay: 500,
               
         });
        
        window.onscroll = function() {myFunction()};

			var header = document.getElementById("myHeader");
			var sticky = header.offsetTop;

			function myFunction() {
			  if (window.pageYOffset > sticky) {
			    header.classList.add("sticky");
			  } else {
			    header.classList.remove("sticky");
			  }
			}
        
/*---------- menu js End---------*/  


$(function() {
	$('.animate-clip').animatedHeadline({
		animationType: 'clip'
	});
})


$(".skills").addClass("active")
$(".skills .skill .skill-bar span").each(function() {
   $(this).animate({
      "width": $(this).parent().attr("data-bar") + "%"
   }, 1000);
   $(this).append('<b>' + $(this).parent().attr("data-bar") + '%</b>');
});
setTimeout(function() {
   $(".skills .skill .skill-bar span b").animate({"opacity":"1"},1000);
}, 1000);



    
	   $('.video-icon').magnificPopup({
		type: 'iframe'
	  });
  

	  $('.gallery').magnificPopup({
		type: 'image',
	  mainClass: 'mfp-with-zoom', 
	  gallery:{
				enabled:true
			},
	
	  zoom: {
		enabled: true, 
	
		duration: 500, // duration of the effect, in milliseconds
		easing: 'ease-in-out', // CSS transition easing function
	
		opener: function(openerElement) {
	
		  return openerElement.is('img') ? openerElement : openerElement.find('img');
	  }
	}
	
});


$(".clinet-active").owlCarousel({
	loop:true,
	dots:false,
	nav:false,
	margin:30,
	autoplay:true,
	smartSpeed: 1000,
	autoplayTimeout:5000,
	navText:["<i Class='las la-arrow-left'></i>", 
			  "<i class='las la-arrow-right'></i>"],
	responsiveClass: true,
	responsive: {
	  0: {
		items: 1,
	  },
	  480: {
		items: 2,
	  },
	  768: {
		items: 3,
	  },
	  1000: {
		items:6,
	  }
	}

});	


		
        $(window).scroll(function(){
		        if ($(this).scrollTop() > 100) {
		            $('.themesBazar_scroll').fadeIn();
		        } else {
		            $('.themesBazar_scroll').fadeOut();
		        }
		    });

		    //Click event to scroll to top
		    $('.themesBazar_scroll').on('click', function(){
		        $('html, body').animate({scrollTop : 0},800);
		        return false;
		    });
        
        

    });




}(jQuery));	