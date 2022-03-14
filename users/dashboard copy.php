<?php 

session_start();
if(empty($_SESSION['LOGIN_STATE']))
{
			echo '<script> location.href="login";</script>';
exit();
}
 

$_SESSION['US_mail'] ;
$_SESSION['US_fn'] ;
$_SESSION['US_ln'] ;

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
            <h3 class="m-0">Dashboard</h3>
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
        
        
      <div class="row">
       
          
          
          <div class="col-lg-9 col-6">
                
            <div class="row">
            <div class="col-12 col-sm-3 col-md-4">
                <div class="info-box mb-4">
                    <span class="info-box-icon elevation-1"><i class="fas fa-users"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Total Referrals</span>
                    <span class="info-box-number">0</span>
                  </div>
                  
                </div>
            </div>

          
 
            <div class="col-12 col-sm-3 col-md-4">
            <div class="info-box mb-4">
              <span class="info-box-icon elevation-1"><i class="fas fa-inbox"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">My Payments</span>
                <span class="info-box-number">0</span>
              </div>
              
            </div>
             
          </div>
          
           
          <div class="col-12 col-sm-3 col-md-4">
            <div class="info-box mb-4">
              <span class="info-box-icon elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Members</span>
                <span class="info-box-number">0</span>
              </div>
              
            </div>
             
          </div>
          
        </div>
       </div>

          </div>
    
          
        
       
       
      </div>


      

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
</body>
</html>
