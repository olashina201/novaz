<?php
//password arshing function			
function rand_string($length) {
		  $str="";
		  $chars = "subinsblogabcdefghijklmanopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		  $size = strlen($chars);
		  for($i = 0;$i < $length;$i++) {
		   $str .= $chars[rand(0,$size-1)];
		  }
		  return $str;
	 }
	  // create key
	  //$password ='default';
	  $user_level = '';
     $psalt = rand_string(20); 
     $app_salt="subinsblogsalt"; /*Common Salt used for password storing on site.*/
     
	 $salted_hash = hash('sha256', $password.$app_salt.$psalt);
		

?>