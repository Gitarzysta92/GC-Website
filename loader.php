<?php require('template/header.php'); 

//page settings

function contrast(){ echo 'darkbg';}
function animations(){ echo 'animations';}

?>


  
<style>
	body {overflow:hidden; transition: 1s padding ease;}	
	html {height: 100%;}
	#wrap {display: flex; justify-content: flex-end;height: 100%;overflow: hidden; }		
	ul.main-menu li{
		opacity: 0;
	}
</style>

<div class="row vc loader">
     	<h2 id="loader"><span>REKLAMĘ </span><span>TWORZY </span><span>SIĘ W </span><span><b>GRUPIE</b></span></h2>
    </div>

<section id="wrap">
	
</section>    
</main>
<script language="JavaScript" type="text/javascript" src="<?php echo $actual_link ?>/assets/js/slider.js"/></script>

<script>
$(document).ready(function() {
triggerIntro();
setTimeout(function() {
	
	bxwrapperAnimation();
			var slide_index = slider.getCurrentSlide();
			
        // set the starting slide option to our current slide index
		slider_config['startSlide'] = slide_index;
        // reload the slider using our original options, now including the starting slide index
		slider.reloadSlider(slider_config);

		}, 2200);
});
</script>

<?php require('template/footer.php'); ?>