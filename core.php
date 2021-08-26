<?php
	session_start();
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    error_reporting(E_ALL ^ E_NOTICE);

    include ("plugin/config.inc.php");

	// variable declaration
	$username = "";
	$phone    = "";
    $errors   = array();

    include ("plugin/category.inc.php");
    include ("plugin/contact.inc.php");
    include ("plugin/login.inc.php");
    include ("plugin/plugin.inc.php");
    include ("plugin/product.inc.php");
    include ("plugin/sitesetting.inc.php");
    include ("plugin/slider.inc.php");
    include ("plugin/userPower.inc.php");
    include ("plugin/users.inc.php");
    include ("plugin/whatWeDo.inc.php");
?>