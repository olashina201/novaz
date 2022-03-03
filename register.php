<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from maelectrics.com/tf/html/quarter-preview/quarter/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 22:25:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NOVAZ ARC - PROPERTY MANAGEMENT</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php include ("files.php");?>
 <script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script> 

</head>

<body>
 
<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
  <?php include ("navs.php");?>

    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
    <?php include ("navmobile.php");?>

    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <!-- BREADCRUMB AREA END -->

    <!-- LOGIN AREA START (Register) -->
    <div class="ltn__login-area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Register <br>Your Account</h1>
                     </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                        <form action="#" class="ltn__form-box contact-form-box" onSubmit="return false">
                            <input type="text" name="firstname" id="firstname" placeholder="First Name">
                            <input type="text" name="lastname" id="lastname" placeholder="Last Name">
                            <input type="text" name="email" id="email" placeholder="Email*">
                            <input type="password" name="password" id="password" placeholder="Password*">
                            <input type="text" name="passwords" id="passwords" placeholder="Password*" style="display:none">
                            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password*">
                            <label class="checkbox-inline"></label>
                        <div class="ltn__product-tab-content-inner">
                                    <h6>Add Photo</h6>
                                <div class="row">
                                    <div class="col-lg-9">
                                        <p><img id="output" width="180" height="160" style=" border-style:none;">  </p>
                                                                </div>                      
                                        <input type="file" name="photo" id="photo" style="display: none;" onChange="loadFile(event)">
                                            <p><label for="photo" style="cursor: pointer;" >Upload your image</label></p>
                                             </div>
                                    </div>
                                    <p>
                                        <small>* JPEG files upload supported ONLY.</small><br>
                                        <small>* Image should be very sharp.</small>
                                    </p>
                                </div>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="checkacpt" value="">
                                By clicking "create account", I consent to the privacy policy.
                            </label>
                        <div class="btn-wrapper mb-5">
                <button class="theme-btn-1 btn reverse-color btn-block" type="submit" onClick="btnsubmit()">CREATE ACCOUNT</button>
                            </div>
                            
                          <div id="errormsg" class="text-center h3"></div>
                        </form>
 
                        <div class="by-agree text-center">
                            <p>By creating an account, you agree to our:</p>
                            <p><a href="#">TERMS OF CONDITIONS  &nbsp; &nbsp; | &nbsp; &nbsp;  PRIVACY POLICY</a></p>
                            <div class="go-to-btn mt-50">
                                <a href="login">ALREADY HAVE AN ACCOUNT ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<?php include ("footer.php");?>

</div>
 
    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
   
    <!-- Main JS -->
  <script src="js/st.js"></script>
<script>


function btnsubmit()
{
             var fname = $("#firstname").val();
            var lname = $('#lastname').val();
            var email = $('#email').val();
            var pass = $('#password').val();
            var confirmpass = $('#confirmpassword').val();
  			
			 
			
            var typ = "Signup";
 		   
			 if(fname ==""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>First name required!</span>");
 			 }
			 else if(lname == ""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Last name required!</span>");
			 }
			 else if(email == ""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Email required!</span>");
			 }
			 else if(pass == ""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Password required!</span>");
			 }
			 else if(confirmpass == ""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Confirm password required!</span>");
			 }
   			 else if(pass !== confirmpass){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Password missmatch!</span>");
		     }
  			 else{
  					$.ajax({
						url: "api/",
				data: {typ: typ, fname: fname, lname: lname, email: email, pass: pass},
						type: "POST",
						success: function(data)
						{
 							
							if(data.includes("Exist"))
							{
			$('#errormsg').html("<span style='color:red; font-size: 20px;'>Email already taken</span>");
								$(this).delay(1900).queue(function() {
			$('#errormsg').html("<span style='color:green; font-size: 20px;'>n</span>");
								$(this).dequeue();
								});      
							} 
							else if(data.includes("Good"))
							{
			$('#errormsg').html("<span style='color:green; font-size: 20px;'>Account creation Successful</span>");
								$(this).delay(50).queue(function() {
								location.href="account";
								$(this).dequeue();
								});      
							} 
							   
						}                
					});
			     }
}

 </script>
</body>

 </html>

