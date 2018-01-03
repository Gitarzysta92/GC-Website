$(document).ready(DivDimensions);
$(window).resize(DivDimensions);


function DivDimensions(){


	
	var width = $(window).width(); // szerokość okna
	var height = $(window).height(); // wysokość okna

	$('.container').css({'height': height +'px'});	
	$('.container, .slider , #fullpage, #scrollpage, .partner-container, #contactPage').css({'width': width +'px'});
	
	

};


$( ".close-menu" ).click(function() {
  $( ".menu" ).removeClass("menu-opacity");
  $( "body" ).removeClass("menu-mobile");
  setTimeout(function(){
  $( ".floating-menu" ).removeClass("on-menu");
  }, 100);
  });
 
$( ".floating-menu-button" ).click(function() {
  $( ".floating-menu" ).toggleClass("on-menu");
  $( ".menu" ).toggleClass("menu-opacity");
  $( "body" ).toggleClass("menu-mobile");
});





function crossbar_close() {
    $( this ).css('display','none');
}






