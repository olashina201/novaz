<?php include ("cpanel/link.php");?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from maelectrics.com/tf/html/quarter-preview/quarter/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 22:24:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NOVAZ ARC - PROPERTY MANAGEMENT | Home</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php include ("files.php");?>
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

 <script src="js/jquery-1.11.2.min.js"></script> 
 <body onload="searchdata()">
<!-- Body main wrapper start -->
<div class="body-wrapper">    
    
    <!-- HEADER AREA START (header-5) -->
<?php include ("navs.php");?>

    <?php include ("navmobile.php");?>
    <div class="ltn__utilize-overlay"></div>

    <div class="ltn__slider-area ltn__slider-3  section-bg-1">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <div class="slide-video mb-50 d-none">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <h6 class="slide-sub-title white-color--- animated"><span><i class="fas fa-home"></i></span> Real Estate Agency</h6>
                                        <h1 class="slide-title animated ">Find a home <br> that stays in your budget.</h1>
                                        <div class="slide-brief animated">
                                            <p>Buying a home is not something you do every day—it’s a big deal! Our goal is to take the guesswork out and help you get a stress-free house that you won’t regret.</p>
                                        </div>
                                        <div class="btn-wrapper animated" style="display: none;">
                                            <a href="about" class="theme-btn-1 btn btn-effect-1">Make An Enquiry</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item-img">
                                    <img src="img/slider/21.png" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   
        </div>
    </div>

