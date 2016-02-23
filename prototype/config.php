<?php

/**********************************/
/* DONT FORGET THE .htaccess FILE */
/**********************************/

$PROTOTYPE_PATH = '/prototype'; // Change the "Prototype Path" to the folder where you put the prototype files. ex. '/prototype'
$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'].$PROTOTYPE_PATH; // Include the $PROTOTYPE_PATH var in the $_SERVER var
$URL_PATH = explode("/",str_replace($PROTOTYPE_PATH,'',$_SERVER['REQUEST_URI']));

$START_PAGE = 'home'; // Set the default page to look for ie. index / welcome / home
$INCLUDE_PATH = $_SERVER['DOCUMENT_ROOT'].'/assets/inc'; // Default include path for pages
$INCLUDE_CORE = $INCLUDE_PATH.'/core'; // Include path for core files
$IMG_PATH = $PROTOTYPE_PATH.'/assets/img/'; // Image path for quick reference
$SITE_URL = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

// PROTOTYPE SPECIFIC VARIABLES - NO NEED TO CHANGE THESE.
$PROTOTYPE_BUTTON = 1; // 0 = don't show; 1 = show prototype and layout button;
$PROTOTYPE_PAGES = array('prototype', 'all', 'styles', 'modules', 'blocks', 'ui', 'layouts'); // Array of pages for the Prototype

// LAYOUTS
// dir for layouts
$LAYOUT_DIR = $INCLUDE_PATH.'/core/layouts/';
$LAYOUTS = array_diff(scandir($LAYOUT_DIR), array('..', '.'));
$LAYOUTS = array_map(function($e){
  return pathinfo($e, PATHINFO_FILENAME);
}, $LAYOUTS);