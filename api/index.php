<?php 
session_start();
 include ("../cpanel/link.php");
 $ip = $_SERVER['REMOTE_ADDR'] ; 


    $typ = $_POST['typ'];
 
    if($typ == "Register")
	{ 

        $fname =$_POST['fname'];
        $fname =$_POST['lname'];
        $eml =$_POST['email'];
        $password =$_POST['pas'];
        $conpass =$_POST['conpass'];
        $compname =$_POST['compname'];
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

                    echo "Ok";
		  	 		  
 	
	
 
                    $tphoto = explode(".", $_FILES["photo"]["name"]);
                    $phon = round(microtime(true)) . '1' . $lastid. '.' . end($tphoto);
                    $phont = $targetDir . $phon;
                    echo $compname; exit();
                    move_uploaded_file($_FILES["photo"]["tmp_name"], $phont);

                    //including password ashing script
                      include('../users/user.php');
        
 			        $sdate = date("Y-m-d");
					$query = mysqli_query($link, "INSERT INTO 
					user(`email`, `psalt`, `password`, `user_level`, `fname`, `lname`, `status` , 
                    `systemip`, `signupdate` , `uimg`, `compname` ) 
					VALUES('$eml', '$psalt', '$salted_hash', '2', '$fname', '$lname', '0', 
                    '$ip', '$sdate', '$phont', '$compname' )");
                     		
                       if($query)
                       {
                           echo 'Successful' ;
 					   }
					   else
					   {
                           echo mysqli_error($link);
                       }
                }
    }
	

    if($typ=="Login")
	{
		//$user_name = $_POST['user_name'];
		$uemail = trim($_POST['eml']);
		$password = trim($_POST['pwd']);
							 
					$stmt = mysqli_query($link, "SELECT * FROM user WHERE email = '$uemail'");
					$row = mysqli_fetch_assoc($stmt);
					 if($row)
					 {
					//fetching rows to hash password
						$pswd =	$row['password'];
						$psalt =$row['psalt'];
						$site_salt="subinsblogsalt"; /*Common Salt used for password storing on site.*/
						$salted_hash = hash('sha256', $password.$site_salt.$psalt);
 						
						if($pswd ==$salted_hash)			
							{
                                $_SESSION['LOGIN_STATE']=true;
                                $_SESSION['US_mail'] =$row['email']  ;
                                $fname = $_SESSION['US_fn'] =$row['fname']  ;
                                $lname= $_SESSION['US_ln'] = $row['lname']  ;
                                $_SESSION['US_id'] = $row['id'];
                                $_SESSION['US_lv'] = $row['user_level'];

                                $em = $_SESSION['US_mail']   ;
                                $fn = $_SESSION['US_fn']   ;
                                $ln = $_SESSION['US_ln']  ;	
                               
                                echo "Successful";	
                            }
							else
							{
            echo "<span style='padding:5px;background:#f00;color:#fff'><i class='fa fa-times-circle'></i> Incorrect</span>";
 							}
					 }
					 else
					 {
            echo "<span style='padding:5px;background:#f00;color:#fff'><i class='fa fa-times-circle'></i> Wrong Email Address</span>";
					 }
 	}

    if($typ=="Delete")
	{

		$diags = trim($_POST['diags']);
 							 
					$stmt = mysqli_query($link, "DELETE FROM business WHERE id = '$diags'");
 					 if($stmt)
					 {
  						echo "Ok";
						exit();
					 }
					 
					  
 	}



?>


<?php 
             function check_uname($uname){
                global $link;
                //$open = 'open';
                     $query  = "SELECT * FROM `user` WHERE uname = '$uname'";
                    $run = mysqli_query($link, $query) or die(mysqli_error());
                    $row  = mysqli_fetch_assoc($run);
                    $count = mysqli_num_rows($run);
                     if($row > 0 )
                     {
                     
                         return false;									  
                     }
                     else{ 
                     return true;
                     }
            }
			  function check_refname($refname){
                global $link;
                //refname does not exist;
                     $query  = "SELECT * FROM `user` WHERE referalcode = '$refname'";
                    $run = mysqli_query($link, $query) or die(mysqli_error());
                    $row  = mysqli_fetch_assoc($run);
                    $count = mysqli_num_rows($run);
                     if(!$row)
                     {
                          return false;									  
                     }
                     else{ 
                     return true;
                     }
            }
			
	 
			  function check_pswconfirm($password,$conpass){
                 //refname does not exist;
                     
                     if($password != $conpass)
                     {
                          return false;									  
                     }
                     else{ 
                     return true;
                     }
            }

             function check_email($email){
                global $link;
                //$open = 'open';
                     $query  = "SELECT * FROM `user` WHERE email = '$email'";
                    $run = mysqli_query($link, $query) or die(mysqli_error());
                    $row  = mysqli_fetch_assoc($run);
                    $count = mysqli_num_rows($run);
                     if($row > 0 )
                     {
                     
                         return false;									  
                     }
                     else{ 
                     return true;
                     }
            }
            
            function side_check($uname,$side){
                global $link;
                     $query  = mysqli_query($link, "SELECT * FROM `tree` WHERE userid = '$uname' ");
                    $result  = mysqli_fetch_array($query);
                    $side_value = $result[$side];
                     if($side_value == '')
                     {
                         return true;									  
                     }
                     else{ 
                         return false;
                     }
            }
        
            function income($uname){
                global $link;
                $data = array();
                     $query  = mysqli_query($link, "SELECT * FROM `income` WHERE `userid` = '$uname' ");
                    $result  = mysqli_fetch_array($query);
                    $data['day_bal'] =$result['day_bal'];
                    $data['current_bal'] =$result['current_bal'];
                    $data['total_bal'] =$result['total_bal'];
            }
        
            function tree($uname){
                global $link;
                $data = array();
                     $query  = mysqli_query($link, "SELECT * FROM `tree` WHERE `userid` = '$uname' ");
                    $result  = mysqli_fetch_array($query);
                    $data['left'] =$result['left'];
                    $data['right'] =$result['right']; 
                    $data['leftcount'] =$result['leftcount'];
                    $data['rightcount'] =$result['rightcount'];
                    
            }
            function getUnderUserId($uname){
                global $link;
                     $query  = mysqli_query($link, "SELECT * FROM `user` WHERE `uname` = '$uname' ");
                    $result  = mysqli_fetch_array($query);
                return $result['referalcode'];
            }
    function getUnderIdSide($uname){
                global $link;
                     $query  = mysqli_query($link, "SELECT * FROM `user` WHERE `uname` = '$uname' ");
                    $result  = mysqli_fetch_array($query);
                return $result['side'];
            }
	
 ?>