<?php    
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
            echo '<span style="padding:5px;color:#084; font-size: 20px;"><i class="fa fa-check-circle"></i> Search match found! Click </spa>';
			?>
			<a href="search-show?area=<?php echo $area;?>&status=<?php echo $status;?>&ptype=<?php echo $stype;?>"> Continue  </a> 
           <?php 			
			}
					else
					{ 
						echo "<center> <h3 style='color:red; text-align:center; font-size: 20px;'>No match found with your selections </h3></center>";
					}
				
		 
	}
?>