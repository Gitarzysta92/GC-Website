<?php require('template/header.php'); 


//page settings

function contrast(){ echo 'darkbg';}
function animations(){ echo 'animations';}


?>
  
<style>
	body {overflow:hidden;}
	html {height: 100%;}
	#wrap {display: flex; justify-content: flex-end;height: 100%;overflow: hidden;}	
</style>

  
<section id="wrap">

    <ul id="bxslider" class="bxslider">
  		<li data-idx="0">
        	<a href="#" class="slider-inner">
            	<h1>KREACJE<br>POBUDZAJĄCE<br>EMOCJE</h1>
                <h4>Tworzymy spójne identyfikacje graficzne oraz projekty opakowań, odpowiadające potrzebom konsumenta.</h4>
				<span class="svg slider-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span>
            </a>
            <div class="slider-spreader">
                <video id="v3" src="archive/videos/design.mp4" poster="<?php echo $actual_link ?>/archive/images/vid-design.jpg" loop muted></video>
            </div>    
        </li>
        <li data-idx="1">
        	<a href="#"class="slider-inner">
            	<h1>NIECH STRONA<br>ZACZNIE<br>ZARABIAĆ</h1>
                <h4>Już kilka pierwszych sekund decyduje o tym czy użytkownik zostanie na naszej stronie. Wykorzystaj ten czas!</h4>
				<span class="svg slider-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span>
            </a>
        	<div class="slider-spreader">
        		<video id="v2" src="archive/videos/code.mp4" poster="<?php echo $actual_link ?>/archive/images/vid-code.jpg" loop muted></video>
            </div>   
        </li>
        <li data-idx="2">
        	<a href="#" class="slider-inner">
            	<h1>DRUK<br>I REKLAMA<br>ZEWNĘTRZNA</h1>
                <h4>Dukujemy wszystko co nam wejdzie w ręce, od małych ulotek a5 do kilkumetrowych reklam wielkoformatowych.</h4>
				<span class="svg slider-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span>
            </a>
        	<div class="slider-spreader">
             	<video id="v1" src="archive/videos/printer.mp4" poster="<?php echo $actual_link ?>/archive/images/vid-printer.jpg" loop muted></video>   
            </div>   
        </li>
        <li data-idx="3">
        	<a href="#" class="slider-inner">
            	<h1>ŚWIATŁO,<br>APARAT, AKCJA!<br></h1>
                <h4>Każda z realizowanych przez na sesji, czy to w studiu czy plenerze opowiada inną historię. A my lubimy dobre historie!</h4>
                <span class="svg slider-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span>
            </a>
        	<div class="slider-spreader">
        		<video id="v4" src="archive/videos/photo.mp4" poster="<?php echo $actual_link ?>/archive/images/vid-photo.jpg" loop muted></video>
            </div>   
        </li>
	</ul>
    
    <div id="bx-pager" class="bx-pager">
    <ul>
        <a data-slide-index="0" href=""><li class="oi" data-glyph="brush" title="Branding & kreajca" aria-hidden="true"><span>Branding & kreajca</span></li></a>
        <a data-slide-index="1" href=""><li class="oi" data-glyph="globe" title="Reklama & poligrafia" aria-hidden="true"><span>Digital marketing</span></li></a>
        <a data-slide-index="2" href=""><li class="oi" data-glyph="print" title="Digital marketing" aria-hidden="true"><span>Reklama & poligrafia</span></li></a>
        <a data-slide-index="3" href=""><li class="oi" data-glyph="camera-slr" title="Fotografia" aria-hidden="true"><span>Fotografia</span></li></a>
    </ul>
	</div>
</section>
</main>
<script language="JavaScript" type="text/javascript" src="<?php echo $actual_link ?>/assets/js/slider.js"/></script>
<script>
$(window).on('load', function(){
	initSlider();
	menuAnimation();
	bxwrapperAnimation();
	pagerAnimation();
	logoAnimation();
});
</script>
<?php require('template/footer.php'); ?>