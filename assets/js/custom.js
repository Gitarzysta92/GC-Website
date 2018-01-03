var width;
var height;
var totalwidth;
var totalheight;


$(window).on('load', Triger());
$(window).resize(Triger);


function Triger () {
	ElementMeasurements();
	AdaptiveDocument();
	Mobile();
	AdaptiveGrid();
}


function ElementMeasurements (){
	// Measure window heigh and width and return true viewport
	// in variable 
		
	width = $(window).width();
	height = $(window).height();
	
	var pad = parseInt($("body").css('padding'), 10);
		
		totalwidth = width - (pad*2);
		totalheight = height - (pad*2);		
}
	
	
function AdaptiveDocument (){	
	
	// Slider video background adaptive measurements
	// width and height	
	$('.box.fh').css({'height': totalheight +'px'});
	$('.border-top, .border-bottom').css({'height': (height-totalheight)/2 +'px'});	
	$('.slider-spreader').css({'width': totalwidth +'px','height': totalheight +'px'});
		
	setTimeout(function(){	
	var videowidth = $('ul.bxslider li video').width();
	var videoheight = $('ul.bxslider li video').height();
	
		if ( videoheight+50 < totalheight) {
			$('ul.bxslider li video').css({'width':'auto','height':'100%'});	
		} else if ( videowidth+50 < totalwidth) {
			$('ul.bxslider li video').css({'width':'100%','height':'auto'});	
		}
	}, 50);	
	// Rescaling window - mobile menu bug fix -
	// on highest resolutions changes logo color
	
	if ( width > 900 ) {
		$('.mobile_toggle').removeClass('open');
		$('.mobile_nav').removeClass('open');
		$('.corner-logo').removeClass('mobile');
		$('.information').removeClass('mobile');
		$('.information').removeClass('open');
		$('.scroller').addClass('true');
	} else {
		$('.information').addClass('mobile');
		$('.scroller').removeClass('true');
	}	
}

function AdaptiveGrid () {
	// Function responsible for squares grid
	// First loop counting height of a single box
	$('.box.square').each(function() {
		var widthSquare = $(this).outerWidth();
  		$(this).css({'height': widthSquare +'px'});
  	});
/*
	var i=0;
	$('.box.primitive').each(function() {
		i++;
		$(this).attr({'id': i});
	});
	
	if ( width <= 1580 && width > 580 ) {
		var x = Math.floor((Math.random() * 10) + 1);
		$('#'+i).css('display','none');
	}else {
		$('#'+i).css('display','flex');
	}
	
	// Condition for wrapping boxes in columns
	// Its attached only to small squares, bigger square cant be named by numerals.
	// It will be causes bugs
	 if ( width <= 1580 && width > 1180 ) {
		$('.wrapper > .box.first').unwrap();	
		if ($('.box.second').parent('div.wrapper').length === 0) { 
				 $(':not(.box.second) + .box.second, * > .box.second:first-of-type').each(function() {
       			 	$(this).nextUntil(':not(.box.second)').addBack().wrapAll('<div class="wrapper" />');
                });
		}
	}else if(width <= 1180 && width > 880)  { 
		$('.wrapper > .box.first, .wrapper > .box.second').unwrap();
		if ($('.box.third').parent('div.wrapper').length === 0) { 
				 $(':not(.box.third) + .box.third, * > .box.third:first-of-type').each(function() {
       			 	$(this).nextUntil(':not(.box.third)').addBack().wrapAll('<div class="wrapper" />');
                });
		}			
    }else if(width <= 880 && width > 580)  { 
		$('.wrapper > .box.fourth, .wrapper > .box.fifth, .wrapper > .box.third, .wrapper > .box.second, .wrapper > .box.first').unwrap();
    }else if ( width >= 1585) {
				if ($('.box.first').parent('div.wrapper').length === 0){
				 	$(':not(.box.first) + .box.first, * > .box.first:first-of-type').each(function() {
       						$(this).nextUntil(':not(.box.first)').addBack().wrapAll('<div class="wrapper" />');
                	});			
				}
				if ($('.box.second').parent('div.wrapper').length === 0){
				 	$(':not(.box.second) + .box.second, * > .box.second:first-of-type').each(function() {
       						$(this).nextUntil(':not(.box.second)').addBack().wrapAll('<div class="wrapper" />');
                	});			
				}
				if ($('.box.third').parent('div.wrapper').length === 0){
				 	$(':not(.box.third) + .box.third, * > .box.third:first-of-type').each(function() {
       						$(this).nextUntil(':not(.box.third)').addBack().wrapAll('<div class="wrapper" />');
                	});			
				}
			
  	
    }
	 
	 */
}




function sticky_nav() {
    $('.main-menu.sticky').toggleClass('open');
	$('.sticky_toggle').toggleClass('open');
	$('.sticky-logo').toggleClass('open');
}

function mobile_nav() {
    $('.mobile_toggle').toggleClass('open');
	$('.mobile_nav').toggleClass('open');
	$('.corner-logo').toggleClass('mobile');
	$('.information').toggleClass('open');
	$('.sub-menu').removeClass('open');
}

function back_nav() {
	$('.sub-menu').removeClass('open');
}

function Mobile(){
	if ( width < 900 ){
		$('.main-menu').addClass('mobile_nav');
		$('body').addClass('mobile');
	}else {
		$('.main-menu').removeClass('mobile_nav');
		$('body').removeClass('mobile');
	}
}




//Mobile menu - touchscreen - fix - submenu


$(document).on("click", ".sub > a", function(e) {
	if (window.matchMedia('(max-width: 900px)').matches) {
        e.preventDefault();
  		e.stopPropagation();
		var menuItem = $(this).parent( ".sub" );
    	menuItem.find(".sub-menu").addClass('open');
    } 
});

