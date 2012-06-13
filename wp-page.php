<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<?php include ('inc/header-code.php'); ?>
</head>
<body>
<div id="header">
  <center><div id="nav"><?php wp_nav_menu( array( 'items_wrap' => '%3$s' , 'menu' => 'Main' ) ); ?></center></div>
</div>
<div id="container">
  <div id="leftSidebar"></div>
  <div id="insideContainer">
    <div id="main"><div><?php include('loop.php'); ?></div></div>
    <div id="rightSidebar"><?php include('sidebar.php'); ?></div>
  </div>
  <div id="footer"></div>
</div>
</body>
</html>