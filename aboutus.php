<?php require('template/header.php'); 


//page settings

function contrast(){ echo 'lightbg';}
function animations(){ echo 'animations';}

?>
  	<style>
		main {
			display: flex;
			flex-wrap: wrap;
		}
		.box {
			overflow: hidden;
		}
		
		.box h1, .box h4, .box span {
			z-index: 1111;
		}
		
		
		.box img {
			position: absolute;
			opacity: 0.2;
			left: -50%;
			right: -50%;
			margin: auto;
			z-index: 0;
			height: 100%;
			transition: 0.5s opacity ease;
		}
		
		.box:hover img {
			opacity: 0.5;
		}
		
		@media (max-width:900px) { 
			main { flex-direction: column; }
			.col-60, .col-40, .col-2 { width: 100%; }
			.mobf { display: none; }
			.box.right ul.employees li:first-child { margin: 60px 0 0 0;}
			.custom1 { margin-top: 100px;}
		}
		
	</style>
  <section style="display: block; width:100%; height: 200px;"  class="push">
    </section>
        
	<a id="waypoint" href="/aboutus/branding-kreacja.php" class="box fh col-2 right inner light unload button" data-speed="20" data-direction="down" data-trigger="ease-in" style="background-color: #1e0517;">
    			
        		<span class="oi" data-glyph="brush" title="Branding & kreajca" aria-hidden="true"></span>
            	<h1>KREACJE<br>POBUDZAJĄCE<br>EMOCJE</h1>
                <h4>Tworzymy spójne identyfikacje graficzne oraz projekty opakowań, odpowiadające potrzebom konsumenta.</h4>
				<span class="svg slider-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span>
                <img src="<?php echo $actual_link ?>/archive/images/kreacja1.jpg"/>
                
    </a><!--
   	--><a href="/aboutus/digital-marketing.php" class="box fh col-2 left inner light unload button" style="background-color: #bc2d2d;">
        		<span class="oi" data-glyph="globe" title="Branding & kreajca" aria-hidden="true"></span>
            	<h1>WCIĄGAJĄCE<br>STRONY<br>INTERNETOWE</h1>
                <h4>Już kilka pierwszych sekund decyduje o tym czy użytkownik zostanie na naszej stronie. Wykorzystaj ten czas!</h4>
				<span class="svg slider-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span>
                <img src="<?php echo $actual_link ?>/archive/images/digital1.jpg"/>
    </a><!--
    --><a href="/aboutus/reklama-poligrafia.php" class="box fh col-2 right inner light unload button" style="background-color: #bc2d2d;">
        		<span class="oi" data-glyph="print" title="Branding & kreajca" aria-hidden="true"></span>
            	<h1>DUŻY FORMAT<br>DRUKU<br>I POLIGRAFIA</h1>
                <h4>Dukujemy wszystko co nam wejdzie w ręce, od małych ulotek a5 do kilkumetrowych reklam wielkoformatowych.</h4>
				<span class="svg slider-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span>
                <img src="<?php echo $actual_link ?>/archive/images/druk1.jpg"/>
    </a><!--
   	--><a href="/aboutus/fotografia.php" class="box fh col-2 left inner light unload button" style="background-color: #333;">
        		<span class="oi" data-glyph="eye" title="Branding & kreajca" aria-hidden="true"></span>
            	<h1>SKUTECZNA<br>REKLAMA<br>OUTDOOROWA</h1>
                <h4>Billboardy, cityframy, kasetony, a może oklejanie aut? Nie ma problemu, reklama outdoorowa nie ma przed nami tajemnic.</h4>
				<span class="svg slider-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span>
                <img src="<?php echo $actual_link ?>/archive/images/outdoor1.jpg"/>
    </a>


</main>

<script>
$(document).ready(function() {
 menuAnimation();
		logoAnimation();
		boxAnimation();
waypointsAnimation();
});
</script>
<?php require('template/footer.php'); ?>