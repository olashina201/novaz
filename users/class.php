<?php 
session_start();
$transactionid = $_SESSION['transactionid'] ;
$datetime = $_SESSION['datetime'];
include ("../cpanel/link.php");

	$productid = $_POST["cusorder"];
	$qty = '1';
	$regdate =  date('Y-m-d H:i:s');								
	$flag = 0;
		if(check_order($productid,$transactionid))
		{
		$flag = 1;
		}
		else
		{ 
			echo '<span style="color:red;"> Product found in order</span>' ;
			exit();
		}
         
                 if($flag ==1)
		include ("pricefetch.php");		  
 		
  		$totcost= $qty * $unitprice; //calculating total cost of product purchased
		
  		$query = mysqli_query($link, "INSERT INTO 
		orders(`orderid`, `product`, `quantity`, `unitcost`, `totcost`, `orderdate`, `status`, `cashierid`)
		  VALUES('$transactionid', '$productid', '$qty', '$unitprice', '$totcost', '$datetime', 'open', '12')");
 			if($query)
 			{
		echo '<span style="color:green;"> Successful</span>' ;
			}
			else
			{
			echo mysqli_error($link);
			}
		
 ?>
 <?php 
             function check_order($productid,$transactionid){
                global $link;
                //$open = 'open';
					$check = "SELECT * FROM orders 
					WHERE orderid = '$transactionid' AND product = '$productid' AND status ='open'";
					$doo = mysqli_query($link, $check);
					$row = mysqli_fetch_assoc($doo);
                     if($row > 0 )
                     {
                         return false;									  
                     }
                     else{ 
                     return true;
                     }
            }
 
             
  ?>
