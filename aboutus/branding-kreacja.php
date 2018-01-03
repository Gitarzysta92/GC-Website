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
            	<h1>KREACJE<br>POWSTAJĄ<br>W GRUPIE</h1>
                <h4>Każdy produkt zasługuje na spójną i oryginalną identyfikację, nadającą charakter oraz zwiększającą zasięg.</h4>
				<span class="svg slider-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span>
    </section>
    <section id="waypoint" class="box fh row col-1 parallax-window" style="background-color: rgba(30, 5, 23, 0.9);" data-parallax="scroll" data-image-src="<?php echo $actual_link ?>/archive/images/kreacja3.jpg">
    			<section class="box fh col-60 right inner light mobf"></section>
   				<section data-speed="30" data-direction="both" data-trigger="ease-in" class="box fh col-40 left inner wide light scroller ">
            				<h1>COŚ WIĘCEJ <br> NIŻ WNĘTRZE</h1>
                			<h4>Bogate wnęrze zasługuje na odpowiednie opakowanie</h4>
                            <p>Każde z zaprojektowanych przez nas opakowań oddaje niepowtarzalny charakter produktu, a gdy to potrzebne, doda coś od siebie! Sprzedając produkt lub jakiegoś rodzaju usługi zawsze skupiamy się na dopracowaniu go w najmniejszych szczegółach, zostawiąc na drugim planie, tak ważny element jak opakowanie. A właśnie to opakowanie tuż po cenie wpływa na decyzję konsumenta o zakupie.</p>
    			</section>
    </section>
    <section  class="box fh row col-1" style="background-color: #bc2d2d;">
    			<section data-speed="30" data-direction="both" data-trigger="ease-in" class="box fh col-2 right inner light scroller">

            				<h1>ŚNIMY<br>O SPÓJNYCH<br>IDENTYFIKACJACH</h1>
                			<h4>W dzisiejszych czasach bez odpowiedniego, wyrazistego oraz jednolitego przekazu, marki lub nawet całe firmy giną w morzu contentu.</h4>
                            <p>Identyfikacja wizualna, tak jak dobrze napisany biznes plan staje się pewnym drogowskazem. Mapą, która określa wizualną tożsamość biznesu.To podstawowe narzędzie w pracy działu marketingu. Tu nie chodzi o to, co mówisz ludziom o własnej marce. Wizerunek marki, jest tym co mówią o niej ludzie, gdy Ciebie nie ma w pokoju. Jej klienci, pracownicy i akcjonariusze.</p>
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
    <section class="box col-1 dark">
        		<span class="tip-wraper">ZOBACZ TAKŻE</span>
    </section>
    <section id="waypoint-last" class="box fh col-60 right inner dark mobf">
        		<span class="title-wraper">KREACJA<br>& BRANDING</span>
    </section>
   	<a href="#" class="box fh col-40 left inner wide dark">
        		<span class="oi" data-glyph="brush" title="Branding & kreajca" aria-hidden="true"></span>
            	<h1>DIGITAL<br>MARKETING</h1>
                <h4>Już kilka pierwszych sekund decyduje o tym czy użytkownik zostanie na naszej stronie. Wykorzystaj ten czas!</h4>
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