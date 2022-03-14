<?php 
session_start();
/*
$em = $_SESSION['US_mail'] ;
$fn = $_SESSION['US_fn']   ;
$ln = $_SESSION['US_ln']  ;
$uid = $_SESSION['US_id'];

 $transid = $_SESSION['transid'];

 $busiid = $_SESSION['lastid'];
*/

 include ("../cpanel/link.php");
 
// Count total files
$countfiles = count($_FILES['files']['name']);

// Upload directory
$upload_location = "../uploads/";

// To store uploaded files path
$files_arr = array();

// Loop all files
for($index = 0; $index < $countfiles;$index++)
{

	if(isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != '')
	{
 
 
		$filename = explode(".", $_FILES['files']['name'][$index]);
		
		$new_name = md5(rand()) . '.' . $filename[1];
		
    	// Get extension
        $ext = strtolower(pathinfo($new_name, PATHINFO_EXTENSION));

        // Valid image extension
        $valid_ext = array("png","jpeg","jpg","gif");

        // Check extension
        if(in_array($ext, $valid_ext)){

        	// File path
        	$path = $upload_location.$new_name;

            // Upload file
    		if(move_uploaded_file($_FILES['files']['tmp_name'][$index],$path))
			{
    			
			//	$quer = mysqli_query($link, "INSERT INTO 
			//		   images(`imagename`, `busiid`, `transid`) 
			//		   VALUES('$new_name', '$busiid', '$transid')");
					   
			//$sq = mysqli_query ($link, "UPDATE business SET image = '$new_name'
			//WHERE busiid = '$transid' LIMIT 1" ); 
				
				$files_arr[] = $path;
    		}
        }
    }
			   	
}

echo json_encode($files_arr);
die;

/*
$output = '';
if(is_array($_FILES))
{
	foreach($_FILES['files']['name'] as $name => $value)
	{
		$file_name = explode(",", $_FILES['files']['name'][$name]);
		
		$allowed_ext = array("jpg", "jpeg", "png", "gif"); 
		
		if(in_array($file_name[1], $allowed_ext))
		{
			$new_name = md5(rand()) . '.' . $file_name[1];
			
			$sourcePath = $_FILES['files']['tmp_name'][$name];
			
			$targetPath = "upload_img/".$new_name;
			
			if(move_uploaded_file($sourcePath, $targetPath))
			{
				echo 'success';
			}
		}
	}
}	

*/

?>