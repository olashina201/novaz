<?php 
session_start();
$userid = $_SESSION['userid'];

if(!$_SESSION['LOGIN_STATUS']){
	header("Location: ../");	
}
 		$hold = $_SESSION['userlevel'];
		if($hold !="cashier")
		{
				if($hold ==="chef")
				{
 				header("Location: chef/dashboard.php");
				}
  				elseif($hold ==="account")
				{
				header("Location: account/dashboard.php");
				}
 		}

include ("../cpanel/link.php");?>

<?php include ("../includes/header.php");?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link elevation-4">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">De TRIBES</span>
    </a>

    <!-- Sidebar -->
<?php include ("../includes/cashier.php");?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My Report</h1>
          </div>
        </div>
      </div> <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
 
        <div class="row">
           <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Report</h3>
              </div>
                 <div class="card-body" style="min-height:400px;">
               <div class="row">
                <div class="col-sm-5">
					<form method="post"> 
                     <div class="form-group">
                      <label>Select Date:</label>
                        <div class="input-group date">
                           <input name="tdate" type="date" required="required" class="form-control" id="tdate" />
                         </div>
                     </div>
     	             <div class="form-group">
<button name="btnsearch" type="submit" class="btn btn-primary">
<i class="fa fa-search">Search</i></button>
                  </div>
                    </form>
                </div>
                <!-- /.card-body -->
               </div>
<div class="form-group ">
  <?php 
							
if(isset($_POST['btnsearch'])) 
{
$tdate = trim ( $_POST['tdate']);
 
$check = mysqli_query($link, "SELECT payment.orderid, payment.paymedium, payment.amount, payment.paydate, payment.staff
FROM payment
WHERE payment.paydate = '$tdate' 
 ");
 $row = mysqli_num_rows($check);
  if(!$row)
  {
	  ?>
      	<p class="text-center h5">No records found</p>
      <?php	  
  }
  else
  { 
	  ?>
                             <div class="table-responsive p-0" style="height: 300px;">
			                 <table class="table table-head-fixed table-bordered table-hover table-sm text-nowrap">

                                                      <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Date</th>
                                                            <th>Transaction ID</th>
                                                            <th>Cash Payment</th>
                                                            <th>POS Payment</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                      <?php
$check = mysqli_query($link, "SELECT payment.orderid, payment.paymedium, payment.amount, payment.paydate, payment.staff
FROM payment
WHERE payment.paydate = '$tdate' 
 ");
                                                 if(mysqli_num_rows($check)>0)
												 {
                                                    $i= 1; 
                                                    while ($row_measure = mysqli_fetch_array($check)){	
                                                        $paydate = $row_measure['paydate'];
                                                        $orderid = $row_measure['orderid'];
                                                        $amount = $row_measure['amount'];
                                                        $medium = $row_measure['paymedium'];
														if($medium =='1')
														{
															$med ='Cash';
														}
														elseif($medium =='2')
														{
															$med ='POS';
														}
                                                           ?>
                                                    <tr style="font-size:;">
                                                               <td><?php echo $i; ?></td>
                                                               <td><?php echo $paydate; ?></td>
                                                               <td><?php echo $orderid; ?></td>
                                                               <td><?php echo $med; ?></td>
                                                               <td><?php echo $amount; ?></td>
                                                      </tr>
                                                    <?php
                                                    $i++;
                                                 }
                                                }
                                            ?>
                                                       </tbody>
                                                    </table>
                             </div>
      <?php	  
  }
 		
 
 }
 ?>
 
 </div>
                
               </div>
               </div>
            </div>
           </div>
         </div>
        <!-- /.row -->      
    </section>
<?php
// Check if button name "Submit" is active, do this
if(isset($_POST['btnorder']))
{
 		$etype= $_POST["ename"];
		  
		$check = "SELECT * FROM consultexpen 
		WHERE etype = '$etype' AND edate = '$edate' AND status ='open' AND consultid ='$consultid' ";
		$doo = mysqli_query($link, $check);
		$row = mysqli_fetch_assoc($doo);
			if ($row) 
			  {
							echo '<script>
								alert("Product already exist in this order "); 
							</script>';
			  }
			else 
				{	

				$run = mysqli_query($link,"INSERT INTO consultexpen
							(`transactionid`, `etype`, `amount`, `edate`, `consultid`, `recordedby`, `status`) 
					  VALUES('$transactionid', '$etype', '', '$edate', '$consultid', '$joinname', 'open')
				");
				if($run)
				{
					echo '<script>location.href="dashboard.php";</script>';
				}
				else{
					echo mysqli_error($link);	
				}
		
			}
}
?>
  </div>
  <!-- /.content-wrapper -->

<?php include ("../includes/footer.php");?>