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
	<section data-speed="10" data-direction="upper" data-trigger="upper" class="box fh col-40 right inner wide dark scroller custom1 unload">
        		<!--<span class="oi" data-glyph="brush" title="Branding & kreajca" aria-hidden="true"></span>-->
            	<h1>STRONY<br>REALIZUJĄCE<br>TWOJE CELE</h1>
                <h4>Tworzymy strony które nie tylko ładnie wyglądają ale także pracują na Twój sukces!</h4>
				<span class="svg slider-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span>
    </section>
	<section id="owl" data-speed="20" data-direction="down" data-trigger="ease-in" class="box fh col-60 left inner dark scroller mobf unload">
        		<span class="title-wraper" style="width: 100%;">
                	<?php echo file_get_contents($actual_link.'/archive/images/digital.svg'); ?>
                </span>
    </section>
     <section id="waypoint-third" class="box fh row col-1 parallax-window"  style="background-color: rgba(30, 5, 23, 0.9); " data-parallax="scroll" data-image-src="<?php echo $actual_link ?>/archive/images/digital3.jpg">
    		<section class="box fh col-2" style="overflow: hidden;">
                	<img width="50%" style="opacity: 1; margin: 0 auto;" src="<?php echo $actual_link ?>/archive/images/digital5.png"/>
                </section>
    			<section data-speed="10" data-direction="down" data-trigger="ease-in" class="box fh col-2 left inner light scroller">

            				<h1>PRZEKONAJ<br>SWOICH KLIENTÓW</h1>
                			<h4>Już kilka pierwszych sekund decyduje o tym czy potencjalny klient zostanie na naszej stronie. Wykorzystaj ten czas!</h4>
                            <p>Co robi Twój klient gdy twoja strona ładuje się zbyt długo? Najpewniej odwiedza właśnie stronę Twojej konkurencji. Niestety, ten sam ruch wykonuje także kiedy nie może znaleźć potrzebnej mu informacji lub gdy odbiór zakłócają mu popularne dzisiaj wodotryski. Projektując Twoją stronę www na pierwszym miejscu stawiamy na funkcjonalność oraz czytelność, tak aby każdy potencjalny klient mógł uzyskać potrzebne mu informacje, bez zbędnego szukania.</p>
    			</section>
    </section>
    <section id="waypoint-second" class="box fh row col-1">
    			<section data-speed="10" data-direction="down" data-trigger="ease-in" class="box fh col-2 right inner dark scroller">

            				<h1>TWOJA STRONA<br>BĘDZIE ZARABIAĆ</h1>
                			<h4>Zwiększ zasięg swojej firmy z wykorzystaniem nowoczesnych technologii.</h4>
                            <p>Dobra strona internetowa to tylko wierzchołek góry lodowej. Internet to potężne narzędzie które oferuje znacznie więcej możliwości niż tylko prezentowanie swojej oferty na stronie www. Dlatego w naszej ofercie, prócz tworzenia stron internetowych znajduje się takżę: </p>
                            <ul class="employees">
                                <li style="background-image: url('<?php echo $actual_link ?>/archive/images/av2.jpg');">
                                	<div>Michał Łukasiewicz<br><span class="oi" data-glyph="envelope-closed" title="Email" aria-hidden="true"></span>michal@grupacreative.pl</div>
                                </li>
                                <li style="background-image: url('<?php echo $actual_link ?>/archive/images/av3.jpg');">
                                	<div>Michał Dutkiewicz<br><span class="oi" data-glyph="envelope-closed" title="Email" aria-hidden="true"></span>michal.d@grupacreative.pl</div>
                                </li>
                            </ul>
    			</section>
                <section class="box fh col-2" style="overflow: hidden;">
                	<img width="50%" style="opacity: 1; margin: 0 auto;" src="<?php echo $actual_link ?>/archive/images/digital5.png"/>
                </section>			
    </section>
     <section id="waypoint" class="box fh col-1 parallax-window" style="background-color: rgba(188, 45, 45, 0.9); overflow: hidden;" data-parallax="scroll" data-image-src="<?php echo $actual_link ?>/archive/images/digital2.jpg">
     			<section  style="top: 34%;" class="box col-1 center light">
            				<h1>SPRAWDŹ NASZE<br>REALIZACJE</h1>
                			<h4>Bogate wnęrze zasługuje na odpowiednie opakowanie</h4>
                          	<a class="button" href="">NASZE REALIZACJE</a>
    			</section>
    		<img class="scroller" data-speed="30" data-direction="upper" data-trigger="upper" width="70%" style="position: relative;top: 70%;margin: 0 auto;" src="<?php echo $actual_link ?>/archive/images/digital4.jpg"/>	
    </section>
   
    <section id="waypoint-last" class="box col-1 dark">
        		<span class="tip-wraper">ZOBACZ TAKŻE</span>
    </section>
    <section class="box fh col-60 right inner dark mobf">
        		<span class="title-wraper">REKLAMA<br>&POLIGRAFIA</span>
    </section>
   	<a href="reklama-poligrafia.php" class="box fh col-40 left inner wide dark">
        		<span class="oi" data-glyph="brush" title="Branding & kreajca" aria-hidden="true"></span>
            	<h1>REKLAMA<br>& POLIGRAFIA</h1>
                <h4>Kontakt klienta z reklamą  trwa tylko kilka sekund, wykorzystaj ten czas i przykuj jego uwagę. </h4>
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