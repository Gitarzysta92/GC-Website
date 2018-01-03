// JavaScript Document

function triggerIntro() { 

$.ajax({url: "index.php",dataType: 'html', success: function(result){
        		$("#wrap").html($(result).find('#wrap').html());
				$("#wrap").html($(result).find('#bxpager').html());
				Triger();
				initSlider();
}});


$('#loader').fadeIn("slow", function() { $(this).delay(1000).fadeOut("slow"); });
	$('.icons .first').delay( 1800 ).fadeTo( "fast", 1 );
	$('body').addClass('ready');
	if ($('body').hasClass('ready')){
		$('.corner-logo').delay(2000).fadeIn("fast");
		
		setTimeout(function() {
			bxwrapperAnimation();
			pagerAnimation();
		$('body .main-menu li').each(function() {
			$(this).css('opacity','1');
		});
		bxwrapperAnimation();
		

		toggleAnimation();
		pagerAnimation();
		}, 2300);
		
	
		
	}
		
}
	


function menuAnimation() { 
	setTimeout(function() {
		$('body.animations .main-menu li').each(function() {
			$(this).css('opacity','1');
		});
		toggleAnimation();
}, 500);

}




function waypointsAnimation() {
	var waypoints = $('#waypoint, #waypoint-second, #waypoint-third').waypoint(function(direction) {
  $('.sticky_toggle, .sticky-logo, .mobile_toggle').toggleClass('light');
}, {
  offset: '10%'
})

var waypoints = $('#waypoint-last').waypoint(function(direction) {
  $('.sticky_toggle, .sticky-logo, .mobile_toggle').toggleClass('light');
}, {
  offset: '10%%'
})
}



function boxAnimation() { 
	$('.box').removeClass('unload');
}

function logoAnimation() { 
	$('.corner-logo').delay(500).fadeIn("fast");
}

function bxwrapperAnimation() { 
	$('.bx-wrapper').css('opacity','1');
}

function sliderinnerAnimation() { 
	$('.active-slide .slider-inner h1, .active-slide .slider-inner h4, .active-slide.slider-inner span, .active-slide .slider-inner svg').css({"opacity": "1", "margin-left": "0"});
}


function toggleAnimation() { 
	$('.close_toggle').removeClass('once');
}


function pagerAnimation() {
	var i =0;
	$('body.animations .bx-pager a').each(function() {
		i += 40;
			 $(this).delay(i).queue(function (next) { $(this).css('opacity', '1'); next(); });
	});
}



$( "button.open" ).click(function() {
	$('.box').addClass('unload');
	$('.box').css({'visibility':'hidden'});
	
	if (!$(".main-menu" ).hasClass( "mobile_nav" )){
	$('.corner-logo').delay(500).fadeOut("fast");
	$('body.animations .main-menu li').each(function() {
			$(this).css('opacity','0');
		});
	}
	$('#map').css({'opacity':'0.5'});
	$('button.close').css({'opacity':'1','bottom':'100px' });	
	
	
	
	
		
});

$( "button.close" ).click(function() {
	$('.box').removeClass('unload');
	$('.box').css({'visibility':'visible'});
	$('.corner-logo').delay(500).fadeIn("fast");
	$('body.animations .main-menu li').each(function() {
			$(this).css('opacity','1');
		});
	$('#map').css({'opacity':'0.1'});
	$('button.close').css({'opacity':'0','bottom':'0px' });	
});



$(document).ready(function() {
var newLocation;
$('body').animate({ opacity: 1});
$('a').addClass('link');


$('.link').click(function(event) {
	event.preventDefault();
	newLocation = this.href;
if ($(this).parent('.sub').length && $(window).width() < 900 || $(this).closest('#bx-pager').length ) {
}else {
	$('body').animate({ opacity: 0},200, newpage);
}
});



function newpage() {

window.location = newLocation;

}

});




$(window).scroll( function() {
	var scroll = $(window).scrollTop();
    
    
	$('body.animations .scroller.true').each(function(){
		var distance  = $(this).data('speed');
		
		var speed = distance/100;
		var $this = $(this);
        var $parent = $this.parent();
        var topOffset = $parent.offset().top;
        var height = $parent.outerHeight(true);
        var parallaxSize = (scroll - topOffset) * speed;
        
		
		
		var direction  = $(this).data('direction');
		 if (direction ==='upper'){
			 
			 // prevent parallax when scroll down
        	if(scroll > topOffset + height) {
            	return;
        	}	
			$this.css({ 
            	'transform': scroll >= topOffset-height ? ('translateY(' + - parallaxSize + 'px)' ) : ''
       		});
			 
			 
		}else if (direction ==='both'){
			 $this.css({ 
            'transform': scroll >= topOffset-height ? ('translateY(' + -parallaxSize + 'px)' ) : ''
       		 });
		}else if (direction ==='down'){
			
			// prevent parallax when scroll down
        	if(scroll > topOffset + height) {
            	return;
        	}	
			$this.css({ 
            	'transform': scroll >= topOffset-height ? ('translateY(' + parallaxSize + 'px)' ) : ''
       		});
		}
		
		
        
       
	}); 
	

});


// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("menu");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset <= $(window).height()) {
	  $('.main-menu.sticky').removeClass('open');
	navbar.classList.remove("sticky");
	$('.sticky_toggle, .sticky-logo').removeClass('open');	
	$('.sticky_toggle').css('right', '-100px');	
	$('.sticky-logo').css('left', '-100px');	
  } else if ( 900 < $(window).width()) {
    navbar.classList.add("sticky");
	$('.sticky_toggle').css('right', '100px');	
	$('.sticky-logo').css('left', '90px');	
  }
}



