<?php
if(isset($_FILES['memberprofilename']))
{
 $uploadImgDestination = dirname(__FILE__).'/upload/';
 if(!isset($_FILES['memberprofilename']) || !is_uploaded_file($_FILES['memberprofilename']['tmp_name'][0]))
 {
 die('Sorry, Something went wrong with Upload!');
 }
 $RandomNum = rand(98, 9999999999);

 $fileimgNm = str_replace(' ','-',strtolower($_FILES['memberprofilename']['name'][0]));
 $ImageType = $_FILES['memberprofilename']['type'][0];

 $profileFileExt = substr($fileimgNm, strrpos($fileimgNm, '.'));
 $profileFileExt = str_replace('.','',$profileFileExt);

 $fileimgNm = preg_replace("/\.[^.\s]{3,4}$/", "", $fileimgNm);

 $profileName = $fileimgNm.'-'.$RandomNum.'.'.$profileFileExt;

 move_uploaded_file($_FILES['memberprofilename']['tmp_name'][0], "$uploadImgDestination/$profileName");

 $base_path="http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
 $base=$base_path.'/'.'upload/'.$profileName;
 //echo '<img src="'.$base.'">';
 echo 
 "<div id='sucess' class='paakinfo sucess' > Your Profile Successfully uploaded.</div>";
 }
?>