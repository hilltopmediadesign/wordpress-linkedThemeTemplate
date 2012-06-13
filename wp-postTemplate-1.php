<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<?php include ('wp/header-code.php'); ?>
<link rel="stylesheet" href="stylesheet.css" type="text/css">
<script type="text/javascript" src="js/equalize.js"></script>
</head>
<body style="background-color:green;">
<div id="header">
  <div id="nav"><?php wp_nav_menu( array( 'items_wrap' => '%3$s' , 'menu' => 'Main' ) ); ?>
  </div>
</div>
<div id="container">
    <div id="leftSidebar"></div>
    <div id="insideContainer">
    <div id="main"><span class="jclick" onclick="$('#rightSidebar').toggle();">Toggle</span><?php include('wp/pageloop.php'); ?></div>
    <div id="rightSidebar"><?php include('wp/sidebar.php'); ?></div>
    </div>
  <div id="footer"></div>
</div>
</body>
</html>