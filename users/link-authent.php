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
  <title>Nichme Global | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition " >
                

 
          <div class="container" style="min-height:650px;">
              <div class="register-logo">
               
              <p style="padding-top:60px;">
                  
                    <img src="../images/niche.png" style=" height:50px; width:300px" />
                </p>
            </div>
            <br>
         <p class="login-box-msg h3"><strong>Validate Referral</strong></p>
         <section class="width: 50%; ">
          
         <form method="post"  onSubmit="return false"> 
            <div class="row">
            
            <div class="col-md-3">
              </div>
              
              <div class="col-md-6">
               
                 <div class="form-group">
                  <label class="text-center">Referral Link</label>
                  <input type="text" class="form-control "  id="reflnk" name="reflnk">
                </div>
               
                  
                <div class="row">
                <div class="col-6">
                <label> </label>
                  <button type="submit" onclick="btnref()" class="btn btn-primary btn-block">Validate</button>             
                </div>
                  <div class="col-6"> 
                   <br>
                      <a href="login" class="btn btn-link">
                      Already Registered? login here
                      </a>
                  </div>

                  </div>
                </div>
                
             
             
             
             
             </div>
             <br>
              <div id ="sres" class="text-center"></div>
      
            </form>
        
        
                </section>
        
         
        </div>

 
<script src="../plugins/jquery/jquery.min.js"></script>
 <script>      
          function btnref()
        {
               
            var reflnk = $('#reflnk').val();
         
            var typ = "Searchref";
            
			 
if(reflnk !="" )
		{
       		
 					$.ajax({
						url: "../asset/",
				data: {typ: typ, reflnk: reflnk},
						type: "POST",
						success: function(data)
						{						
                if(data.includes("Failed"))
                {
                  $(this).delay(200).queue(function(){ 
                  $('#sres').html("<center> <h3 style='color:red; text-align:center; font-size: 20px;'>No user account exist with the referral link provided </h3></center>");
                  $(this).dequeue();
                  }); 
                }
							else
							  { 
                    $("#sres").html(data);
								     
							  } 
							   
						}                
					});
	  }
	else
	  {
    	  $('#sres').html("<span style='padding:5px;background:#f00;color:#fff'>Please provide referral link</span>")
        $(this).delay(2000).queue(function() {
          $('#sres').html("<span style='padding:5px; color:#fff'></span>")					
								$(this).dequeue();
								});      
	  }
			 
        }
	</script>
<div style="background:#008; width:100%; color:#ffffff; padding-top:15px; padding-bottom:10px;">
		<div class=" container">
			<center>
                <p>&copy; <?php echo date('Y'); ?> Nichme Global Network. All Rights Reserved </p>
			</center> 
		</div>
	</div>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
