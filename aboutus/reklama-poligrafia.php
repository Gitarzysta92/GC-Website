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
                	<?php echo file_get_contents($actual_link.'/archive/images/reklama.svg'); ?>
                </span>
    </section><!--
   	--><section data-speed="10" data-direction="upper" data-trigger="upper" class="box fh col-40 left inner wide dark scroller custom1 unload">
        		<!--<span class="oi" data-glyph="brush" title="Branding & kreajca" aria-hidden="true"></span>-->
            	<h1>ZWIĘKSZ<br>ZASIĘG<br>SWOJEJ FIRMY</h1>
                <h4>Kontakt klienta z reklamą  trwa tylko kilka sekund, wykorzystaj ten czas i przykuj jego uwagę. </h4>
				<span class="svg slider-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span>
    </section>
    <section id="waypoint" class="box fh row col-1 parallax-window" style="background-color: rgba(30, 5, 23, 0.9);" data-parallax="scroll" data-image-src="<?php echo $actual_link ?>/archive/images/kreacja3.jpg">
    			<section class="box fh col-60 right inner light mobf"></section>
   				<section data-speed="30" data-direction="both" data-trigger="ease-in" class="box fh col-40 left inner wide light scroller ">
                			<h1>ZACZNIJ<br>OD REKLAMY<br>ZEWNĘTRZNEJ</h1>
                			<h4>W dzisiejszych czasach bez odpowiedniego, wyrazistego oraz jednolitego przekazu, marki lub nawet całe firmy giną w morzu contentu.</h4>
                            <p>Proces ten wynika z nadmiernej ilości reklam, ale także z powodu niskiej jakości samego przekazu jaki sobą prezentują. Oczywiście nie oznacza to że wykorzystywanie tradycyjnych nośników reklamowych jest nieopłacalne, jest wręcz przeciwnie. Przemyślana i dobrze zaprojektowana reklama może zdziałać cuda. Jako firma z wieloletnim doświadczeniem w branży możemy zapewnić najwyższy standard dowolnej realizacji z zakresu reklamy zewnętrznej, zaczynając od koncepcji, a kończąc na gotowym produkcie. </p>
    			</section>
    </section>
    <section class="box fh row col-1" style="background-color: #bc2d2d;">
    			<section data-speed="30" data-direction="both" data-trigger="ease-in" class="box fh col-2 right inner light scroller">

            				<h1>PLAKATY<br>WIZYTÓWKI<br>ORAZ ULOTKI</h1>
                			<h4>Drukujemy dowolne formaty, w dowolnych ilościach, na dowolnych materiałach. Bez ograniczeń.</h4>
                            <p>Wysokiej jakości poligrafia staje się bardzo ważna dla większości firm. Wykonana przy użyciu odpowiedniej jakości materiałów, buduje profesjonalny i wiarygodny wizerunek przedsiębiorstwa. Dlatego z myślą o naszych klientach do realizacji zleceń wybieramy najwyższej jakości materiały, zarówno dla małych formatów jak i druków wielkoformatowych. Dodatkowo oferujemy usługi z zakresu introligatorstwa, cięcia laserowego, grawerowania oraz sitodruku.</p>
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
        		<span class="title-wraper">FOTOGRAFIA</span>
    </section>
   	<a href="fotografia.php" class="box fh col-40 left inner wide dark">
        		<span class="oi" data-glyph="brush" title="Branding & kreajca" aria-hidden="true"></span>
            	<h1>ŚWIATŁO<br>APARAT<br>AKCJA</h1>
                <h4>Każda z realizowanych przez na sesji, czy to w studiu czy plenerze opowiada inną historię. A my lubimy dobre historie!</h4>
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