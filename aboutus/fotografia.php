<?php require($_SERVER['DOCUMENT_ROOT'].'/template/header.php'); 


//page settings

function contrast(){ echo 'lightbg';}
function animations(){ echo 'animations';}

?>
  	<style>
		main {
			display: flex;
			flex-wrap: wrap;
		}
		@media (max-width:900px) { 
			main { flex-direction: column; }
			.col-60, .col-40, .col-2 { width: 100%; }
			.mobf { display: none; }
			.box.right ul.employees li:first-child { margin: 60px 0 0 0;}
			.custom1 { margin-top: 100px;}
		}
		
		.corner-logo span {
			width:0;
			display: none;
		}
	</style>

	<section id="owl" data-speed="20" data-direction="down" data-trigger="ease-in" class="box fh col-60 right inner dark scroller mobf unload">
        		<span class="title-wraper" style="width: 100%;">
                	<?php echo file_get_contents($actual_link.'/archive/images/kreacja.svg'); ?>
                </span>
    </section><!--
   	--><section data-speed="10" data-direction="upper" data-trigger="upper" class="box fh col-40 left inner wide dark scroller custom1 unload">
        		<!--<span class="oi" data-glyph="brush" title="Branding & kreajca" aria-hidden="true"></span>-->
            	<h1>ŚWIATŁO,<br>APARAT<br>AKCJA!</h1>
                <h4>Każda z realizowanych przez na sesji, czy to w studiu czy plenerze opowiada inną historię. A my lubimy dobre historie!</h4>
				<span class="svg slider-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span>
    </section>
    <section id="waypoint" class="box fh row col-1 parallax-window" style="background-color: rgba(30, 5, 23, 0.9);" data-parallax="scroll" data-image-src="<?php echo $actual_link ?>/archive/images/kreacja3.jpg">
    			<section class="box fh col-60 right inner light mobf"></section>
   				<section data-speed="30" data-direction="both" data-trigger="ease-in" class="box fh col-40 left inner wide light scroller ">
            				<h1>APETYCZNA<br>FOTOGRAFIA<br>PRODUKTOWA</h1>
                			<h4>Pobudzamy apetyt i działamy na wyobraźnię, dzięki temu nasze zdjęcia są wyjątkowe.</h4>
                            <p>Mówi się że dobre zdjęcie sprzeda wszystko, to prawda dlatego każdą z naszych sesji traktujemy jako kolejne satysfakcjonujące wyzwanie, które ma odmienić Twój biznes. W czasach kiedy zdjęcia różnego rodzaju atakują nas co chwilę, warto poświęcić trochę więcej uwagi odpowiedniemu wizerunkowi naszych usług oraz produktów. Każdy detal decyduje o tym czy to właśnie nasze zdjęcie zapadnie w pamięć potencjalnemu klientowi i przekona go do zakupu.</p>
    			</section>
    </section>
    <section class="box fh row col-1" style="background-color: #bc2d2d;">
    			<section data-speed="30" data-direction="both" data-trigger="ease-in" class="box fh col-2 right inner light scroller">

            				<h1>UCHWYCIMY<br>NAJDROBNIEJSZY<br>SZCZEGÓŁ</h1>
                			<h4>Z przyjemnością realizujemy sesje modowe, aranżacyjne a także plenerowe.</h4>
                            <p>Przez lata pracy przy produkcji sesji zdjęciowych udoskonaliliśmy proces realizacji zdjęć niemal do perfekcji. Cała produkcja zaczynając od wyceny, a kończąc na finalnie obrobionych zdjęciach jest podporządkowana klientowi i gwarantuje stuprocentową satysfakcję oraz realizację założonych celów. </p>
                            <ul class="employees">
                            	<li style="background-image: url('<?php echo $actual_link ?>/archive/images/av1.jpg');">
                                	<div>Artur Andruszaniec<br><span class="oi" data-glyph="envelope-closed" title="Email" aria-hidden="true"></span>artur@grupacreative.pl</div>
                                </li>
                                <li style="background-image: url('<?php echo $actual_link ?>/archive/images/av2.jpg');">
                                	<div>Michał Łukasiewicz<br><span class="oi" data-glyph="envelope-closed" title="Email" aria-hidden="true"></span>michal@grupacreative.pl</div>
                                </li>
                                <li style="background-image: url('<?php echo $actual_link ?>/archive/images/av3.jpg');">
                                	<div>Michał Dutkiewicz<br><span class="oi" data-glyph="envelope-closed" title="Email" aria-hidden="true"></span>michal.d@grupacreative.pl</div>
                                </li>
                            </ul>
    			</section>
   				<section class="box fh col-2" style="overflow: hidden;">
                	<img class="centered" height="100%" style="opacity: 0.5;" src="<?php echo $actual_link ?>/archive/images/kreacja2.jpg"/>
                </section>
        					
    </section>
    <section id="waypoint-last" class="box col-1 dark">
        		<span class="tip-wraper">ZOBACZ TAKŻE</span>
    </section>
    <section class="box fh col-60 right inner dark mobf">
        		<span class="title-wraper">KREACJA<br>& BRANDING</span>
    </section>
   	<a href="branding-kreacja.php" class="box fh col-40 left inner wide dark">
        		<span class="oi" data-glyph="brush" title="Branding & kreajca" aria-hidden="true"></span>
            	<h1>DOBRE<br>KREACJE<br>POWSTAJĄ<br>W GRUPIE</h1>
                <h4>Każdy produkt zasługuje na spójną i oryginalną identyfikację, nadającą charakter oraz zwiększającą jego rozpoznawalność.</h4>
    </a>
    <section class="box col-1 dark">
        		<span class="svg next-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span>
    </section>

</main>


<script>

$(window).on('load', function(){
 menuAnimation();
		logoAnimation();
		boxAnimation();
waypointsAnimation();
});
</script>

<?php require($_SERVER['DOCUMENT_ROOT'].'/template/footer.php'); ?>