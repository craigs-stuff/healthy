<?php include( THEME_DIR_PHP.'header.inc.php'); 


    if ($page->custom('template')) {   
 
            // If a custom template is specified 
            if ($WHERE_AM_I=='page') {
                include(THEME_DIR_PHP.$page->custom('template').'.php');
            } else {
                include(THEME_DIR_PHP.'home.php');
            }   
         
    } else {    
           // If not
            if ($WHERE_AM_I=='page') {
                include(THEME_DIR_PHP.'page.php');
            } else {
                include(THEME_DIR_PHP.'home.php');
            }    
     
    }      


include( THEME_DIR_PHP.'footer.inc.php'); ?>

