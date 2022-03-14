<?php include ("../cpanel/link.php");?>


<?php
session_start();

 if(empty($_SESSION['transid']))
 {
	 exit();
 }
 else
 {
	$transid = $_SESSION['transid'] ;
		 
	$qr = mysqli_query($link, "SELECT * FROM images WHERE transid ='$transid'");
	$bsn = mysqli_num_rows($qr) > 0;
					
	 
		 if($bsn)
		  {
			while($rowb = mysqli_fetch_assoc($qr))
			{ ?>
				<div class="row">
					<div class="col-lg-5">
						<img src="../uploads/<?php echo $rowb['imagename']; ?>" width="100" height="100">
					</div>
				</div>
			  <?php
			}
										 
		  }
		  else
		  {
		  echo 'no image uploaded yet';
	  }
 }
?>
</div>