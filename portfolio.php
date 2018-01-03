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
		.box.space {
			padding: 10px;
			box-sizing: border-box;
		}
		.box img {
			opacity: 0.5;
			height: 100%;
		}
		.box:hover img {
			opacity: 1;
			height: 100%;
		}
		
		.box {
			overflow: hidden;		
		}
		.square img {
			background-color: #000;
		}
	</style>
    
    <section style="display: block; width:100%; height: 200px;"  class="push"></section>
    

    	<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/alg/awatar.jpg"/></a>
   		<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/asics/awatar.jpg"/></a>
    	<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/code-seven/awatar.jpg"/></a>
   		<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/collins-beach/awatar.jpg"/></a>
    	<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/elcar/awatar.jpg"/></a>
   		<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/gomar/awatar.jpg"/></a>
    	<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/hd3/awatar.jpg"/></a>
    	<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/hotel-airport/awatar.jpg"/></a>
    	<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/manufaktura-smaku/awatar.jpg"/></a>
    	<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/medic-park/awatar.jpg"/></a>
    	<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class=""  src="archive/images/olewnik/awatar.jpg"/></a>
    	<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/oro-polska/awatar.jpg"/></a>
   		<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/ostoja-kampinos/awatar.jpg"/></a>
    	<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/padres-nieruchomosci/awatar.jpg"/></a>
   		<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/puf-polska/awatar.jpg"/></a>
    	<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/swiss-finance/awatar.jpg"/></a>
   		<a href="<?php echo $actual_link; ?>/portfolio/code-seven.php" class="box square space col-5"><img class="" src="archive/images/urzad-miasta-piastow/awatar.jpg"/></a>

    
    
    
    
 
<script>

$(window).on('load', function(){
 menuAnimation();
		logoAnimation();
		boxAnimation();
waypointsAnimation();
});
</script>
</main>
<?php require('template/footer.php'); ?>