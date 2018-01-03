<?php
$actual_link = "http://$_SERVER[HTTP_HOST]";
$actual_page = "$_SERVER[REQUEST_URI]";


function page(){
    
   $actual_page = "$_SERVER[REQUEST_URI]";
   if ( $actual_page === '/' || $actual_page === 'loader.php') {
   }else {
	   echo 'ready';
	}
	
}





?>
