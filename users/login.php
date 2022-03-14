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
  <title>Novazarc |  Login</title>

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
<div class="navigation">
		<div class="container">

			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
                         
        <li class="hvr-bounce-to-bottom button"><a class="scroll" style="cursor:pointer" onClick="loginp()">Login</a></li>

        <li class="hvr-bounce-to-bottom button"><a class="scroll" style="cursor:pointer" onClick="registerp()">Sign Up</a></li>

					</ul>
 				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
	</div>

                 <p style="padding-top:20px;">
                  <br> <br> <br><br><br>
                  <img src="../images/Novaz_Logo.png" style=" height:120px; width:300px" />
                 </p>
             
<div class="login-box" style="min-height:500px;">
  <!-- /.login-logo -->
  <div class="card card-outline card-warning" >
    <div class="card-header text-center">
      <div class="h1"><b>Login</b></div>
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

        <div class="input-group mb-3">
            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
         </div>
         <input type="checkbox" onclick="myFunction()">  Show Password 
        <div class="row">
        
          <div class="col-12"> <br>
            <button name="btn-login" id="cks" style="width:100%" onClick="Login()" class="btn btn-sost btn-block"><i class="fa fa-lock"></i> Login</button>
          </div>
        </div>
         
        			<p id="lres"  align="center"></p>
      </form>
      
          <div class="row"> 
              <div class="col-lg-6">
                <p class="mb-1">
                  <a href="forgotpass" style="color: black; font-size: 14px;">Forgot password</a>
                </p>
              </div>
              <div class="col-lg-6">
                <p class="mb-1">
                  <a href="register" style="color: black;  font-size: 14px;">Click to register</a>
                </p>
              </div>
        
          </div>

          <div class="row">
                        
                        <a href="../" class="btn btn-home">
                        <br>
                             Go Home
                              </a
                              <br> <br> 
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
            var pwd = $('#password').val();
            var typ = "Login";
            
            if(eml!="" && pwd!="")
            {
              $('#lres').html("<span style='padding:5px;color:#f00'></span>")

                $('#cks').html("<span style='padding:5px'><i class='fa fa-spinner fa-spin'></i> Checking...</span>");
                $.ajax({
                    url: "../Api/",
                    data: {typ: typ, eml: eml, pwd: pwd},
                    type: "POST",
                    success: function(data)
                    {
                                               
                        if(data.includes("Incorrect"))
                        {
                            $(this).delay(1000).queue(function() {
                              $('#lres').html("<span style='padding:5px;color:#f00'>Incorrect Password!</span>")
                              $('#cks').html("<span class=''><i class='fa fa-lock'></i> Login</span>");
                                  $(this).dequeue();
                            });      
                        }
                        else if(data.includes("Wrong"))
                        {
                            $(this).delay(1000).queue(function() {
                              $('#lres').html("<span style='padding:5px;color:#f00'>Wrong Email Address!</span>")
                              $('#cks').html("<span class=''><i class='fa fa-lock'></i> Login</span>");
                           
                            $(this).dequeue();
                            });      
                        }
                        else if(data.includes("Successful"))
                        {
                            $(this).delay(1000).queue(function() {
                                location.href="dashboard";
                            $(this).dequeue();
                            });      
                        }    
                    }                
                });
            }
            else
            {
              $('#lres').html("<span style='padding:5px;color:#f00'>Please Enter Your Details</span>")
            }
        }
        
        function myFunction() 
        {
          var x = document.getElementById("password");
              if (x.type === "password")
              {
                x.type = "text";
              } else
              {
                x.type = "password";
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
