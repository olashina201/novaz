<?php 

include("../cpanel/link.php");
session_start();

if(empty($_SESSION['LOGIN_STATE']))
{
			echo '<script> location.href="login";</script>';
exit();
}
$adsid = $_GET['sads'] ;
 $_SESSION['sads']  = $adsid  ;
 
$uml =  $_SESSION['US_mail'] ;
$qry  = mysqli_query($link, "SELECT * FROM user WHERE email = '$uml' ");
while($row = mysqli_fetch_array($qry))
{
$lname = $row['lname']; 
$fname = $row['fname'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Novazarc Properties   | Promote </title>

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

  <div class="content-wrapper">
     
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Promote My Ads</h3>
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
                <div class="col-md-6 " style="display: ">
                    <div class"row">
                      <form method="post" class="form-horizontal" id="myform" onSubmit="return false"> 

                          <div class="col-md-12">
                           
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" name="adsid" id="adsid" readonly class="form-control" value="<?php echo $adsid;  ?>" style="display: none;">
                                    <input type="text" name="name" id="name" readonly class="form-control " value="<?php echo $fname. ' ' .$lname;  ?>">
                                </div>

                                <div class="form-group">
                                    <label>Ads Categories And Amount</label>
									
                                    <select type="text" class="form-control" name="amount" id="amount">
                                        <option value="" selected ="Selected"> Select</option>
                                         <option value="300">TOP (BEST OFFER) - &#8358; 1500.00 For 7 days</option>
                                        <option value="5500">Boost Premium - &#8358; 5,500.00  For 30 days</option>
                                    </select>
                                </div>
                                

                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="text" name="phonenumber"  id="phonenumber" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" readonly id="email" class="form-control" value="<?php echo $_SESSION['US_mail'];  ?>" style="width: 100%;">
                                </div>
                                
                          </div>
                          <div class="col-md-12">
                          <div class="row">
                                <div class="col-md-4">
                                <input type="submit"onClick="Pay()"   class="btn btn-primary" value="Pay"> 
                              </div>
                          </div>
                      </div>
                      </form>
                      <br>
                      <div id="lress" class="text-center"> </div>
                    </div>
                </div>
                
                <div class="col-md-6 " style="display: none">
                    <form method="post" onSubmit="return false;"> 
                       <input type="submit" onClick="Saveall()" value="Pay">
                    </form>
                </div>
            </div>
        <br> <br> 
         <div class="card-footer"> Ads  </div>
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
<script src="../js/jquery-1.11.2.min.js"></script>
 

    <script src="script.js"> </script>
  
  <script src="https://checkout.flutterwave.com/v3.js"></script>
 
</body>
</html>
