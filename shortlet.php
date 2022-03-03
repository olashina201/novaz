<?php include ("cpanel/link.php");?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from maelectrics.com/tf/html/quarter-preview/quarter/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 22:25:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>NOVAZ ARC - PROPERTY MANAGEMENT | Shot Let</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
<?php include("files.php"); ?>

</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="wrapper">

    <!-- HEADER AREA START (header-5) -->
<?php include("navs.php"); ?>
    <!-- HEADER AREA END -->

    <!-- Utilize Cart Menu Start -->
    <?php include ("navmobile.php");?>

 
    <div class="ltn__utilize-overlay"></div>

     <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Shortlet</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="../"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Shortlet</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    <div class="ltn__product-area ltn__product-gutter mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__shop-options">
                        <ul>
                            <li>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                    </div>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row ltn__product-slider-item-three-active slick-arrow-1">
                                        <?php //require ("assets/ftprodt.php");
                                        $qr = mysqli_query($link, "SELECT * FROM business WHERE cate !='' AND cate ='4' AND promotion ='active' ");
                                        $bsn = mysqli_num_rows($qr) > 0;
                                                        
                                        ?>
                                        <?php  
                                        if($bsn)
                                        {
                                            while($rowb = mysqli_fetch_assoc($qr))
                                            {
												$uid = $rowb['uid'];
											
 													$busiid = $rowb['busiid'];
														 
													$qs = mysqli_query($link, "SELECT COUNT(*) AS totcount FROM images 
													WHERE transid ='$busiid'");
													if(mysqli_num_rows($qs)>0)
													{
																				 
														while ($row = mysqli_fetch_array($qs))
														{	
																					 
															$myct = $row['totcount'];
																					  
														}
													}											
if($rowb['ptype'] == 1)
{
  $ptype = 'Condo';
}
elseif($rowb['ptype'] == 2) 
{
    $pspace = 'Bungalow';
}
elseif($rowb['ptype'] == 3) 
{
    $ptype = 'Duplex';
}
elseif($rowb['ptype'] == 4) 
{
    $ptype = 'Detach';
}
elseif($rowb['ptype'] == 5) 
{
    $ptype = 'Farmhouse';
}
elseif($rowb['ptype'] == 6) 
{
    $ptype = 'Penthouse';
}
elseif($rowb['ptype'] == 7) 
{
    $ptype = 'Studio';
}
elseif($rowb['ptype'] == 8) 
{
    $ptype = 'Miniflat';
}
elseif($rowb['ptype'] == 9) 
{
    $ptype = 'Villa';
}
elseif($rowb['ptype'] == 10) 
{
    $ptype = 'Mansion';
}
elseif($rowb['ptype'] ==11) 
{
    $ptype = 'Castle';
}
elseif($rowb['ptype'] == 12) 
{
    $ptype = 'Room & Parlor';
}
                                            ?>
                                                         <!-- ltn__product-item -->
                <div class="col-md-3">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img" style="padding-bottom:5px; margin-bottom:5px; max-height:200px; min-height:200px; opacity: 0.5;">
                            <a href="product-details?pid=<?php echo $rowb['id'];?>"><img src="uploads/<?php echo $rowb['image'];?>"  alt="#"/></a>
                            
                            <div class="product-badgel">
                                <ul>
                                <?php 
                                   if($rowb['negotiable'] ==1)
                                   {
									   $uid = $rowb['uid'];

                                        ?>
                                            <li class="sale-badge bg-green"> Negotiable </li>
                                        <?php
                                   }
                                    else
                                    {
                                        ?>
                                        <li class="sale-badge bg-danger">Non Negotiable </li>
                                        <?php
                                    }
                                ?>
                                    
                                     
                                    
                                </ul>
                            </div>
                            <div class="product-badge" >
                            
                                <ul>
                                     
									<?php 
									if($rowb['status'] == 1)
									{
										?>
                                    <li class="sale-badge bg-green">Available</li>
                                        <?php
									}
									elseif($rowb['status'] == 2)
									{
										?>
                                    <li class="sale-badge bg-danger">Not Available</li>
                                        <?php
											
									}
									?>
                                </ul>
                            </div>
                           <div class="product-img-location-gallery" style="padding-left: 10px;" >
                                 <div class="" style="padding-left: 0px;">
                                    <ul>
                                        <li>
                                            <a href="product-details?pid=<?php echo $rowb['id'];?>"><i class="fas fa-camera"></i><?php echo $myct;?></a>
                                        </li>
                                     </ul>
                                </div>
                            </div> 
                         </div>
                         <div style="font-size:11px; padding-left:10px; color:#000;">
						 <strong style="text-transform: uppercase;"><?php echo $rowb['psize']. ' '.$ptype;?> / FOR <?php 
						 if($rowb['purpose'] ==1)
                                    {
                                    echo 'RENT'; 
                                    }
                                    elseif($rowb['purpose'] ==2)
									{
                                    echo 'SALE';
                                    }
						 ?> 
						 </strong> 
						 
						 </div>
                         
                                <div class="product-img-location meright" style="font-size: 12px; padding-left: 10px; margin-bottom: 3px; ">
                                           <i class="flaticon-pin"><?php echo $rowb['address'];?></i>
										   
                                 </div>
                            <div class="product-description" style="color:#090909; line-height: 0.9; padding-left: 10px; padding-right:5px; text-transform: capitalize; font-size: 14px;">
                                <p style="font-weight: bold;"><?php echo $rowb['catedescript'];?>
                                </p>
                            </div>
							<div class="" style="padding-top:0px; margin-top: 0px;" >
								<div class="product-price" style="padding-bottom:0px; margin-top:0px; padding-top: 0px; padding-left: 10px;">
									<div style="padding-bottom:0px; font-size: 14px; margin-top:0px; padding-top: 0px;" id="amount">&#8358; <?php echo number_format($rowb['price'], 2);?> 
									  
									</div>
								</div>
 							</div>
							<?php 
							   include("bbrooms.php");
						    ?>
							<div class="product-info-bottom">
								<div class="real-estate-agent">
								<?php
										$qrs = mysqli_query($link, "SELECT * FROM user WHERE id ='$uid' ");
										$rowu = mysqli_fetch_array($qrs); 

								?>

									<div class="agent-img">
										<img src="upreg/<?php echo $rowu['uimg'];?>" height="40" width="40">
									</div>
									<div class="agent-brief">
										<h6><?php echo $rowu['fname']. ' ' . $rowu['lname'];?></h6>
										<small>Estate Agents</small>
									</div>
								</div>
							 </div>

 	
                     </div>
                </div>
                                                
                                            <?php 
                                            }
                                        }
                                         ?>

                                </div>
                            </div>
                        </div>
                      
                          
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>

 
<?php include("footer.php"); ?>
    <!-- FOOTER AREA END -->

 
 
</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  
</body>

<!-- Mirrored from maelectrics.com/tf/html/quarter-preview/quarter/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Oct 2021 22:25:37 GMT -->
</html>

