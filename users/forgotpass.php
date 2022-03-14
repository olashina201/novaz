<?php
session_start();

if(isset($_SESSION['name']))
{
	header("Location: parser.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Novazarc | Reset Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
                 <p style="padding-top:20px;">
                  <br> <br> <br>
                    <img src="../images/Novaz_Logo.png" style=" height:100px; width:300px" />
                 </p>
             
<div class="login-box" style="min-height:500px;">
  <!-- /.login-logo -->
  <div class="card card-outline card-warning" >
    <div class="card-header text-center">
      <a href="" class="h1"><b>Reset Password</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"></p>

      <form id="loginform" method="post" onSubmit="return false">
              <div id="error" style="color:red; font-size:12px;">
                    <!-- error will be shown here ! -->
              </div>
        <div class="input-group mb-3">
          <input name="user_email" type="email" class="form-control" id="user_email" placeholder="Email">
        </div>

        <div class="row">
        
          <div class="col-12">
            <button name="btn-login" style="width:100%" onClick="Login()" class="btn btn-warning btn-block"><i class=""></i> Reset Password</button>
          </div>
        </div>
         <br>
        			<p id="lres" align="center"></p>
      </form>
      
      <div class="row"> 
      <div class="col-lg-6">
      <p class="mb-1">
        <a href="login">Login here</a>
      </p>
      </div>
     
      </div>
      </div>
     </div>
  
  </div>
  <!-- /.card -->

</div>
<!-- /.login-box -->

<script>
        
        function Login()
        {
            var eml = $('#user_email').val();
   
            var typ = "Login";
            
            if(eml!="")
            {
                $('#lres').html("<span class='btn-primary' style='padding:5px'><i class='fa fa-spinner fa-spin'></i> Checking...</span>");
                $.ajax({
                    url: "../login_process.php",
                    data: {typ: typ, eml: eml, pwd: pwd},
                    type: "POST",
                    success: function(data)
                    {
                        $('#lres').html(data);
                        
                        if(data.includes("Successful"))
                        {
                            $(this).delay(4000).queue(function() {
                                location.href="dashboard";
                            $(this).dequeue();
                            });      
                        }    
                    }                
                });
            }
            else
            {
                $('#lres').html("<span style='padding:5px;background:#f00;color:#fff'>Please Enter Your Email!</span>")
            }
        }
        

</script>
<div style="background:#dbae5f; width:100%; color:#ffffff; padding-top:10px;">
		<div class=" container">
			<center>
                <p>&copy; <?php echo date('Y'); ?> Novazarc Properties. All Rights Reserved </p>
			</center> 
		</div>
	</div>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js">
</script><script src="../validation.min.js"></script>

</body>
</html>
