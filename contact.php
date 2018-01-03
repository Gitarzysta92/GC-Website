<?php require('template/header.php'); 


//page settings

function contrast(){ echo 'darkbg';}
function animations(){ echo 'animations';}

?>
  	<style>
		main {
			display: flex;
			flex-wrap: wrap;
		}
		body {
			overflow:hidden;
		}
	
		html {
			height: 100%;
		}
		@media (max-width:900px) { 
			main { flex-direction: column; justify-content: center; }
			.col-60, .col-40 { width: 100%; }
			
			.mobf { display: none; }
			.box.right ul.employees li:first-child { margin: 60px 0 0 0;}
			.custom1 { margin-top: 100px;}
		}
	
		.main-bg {
			position: absolute;
    		overflow: hidden;
    		width: 100%;
    		height: 100%;
   			opacity: 0.1;
		}
	</style>
	<section class="box fh col-60 right inner light unload">
    			<h4>koło Warszawy</h4>
        		<span class="title-wraper">PIASTÓW</span>
                <h3>KASPROWICZA 6</h3>
    </section>
   <section class="box fh col-40 left inner wide light unload">
            	<h1>MASZ<br>PYTANIE?</h1>
                <h4>Zadzwoń: <b>22 753 62 80</b><br>Napisz maila: <b>studio@grupacreative.pl</b></h4>
				<button class="open">ZNAJDŹ NAS</button>
    </section>
    <button class="close">ZAMKNIJ MAPĘ</button>
 <div id="map" class="main-bg map">
 		
     	
    </div>
</main>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgRrFHS0jCYSmHm64ELBybCqetr9a-V-U&amp;callback=initMap" type="text/javascript"></script>
<script type="text/javascript">
       $(document).ready(function() {
        menuAnimation();
		logoAnimation();
		boxAnimation();
		  }); 
            function initMap() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 12,
					scrollwheel: false,
    				navigationControl: false,
    				mapTypeControl: false,
    				scaleControl: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(52.191445, 20.906775), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"all","stylers":[{"saturation":"0"},{"visibility":"on"},{"lightness":"0"}]},{"featureType":"all","elementType":"geometry","stylers":[{"saturation":"4"}]},{"featureType":"all","elementType":"geometry.fill","stylers":[{"saturation":"2"},{"visibility":"on"},{"color":"#ffd2d2"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"lightness":"100"},{"color":"#d19c9c"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff0000"},{"weight":0.4},{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"color":"#2b3f57"},{"weight":0.1}]},{"featureType":"landscape.natural","elementType":"all","stylers":[{"color":"#ff8787"},{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"}]},{"featureType":"landscape.natural.terrain","elementType":"all","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"lightness":"1"}]},{"featureType":"poi","elementType":"all","stylers":[{"color":"#6c5b7b"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#f55f77"},{"weight":3}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"weight":0.8},{"color":"#ffffff"},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"weight":1.3},{"color":"#FFFFFF"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#f55f77"},{"weight":1.1}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"color":"#ffffff"},{"weight":0.7}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#ff0000"},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.text.stroke","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"},{"saturation":"6"},{"lightness":"7"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#f55f77"},{"weight":0.4},{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels.text.stroke","stylers":[{"visibility":"on"}]},{"featureType":"transit.line","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"transit.station.rail","elementType":"labels.text","stylers":[{"weight":"0.01"}]},{"featureType":"transit.station.rail","elementType":"labels.text.fill","stylers":[{"color":"#f1ef90"},{"weight":"0.01"}]},{"featureType":"transit.station.rail","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"transit.station.rail","elementType":"labels.icon","stylers":[{"saturation":"6"},{"visibility":"on"},{"hue":"#0f00ff"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#f3b191"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(52.1773641, 20.847191),
                    map: map,
                    title: 'Snazzy!'
                });
            }
</script>
<?php require('template/footer.php'); ?>