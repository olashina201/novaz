<?php 
session_start();
include("../cpanel/link.php");
$uml =  $_SESSION['US_mail'] ;
    $typ = $_POST['typ'];
 
if($typ =="Pas")
{
      $password =  strip_tags($_POST['password']);
      $confirmpass =  strip_tags($_POST['confirmpass']);
            //echo $password; exit();

            include('../users/user.php');

                 $qry  = mysqli_query($link, "UPDATE user SET psalt ='$psalt', password ='$salted_hash'  
                 WHERE email = '$uml'");
                 if($qry)
                 {
                    echo "Good";
                 } 
                
}

if($typ =="Nam")
{
      $fname =  strip_tags($_POST['fname']);
      $lname =  strip_tags($_POST['lname']);
      $phone =  strip_tags($_POST['phone']);
            //echo $password; exit();

             

                 $qry  = mysqli_query($link, "UPDATE user SET fname ='$fname', lname ='$lname', 
                 phone = '$phone'  
                 WHERE email = '$uml'");
                 if($qry)
                 {
                     echo "<span style='padding:5px;color:green;'>Good</span>";
                 } 
                 
}


?>
