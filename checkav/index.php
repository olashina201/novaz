<?php   
session_start(); 
 include ("../cpanel/link.php");

   $typ = $_POST['typ'];

    if($typ == "Prtysearch")
	{
  		$area = strip_tags( $_POST['area']);
 		$status = strip_tags ( $_POST['status']);
		$stype = strip_tags ( $_POST['type']);
   		$goin = 0;
/* 				
if (!$sock = @fsockopen('www.google.com', 80, $num, $error, 5))
{
            echo "<span style='padding:5px;background:#f00;color:#fff'><i class='fa fa-times-circle'></i>Check your internet connection! </span>";
			exit();
}
*/						
  		 
  					$queryf  = mysqli_query($link, "SELECT * FROM business
					 WHERE address LIKE '%$area%' AND purpose = '$status' AND cate = '$stype' 
 					 AND promotion = 'active' ");
 					if(mysqli_fetch_assoc($queryf))
					{  
						$_SESSION['area'] = $area;
						$_SESSION['status'] = $status;
						$_SESSION['stype'] = $stype;
						echo 'Successful';
			         
			 
					}
					else
					{ 
						echo "Not";
					}
				
		 
	}
?>


