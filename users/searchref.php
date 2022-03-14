 <style>
 .formleft{
	 float:left;
	 width:50%;
 	 }
.topl {
  border:2px solid black;
  border-bottom: 3px solid black;
   }
.columnline {
  border-left: 2px solid black;
   margin-left: -3px;
  top: 0;
}

 </style>

 <?php 
 session_start();
 include ("../cpanel/link.php");
    
	    $hospitalid = $_SESSION['hospitalid'];	
		$branchid = $_SESSION['branchid'] ;
		include("../includes/setsin.php");
    $typ = $_POST['typ'];

    if($typ =="Searchcompany")
    //This is to fetch all company patient in the database
	{
 				$searchcompany =  strip_tags($_POST['companyname']);
 
 		$queryf  = mysqli_query($link, "SELECT * FROM `recpersonalpatient`
		WHERE hospitalid = '$hospitalid' AND branchid = '$branchid'
		AND (regitypeid = '4' AND famorcompid = '$searchcompany')
  		");
 					if(!mysqli_fetch_array($queryf)){
       echo "<center><br><br><h3 style='color:red'><i class='fa fa-exclamation-circle'></i> Failed</h3></center>";
							}
 							else 
							{
							?>
                             <div class="table-responsive">
 <div class="alert alert-warning text-center h4">
    <strong>       Patient Listing For The Company Selected  </strong>
 </div>
 <br>
                                	<table class="table table-striped table-bordered table-hover h7">
						              <thead>
						                <tr>
                                           <th>S/N</th>
                                          <th>Pat. Name</th>
                                          <th>Company Name</th>
                                          <th>Pat. ID</th>
                                          <th>Sex</th>
                                          <th>Marital Status</th>
                                          <th>Religion</th>
                                          <th>Address</th>
                                          <th>State</th>
                                          <th>Country</th>
                                          <th>Phone No.</th>
    						            </tr>
						              </thead>
						              <tbody class="h6">
                                    <?php
 		$queryf  = mysqli_query($link, "SELECT * FROM `recpersonalpatient`
		WHERE hospitalid = '$hospitalid' AND branchid = '$branchid'
		AND (regitypeid = '4' AND famorcompid = '$searchcompany')
 					 ");
 									$i= 1;
									while ($row = mysqli_fetch_array($queryf)){	
  									?>
                                  <form method="post" onSubmit="return false">
<tr onclick="window.location='exp.php?transid=<?php echo $transactionid; ?>';" title="Click on a row to edit record">
                                                <td><?php echo $i; ?></td>
                                               <td><?php echo $row['joinname']; ?></td>
                                               <td><?php echo $row['famorcompname']; ?></td>
                                               <td><?php echo $row['registerid']; ?></td>
                                               <td><?php echo $row['sex']; ?></td>
                                               <td><?php echo $row['maritalstatus']; ?></td>
                                               <td><?php echo $row['religion']; ?></td>
                                               <td><?php echo $row['street']; ?></td>
                                               <td><?php echo $row['state']; ?></td>
                                               <td><?php echo $row['country']; ?></td>
                                               <td><?php echo $row['phone']; ?></td>
                                                 
	<input name="hospitalid" type="hidden" id="hospitalid" value="<?php echo $hospitalid; ?>" >
	<input name="branchid" type="hidden" id="branchid" value="<?php echo $branchid; ?>" >
	<input name="registerid" type="hidden" id="registerid" value="<?php echo $registerid; ?>" >
	<input name="serialid" type="hidden" id="serialid" value="<?php echo $serialid; ?>" >
                                   
                                    </tr>
                                  </form> 	
                                    <?php
									$i++;					
								}
  							?>
                        
 						              </tbody>
						            </table>
                               
 </div>

							<?php
                        	}
}


    if($typ =="Famse")
    //This is to fetch all family patient in the database
	{
 				$familyname =  strip_tags($_POST['famname']);
 
 		$queryf  = mysqli_query($link, "SELECT * FROM `recpersonalpatient`
		WHERE hospitalid = '$hospitalid' AND branchid = '$branchid'
		AND famorcompid = '$familyname' AND regitypeid = '3'
  		");
 					if(!mysqli_fetch_array($queryf))
					{
		 //echo mysqli_error($link);
echo "<center><br><br><h3 style='color:red'><i class='fa fa-exclamation-circle'></i> Failed</h3></center>";
							}
 							else 
							{
							?>
                             <div class="table-responsive">
 <div class="alert alert-warning text-center h4">
    <strong>       Record Listing For The Selected Family</strong>
 </div>
 <br>
                                	<table class="table table-striped table-bordered table-hover h7">
						              <thead>
						                <tr>
                                           <th>S/N</th>
                                          <th>Pat. Name</th>
                                          <th>Family Name</th>
                                          <th>Pat. ID</th>
                                          <th>Sex</th>
                                          <th>Marital Status</th>
                                          <th>Religion</th>
                                          <th>Address</th>
                                          <th>State</th>
                                          <th>Country</th>
                                          <th>Phone No.</th>
    						            </tr>
						              </thead>
						              <tbody class="h6">
                                    <?php
 		$queryf  = mysqli_query($link, "SELECT * FROM `recpersonalpatient`
		WHERE hospitalid = '$hospitalid' AND branchid = '$branchid'
		AND (regitypeid = '3' AND famorcompid = '$familyname')
 					 ");
 									$i= 1;
									while ($row = mysqli_fetch_array($queryf)){	
  									?>
                                  <form method="post" onSubmit="return false">
<tr onclick="window.location='exp.php?transid=<?php echo $transactionid; ?>';" title="Click on a row to edit record">
                                                <td><?php echo $i; ?></td>
                                               <td><?php echo $row['joinname']; ?></td>
                                               <td><?php echo $row['famorcompname']; ?></td>
                                               <td><?php echo $row['registerid']; ?></td>
                                               <td><?php echo $row['sex']; ?></td>
                                               <td><?php echo $row['maritalstatus']; ?></td>
                                               <td><?php echo $row['religion']; ?></td>
                                               <td><?php echo $row['street']; ?></td>
                                               <td><?php echo $row['state']; ?></td>
                                               <td><?php echo $row['country']; ?></td>
                                               <td><?php echo $row['phone']; ?></td>
                                                 
	<input name="hospitalid" type="hidden" id="hospitalid" value="<?php echo $hospitalid; ?>" >
	<input name="branchid" type="hidden" id="branchid" value="<?php echo $branchid; ?>" >
	<input name="registerid" type="hidden" id="registerid" value="<?php echo $registerid; ?>" >
	<input name="serialid" type="hidden" id="serialid" value="<?php echo $serialid; ?>" >
                                   
                                    </tr>
                                  </form> 	
                                    <?php
									$i++;					
								}
  							?>
                        
 						              </tbody>
						            </table>
                               
 </div>

							<?php
                        	}
     }

    if($typ =="Searchref")
    //This is to fetch all company patient in the database
	{
 
 		$query = mysqli_query($link, "SELECT * FROM `recpersonalpatient`
		WHERE hospitalid = '$hospitalid' AND branchid = '$branchid'
		AND regitypeid = '1'
  		");
 					if(!mysqli_fetch_array($query)){
       echo "<center><br><br><h3 style='color:red'><i class='fa fa-exclamation-circle'></i> Failed</h3></center>";
							}
 							else 
							{
							?>
                             <div class="table-responsive">
 <div class="alert alert-warning text-center h4">
    <strong>       All Personal Patient Record listing </strong>
 </div>
 <br>
                                	<table class="table table-striped table-bordered table-hover h7">
						              <thead>
						                <tr>
                                           <th>S/N</th>
                                          <th>Pat. Name</th>
                                           <th>Pat. ID</th>
                                          <th>Sex</th>
                                          <th>Marital Status</th>
                                          <th>Religion</th>
                                          <th>Address</th>
                                          <th>State</th>
                                          <th>Country</th>
                                          <th>Phone No.</th>
    						            </tr>
						              </thead>
						              <tbody class="h6">
                                    <?php
 		$queryf  = mysqli_query($link, "SELECT * FROM recpersonalpatient
		WHERE hospitalid = '$hospitalid' AND branchid = '$branchid'
		AND regitypeid LIKE '%1%'
 					 ");
 									$i= 1;
									while ($row = mysqli_fetch_array($queryf)){	
  									?>
                                  <form method="post" onSubmit="return false">
<tr onclick="window.location='exp.php?transid=<?php echo $transactionid; ?>';" title="Click on a row to edit record">
                                                <td><?php echo $i; ?></td>
                                               <td><?php echo $row['joinname']; ?></td>
                                                <td><?php echo $row['registerid']; ?></td>
                                               <td><?php echo $row['sex']; ?></td>
                                               <td><?php echo $row['maritalstatus']; ?></td>
                                               <td><?php echo $row['religion']; ?></td>
                                               <td><?php echo $row['street']; ?></td>
                                               <td><?php echo $row['state']; ?></td>
                                               <td><?php echo $row['country']; ?></td>
                                               <td><?php echo $row['phone']; ?></td>
                                                 
	<input name="hospitalid" type="hidden" id="hospitalid" value="<?php echo $hospitalid; ?>" >
	<input name="branchid" type="hidden" id="branchid" value="<?php echo $branchid; ?>" >
	<input name="registerid" type="hidden" id="registerid" value="<?php echo $registerid; ?>" >
	<input name="serialid" type="hidden" id="serialid" value="<?php echo $serialid; ?>" >
                                   
                                    </tr>
                                  </form> 	
                                    <?php
									$i++;					
								}
  							?>
                        
 						              </tbody>
						            </table>
                               
 </div>

							<?php
                        	}
}

   

?>

