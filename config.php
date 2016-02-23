<?php

  /**********************************/
  /* DONT FORGET THE .htaccess FILE */
  /**********************************/


	$PROTOTYPE_PATH = ''; // Change the "Prototype Path" to the folder where you put the prototype files. ex. '/prototype'
	$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'].$PROTOTYPE_PATH; // Include the $PROTOTYPE_PATH var in the $_SERVER var
	$URL_PATH = explode("/",$_SERVER['REQUEST_URI']); // Default for root directory & building an array from the URL path

	$START_PAGE = 'home'; // Set the default page to look for ie. index / welcome / home
	$INCLUDE_PATH = $_SERVER['DOCUMENT_ROOT'].'/assets/inc'; // Default include path for pages
	$IMG_PATH = $PROTOTYPE_PATH.'/assets/img/'; // Image path for quick reference
	$SITE_URL = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
