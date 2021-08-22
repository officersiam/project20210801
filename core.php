<?php
	session_start();
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    error_reporting(E_ALL ^ E_NOTICE);

    include ("plugin/config.inc.php");

	// variable declaration
	$username = "";
	$phone    = "";
    $errors   = array();

?>