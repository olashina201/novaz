
<?php include ("cpanel/link.php");


	//fetching records and importing them into client's duration table for use 		
 $queryd = mysqli_query($link,"SELECT id, lga FROM  lgas WHERE state LIKE '%Zamfara%'");
  
 	 while ($row = mysqli_fetch_array($queryd)){	
 	$id = $row['id'];
	$lga = $row['lga'];
	
     $lgasss = $insert_query = mysqli_query($link, "INSERT INTO 
	statelgas (`stateid`, `lga`) 
	VALUES ('37', '$lga')"
	);
	if($lgasss){
		
		echo 'Done';
		}
		else{
			echo mysqli_error($link);
			
			}
	
 	}

?>