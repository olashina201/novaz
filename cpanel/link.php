<?php
//Database connection variable
$server = "localhost";
$user = "root";
$pass ="";
$dbase  = "novaz";
//connection to the database
	$link = mysqli_connect($server, $user, $pass);
	mysqli_query($link, "SET SESSION sql_mode = ''");
	if(!$link)
{
	$error = "Unable to Connect server";
	include'error.html.php';
	exit();
}

//select the database to use
	if(!mysqli_select_db($link, $dbase))
{
	$error = "Unable to Connect database";
	include'error.html.php';
 	exit();
}
 if(!mysqli_set_charset($link, "utf8"))
	{
	$error = "OOOPs!";
	include'error.html.php';
	exit();
}


?>