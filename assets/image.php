<?php
session_start();

$em = $_SESSION['US_mail']   ;
$fn = $_SESSION['US_fn']   ;
$ln = $_SESSION['US_ln']  ;
$uid = $_SESSION['US_id'];

 include ("../cpanel/link.php");
 $ip = $_SERVER['REMOTE_ADDR'] ; 
 
	 $transid = $_SESSION['transid'] ;
     $busiid = $_SESSION['lastid'] ; //exit();

		$dt = mysqli_query($link,"SELECT * FROM  business WHERE busiid ='$transid'
		 AND image ='' ");
		$ftr = mysqli_fetch_array($dt); 
  
   		$goin = 0;
		   $em; 
		   $errors = array();
		   $success = array();	   
if (!$sock = @fsockopen('www.google.com', 80, $num, $error, 5))
{
            echo "<span style='padding:5px;background:#f00;color:#fff'><i class='fa fa-times-circle'></i>Network</span>";
			exit();
}
						
  		$goin = 1;
 				  
 		if($goin ==1)
		{

		$targetDir = "../uploads/";
		
		$dpt = mysqli_query($link,"SELECT * FROM  business ORDER BY id DESC LIMIT 1");
		$dprw = mysqli_fetch_array($dpt); $lastid = $dprw['id'] + 1; 

		
		if(!empty(array_filter($_FILES['myfiles']['name']))){
			foreach($_FILES['myfiles']['name'] as $key=>$val){
				$filename = basename($_FILES['myfiles']['name'][$key]);
				$targetFile = $targetDir.$filename;
				if(move_uploaded_file($_FILES["myfiles"]["tmp_name"][$key], $targetFile)){
					// $success[] = "Uploaded $filename";
					// $insertQrySplit[] = "('$filename')";
					if($ftr)
					{
					 
						$quer = mysqli_query($link, "INSERT INTO 
							   images(`imagename`, `busiid`, `transid`) 
							   VALUES('$filename', '$busiid', '$transid')");
							   
				
						$sq = mysqli_query ($link, "UPDATE business SET image = '$filename'
						WHERE busiid = '$transid' LIMIT 1" ); 
						
						echo 'Done';
					}
					elseif(!$ftr)
					{
						$quer = mysqli_query($link, "INSERT INTO 
							   images(`imagename`, `busiid`, `transid`) 
							   VALUES('$filename', '$busiid', '$transid')");
					    echo 'Done';
					}
				}
				else {
					$errors[] = "Something went wrong- File - $filename";
				}
			}
	
			//Inserting to database
			if(!empty($insertQrySplit)) {
				$query = implode(",",$insertQrySplit);
				$sql = "INSERT INTO upload_images (image) VALUES $query";
				$stmt= $conn->prepare($sql);
				$stmt->execute();
			}
		}
		else {
			$errors[] = "No File Selected";
		}
		// $filename = explode(".", $_FILES["myfiles"]["name"]);
		
		//  $new_name = round(microtime(true)) . '10' . '.' . end($filename);
		
		
		
    	// // Get extension
        // $ext = strtolower(pathinfo($new_name, PATHINFO_EXTENSION));

       
		// 		// File path
		// 		$path = $targetDir.$new_name;
				
		// 		if(move_uploaded_file($_FILES['myfiles']['tmp_name'],$path))
		// 		{
					
		// 			if($ftr)
		// 			{
					 
		// 				$quer = mysqli_query($link, "INSERT INTO 
		// 					   images(`imagename`, `busiid`, `transid`) 
		// 					   VALUES('$new_name', '$busiid', '$transid')");
							   
				
		// 				$sq = mysqli_query ($link, "UPDATE business SET image = '$new_name'
		// 				WHERE busiid = '$transid' LIMIT 1" ); 
						
		// 				echo 'Done';
		// 			}
		// 			elseif(!$ftr)
		// 			{
		// 				$quer = mysqli_query($link, "INSERT INTO 
		// 					   images(`imagename`, `busiid`, `transid`) 
		// 					   VALUES('$new_name', '$busiid', '$transid')");
		// 			    echo 'Done';
		// 			}
		// 		}
 		}

?>