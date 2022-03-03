<?php include ("cpanel/link.php");?>

<?php 
session_start();

 $pid = $_GET['pid'];

 $_SESSION['pid'] = $pid ;


?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from maelectrics.com/tf/html/quarter-preview/quarter/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 22:25:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NOVAZ ARC - PROPERTY MANAGEMENT | Description</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style>
	 	
	.whatsappbutton { background-color: #7ACC72; /* Green */ border: none; color: white; text-align: center; text-decoration: none; font-size: 16px; border-radius: 20px; padding: 10px 20px; margin-top: 10px !important; width: fit-content; margin: auto; cursor: pointer }

	.whatsappbutton span { vertical-align: text-bottom !important; }

	.fa-whatsapp { margin-right: 10px; }
	
	</style>


    <!-- Place favicon.png in the root directory -->
<?php include ("files.php");?>
</head>

<body onload="searchdata()">


<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
<?php include ("navs.php");?>
    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
<?php include ("navmobile.php");?>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0"  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Product Details</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="../"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Product Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
<?php //require ("assets/ftprodt.php");
$qr = mysqli_query($link, "SELECT * FROM business WHERE id ='$pid'");
$bsn = mysqli_num_rows($qr) > 0;

$qry  = mysqli_query($link, "SELECT * FROM business WHERE id = '$pid' ");
$rows = mysqli_fetch_array($qry) ;

 $uid = $rows['uid'];
                          
$qrs = mysqli_query($link, "SELECT * FROM user WHERE id ='$uid' ");
$rowu = mysqli_fetch_array($qrs); 

  
 
if($rows['cate'] == 1)
{
  $cate = 'House';
}
elseif($rows['cate'] == 2) 
{
    $cate = 'Hostel';
}
elseif($rows['cate'] == 3)
{
    $cate = 'Land';
}
elseif($rows['cate'] == 4)
{
    $cate = 'Shortlet';
}
elseif($rows['cate'] == 5) 
{
    $cate = 'Shop';
}
elseif($rows['cate'] == 6)
{ 
    $cate = 'Office';
}

if($rows['purpose'] == 1)
{
  $pup = 'For Rent';
}
elseif($rows['purpose'] == 2) 
{
    $pup = 'For Sale';
}

if($rows['pspace'] == 1)
{
  $pspace = 'Yes';
}
elseif($rows['purpose'] == 2) 
{
    $pspace = 'No';
}

if($rows['ptype'] == 1)
{
  $ptype = 'Condo';
}
elseif($rows['ptype'] == 2) 
{
    $ptype = 'Bungalow';
}
elseif($rows['ptype'] == 3) 
{
    $ptype = 'Duplex';
}
elseif($rows['ptype'] == 4) 
{
    $ptype = 'Detach';
}
elseif($rows['ptype'] == 5) 
{
    $ptype = 'Farmhouse';
}
elseif($rows['ptype'] == 6) 
{
    $ptype = 'Penthouse';
}
elseif($rows['ptype'] == 7) 
{
    $ptype = 'Studio';
}
elseif($rows['ptype'] == 8) 
{
    $ptype = 'Miniflat';
}
elseif($rows['ptype'] == 9) 
{
    $ptype = 'Villa';
}
elseif($rows['ptype'] == 10) 
{
    $ptype = 'Mansion';
}
elseif($rows['ptype'] ==11) 
{
    $ptype = 'Castle';
}
elseif($rows['ptype'] == 12) 
{
    $ptype = 'Room & Parlor';
}

if($rows['pspace'] == 1)
{
  $pspace = 'Yes';
}
elseif($rows['pspace'] == 2) 
{
    $pspace = 'No';
}

if($rows['condition'] == 1) 
{
    $condition = 'Faily Used';
}
elseif($rows['condition'] ==2) 
{
    $condition = 'Newly Built';
}
elseif($rows['condition'] == 3) 
{
    $condition = 'Used';
}

if($rows['furnit'] == 1) 
{
    $furniture = 'Semi Furnishing';
}
elseif($rows['furnit'] ==2) 
{
    $furniture = 'Furnished';
}
elseif($rows['furnit'] == 3) 
{
    $furniture = 'Not Furnished';
}

if($rows['negotiable'] == 1) 
{
    $negotiable = 'Negotiable';
}
elseif($rows['negotiable'] ==2) 
{
    $negotiable = 'Not Negotiable';
}

$transid = $rows['busiid'];  
$uids = $rows['uid'];  
 

?>

                    <?php  
					 if($bsn)
 					 {
						while($rcs = mysqli_fetch_assoc($qr))
						{
                            
							?>
    

    <div class="ltn__img-slider-area mb-90">
        <div class="container-fluid">
							<?php
								$imgs = mysqli_query($link, "SELECT * FROM images WHERE transid ='$transid' ");
								$rimg = mysqli_num_rows($imgs); 

							?>
            <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
				<?php 
					while($rmgs = mysqli_fetch_assoc($imgs))
						{
                           
                          ?>
				
				 
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="uploads/<?php echo $rmgs['imagename'];?>" alt="Image"  data-rel="lightcase:myCollection">
                            <img src="uploads/<?php echo $rmgs['imagename'];?>" alt="Image" width="1904" height="450" >
                        </a>
                    </div>
                </div>
						  <?php
						}
						
						
				?>
			   
			  
				 
               
            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-category">
                                    <a class="">Featured</a>
                                </li>
                                <li class="ltn__blog-category">
                                    <a class="bg-orange" ><?php echo $pup ?></a>
                                </li>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i><?php echo $rows['sumnitdate'];?>
                                </li>
                               
                            </ul>
                        </div>
                        <h1><?php echo $rowu['compname'];?></h1>
                        <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span><?php echo $rows['address'];?></label>
                        <h4 class="title-2">Description</h4>
                        <?php echo $rows['catedescript'];?>

                        <h4 class="title-2">Property Detail</h4>  
                        <div class="property-detail-info-list section-bg-1 clearfix mb-60">                          
                            <ul>
                                 <li><label>Estate name: </label> <span><?php echo $rows['estname'];?></span></li>
                                <li><label>Property size:</label> <span><?php echo $rows['psize'];?></span></li>
                                <li><label>Parking space:</label> <span><?php echo $pspace; ?></span></li>
                             </ul>
                            <ul>
                                <li><label> Property Type:</label> <span><?php echo $ptype;?> </span></li>
                                <li><label>Property Condition:</label> <span><?php echo $condition;?></span></li>
                                <li><label>Furnishing:</label> <span>
                                <?php 
                                 
                                  
                                
                                
                                echo $furniture; ?></span></li>
                                <li><label>Bathroom:</label> <span><?php echo $rows['broom']; ?></span></li>
                                <li><label>Toilets:</label> <span><?php echo $rows['toilet']; ?> </span></li>
                            </ul>
                        </div>
                                        
                        <h4 class="title-2">Facilities</h4>
                        <div class="property-detail-feature-list clearfix mb-45">                            
                            <ul>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>24 Hours Electricity</h6>
                                            <small><?php echo $rows['elec']; ?> </small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Air Conditioning </h6>
                                            <small><?php echo $rows['aric']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Apartment</h6>
                                            <small><?php echo $rows['appart']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Balcony</h6>
                                            <small><?php echo $rows['bal']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Chandelier</h6>
                                            <small><?php echo $rows['chan']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Dining Area</h6>
                                            <small><?php echo $rows['dinning']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Dishwasher</h6>
                                            <small><?php echo $rows['dish']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Hot water</h6>
                                            <small><?php echo $rows['hot']; ?></small>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Kitchen Carbinet</h6>
                                            <small><?php echo $rows['kitchen']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Microwave</h6>
                                            <small><?php echo $rows['micro']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Pop Ceiling</h6>
                                            <small><?php echo $rows['pop']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Prepaid Meter</h6>
                                            <small><?php echo $rows['prepa']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Refrigerator</h6>
                                            <small><?php echo $rows['frid']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Tiled Floor</h6>
                                            <small><?php echo $rows['floor']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>T.V. </h6>
                                            <small><?php echo $rows['tv']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Wardrobe</h6>
                                            <small><?php echo $rows['war']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Wifi</h6>
                                            <small><?php echo $rows['wifi']; ?></small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="property-detail-feature-list-item">
                                        <i class="flaticon-double-bed"></i>
                                        <div>
                                            <h6>Kitchen Shelf</h6>
                                            <small><?php echo $rows['shelf']; ?></small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                         

 
                        <h4 class="title-2">Location</h4>
                        <div class=" ">
                            <?php echo $rows['address']; ?>
                         <br> <br> 
                         </div>
 
                        
                        <div class="ltn__shop-details-tab-content-inner--- ltn__shop-details-tab-inner-2 ltn__product-details-review-inner mb-60">
                            <h4 class="title-2">Customer Reviews</h4>
                            
                            <hr>
                            <!-- comment-area -->
                            <div class="ltn__comment-area mb-30">
                                <div class="ltn__comment-inner">
                                    <ul>
                                        <li>
                                            <div class="ltn__comment-item clearfix">
                                            <?php
                                            $qrs = mysqli_query($link, "SELECT * FROM posts
                                                WHERE prodid = '$pid' ");
                                                while($alcmt = mysqli_fetch_array($qrs))
                                                {
                                                    ?>
                                                    <div class="ltn__commenter-comment">
                                                        <h6><?php echo $alcmt['name'];?>  </h6>
                                                            <div class="product-ratting">
                                                                                    
                                                            </div>  
                                                        <p> <?php echo $alcmt['comments'];?></p> <br> 
                                                        <span class="ltn__comment-reply-btn"><?php echo $alcmt['pdate'];?></span>
                                                    </div>
                                                    <?php
                                                    
                                                }

                                               ?>
                                               </div>
                                        </li>
                                    </ul>
                                </div>
                           <div id ="showmes"> </div>
                            </div>

                            <div class="ltn__comment-reply-area ltn__form-box mb-30">
                                <form method="post" id="myform" onSubmit="return false;">
                                    <h4>Add a Review</h4>
                                    <div class="mb-30">
                                        <div class="add-a-review" style="display:none"> 
                                            <h6>Your Ratings:</h6>
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-item input-item-textarea ltn__custom-icon">
                                        <textarea id="comments"  name="comments" require placeholder="Type your comments...."></textarea>
                                    </div>
                                    <div class="input-item input-item-name ltn__custom-icon">
                                        <input type="text" id="name"  name="name" require placeholder="Type your name....">
                                        <input type="text" id="uid"  name="uid" require value="<?php echo $uid;?>" style="display:none;">
                                        <input type="text" id="pid"  name="pid" require value="<?php echo $pid;?>" style="display:none;">
                                    </div>
                                    <div class="input-item input-item-email ltn__custom-icon">
                                        <input type="email" id="email"  name="email" require placeholder="Type your email....">
                                    </div>
                                    <label class="mb-0" style="display:none"><input type="checkbox"  name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>
                                    <div class="btn-wrapper">
                                        <button class="btn theme-btn-1 btn-effect-1 text-uppercase" onClick="Postreview()" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                      <div id="showme"> </div>
                    </div>
                </div>
                
   <script>
   		function Postreview()
		 
        {

          var fd = new FormData($("#myform")[0]);

            var name = $('#name').val();
            var email = $('#email').val();
            var comments = $('#comments').val();
   
 		     if(name != "" && email !="" && comments != "")
			 {
  			    $.ajax({
				url: 'posts/',
				type: 'post',
                data: fd,
                contentType: false,
                processData: false,
				success: function(data)
						{
						 
 							if(data.includes("Successful"))
							{
							$('#showme').html(data);
                                  location.href="https://www.novazarc.com/product-details?pid=<?php echo $pid;?>"
 							} 
							   
						}                
					});
			 }
			 else
			 {
                $('#showme').html("Please provide all details");
			 }
			 
         }	
		 
		 
function searchdata()
        {
			 
             var typ = 'searchdata';
           
                  $.ajax({
                    url: "posts/posts.php",
                    type: "POST",
                    success: function(result)  
                    {
   							$("#showposts").html(result);
                    }
                });
    }
		 
   </script>             
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
                        <!-- Author Widget -->
                        <div class="widget ltn__author-widget">
                            <div class="ltn__author-widget-inner text-center">
                                <img src="upreg/<?php echo $rowu['uimg'];?>" alt="Image">
                                <h5><?php echo $rowu['fname']. ' ' . $rowu['lname'];?></h5>
                                <small>Property Agent</small>
                                <div class="product-ratting">
                                    <ul style="display:none">
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li class="review-total"> <a href="#"> ( 1 Reviews )</a></li>
                                    </ul>
                                </div>
                                <p></p>
                                <div class="ltn__social-media">
                                    <ul style="display:none">
                                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                        
                                        <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                        <!-- Form Widget -->
                        <div class="widget ltn__form-widget">
                             <form action="#">
                            <a href="https://api.whatsapp.com/send?phone=234<?php echo $rowu['phone']; ?>" class=" whatsappbutton"> Chat with agent on whatsapp</a>
                             </form>
                        </div>
                       
                          
                        <div class="widget ltn__banner-widget d-none">
                            <a href="shop.html"><img src="img/banner/2.jpg" alt="#"></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pb-70 d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center---">
                        <h1 class="section-title">Related Properties</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__related-product-slider-two-active slick-arrow-1">
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/1.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Rent</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/2.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Sale</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/3.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Rent</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/4.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Rent</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ltn__product-item -->
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                        <div class="product-img">
                            <a href="product-details.html"><img src="img/product-3/5.jpg" alt="#"></a>
                            <div class="real-estate-agent">
                                <div class="agent-img">
                                    <a href="team-details.html"><img src="img/blog/author.jpg" alt="#"></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badg">For Rent</li>
                                </ul>
                            </div>
                            <h2 class="product-title"><a href="product-details.html">New Apartment Nice View</a></h2>
                            <div class="product-img-location">
                                <ul>
                                    <li>
                                        <a href="product-details.html"><i class="flaticon-pin"></i> Belmont Gardens, Chicago</a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                <li><span>3 </span>
                                    Bed
                                </li>
                                <li><span>2 </span>
                                    Bath
                                </li>
                                <li><span>3450 </span>
                                    Square Ft
                                </li>
                            </ul>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                            <i class="flaticon-expand"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="flaticon-heart-1"></i></a>
                                    </li>
                                    <li>
                                        <a href="portfolio-details.html" title="Compare">
                                            <i class="flaticon-add"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-info-bottom">
                            <div class="product-price">
                                <span>$349,00<label>/Month</label></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
      
        </div>
    </div>
      
 

    <!-- CALL TO ACTION START (call-to-action-6) -->
<?php include ("footer.php");?>
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/4.png" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                </ul>
                                            </div>
                                            <h3>Brake Conversion Kit</h3>
                                            <div class="product-price">
                                                <span>$149.00</span>
                                                <del>$165.00</del>
                                            </div>
                                            <div class="modal-product-meta ltn__product-details-menu-1">
                                                <ul>
                                                    <li>
                                                        <strong>Categories:</strong> 
                                                        <span>
                                                            <a href="#">Parts</a>
                                                            <a href="#">Car</a>
                                                            <a href="#">Seat</a>
                                                            <a href="#">Cover</a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-2">
                                                <ul>
                                                    <li>
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span>ADD TO CART</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-3">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                            <i class="far fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                            <i class="fas fa-exchange-alt"></i>
                                                            <span>Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li>Share:</li>
                                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/1.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="product-details.html">Brake Conversion Kit</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                            <div class="btn-wrapper">
                                                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                                <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/7.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="product-details.html">Brake Conversion Kit</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Wishlist</p>
                                            <div class="btn-wrapper">
                                                <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AREA END -->

</div>
                        <?php 
						}
					 }
					 else
					 {
						echo mysqli_error($link); 
					 }
					?>

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  
</body>

<!-- Mirrored from maelectrics.com/tf/html/quarter-preview/quarter/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 22:25:50 GMT -->
</html>

