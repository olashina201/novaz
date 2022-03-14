<?php 
session_start();

 $regid = $_GET['r'];

$_SESSION['referrer'] = $regid;

header('location: register');
?>

