<?php  
session_start();
      
 include ("../cpanel/link.php");    
 
?>


          <?php 
		  
$typ = $_POST['typ'];

    if($typ == "searchdata")	
	 	  
	 {
   		$going =0;
		$testtimein =date("h:i:s");
		
      // include ("../../lab/gtestid.php");
	  
	  
	  //fetching selected test prices using this block of code
				$query_product = "SELECT * FROM labstestgroup WHERE id = '$grouptest'
				AND hospitalid = '$hospitalid' AND branchid = '$branchid'";
				$product = mysqli_query($link, $query_product) or die(mysqli_error());
				$row_product = mysqli_fetch_assoc($product);
				
				 $testid =$row_product['id'];
				 $measure =$row_product['measure'];
				 $testrangein =$row_product['testrange'];
				 $glowclass =$row_product['lowclass'];
				 $gmiddleclass =$row_product['middleclass'];
				 $ghighclass =$row_product['highclass'];
				 $grouptestsource = 'group';
	  //fetching selected test prices using this block of code Ends here
				
				if(check_grouptests($taskid,$registerid,$hospitalid,$branchid,$grouptest))
				{
					$going = 1;
				}
				else
				{
						echo "Exist"; 
							 
						exit();
				}
 			if($going = '1')
			{
				$ltransid ='';
   		 	//include ("../../lab/scripts/transid.php");	//Including file for lab investigations transaction No
			
				$trns = mysqli_query($link, "SELECT * FROM labtransid 
				WHERE registerid = '$registerid' AND taskid = '$taskid'  
				AND status = '1' AND hospitalid = '$hospitalid' AND branchid = '$branchid'
				");
				 if($row = mysqli_fetch_array($trns))
				 {
 				 $ltransid = ($row['transid'] );
 				 }
				 else
				 {
					$query = mysqli_query($link, "SELECT * FROM labtransid 
					WHERE hospitalid = '$hospitalid' AND branchid = '$branchid'
					ORDER BY transid DESC LIMIT 1 ");
					 
 						while ($row = mysqli_fetch_array($query))
						{
							$ltransid = ($row['transid'] + 1);
							$querys = mysqli_query($link, "INSERT INTO 
							labtransid(`hospitalid`, `branchid`, `registerid`, `taskid`, `transid`, 
							`status`, `tdate`, `username`, `systemip`) 
							VALUES('$hospitalid', '$branchid', '$registerid', '$taskid', '$ltransid', 
							'1', '$testdate', '$userid', '$systemip')
							");
						}
					
				 }
				// echo $ltransid; exit();
				$sql = mysqli_query($link, "SELECT * FROM labwaitingpatient 
				WHERE hospitalid ='$hospitalid' AND branchid ='$branchid' AND registerid ='$registerid' 
				AND taskid ='$taskid'  ");
				$row = mysqli_fetch_assoc($sql);
				if($row > 0)
				{
  
				$query = mysqli_query($link, "INSERT INTO
				labsgrouptesttodo(`hospitalid`, `branchid`, `transid`,`transpay`, `registerid`, `consultationid`, `testtodo`,
				 `specimen`, `price`, 
				`price2`,`price3`,`measure`, `testrange`,`testdatetime`, `testtime`, `userid`, `status`, `result`, 
				`testvalue`, `resultdatetime`, `resultby`, `hwidal`, `ahwidal`, `bhwidal`, `chwidal`, 
				`owidal`, `aowidal`, `bowidal`, `cowidal`, `macroscopy`, `epithe1`, `epithe2`, `pus1`, `pus2`,
				 `rbc1`, `rbc2`, `wbc1`, `wbc2`, `bacteria1`, `bacteria2`, `cast1`, `cast2`, `crystal1`, 
				 `crystal2`, `yeast1`, `yeast2`, 
				`culture1`, `culture2`, `rest1`, `rest2`, `rest3`, `rest4`, `rest5`, `rest6`, `rest7`, 
				`rest8`, `rest9`, `rest10`, `sest1`, `sest2`, `sest3`, `sest4`, `sest5`, `sest6`, `sest7`, 
				`sest8`, `sest9`, `sest10`, `setprint`)
				VALUES('$hospitalid', '$branchid', '$ltransid', '1',
				'$registerid', '$taskid', '$grouptest', '', '$glowclass', 
				'$gmiddleclass', '$ghighclass', '$measure', '$testrangein', '$testdate', '$testtimein', '$userid', 
				'pending', '', '', '', '', 
					'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 
					'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 
					'', '', '', '', '', '', '')
					");
 					echo'Successful';
					 
 			}
 			else
			{
 
  			$querys = mysqli_query($link, "INSERT INTO 
			labwaitingpatient(`hospitalid`, `branchid`, `registerid`, `date`, `time`, 
			`taskid`, `status`, `recordedby`, `ipaddress`, `datetime`, `seenby`, `datetimeseen`) 
			VALUES('$hospitalid', '$branchid', '$registerid', '$testdate', '$testtimein', 
			'$taskid', 'awaiting', '$userid', '$systemip', '$testdate', '', '')
	 		");
 				$query = mysqli_query($link, "INSERT INTO
			labsgrouptesttodo(`hospitalid`, `branchid`, `transid`, `transpay`, `registerid`, `consultationid`, `testtodo`, `specimen`, `price`, 
`price2`,`price3`,`measure`, `testrange`,`testdatetime`, `testtime`, `userid`, `status`, `result`, `testvalue`, `resultdatetime`, `resultby`, `hwidal`, `ahwidal`, `bhwidal`, `chwidal`, `owidal`, `aowidal`, 
		`bowidal`, `cowidal`, `macroscopy`, `epithe1`, `epithe2`, `pus1`, `pus2`, `rbc1`, `rbc2`, `wbc1`, 
			`wbc2`, `bacteria1`, `bacteria2`, `cast1`, `cast2`, `crystal1`, `crystal2`, `yeast1`, `yeast2`, 
			`culture1`, `culture2`, `rest1`, `rest2`, `rest3`, `rest4`, `rest5`, `rest6`, `rest7`, `rest8`, 
	`rest9`, `rest10`, `sest1`, `sest2`, `sest3`, `sest4`, `sest5`, `sest6`, `sest7`, `sest8`, `sest9`, 
			`sest10`, `setprint`)
 	VALUES('$hospitalid', '$branchid', '$ltransid', '1', '$registerid', '$taskid', '$testid', '$specimenname', '$glowclass', '$gmiddleclass',
'$ghighclass', '$measure', '$testrangein', '$testdate', '$testtimein', '$userid', 'pending', '', '', '', '', 
				'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 
				'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 
				'', '', '', '', '', '', '')
				");
 					if($querys)	
					{		
					echo'Successful';
					}
					else
					{
						echo mysqli_error($link);
  					}
			}
	        
			}
 }
   		   
 ?>              
