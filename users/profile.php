<?php 
include("../cpanel/link.php");
session_start();
if(empty($_SESSION['LOGIN_STATE']))
{
			echo '<script> location.href="login";</script>';
exit();
}
 

$uml =  $_SESSION['US_mail'] ;
$qry  = mysqli_query($link, "SELECT * FROM user WHERE email = '$uml' ");
while($row = mysqli_fetch_array($qry))
{
$lname = $row['lname']; 
$fname = $row['fname'];
$uimg = $row['uimg'];
$phone = $row['phone'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Novazarc Properties   | Admin - Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <?php include("../links/jsStyles.php");?>
<script> 
  var Chng = function(event) 
{
	var image = document.getElementById('ovo');
 
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

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
            <h3 class="m-0">Profile</h3>
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
                <div class="col-md-5 ">
                    <div class"row">
                      <form method="post" id="ndata" onSubmit="return false"> 

                          <div class="col-md-12">
                            <h5 class="alert alert-info"> Update Names:</h5> <hr> 
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" name="fname" id="fname" class="form-control " value="<?php echo $fname;  ?>">
                                </div>

                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" name="lname" id="lname" class="form-control " value="<?php echo $lname;  ?>">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" id="phone" class="form-control " value="<?php echo $phone;  ?>">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" readonly id="email" class="form-control" value="<?php echo $_SESSION['US_mail'];  ?>" style="width: 100%;">
                                </div>
                                
                          </div>
                          <div class="col-md-12">
                          <div class="row">
                                <div class="col-md-4">
                                         <input type="submit" onClick="Changeprofile()" class="btn btn-info" value="Update">
                              </div>
                          </div>
                      </div>
                      </form>
                      <br>
                      <div id="lress" class="text-center"> </div>
                    </div>
                </div>

               <div class="col-md-2"> </div> <br> <br>
               
 
                <div class="col-md-5 ">
                    <div class"row">
                    <form method="post" id="pdata" onSubmit="return false"> 
                      <div class="col-md-12">
                          <h5 class="alert alert-info"> Change Password:</h5> <hr> 
                            <div class="form-group">
                                <label>New Password:</label>
                                <input type="password" name="password" id="password" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Confirm New Password</label>
                                <input type="password" name="confirmpass" id="confirmpass" class="form-control">
                            </div>
                      </div>
                      <div class="col-md-12">
                          <div class="row">
                              <div class="col-md-5">
                                     <input type="checkbox" onclick="myFunction()">  Show Password 
                              </div>
                               <div class="col-md-4">
                                         <input type="submit" onClick="Changepass()" class="btn btn-info" value="Change Passsword">
                              </div>
                          </div>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
             <div id="lres" class="text-center"> </div>
           
              <div class="row">
              <br> <br> 
                  <div class="col-md-4"> 

                  </div>
                  <div class="col-md-6">
                      <form method="post" action="upload" enctype="multipart/form-data">
                      <div class="form-group">
                                    <label>Image</label>
                                    <?php if ($uimg == "") 
                                    { ?>
                                    <p><img id="ovo" width="100" height="100" style=" border-style:none;">  </p>
                                    
                                    <?php 
                                    }
                                    else
                                    {
                                      ?>
                                    <p><img src="../upreg/<?php echo $uimg; ?>" id="ovo" width="100" height="100"  >  </p>
                                      <?php 
                                    }

                                    ?>
                                    <p>
                                      <input type="file" name="file" id="file" style="display: none;" onChange="Chng(event)">
                                      <label for="file" style="cursor: pointer; color:#ABA6BF; font-size:12px;" >Select Image</label>
                                    </p>
                                    <input type="submit" name="submit" class="btn btn-success" value="Save image">
                                </div>
                      </form>
                  </div>
              
              </div>
            
       
       <br> <br> 
       
            <div class="card-footer"> Profile  </div>
  
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
        function myFunction()  // this is to show password
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


        function Changepass()
{
        
             var password = $('#password').val();
            var confirmpass = $('#confirmpass').val();
  		      var typ= 'Pas';

		 
             if(password !="" && confirmpass != "")
            {
              if(password !== confirmpass)
              {
                alert("Passwords missmatch")
              }
              else{
              
                $.ajax({
                url: '../asset/',
                type: 'post',
                data: {typ: typ, password: password, confirmpass: confirmpass},
                 success: function(data)
                      {
                        $('#lres').html(data);
                      
                          
                          {
                            $('#lres').html("<span style='padding:5px;color:green;'>Operation Successful</span>")
                              $(this).delay(1000).queue(function() {
                              location.href="";
                              $(this).dequeue();
                              });      
                          }    
                      }                
                });
              }
            }
            else
            {
                $('#lres').html("<span style='padding:5px;color:#f00'> Password and confirm password must not be empty</span>")
                            $(this).delay(2000).queue(function() {
                $('#lres').html("<span style='padding:5px;color:#fff'></span>")
                            $(this).dequeue();
                            });      
            }

			
}

function Changeprofile()
{
  			var fd = new FormData($("#mydata")[0]);
             var fname = $('#fname').val();
             var lname = $('#lname').val();
             var phone = $('#phone').val();
  		      var typ= 'Nam';

		 
             if(fname !="" && lname != "")
            {
                 $.ajax({
                url: '../asset/',
                type: 'post',
                data: {typ: typ, fname: fname, lname: lname, phone: phone},
                 success: function(data)
                      {
                       
                          if(data.includes("Good"))
                          {
                            $('#lress').html("<span style='padding:5px;color:green;'>Operation Successful</span>")
                              $(this).delay(1000).queue(function() {
                              location.href="";
                              $(this).dequeue();
                              });      
                          }   
                           
                      }                
                });
               
            }
            else
            {
                $('#lress').html("<span style='padding:5px;color:#f00'> First and last names must not be empty</span>")
                            $(this).delay(2000).queue(function() {
                $('#lres').html("<span style='padding:5px;color:#fff'></span>")
                            $(this).dequeue();
                            });      
            }

			
}

</script>
</body>
</html>
