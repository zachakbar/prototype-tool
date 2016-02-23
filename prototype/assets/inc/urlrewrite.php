<?php

//global $URL_PATH, $INCLUDE_PATH, $INCLUDE_PATH_PROTOTYPE, $START_PAGE, $PROTOTYPE_PAGES;

// drop empty value - the url path is split by / so the first one is always blank.
$emptyvar = array_shift($URL_PATH);
// define folders with no subfolders
$nosubs = array("");
// create include file name
$incfile = "";

// if is NOT a folder restricted to no subs
if(isset($URL_PATH[0]) && !in_array($URL_PATH[0],$nosubs)){
	// loop array
	foreach($URL_PATH as $uKey=>$udata){
		// add dash if filename not empty
		$usedash = $incfile == "" ? "" : "-";
		// remove spaces, quotes, and slashes (to prevent sql injection)
		$udata = trim(str_replace(array(" ", "'", '"', "\\"), "", urldecode($udata)));
		// if not empty value and not query string
		if($udata != "" && substr($udata,0,1) != "?"){
			$incfile .= $usedash . $udata;
		}
	}
} elseif(isset($URL_PATH[0])) {
	// else make no-sub folder the include
	$incfile = $URL_PATH[0];
}

// set page variables
$pagename = $incfile == "" ? $START_PAGE : $incfile;
$pagetitle = ucwords(str_replace('-', ' ', $pagename));

// add file extension and set the folder path
if (isset($URL_PATH[0]) && !in_array($URL_PATH[0], $PROTOTYPE_PAGES) && !in_array($URL_PATH[0], $LAYOUTS)){
	if($pagename != ""){
		$incfile = $INCLUDE_PATH.'/pages/'.$pagename.".php";
	}
} elseif (isset($URL_PATH[0]) && !in_array($URL_PATH[0], $PROTOTYPE_PAGES) && in_array($URL_PATH[0], $LAYOUTS)) {
	if($pagename != ""){
		$incfile = $INCLUDE_CORE.'/layouts/'.$pagename.".php";
	}
} else {
	// INDIVIDUAL PROTOTYPE PAGES
	if($pagename != ""){
		$incfile = $INCLUDE_CORE.'/prototype/'.$pagename.".php";
	}
}
