<?php 
include("../cpanel/link.php");

session_start();
if(empty($_SESSION['LOGIN_STATE']))
{
			echo '<script> location.href="login";</script>';
exit();
}
 

$_SESSION['US_mail'] ;
$_SESSION['US_fn'] ;
$_SESSION['US_ln'] ;
$uid = $_SESSION['US_id'] ;



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Novazarc Properties   | Admin - Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <?php include("../links/jsStyles.php");?>
 
 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>  
  </nav>
  <!-- /.navbar -->

<?php include ("../links/userLinks.php"); ?>
  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Payment history</h3>
          </div>  
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right" style="display:;">
              <li class="breadcrumb-item"><a href="../">Portal Home</a></li>
              
            </ol>
          </div>
        </div> 
      </div>
    </div>
    
    
    <section class="content">
      <div class="container-fluid">
        
      <div class="card card-default">
       
            <div class="card-body">
  
              <div class="row">
                <div class="col-md-12">
                    <div class"row">
                      <div class="col-md-12">
<?php
$qr = mysqli_query($link, "SELECT * FROM payment WHERE custmid= '$uid' ");
$bsn = mysqli_num_rows($qr) ;
				
 
	 if($bsn)
 	  {
              
         ?>       <div class="table-responsive">
   									<table class="table table-striped  h7">
						              <thead>
						                <tr>
						                  <th>S/N</th>
						                  <th>Payment Date</th>
						                  <th>Amount</th>
     						              <th>Plan</th>
     						              <th>Expiring Date</th>
     						              <th>Status</th>
 						                </tr>
						              </thead>
						              <tbody>
                          <?php
                    
                         $qur  = mysqli_query($link, "SELECT * FROM payment WHERE custmid = '$uid' ");
                                               
                                               $i = 1;
                                                  
                                  while ($rows = mysqli_fetch_array($qur))
                                  {	
                                    ?>
                                      <tr>
                                            
                                                  <td><?php echo $i; ?></td>
                                                  <td><?php echo $rows['pdate']; ?></td>
                                                  <td><?php echo $rows['amount']; ?></td>
                                                  <td><?php echo $rows['plan']; ?></td>
                                                  <td><?php echo $rows['expidate']; ?></td>
                                                  <td><?php echo $rows['status']; ?></td>
                                             
                                      </tr>	
                                    <?php
                                      $i++;
                                  }
                                    ?>
                                  
    						          </tbody>
                                    
                    </table>
                  </div>
         <?php
        
    }
	 else
   {
		echo '<p class="text-center"> No records yet</p>'; 
	 }
	
?>
    </div>
                    </div>
                </div>
               
 
              </div>
            
         
           
            </div>
           
            
       
       <br> <br> 
       
   
  
  
      </div>
    </section>
     
  </div>

 
  <?php include ("../links/footer.php"); ?>

 
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
 
 
</div>


<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>

<script>
        function myFunction() 
        {
          var x = document.getElementById("password");
          var y = document.getElementById("confirmpass");
          
              if (x.type === "password")
              {
                x.type = "text";
                y.type = "text";
              } else
              {
                x.type = "password";
                y.type = "password";
              }
        }
</script>
</body>
</html>
