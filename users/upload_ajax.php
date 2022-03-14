<?php
session_start();
$em = $_SESSION['US_mail'] ;
$fn = $_SESSION['US_fn']   ;
$ln = $_SESSION['US_ln']  ;
$uid = $_SESSION['US_id'];

 $transid = $_SESSION['transid'];

 $busiid = $_SESSION['lastid'];

 include ("../cpanel/link.php");

        $dts = $_POST['dts'];
		$ttt = explode(',',$dts);
		$others_image_last='';
		$image_link="./uploads/"; //folder name
		
		for($i=0; $i<sizeof($_FILES['upload_files']['name']); $i++) {
		if (in_array($i+1, $ttt)){}else{	 
	    $new_file = md5(microtime());
		$image_type = $_FILES["upload_files"]["type"][$i];
		$image_name = $_FILES["upload_files"]["name"][$i];
		$image_error = $_FILES["upload_files"]["error"][$i];
		$image_temp_name = $_FILES["upload_files"]["tmp_name"][$i];
		if (($image_type == "image/jpeg") || ($image_type == "image/png") || ($image_type == "image/pjpeg") || ($image_type == "image/jpg")) {
			$test = explode('.', $image_name);
			$name = $new_file.'.'.end($test);
			$url = '.'.$image_link. $name;
			$info = getimagesize($image_temp_name);
			if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($image_temp_name);
			elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($image_temp_name);
			elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($image_temp_name);
			imagejpeg($image,$url,80);
			
			 $quer = mysqli_query($link, "INSERT INTO 
					   images(`imagename`, `busiid`, `transid`) 
					   VALUES('$name', '$busiid', '$transid')");
					   
			$sq = mysqli_query ($link, "UPDATE business SET image = '$name'
			WHERE busiid = '$transid' LIMIT 1" ); 
		} 
		echo $name;
		/****** insert query here ******/
		}
		    
			
		}
			
?>