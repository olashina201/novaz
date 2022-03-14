<?php
session_start();

$em = $_SESSION['US_mail'] ;
$fn = $_SESSION['US_fn']   ;
$ln = $_SESSION['US_ln']  ;
$uid = $_SESSION['US_id'];

 include ("../cpanel/link.php");
 $ip = $_SERVER['REMOTE_ADDR'] ; 
 
      
		$cate = strip_tags( $_POST['category']);
		$purpose = strip_tags( $_POST['purpose']);
		$description = strip_tags ( $_POST['description']);
		$country = strip_tags( $_POST['country']);
		$state = strip_tags( $_POST['state']);
		$lga = strip_tags( $_POST['lga']);
  		$address = strip_tags ( $_POST['address']);
		$estname = strip_tags( $_POST['estname']);
		$psize = strip_tags( $_POST['psize']);
		$pspace = strip_tags( $_POST['pspace']);
		$ptype = strip_tags( $_POST['ptype']);
		$condition = strip_tags( $_POST['condition']);
		$furnishing = strip_tags( $_POST['furnishing']);

		$broom = strip_tags($_POST['broom']);
		$batroom = strip_tags( $_POST['batroom']);
		$toilet = strip_tags( $_POST['toilet']);
		$price = strip_tags ( $_POST['price']);
		$negotiate = strip_tags ( $_POST['negotiate']);	

		$elec = strip_tags($_POST['electricity']);
		$air = strip_tags( $_POST['aircondition']);
		$apart = strip_tags( $_POST['apartment']);
		$balcony = strip_tags ( $_POST['balcony']);
		$chan = strip_tags ( $_POST['chandelier']);	
		$dinning = strip_tags( $_POST['dinningarea']);
		$dishwash = strip_tags( $_POST['dishwasher']);

		$hotwater = strip_tags( $_POST['hotwater']);
		$kitcab = strip_tags ( $_POST['kitchencabinet']);
		$micro = strip_tags ( $_POST['microwave']);	
		$pop = strip_tags( $_POST['popceiling']);
		$batroom = strip_tags( $_POST['batroom']);
		$prepa = strip_tags( $_POST['prepaidmeter']);
		//echo $prepa; exit();
		$frid = strip_tags ( $_POST['refrigerator']);
		$floor = strip_tags ( $_POST['tilefloor']);	
		$tv = strip_tags( $_POST['tv']);
		$war = strip_tags( $_POST['wardrobe']);
		$wifi = strip_tags( $_POST['wifi']);
		$shelf = strip_tags( $_POST['kitchenshelf']);

   		$goin = 0;
		   $em; 
/* 		
if (!$sock = @fsockopen('www.google.com', 80, $num, $error, 5))
{
            echo "<span style='padding:5px;background:#f00;color:#fff'><i class='fa fa-times-circle'></i>Check your internet connection! </span>";
			exit();
}
*/						
  		$goin = 1;
 				  
 	if($goin ==1)
	{

		$targetDir = "../uploads/";
		$dpt = mysqli_query($link,"SELECT * FROM  business2 ORDER BY id DESC LIMIT 1");
		$dprw = mysqli_fetch_array($dpt); $lastid = $dprw['id'] + 1 ; 
		
		@session_start();
		$_SESSION['lastid'] = $lastid;
		echo $lastid; exit();
		$uname = $fn. ' '. $ln; 

		
					$dt = date("Y-m-d");
					$st = date("H:i:s");
					$query = mysqli_query($link, "INSERT INTO 
					business2(`imagepath` , `cate`, `purpose`, `catedescript`, `country`, `state`, `lga`, `address`, `estname`, `psize`, 
					`pspace`, `ptype`, `condition`, `furnit`, `broom`, `batroom`, `toilet`, `price`, `negotiable`, 
					`elec`, `aric`, `appart`, `bal`, `chan`, `dinning`, `dish`, `hot`, `kitchen`, `micro`, `pop`, 
					`prepa`, `frid`, `floor`, `tv`, `war`, `wifi`, `shelf`, `sumnitdate`, `time`, `uemail`, `systemip`, 
					`status`, `uname`, `uid`, `promotion`, `promodate`, `expidate`, `busiid`) 
					VALUES('$lastid', '$cate', '$purpose',  '$description', '$country', '$state', '$lga', '$address',	'$estname', '$psize', 
					'$pspace', '$ptype', '$condition', '$furnishing', '$broom', '$batroom',	'$toilet', '$price', '$negotiate', 
					'$elec', '$air', '$apart', '$balcony', '$chan', '$dinning', '$dishwash', '$hotwater', '$kitcab', 
					'$micro', '$pop', '$prepa', '$frid', '$floor', '$tv', '$war', '$wifi', '$shelf',
					'$dt', '$st', '$em', '$ip', '1', '$uname', '$uid', '', '', '', '$lastid')");
 				 
		 

	 
 }
