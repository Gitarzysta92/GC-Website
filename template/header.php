<?php require_once($_SERVER['DOCUMENT_ROOT'].'/core/relations.php');?>
<!doctype html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="" />
<meta name="keywords" content=".">
<link rel="shortcut icon" href="<?php echo $actual_link ?>/archive/images/favicon.png" type="image/png">
<title>Grupa Creative</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
<link rel="stylesheet" type="text/css" href="<?php echo $actual_link ?>/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo $actual_link ?>/assets/css/animations.css">
<link rel="stylesheet" type="text/css" href="<?php echo $actual_link ?>/assets/css/jquery.bxslider.css">
<link href="<?php echo $actual_link ?>/assets/css/open-iconic.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i,900&amp;subset=latin-ext" rel="stylesheet">
<script language="JavaScript" type="text/javascript" src="<?php echo $actual_link ?>/assets/js/jquery-3.2.1.min.js"/></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $actual_link ?>/assets/js/jquery.bxslider.js"/></script>
<script language="JavaScript" type="text/javascript" src="<?php echo $actual_link ?>/assets/js/jquery.cookie.js"/></script>

</head>
<body class="<?php page();?> <?php  animations(); ?>">

<span class="border-top"></span>
<span class="border-bottom"></span>

<main id="mouseevent" class="<?php  contrast(); ?>">
	<a href="<?php echo $actual_link; ?>/index.php">
	<div class="corner-logo">
		<?php echo file_get_contents($actual_link.'/archive/images/logo-signet.svg'); ?><span>grupa creative</span>
    </div>
    <div class="sticky-logo">
		<?php echo file_get_contents($actual_link.'/archive/images/logo-signet.svg'); ?>
    </div>
	</a>
	<div onclick="mobile_nav()" class="mobile_toggle close_toggle once">
        	<span></span>
    </div>
    <div onclick="sticky_nav()" class="sticky_toggle">
        	<span></span>
    </div>
    <ul id="menu" class="main-menu">
    	<li class="sub"><a href="<?php echo $actual_link; ?>/aboutus.php">poznaj nas</a>
        	<ul class="sub-menu">
            	<li><?php echo file_get_contents($actual_link.'/archive/images/pointer.svg'); ?><a href="/aboutus/branding-kreacja.php">Branding & kreajca</a></li>
                <li><?php echo file_get_contents($actual_link.'/archive/images/pointer.svg'); ?><a href="/aboutus/digital-marketing.php">Digital marketing</a></li>
                <li><?php echo file_get_contents($actual_link.'/archive/images/pointer.svg'); ?><a href="/aboutus/reklama-poligrafia.php">Reklama & poligrafia</a></li> 
                <li><?php echo file_get_contents($actual_link.'/archive/images/pointer.svg'); ?><a href="/aboutus/fotografia.php">Fotografia</a></li>
                <li onclick="back_nav()" class="svg back-arrow"><?php echo file_get_contents($actual_link.'/archive/images/arrow.svg'); ?></span></li>
            </ul>
        </li>
        <li><a href="<?php echo $actual_link; ?>/portfolio.php">portfolio</a></li>
        <li><a href="<?php echo $actual_link; ?>/contact.php">kontakt</a></li>
        <li class="social separator"><?php echo file_get_contents($actual_link.'/archive/images/fb.svg'); ?></li>
        <li class="social"><?php echo file_get_contents($actual_link.'/archive/images/bh.svg'); ?></li> 
    </ul>
    
    <div class="information">
    	<?php echo file_get_contents($actual_link.'/archive/images/cookie.svg'); ?>
        <span><strong>Uprzedzamy że nasza witryna lubi Ciasteczka.</strong><br>
			  Jeżeli nie zgadzasz się na zapis tego typu plików 
              na twoim urządzeniu, zmień ustawienia przeglądatki.
        </span>
        <div onclick="crossbar_close()" class="cancel_information button close_toggle open">
        	<span></span>
        </div>
    </div>
   