<?php 
session_start();
 include ("../cpanel/link.php");
 $ip = $_SERVER['REMOTE_ADDR'] ; 


  

        $comments =$_POST['comments'];
        $name =$_POST['name']; 
        $uid =$_POST['uid'];
        $email =$_POST['email'];
        $website =$_POST['website'];
        $compname =$_POST['compname'];
        $pid =$_POST['pid'];

 
  
   			        $sdate = date("Y-m-d");
					
					$query = mysqli_query($link, "INSERT INTO 
				 posts(`comments`, `name`, `email`, `website`, `pdate`, `prodid`, `clntid`, `ipaddress`) 
				VALUES('$comments', '$name', '$email', '$website', '$sdate', '$pid', '$uid', '$ip')");
                     		
                if($query)
                       {
                       echo 'Successful' ;
 				 }
					   
  
?>


 