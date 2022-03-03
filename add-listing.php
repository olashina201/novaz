<?php 
session_start();
include ("cpanel/link.php");
if(empty($_SESSION['LOGIN_STATE']))
{
	// echo 'sesson is empty';
	//header("Location: https://getniche.nichme.com/login");
			echo '<script> location.href="../login";</script>';
exit();
}
 
$_SESSION['US_mail'] ;
$_SESSION['US_fn'] ;
$_SESSION['US_ln'] ;

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
	?>
    
    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
 <?php include ("navmobile.php");?>
     <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <h1 class="page-title">Add Listing</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="../"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Add Listing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    
    <div class="ltn__appointment-area pt-115--- pb-120">
        <div class="container" >
        <div class="text-center h2">Post Listing</div><br>
            <div class="row">
                <div class="col-lg-2"> 
                </div>                   
                <div class="col-lg-8">                    
                    <form id="fdata" method="post" onSubmit="return false">
                      
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_tab_3_1">
                                <div class="ltn__apartments-tab-content-inner">
                                <div class="ltn__product-tab-content-inner">
                                    <h6>Add Photo</h6>
                                          <div class="row">
                                             
                                    <div class="col-sm-9">
                                          <div class="col-lg-9">
     			<p><img id="output" width="180" height="160" style=" border-style:none;">  </p>
                    					  </div>                      
			<input type="file" name="photo" id="photo" style="display: none;" onChange="loadFile(event)">
					<p><label for="photo" style="cursor: pointer;" >Upload Image</label></p>
                                             </div>
                                          </div>
                                    <p>
                                        <small>* At least 1 image is required for a valid submission.Minimum size is 850/650px.</small><br>
                                        <small>* JPEG files upload supported ONLY.</small><br>
                                        <small>* Image should be very sharp.</small>
                                    </p>
                                </div>
                                    <h6>Property Description</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                            	<div class="col-md-6">
                                                <div class="input-item input-item-name ">
                                                 <label> Category:</label>
                                                    <select name="category" class="nice-select form-control" id="category">
                                                        <option Value ="" selected="selected">Select</option>
                                                        <option value="1">Houses</option>
                                                        <option value="2">Hostel</option>
                                                        <option value="3">Lands</option>
                                                        <option value="4">Shortlet</option>
                                                        <option value="5">Shops</option>
                                                        <option value="6">Offices</option>
                                                    </select>
                                                </div>
                                                </div>
                                            	<div class="col-md-6">
                                                <div class="input-item input-item-textarea ">
                                                <label> Purpose:</label>
                                                <select name="purpose" class="nice-select form-control" id="purpose">
                                                    <option Value ="" selected="selected">Select</option>
                                                    <option value="1">For rent</option>
                                                    <option value="2">For sale</option>
                                                </select>
                                                </div>
                                                </div>
                                            </div>
                                         </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name">
                                            <label>Brief Description: </label>
                                                <input type="text" name="description" id="description" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="input-item input-item-textarea ">
                                            <label>Detail Description: </label>
                                              <textarea name="detaildescript" id="detaildescript" placeholder="Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Property Price / Size</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                          <div class="row">
                                          	 <div class=" col-md-6">
                                        <label>Price:</label>
                                            <div class="input-item  input-item-name ">
                                                <input name="price" type="text" id="price" placeholder="Price in numbers">
                                            </div>
                                             </div>
                                          	 <div class=" col-md-6">
                                        <label>Time period:</label>
                                            <div class="input-item  input-item-name ">
                                                <select name="tperiod" class="nice-select form-control" id="tperiod">
                                                    <option Value ="" selected="selected">Select</option>
                                                    <option value="1">Monthly</option>
                                                    <option value="2">Annually</option>
                                                    <option value="3">One Off</option>
                                                </select>
                                            </div>
                                             </div>
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                        <label>Size description</label>
                                            <div class="input-item input-item-textarea ">
                                                <input name="sizedescription" type="text" id="sizedescription" placeholder="brief description (e.g. 3X4)">
                                            </div>
                                        </div>
                                    </div>
                            <div class="row">
                                <h6>Location</h6>
                                   
                                <div class="col-md-6">
                                <div class="input-item ">
                                                 <label> Country:</label>
                                                    <select name="country" class="nice-select form-control" id="country">
                                                        <option Value ="" selected="selected">Select</option>
                                                        <?php 
														$mo = mysqli_query($link, "SELECT * FROM country
														ORDER BY cname ASC
														");
														while($row = mysqli_fetch_array($mo))
														{
															
												  	?>
                                                    <option><?php echo $row['cname'];?> </option>
                                                    <?php
															
														}
														
														?>
                                                    </select>
                                </div>   

                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ">
                                    <label> State:</label>
                                        <select name="state" class="nice-select form-control" id="state">
                                                            <option Value ="" selected="selected">Select</option>
                                                            <option value="1">Houses</option>
                                                            <option value="2">Hostel</option>
                                                            <option value="3">Lands</option>
                                                            <option value="4">Shortlet</option>
                                                            <option value="5">Shops</option>
                                                            <option value="6">Offices</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ">
                                    <label> L.G.A.:</label>
                                        <select name="lga" class="nice-select form-control" id="lga">
                                                            <option Value ="" selected="selected">Select</option>
                                                            <option value="1">Houses</option>
                                                            <option value="2">Hostel</option>
                                                            <option value="3">Lands</option>
                                                            <option value="4">Shortlet</option>
                                                            <option value="5">Shops</option>
                                                            <option value="6">Offices</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ">
                                    <label>City</label>
                                        <input name="city" type="text" id="city" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ">
                                    <label>Street</label>
                                        <input name="neigb" type="text" id="neigb" placeholder="Street">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-item input-item-name ">
                                    <label>House No. / address</label>
                                        <input name="hno" type="text" id="hno" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <h6>Property Address</h6>
                                    <div class="row">
                                       
                                      <div class="col-md-6">
                                            <div class="input-item input-item-textarea ">
                                              <label>Address: </label>
                                              <textarea name="address" id="address"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-textarea ">
                                              <label>Estate name: </label>
                                              <input Type="text" name="estate" id="estate" >
                                            </div>
                                            <div class="input-item input-item-textarea ">
                                              <label>Property size: </label>
                                              <input Type="text" name="size" id="size" >
                                            </div>
                                        </div>
                                    </div>

                                   
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-item input-item-name ">
                                                <label> Property Type</label>
                                                     <select name="category" class="nice-select form-control" id="category">
                                                        <option Value ="" selected="selected">Select</option>
                                                        <option value="1">Condo</option>
                                                        <option value="2">Bungalow</option>
                                                        <option value="3">Duplex</option>
                                                        <option value="4">detached</option>
                                                        <option value="5">Farmhouse</option>
                                                        <option value="6">Penthouse</option>
                                                        <option value="7">Studio</option>
                                                        <option value="8">Miniflat</option>
                                                        <option value="9">Villa</option>
                                                        <option value="10">Mansion</option>
                                                        <option value="11">Castle</option>
                                                        <option value="12">Room & Parlor</option>
                                                        
                                                    </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="input-item input-item-textarea ">
                                                    <label> Condition:</label>
                                                    <select name="condition" class="nice-select form-control" id="condition">
                                                        <option Value ="" selected="selected">Select</option>
                                                        <option value="1">Faily Used</option>
                                                        <option value="2">Newly Built</option>
                                                        <option value="3">Used</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-item input-item-textarea ">
                                                    <label> Furnishing:</label>
                                                    <select name="furnishing" class="nice-select form-control" id="furnishing">
                                                        <option Value ="" selected="selected">Select</option>
                                                        <option value="1">Semi Furnishing</option>
                                                        <option value="2">Furnished</option>
                                                        <option value="3">Not Furnished</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                         
                                         
                                        
                                       
                                    </div>                 
                         </div>
                            <div class="btn-wrapper text-center mt-30">
                     <input type="submit" onClick=" Postings()" class="btn btn-primary" value="Add listing">
                            </div>
                            </div>
                         </div>

                     </form>
                                  <div id="lres" class="text-center" style="padding-top:30px;"></div><br> <br>

                </div>
            </div>


 
        </div>
    </div>
<script>

function Postings()
{
  
  			var fd = new FormData($("#fdata")[0]);
			

			var photo = $('#photo').val();
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
		
		   var basename = photo.replace(/\\/g,'/').replace(/.*\//, '');
			var fileParts = $("#photo").val().split(".");
 			 
			var typ = "Listing";
            if(cate !="" && catedesc !=""&& price !=""&& size !=""&& address !=""&& country !=""&& state !=""&& city !="" 
			&& neigb != "" && zip !="" && basename !="")
            {
 		 
              $.ajax({
              url: 'assets/',
              type: 'post',
              data: fd,
              contentType: false,
              processData: false,
			  success: function(data)
                    {
                           
                        if(data.includes("Good"))
                        {
                $('#lres').html("<span style='padding:5px;color:green;'>Operation Successful</span>")
                             $(this).delay(1000).queue(function() {
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
                            $(this).delay(200).queue(function() {
                $('#lres').html("<span style='padding:5px;color:#fff'></span>")
                            $(this).dequeue();
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

