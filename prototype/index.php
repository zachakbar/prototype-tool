<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

// include the config file
include 'config.php';

//global $PROTOTYPE_PATH, $SITE_URL, $URL_PATH, $INCLUDE_PATH, $INCLUDE_PATH_PROTOTYPE, $START_PAGE, $IMG_PATH, $PROTOTYPE_PAGES;

// include the incfile script
include $INCLUDE_PATH.'/urlrewrite.php';

// include the header
include $INCLUDE_PATH.'/header.php';

// include the content
$incfile ? include $incfile : '';

// include the footer
include $INCLUDE_PATH.'/footer.php';