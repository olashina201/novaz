<?php
session_start();

$email = $_SESSION['US_mail'];

$fn = $_SESSION['US_fn'];

$ln = $_SESSION['US_ln'];
$uid = $_SESSION['US_id'];



include("../cpanel/link.php");
$ip = $_SERVER['REMOTE_ADDR'];

$adsid  = $_SESSION['sads'];

$name = $fn . ' ' . $ln;
$money =   $_SESSION['amount'];


$dt = date("Y-m-d");
if ($money == "300") {
	$days = "7";
	$plan = "TOP BEST OFFER";
	$planexpired = date("Y-m-d", strtotime(date("Y-m-d", strtotime($dt)) . " + 7 day"));
} elseif ($money = "14000") {
	$days = "30";
	$plan = "BOOST PREMIUM";
	$planexpired = date("Y-m-d", strtotime(date("Y-m-d", strtotime($dt)) . " + 30 day"));
}

$st = date("H:i:s");

$dts = date("Y-m-d");
$sus = mysqli_query($link, "UPDATE  business
			SET promotion = 'active', promodate = '$dt', expidate = '$planexpired' 
			WHERE id= '$adsid' LIMIT 1");

$query = mysqli_query($link, "INSERT INTO 
			payment(`trnsid`, `pdate`, `custmid`, `amount`, `tname`, `status`, `plan`, `days`, `expidate`) 
			VALUES('$adsid', '$dts', '$uid', '$money', '$name', 'paid', '$plan', '$days', '$planexpired' )");



if ($sus) {
	unset($_SESSION['amount']);
	header("Location: success");
}
