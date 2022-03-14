<?php
	session_start();
	
	unset($_SESSION['userlevel']);
	unset($_SESSION['LOGIN_STATUS']);
	unset($_SESSION['email']);
    unset($_SESSION['userid']);
 
	session_destroy();
	
    header("Location: login");
	
?>


