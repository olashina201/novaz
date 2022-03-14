<?php 
session_start();

 		$money = $_POST['amount'];
		
		if($_SESSION['amount'] = $money)
		{
			echo 'Good';
		}
 

?>