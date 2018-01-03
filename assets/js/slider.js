	var slider;
	
		
	var slider_config = {
		mode: 'vertical',
				pagerCustom: '#bx-pager',
				onSliderLoad: function(currentIndex){ 
				
					$('.bxslider').children().eq(currentIndex + 1).addClass('active-slide');
					var video = $('.bxslider').children().eq(currentIndex + 1).find('video')[0];
					video.play();

				}, 
  				onSlideBefore: function($slideElement, oldIndex, newIndex){
					
					$('.bxslider').children().removeClass('active-slide');
    				$slideElement.addClass('active-slide');
					
					
					status = null;
					var video = $slideElement.find('video')[0];
					console.log(video);
					video.play();
					$( ".bxslider li" ).each(function() {
  						var prev = parseInt($(this).attr("data-idx"), 10);
						if (prev === oldIndex){
							var previousVideo = $("ul").find("[data-idx='" + prev + "'] video")[0];
							previousVideo.pause();
						}
						
					});
					}
	};
	
	function initSlider() {
			var status = null;
		 	slider = $('.bxslider').bxSlider(slider_config);
			
			
			$('#mouseevent').bind('mousewheel', function(e){
        		if(e.originalEvent.wheelDelta /120 > 0) {
            		status = false;
        		}else{
            		status = true;
        	}
			});
			
			var area = document.getElementById("mouseevent");
			area.addEventListener('mousewheel', throttle(callback, 1000));

			function throttle(fn, wait) {
  				var time = Date.now();
  				return function() {
    				if ((time + wait - Date.now()) < 0) {
      					fn();
      					time = Date.now();	
    				}		
  				};
			}

			function callback() {
  				if(status === true) {
            		slider.goToNextSlide();
        		}else{
            		slider.goToPrevSlide();
				}
			}			
	}