<section>
    <div class="ltn__car-dealer-form-area mt--65 mt-120 pb-115---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__car-dealer-form-tab">
                        <div class="ltn__tab-menu  text-uppercase d-none">
                            <div class="nav">
                                <a class="active show" data-bs-toggle="tab" href="#ltn__form_tab_1_1"><i class="fas fa-car"></i>Find A Car</a>
                                <a data-bs-toggle="tab" href="#ltn__form_tab_1_2" class=""><i class="far fa-user"></i>Get a Dealer</a>
                            </div>
                        </div>
                        <div class="tab-content bg-white box-shadow-1 position-relative pb-10">
                            <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                                <div class="car-dealer-form-inner">
                                    <form method="post" class="ltn__car-dealer-form-box row" onSubmit="return false" >
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-3 col-md-6">
                                            <input type="text" id="area" name="area" class="form-control"  placeholder="Property location" style="font-size: 16px; font-weight: 520; ">
                                         </div> 
										 
										 
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-3 col-md-6">
                                            <select class="nice-select" id="status" name="status">
                                                <option Value ="" selected="selected">Property Status</option>
                                                 <option value="1">Rent</option>
                                                <option value="2">Sale</option>
                                             </select>
                                        </div> 
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-calendar---- col-lg-3 col-md-6">
                                            <select class="nice-select" id="ptype" name="ptype">
                                                <option Value ="" selected="selected">Select Type</option>
                                                <option value="7">Apartment</option>
												<option value="1">Houses</option>
                                                <option value="2">Hostel</option>
                                                <option value="3">Lands</option>
                                                <option value="4">Shortlet</option>
                                                <option value="5">Shops</option>
                                                <option value="6">Offices</option>
                                            </select>
                                        </div>
                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                            <div class="btn-wrapper text-center mt-0">
                                                <button type="submit" name="searchme" onClick="Searhproperty()" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search</button>
                                            </div>
                                        </div>
                                    </form>
									<div id="resultss" class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			

        </div>
    </div>
	
    <div class="ltn__car-dealer-form-area mt--65 mt-120 pb-115---">
           <div class="container">
            <div class="row">
			  <div class="col-lg-12">
				<div class="modal fade" id="Editdiag" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
					   <div class="modal-content">
					  
						  <div class="row">
							  <form method="post" class="form-horizontal" onSubmit="return false">
							  <div class="col-lg-12">
									
									   <div class="row">   
										  <div class="col-lg-12">  
											<div caass="row">    
											   <div class="form-group ">
												 <label class="col-lg-12 text-center h3"><strong>Operations </strong></label>
													<div class="col-lg-12" style="min-height: 200px;">
												       <div id="result">


													   </div>
													</div>
											   </div>
											 </div>
										   </div>
										 
										   
										 </div>
								 
							   </div>
					  <div class="text-center" id="upddiags" style="font-size:16px;"> </div>                               
		  
							   </form>
									</div>
  
					   </div>
					</div>

				</div>
			  </div> 	
			</div>
		   </div>
	</div>
	
    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1---  mb-120---">
                <br> <br> <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color h1">Our Services</h6>
                    </div>
                </div>
				 
            </div>
			<br> <br>
            <div class="row ltn__custom-gutter---  justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house"></i></span> -->
                            <img src="img/icons/icon-img/21.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3>Buy a property</h3>
                            <p>Let us help you through the process of buying a home.</p>
							<a class="ltn__service-btn" href="shoppages">Click here <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-house-3"></i></span> -->
                            <img src="img/icons/icon-img/22.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3>Rent a property</h3>
                            <p>We can help you find the perfect apartment of your choice.</p>
							<a class="ltn__service-btn" href="shoppages">Click here <i class="flaticon-right-arrow"></i></a>
						</div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-deal-1"></i></span> -->
                            <img src="img/icons/icon-img/23.png" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h3>Sell a property</h3>
                            <p>We can help you on how to sell your home effortlessly with seamless transition.</p>
							<a class="ltn__service-btn" href="users/login">Click here <i class="flaticon-right-arrow"></i></a>

						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter ">
        <div class="container">
            <br> <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color h1">Featured Listing</h6>
                     </div>
                </div>
            </div>
        
  <div id="fetchhome"> </div>

        </div>
    </div>

    <br> <br> 
       <!-- TESTIMONIAL AREA START -->
    <div class="ltn__testimonial-area ltn__testimonial-4 plr--9" style="display: ;">
                <br> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color h1">Clients Feedback</h6>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__testimonial-slider-4 ltn__testimonial-slider-4-active slick-arrow-1">
                        <div class="ltn__testimonial-item-5">
                             
                            <div class="ltn__testimonial-image">
                                
                            </div>
                            <div class="ltn__testimonial-info">
                                <p> I appreciate the market analysis you brought to the table as it helped to ground the discussion on concessions, asking rents and street rents in our market. </p>
                                <h4>Sola Ogundipe</h4>
                             </div>
                        </div>
                        <div class="ltn__testimonial-item-5">
                         
                            <div class="ltn__testimonial-image"></div>
                            <div class="ltn__testimonial-info">
                                <p>I want to thank you guys for all the help at the office. The moment I called asking for information, I knew this would be the property I would move into. It’s not easy relocating from out of town, but Novaz Arc made it a seamless transition.
                                    I enjoy coming into the office, everyone is so full of energy and if I have an issue I can definitely rely on them </p>
                                <h4>Oluwadamilare Segunloba</h4>
                             </div>
                        </div>
                        
                        <div class="ltn__testimonial-item-5">
                             
                            <div class="ltn__testimonial-image"></div>
                            <div class="ltn__testimonial-info">
                                <p>while everyone struggled to get a nice legit hostel Novaz Arc got my back  with a nice hostel with no stress, i'm saying a special thanks to Ayo Kareem very active and satisfying. Thank you very much. </p>
                                <h4>Shade Olaniyi</h4>
                             </div>
                        </div>

                        <div class="ltn__testimonial-item-5">
                           
                            <div class="ltn__testimonial-image"></div>
                            <div class="ltn__testimonial-info">
                                <p>To be honest I have never seen a website that makes finding any type of property a piece of cake like Novaz Arc, this team are the best. </p>
                                <h4>Timmy Mason</h4>
                             </div>
                        </div>
                    </div>
                    <ul class="ltn__testimonial-quote-menu d-none d-lg-block">
                        <li style="display: none;"><img src="" alt="Quote image"></li>
                        <li style="display: none;"><img src="" alt="Quote image"></li>
                        <li style="display: none;"><img src="" alt="Quote image"></li>
                        <li style="display: none;"><img src="" alt="Quote image"></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
 
 
