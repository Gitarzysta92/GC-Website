var hide = Cookies.get($('.modal').attr('name'));

$(document).ready(function() {

  // If the 'hide cookie is not set we show the message
  
  if (hide.modal === 'true') {
    $('.information, information.mobile.open').css('display','none');
    
	
  }

  // Add the event that closes the popup and sets the cookie that tells us to
  // not show it again until one day has passed.

});



function crossbar_close() {
	 $('.information').css('display','none');
    Cookies.set('modal', 'true', { expires: 1, path: '/' });
	console.log(hide);
}