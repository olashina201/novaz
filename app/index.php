<?php 
session_start();
 include ("../cpanel/link.php");
 $ip = $_SERVER['REMOTE_ADDR'] ; 


  

        $fname =$_POST['fname'];
        $lname =$_POST['lname']; 
        $eml =$_POST['email'];
        $password =$_POST['password'];
        $conpass =$_POST['confirmpass'];
        $compname = $_POST['compname'];
        $phone = $_POST['phone'];
		$photo = $_FILES['photo']['name'];

 
        $flag =0;
          if($password != $conpass)
         {
            echo 'Miss'; exit();

         }
		                       
         $query = mysqli_query($link, "SELECT * FROM  `user` WHERE email ='$eml'");
         $row = mysqli_fetch_array($query);

        
         if($row > 0)
         {
             echo 'Exist'; exit();
         }
         else
         {
             $flag =1;
         }
                                     
                if($flag ==1)
				{
                    $targetDir = "../upreg/";
                    $dpt = mysqli_query($link,"SELECT * FROM  user ORDER BY id DESC LIMIT 1");
                    $dprw = mysqli_fetch_array($dpt); $lastid = $dprw['id'] + 1; 

                   // $uname = $fn. ' '. $ln; 	  
 	
	
 
                    $tphoto = explode(".", $_FILES["photo"]["name"]);
                    $phon = round(microtime(true)) . '1' . $lastid. '.' . end($tphoto);
                    $phont = $targetDir . $phon;
                   // echo $phon; exit();
                    move_uploaded_file($_FILES["photo"]["tmp_name"], $phont);

                    //including password ashing script
                      include('../users/user.php');
        
 			        $sdate = date("Y-m-d");
					$query = mysqli_query($link, "INSERT INTO 
					user(`email`, `psalt`, `password`, `user_level`, `fname`, `lname`, `status` , 
                    `systemip`, `signupdate` , `uimg`, `compname` , `phone` ) 
					VALUES('$eml', '$psalt', '$salted_hash', '2', '$fname', '$lname', '0', 
                    '$ip', '$sdate', '$phont', '$compname', '$phone' )");
                     		
                       if($query)
                       {
                           echo 'Successful' ;
 					   }
					   else
					   {
                           echo mysqli_error($link);
                       }
                }
    

  
?>


 