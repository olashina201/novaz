<?php
 session_start();
 	//Software developed by Wilcomsoft Enterprises

include("../cpanel/link.php");
 // Include the database configuration file
$uml =  $_SESSION['US_mail'] ; 

$statusMsg = '';
$backlink = ' <a href="profile">Go back</a>';

// File upload path
$targetDir = "../upreg/";
//$filename = basename($_FILES["one"]["name"]);
 
//	$one = basename($_FILES["file"]['name']);

$temp = explode(".", $_FILES["file"]["name"]);
 $one = round(microtime(true)) . '1' . '.' . end($temp); 
$tone = $targetDir . $one; 

move_uploaded_file($_FILES["file"]["tmp_name"], $tone);
	 

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"]))
{
  
                // Insert image file name into database
                $insert = mysqli_query($link, "UPDATE user SET uimg = '$one' WHERE email ='$uml' ");
                if($insert)
                {
                echo "<script>location.href='profile';</script>";
 				}
                 else
                {
					//echo mysqli_error($link);
                    echo '<script> alert("Image saving failed"); location.href="profile";</script>';
                } 
            
      
       
 }
else
{
    echo '<script> alert("Please select an image for upload"); location.href="profile" </script>';
}

// Display status message
echo $statusMsg;
?>