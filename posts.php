<?php 
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">


 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IEe=edge">
    <title>NOVAZ ARC - PROPERTY MANAGEMENT | Add Listing</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="">


    <!-- Place favicon.png in the root directory -->
    <?php include ("files.php");?>
    <script src="js/jquery.min.js"></script>
    
 <script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script> 


</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
<?php 
	if($_SESSION['LOGIN_STATE'] ==true)
		{
		include ("navs-log.php");	
		}
		else
		{
		include ("navs.php");	
		}
	?>    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
 <?php include ("navmobile.php");?>
     <!-- Utilize Mobile Menu End -->

 
  
      
    <div class="ltn__appointment-area pt-115--- pb-120"> <br><br>
         <div class="text-center h2">Account required</div><br>
    <div class="ltn__appointment-area pt-115--- pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="account-login-inner" id="loginhere">
                    		
                        <form action="#" class="ltn__form-box contact-form-box" onSubmit="return false">
                           <div class="h4">Sign in</div>
                            <input type="text" name="email" id="email" placeholder="Email*">
                            <input type="password" name="password" id="password" placeholder="Password*">
                            <div class="btn-wrapper mt-0">
                                <button class="theme-btn-1 btn btn-block" id="sng" onClick="Signin()" type="submit">SIGN IN</button>
                            </div>
                            <br>
                   <div id="lres" class="text-center h4"></div>
                        </form>
                            <div class="go-to-btn mt-20">
                                 <button class="btn " type="submit" onClick="Fgpass()" ><small>FORGOTTEN YOUR PASSWORD</small></button>
                            </div>
                    </div>
                    <div class="account-login-inner" id="resetpass" style="display:none">
                        <form action="#" class="ltn__form-box contact-form-box" onSubmit="return false">
                            	<div class="h4">Reset password</div>
                            <input type="text" name="email" placeholder="Email*">
                             <div class="btn-wrapper mt-0">
                                <button class="theme-btn-1 btn btn-block" type="submit" onClick="Resetpass()" >Reset Password</button>
                            </div>
                        </form>
                            <div class="go-to-btn mt-20">
                                <button class="btn " type="submit" onClick="Logshow()" ><small>LOGIN HERE</small></button>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6">
                         <form action="#" class="ltn__form-box contact-form-box" onSubmit="return false">
                            	<div class="h4">Create account</div>
                            <input type="text" name="firstname" id="firstname" placeholder="First Name">
                            <input type="text" name="lastname" id="lastname" placeholder="Last Name">
                            <input type="text" name="email" id="email" placeholder="Email*">
                            <input type="password" name="password" id="password" placeholder="Password*">
                            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password*">
                            <label class="checkbox-inline">
 
                             </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="checkacpt" value="">
                                By clicking "create account", I consent to the privacy policy.
                            </label>
                            <div class="btn-wrapper mb-5">
                <button class="theme-btn-1 btn reverse-color btn-block" type="submit" onClick="btnsubmit()">CREATE ACCOUNT</button>
                            </div>
                            <div id="errormsg" class="text-center h3"></div>
                        </form>
                     
                </div>
            </div>
        </div>
    </div>

 
    </div>
<script>

function Postings()
{
			 
			var file = $('#file').val();
            var cate = $('#category').val();
            var catedesc = $('#description').val();
            var price = $('#price').val();
            var size = $('#sizedescription').val();
            var address = $('#address').val();
            var country = $('#country').val();
            var state = $('#state').val();
            var city = $('#city').val();
            var neigb = $('#neigb').val();
            var zip = $('#zip').val();
			
		   var basename = file.replace(/\\/g,'/').replace(/.*\//, '');
			var fileParts = $("#file").val().split(".");
 			 
			var typ = "Listing";
             if(cate !="" && catedesc !=""&& price !=""&& size !=""&& address !=""&& country !=""&& state !=""&& city !="" 
			&& neigb != "" && zip !="" && basename !="")
            {
                 $('#lres').html("<span class='btn-primary' style='padding:5px'><i class='fa fa-spinner fa-spin'></i> Working...</span>");
               alert(catedesc);
			    $.ajax({
                    url: "/api/",
                    data: {typ: typ, cate: cate, catedesc: catedesc, price: price, size: size, address: address,
					 country: country, state: state, city: city, neigb: neigb, zip: zip},
                    type: "POST",
                    success: function(data)
                    {
                        $('#lres').html(data);
				document.getElementById("sng").disabled = false;
                        if(data.includes("Terminated"))
                        {
                            $(this).delay(200).queue(function() {
                            $(this).dequeue();
                            });      
                        }    
                        else if(data.includes("Successful"))
                        {
				document.getElementById("sng").disabled = false;
                            $(this).delay(200).queue(function() {
                                location.href="account";
                            $(this).dequeue();
                            });      
                        }    
                    }                
                });
            }
            else
            {
                $('#lres').html("<span style='padding:5px;color:#f00'> All fields required!</span>")
                            $(this).delay(2000).queue(function() {
                $('#lres').html("<span style='padding:5px;color:#fff'></span>")
                            $(this).dequeue();
                            });      

            }

	
}

 
 
		function Fgpass()
		{
 			document.getElementById("resetpass").style.display = 'block';
			document.getElementById("loginhere").style.display = 'none';
		}
		
		function Logshow()
		{
 			document.getElementById("resetpass").style.display = 'none';
			document.getElementById("loginhere").style.display = 'block';
 		}

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
								$(this).delay(100).queue(function() {
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

    <?php include ("footer.php");?>
    <!-- FOOTER AREA END -->

</div>
<script src="js/jquery.min.js" type="text/javascript"></script>
 

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>

 </html>

