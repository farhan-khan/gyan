<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Probe</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style1.css" type="text/css" media="screen" />
	 <script type="text/javascript" src="scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.nivo.slider.pack.js"></script>
<style>
.homePage{
line-height:22px;
}

.homePage ul{
list-style:none;
}
.homePage td{
padding:0 0 0 15px;
}
</style>	
</head>
<?php 
$a = '';
$b = '';
$c = '';
$d = '';
$e = '';
$temp = $_SERVER["REQUEST_URI"]; 
if (preg_match("/index/", $temp)) {
    $a = 'class="active"';
} else if (preg_match("/resources/", $temp)) {
    $b = 'class="active"';
} else if (preg_match("/faq/", $temp)) {
    $c = 'class="active"';
} else if (preg_match("/register/", $temp)) {
    $d = 'class="active"';
} else if (preg_match("/registration/", $temp)) {
    $d = 'class="active"';
} else if (preg_match("/contact/", $temp)) {
    $e = 'class="active"';
} else {
    $a = 'class="active"';
}
?>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.php"><img src="images/logo.jpg" alt="logo" width="213" height="62" border="0" /></a></h1>
      </div>
        <?php include_once('menu.php'); ?>
      <div class="clr"></div>
		<?php if($a != '') include_once('slider.php'); else {?>   
        <div><img src="images/slide2.jpg" alt="" width="960" height="180" /></div>
        <?php } ?>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>