<?php include ("footer.php");?>

 
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
<script>



	function searchdata()
        {
             var typ = 'searchdata';
           
                  $.ajax({
                    url: "fetchfeatures.php",
                    data: {typ: typ},
                    type: "POST",
                    success: function(result)  
                    {
   							$("#fetchhome").html(result);
                    }
                });
        }
		
 function  searchimages(){
			var diags =  $(this).closest('tr').find('.diag_id').text();
			var regiid =  $(this).closest('tr').find('.regi_id').text(); 

			var hospitalid =  $(this).closest('tr').find('.hospital_id').text(); 

			var branchid =  $(this).closest('tr').find('.branch_id').text(); 

             var typ = "Diagnosis";

                $.ajax({
					type: "POST",
                    url: "scripts/",
					cache:false,
                    data: {typ: typ, diags: diags, regiid: regiid, hospitalid: hospitalid, branchid: branchid},
                     success: function(result)  
                    {
 						  //console.log(result);
						  $.each(result, function (key, value){
							 $('#sid').val(value['id']); 
							 $('#hospitalid').val(value['hospitalid']); 
							 $('#branchid').val(value['branchid']); 
							 $('#registerid').val(value['registerid']); 
							 $('#taskid').val(value['taskid']); 
							 $('#pcompts').val(value['complaints']); 
							 $('#clinicalsigns').val(value['clinicalsigns']); 
							 $('#diagnosis').val(value['diagnosis']); 
						  });
						  $('#Editdiag').modal('show');
                     }
                });
		 
 }
 
 
 function Searhproperty()
        {
			//$('#Editdiag').modal('show');
			
            var area = $("#area").val();
            var status = $("#status").val();
            var type = $("#ptype").val();
			
             var typ = 'Prtysearch';
			 
            if(area == "" && status =="" && type =="" )
             {
                //alert("Okey");
				$('#resultss').html("<center><h3 style='color:red'><i class='fa fa-exclamation-circle'></i>Please provide all criteria to proceed</h3></center>");
			 }
 			else{
              $('#resultss').html("<center><br><h3><i class='fa fa-spinner fa-spin'></i> Searching...</h3></center>");
                $.ajax({
                    url: "/checkav/",
                    data: {typ: typ, area: area, status: status, type: type},
                    type: "POST",
                    success: function(result)  
                    {
							//$(resultss).html(result);
 							if(result.includes("Not"))
							{
								$(this).delay(2000).queue(function()
								{ 
						$('#resultss').html("<center> <h3 style='color:red; text-align:center; font-size: 20px;'>No records found with your selections </h3></center>");
								$(this).dequeue();
								}); 
							}
 							else if(result.includes("Successful"))
							{
																	 
						       location.href="search-show";
						
							}
						 
                    }
                });
              }
        }
 
 
</script>
    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  
</body>
<?php 
if(isset($_POST['searchmess']))
{
        $area = strip_tags( $_POST['area']);
 		$status = strip_tags ( $_POST['status']);
		$stype = strip_tags ( $_POST['ptype']);
   		$goin = 0;
 
		if(empty($area)or empty($status) or empty($ptype))
		{
						?>
						<script> //alert("Successful");
						$('#resultss').html("<center> <h3 style='color:red; text-align:center; font-size: 20px;'>Please provide all criteria to proceed</h3></center>");

						</script>
						<?php
		}
		else
		{
  		 
  					$queryf  = mysqli_query($link, "SELECT * FROM business
					 WHERE address LIKE '%$area%' AND purpose = '$status' AND cate = '$stype' 
 					 AND promotion = 'active' ");
 					if(mysqli_fetch_assoc($queryf))
					{  
				include("loc.php");
					}
					else
					{
						?>
						<script> //alert("Successful");
						$('#resultss').html("<center> <h3 style='color:red; text-align:center; font-size: 20px;'>No records found with your selections </h3></center>");

						</script>
						<?php
					}
		}		

}
?>
<!-- Mirrored from maelectrics.com/tf/html/quarter-preview/quarter/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 22:24:47 GMT -->
</html>

