<!doctype html>

<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<title>Bigfish Prototype Resource</title>

<meta name="description" content="">

<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="cleartype" content="on">


<link rel="stylesheet" href="<?php echo $PROTOTYPE_PATH; ?>/assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $PROTOTYPE_PATH; ?>/assets/css/layout.css">
<link rel="stylesheet" href="<?php echo $PROTOTYPE_PATH; ?>/assets/css/styles.css">
<link rel="shortcut icon" href="<?php echo $PROTOTYPE_PATH; ?>/favicon.ico">

<?php /* <script src="<?php echo $PROTOTYPE_PATH; ?>/assets/js/modernizr-min.js"></script> */ ?>

</head>

<body>

<div id="page_patterns" class="container">
  
  <?php if (isset($URL_PATH[0]) && !in_array($URL_PATH[0], $PROTOTYPE_PAGES) && ($START_PAGE != 'prototype')){ ?>
  
    <?php include $INCLUDE_CORE.'/blocks/header.php'; ?>
    
    <?php if ($PROTOTYPE_BUTTON == 1){ ?>
      <div class="layouts_btn launch_btn"><a href="javascript:void(0);" target="_blank" title="Layouts"><i class="fa fa-file-text-o fa-2x"></i></a></div>
      <div id="prototype_btn" class="launch_btn"><a href="<?php echo $PROTOTYPE_PATH; ?>/all/" target="_blank" title="Prototype"><i class="fa fa-file-code-o fa-2x"></i></a></div>
    <?php } ?>
    
  <?php } else { ?>
  
  	<header role="banner">
  		<div class="wrap">
  			<a class="logo" href="<?php echo $PROTOTYPE_PATH; ?>/"><img src="<?php echo $IMG_PATH; ?>logo.png" alt="Bigfish Prototype" /></a>
  			<a href="javascript:void(0);" class="menu_link fa fa-chevron-circle-down">&nbsp;Menu</a>
  			<nav class="menu" role="navigation">
  				<ul>
  					<li><a <?php echo $pagename == 'all' ? 'class="active"' : ''; ?> href="<?php echo $PROTOTYPE_PATH; ?>/all/">All</a></li>
  					<li><a <?php echo $pagename == 'styles' ? 'class="active"' : ''; ?> href="<?php echo $PROTOTYPE_PATH; ?>/styles/">Styles</a></li>
  					<li><a <?php echo $pagename == 'modules' ? 'class="active"' : ''; ?> href="<?php echo $PROTOTYPE_PATH; ?>/modules/">Modules</a></li>
  					<li><a <?php echo $pagename == 'ui' ? 'class="active"' : ''; ?> href="<?php echo $PROTOTYPE_PATH; ?>/ui/">UI</a></li>
  					<li><a <?php echo $pagename == 'blocks' ? 'class="active"' : ''; ?> href="<?php echo $PROTOTYPE_PATH; ?>/blocks/">Blocks</a></li>
  					<li><a href="javascript:void(0);" class="layouts_btn">Layouts</a></li>
  				</ul>
  			</nav>
  		</div>
  	</header>
  	
  <?php } ?>