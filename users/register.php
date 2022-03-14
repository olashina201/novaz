<?php 
session_start();
include ("../cpanel/link.php");
     // IF($_SESSION['ID_USR'] =""); 
    //  header("Location: login");

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Novazarc properties| Registration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <script>
var loadFile = function(event) 
{
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>


</head>
<body class="hold-transition login-page">
                

 
          <div class="container" style="min-height:500px;">
              <div class="register-logo">
                  <p style="padding-top:40px;">
                    
                        <img src="../images/Novaz_Logo.png" style=" height:120px; width:300px" />
                  </p>
              </div>
              <br>
         <p class="login-box-msg h1"><strong>Register <br>Your Account</strong></p>
        <section class="width: 50%; ">
          
              <form method="post" id ="myform"  onSubmit="return false"> 
                <div class="row">
                  
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-5">
                      
                            <div class="form-group">
                              <label>First name</label>
                              <input type="text" class="form-control " style="width: 100%;" id="fname" name="fname"> 
                            </div>
                            
                            <div class="form-group">
                              <label>Last name</label>
                              <input type="text" class="form-control " style="width: 100%;" id="lname" name="lname">
                            </div>
                            
                            <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control "  id="email" name="email">
                            </div>
                          
                            <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control " style="width: 100%;" id="password" name="password">
                            </div>
                            <div class="form-group">
                              <label>Confirm Password</label>
                              <input type="password" class="form-control " style="width: 100%;" id="confirmpass" name="confirmpass">
                            </div>
                      
                    </div>

                    
                    <div class="col-md-5">
                    <div class="form-group">
                              <label>Company Name</label>
                              <input type="text" class="form-control " id="compname" name="compname">
                    </div>
                    <div class="form-group">
                              <label>Phone Number:</label>
                              <input type="text" class="form-control " id="phone" name="phone">
                    </div>
                      <div class="form-group">
                        <label>Add Photo </label>
                        <p><img id="output" width="180" height="160" style=" border-style:none;">  </p>
                        <input type="file" name="photo" id="photo" style="display: none;" onChange="loadFile(event)">
                        <p><label for="photo" style="cursor: pointer;" >Upload your image</label></p>
                      
                      </div>
                        <p style="color: red;">
                        <small>* Image should be very sharp.</small> <br>
                        <small>* Accepted image format: JPEG, JPG, PNG & SVG.</small>
                        </p>
                       <div class="row"><br> <br>
                          <div class="col-4">
                              <label> </label>
                              <button type="submit" onclick="SignUp()" class="btn btn-sost btn-block">Register</button>             
                          </div>
                          <div class="col-6"> 
                            <br>
                              <a href="login" class="btn btn-link" style="color: black; font-size: 14px;" >
                             login here
                              </a>
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
                  <br>
                    <div id ="sres" class="text-center"></div>
                    <br>
              </form>
        
        </section>
        
         
        </div>

 
<script src="../plugins/jquery/jquery.min.js"></script>
 <script>      
          function SignUp()
        {

          var fd = new FormData($("#myform")[0]);

            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var email = $('#email').val();
            var pas = $('#password').val();
            var compname = $('#compname').val();
            var conpass = $('#confirmpass').val();
            var phone = $('#phone').val();
 
            var photo = $('#photo').val();
            var basename = photo.replace(/\\/g,'/').replace(/.*\//, '');
		      	var fileParts = $("#photo").val().split(".");

          
            var typ = "Register";
            
			 
            if(fname !=""  && lname !="" && email !="" && pas !="" && conpass !=""  && basename !="" && compname !=""
            && phone !="")
		{
 					$.ajax({
						url: "../app/",
            type: 'post',
                data: fd,
                contentType: false,
                processData: false,
						success: function(data)
						{
							$('#sres').html(data);
							
							if(data.includes("Exist"))
							{
					       $('#sres').html("<span style='color:red; font-size: 20px;'>Email address already exist</span>");
								  $(this).delay(1000).queue(function() {
                    $('#sres').html("<span style='color:red; font-size: 20px;'></span>");
								  $(this).dequeue();
							  	});      
							} 
							if(data.includes("Miss"))
							{
					       $('#sres').html("<span style='color:red; font-size: 20px;'>Passwords mismatch</span>");
								  $(this).delay(1000).queue(function() {
                    $('#sres').html("<span style='color:red; font-size: 20px;'></span>");
								  $(this).dequeue();
							  	});      
							} 
							else if(data.includes("Successful"))
							{
					       $('#sres').html("<span style='color:green; font-size: 20px;'>Registration Successful</span>");
								  $(this).delay(2000).queue(function() {
									location.href="login";
								  $(this).dequeue();
							  	});      
							} 
							   
						}                
					});
	  }
	else
	  {
    	  $('#sres').html("<span style='padding:5px; color:#f00'>Please fillout All Fields, including your image!</span>")
        $(this).delay(2000).queue(function() {
          $('#sres').html("<span style='padding:5px; color:#fff'></span>")					
								$(this).dequeue();
								});      
	  }
			 
        }
	</script>
<div style="background:#dbae5f; width:100%; color:#ffffff; padding-top:10px;">
		<div class=" container">
			<center>
                <p>&copy; <?php echo date('Y'); ?>Novazarc Properties. All Rights Reserved </p>
			</center> 
		</div>
	</div>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
