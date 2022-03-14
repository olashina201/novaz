<?php 
session_start();

     unset($_SESSION['transid']);
 
 	header("Location: add-listing");
?>