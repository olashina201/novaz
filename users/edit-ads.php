<?php 

session_start();
include("../cpanel/link.php");
if(empty($_SESSION['LOGIN_STATE']))
{
			echo '<script> location.href="login";</script>';
exit();
}
 
$ids = $_GET['sads'] ;

$uml = $_SESSION['US_mail'] ;
$_SESSION['US_fn'] ;
$_SESSION['US_ln'] ;


include("fetch.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Novazarc Properties   | Update Ads </title>

  <!-- Google Font: Source Sans Pro -->
  <?php include("../links/jsStyles.php");?>
  <script>



    var Chng = function(event) 
    {
      var image = document.getElementById('ovo');
    
      image.src = URL.createObjectURL(event.target.files[0]);
    };

    var Chg = function(event) 
    {
      var image = document.getElementById('ive');
    
      image.src = URL.createObjectURL(event.target.files[0]);
    };

    var Era = function(event) 
    {
      var image = document.getElementById('era');
    
      image.src = URL.createObjectURL(event.target.files[0]);
    };

    var Ene = function(event) 
    {
      var image = document.getElementById('ene');
    
      image.src = URL.createObjectURL(event.target.files[0]);
    };

    var Iyori = function(event) 
    {
      var image = document.getElementById('iyori');
    
      image.src = URL.createObjectURL(event.target.files[0]);
    };

    var Esa = function(event) 
    {
      var image = document.getElementById('esa');
    
      image.src = URL.createObjectURL(event.target.files[0]);
    };

    var Ighwe = function(event) 
    {
      var image = document.getElementById('ighwe');
    
      image.src = URL.createObjectURL(event.target.files[0]);
    };

    var Elele = function(event) 
    {
      var image = document.getElementById('elele');
    
      image.src = URL.createObjectURL(event.target.files[0]);
    };

    var Irili = function(event) 
    {
      var image = document.getElementById('irili');
    
      image.src = URL.createObjectURL(event.target.files[0]);
    };

    var Ihwe = function(event) 
    {
      var image = document.getElementById('ihwe');
    
      image.src = URL.createObjectURL(event.target.files[0]);
    };
</script> 

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>  
  </nav>
 

<?php include ("../links/userLinks.php"); ?>
  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  min-height: 550px;" >
     
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Update Ads</h3>
          </div>  
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right" style="display:;">
              <li class="breadcrumb-item"><a href="../">Portal Home</a></li>
              
            </ol>
            
          </div>
        </div> 
      </div>
    </div>
    
    
    <section class="content" style="display: ;">
       <div class="container-fluid">
          <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Property Description</h3>
            </div>
      
            <div class="card-body">
            <form id="mydata" method="post" onSubmit="return false"> 
             <label>Add Images</label>
              <div class="row">
                    <div class="col-md-1">
                      <div class="form-group">
                        <p><img src="../uploads/<?php echo $rows['imagepath']; ?>" id="ovo" width="70" height="70" style=" border-style:none;"> 
                         </p>
                        <p>
                          <input type="file" name="one" id="one" style="display: none;" onChange="Chng(event)">
                          <label for="one" style="cursor: pointer; color:#ABA6BF; font-size:10px;" >Upload Image1</label>
                        </p>
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="form-group">
                      <p><img  src="../uploads/<?php echo $rows['img2']; ?>" id="ive" width="70" height="70" style=" border-style:none;">  </p>
                        <p>
                          <input type="file" name="two" id="two" style="display: none;" onChange="Chg(event)">
                          <label for="two" style="cursor: pointer; color:#ABA6BF; font-size: 10px;" >Upload Image2</label>
                        </p>
                      </div>
                    </div>

                    <div class="col-md-1">
                      <div class="form-group">
                      <p><img  src="../uploads/<?php echo $rows['img3']; ?>" id="era" width="70" height="70" style=" border-style:none;">  </p>
                        <p>
                          <input type="file" name="three" id="three" style="display: none;" onChange="Era(event)">
                          <label for="three" style="cursor: pointer; color:#ABA6BF; font-size: 10px;" >Upload Image 3</label>
                        </p>
                      </div>
                    </div>

                    <div class="col-md-1">
                      <div class="form-group">
                      <p><img  src="../uploads/<?php echo $rows['img4']; ?>" id="ene" width="70" height="70" style=" border-style:none;">  </p>
                        <p>
                          <input type="file" name="four" id="four" style="display: none;" onChange="Ene(event)">
                          <label for="four" style="cursor: pointer; color:#ABA6BF; font-size: 10px;" >Upload Image4</label>
                        </p>
                      </div>
                    </div>

                    <div class="col-md-1">
                      <div class="form-group">
                      <p><img  src="../uploads/<?php echo $rows['img5']; ?>" id="iyori" width="70" height="70" style=" border-style:none;">  </p>
                        <p>
                          <input type="file" name="five" id="five" style="display: none;" onChange="Iyori(event)">
                          <label for="five" style="cursor: pointer; color:#ABA6BF; font-size: 10px;" >Upload Image 5</label>
                        </p>
                      </div>
                    </div>
                  <div class="col-md-1">
                        <div class="form-group">
                          <p><img  src="../uploads/<?php echo $rows['img6']; ?>" id="esa" width="70" height="70" style=" border-style:none;">  </p>
                            <p>
                              <input type="file" name="six" id="six" style="display: none;" onChange="Esa(event)">
                              <label for="six" style="cursor: pointer; color:#ABA6BF; font-size: 10px;" >Upload Image 6</label>
                            </p>
                          </div>
                  </div>
                  <div class="col-md-1">
                        <div class="form-group">
                          <p><img  src="../uploads/<?php echo $rows['img7']; ?>" id="ighwe" width="70" height="70" style=" border-style:none;">  </p>
                            <p>
                              <input type="file" name="seven" id="seven" style="display: none;" onChange="Ighwe(event)">
                              <label for="seven" style="cursor: pointer; color:#ABA6BF; font-size: 10px;" >Upload Image 7</label>
                            </p>
                          </div>
                  </div>
                  <div class="col-md-1">
                        <div class="form-group">
                          <p><img  src="../uploads/<?php echo $rows['img8']; ?>" id="elele" width="70" height="70" style=" border-style:none;">  </p>
                            <p>
                              <input type="file" name="eight" id="eight" style="display: none;" onChange="Elele(event)">
                              <label for="eight" style="cursor: pointer; color:#ABA6BF; font-size: 10px;" >Upload Image8</label>
                            </p>
                          </div>
                  </div>

                  <div class="col-md-1">
                        <div class="form-group">
                          <p><img  src="../uploads/<?php echo $rows['img9']; ?>" id="erili" width="70" height="70" style=" border-style:none;">  </p>
                            <p>
                              <input type="file" name="nine" id="nine" style="display: none;" onChange="Erili(event)">
                              <label for="nine" style="cursor: pointer; color:#ABA6BF; font-size: 10px;" >Upload Image9</label>
                            </p>
                          </div>
                  </div>

                  <div class="col-md-1">
                        <div class="form-group">
                          <p><img  src="../uploads/<?php echo $rows['img10']; ?>" id="ihwe" width="70" height="70" style=" border-style:none;">  </p>
                            <p>
                              <input type="file" name="ten" id="ten" style="display: none;" onChange="Ihwe(event)">
                              <label for="ten" style="cursor: pointer; color:#ABA6BF; font-size: 10px;" >Upload Image10</label>
                            </p>
                          </div>
                  </div>

              </div>
              <br>


            <div class="row">

                  <div class="col-md-3">
                    <div class="form-group">
                            <label>Category</label> 
                        <select class="form-control" id="category" name="category" style="width: 100%;">
                                                            <option Value ="<?php echo $rows['cate'];?>" selected="selected"><?php echo $cate;?></option>
                                                            <option value="1">Houses</option>
                                                            <option value="2">Hostel</option>
                                                            <option value="3">Lands</option>
                                                            <option value="4">Shortlet</option>
                                                            <option value="5">Shops</option>
                                                            <option value="6">Offices</option> 
                         </select>
                    </div>
                  </div>
                <div class="col-md-3">
                     <div class="form-group">
                       <label>purpose</label>
                      <select name="purpose" class="nice-select form-control" id="purpose">
                                                    <option Value ="<?php echo $rows['purpose'];?>" selected="selected"><?php echo $pup;?></option>
                                                    <option value="1">For rent</option>
                                                    <option value="2">For sale</option>
                      </select>
                     </div>
                   
                </div>
                <div class="col-md-6">
                     <div class="form-group">
                       <label>Description</label>
                       <textarea class="form-control" name="description" id="description" rows="4" style="width: 100%;"><?php echo $rows['catedescript'];?></textarea>
                     </div>
                   
                </div>
            </div>

              <br>
              <h5>Location</h5>
              <div class="row">
               
                  <div class="col-md-4">
                    <div class="form-group">
                            <label>Country</label>
                        <select class="form-control" name="country" id="country"  onChange="Change_country()">
                            <option value="<?php echo $rows['purpose'];?>" selected="selected"><?php echo $rows['country'];?></option>
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
                 
                <div class="col-md-4">
                      <!-- /.form-group -->
                     <div class="form-group" id="localset1" style="display:none">
                       <label>State</label>
                       <select class="form-control" name="state" id="state" onChange="Change_state()">
                         <option value="<?php echo $rows['state'];?>" selected="selected"><?php echo $rows['state'];?></option>
                           <?php 
														$mo = mysqli_query($link, "SELECT * FROM states
														ORDER BY state ASC
														");
														while($row = mysqli_fetch_array($mo))
														{
															
												  	?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['state'];?> </option>
                            <?php
															
														}
														
														?>
                         
                        </select>
                     </div>
                 </div>
                <div class="col-md-4" >
                        <div class="form-group" id="localset2" style="display:none">
                        <label>L. G. A.</label>
                        <select class="form-control" name="lga" id="lga">
                          <option value="<?php echo $rows['lga'];?>" selected="selected"><?php echo $rows['lga'];?></option>
                        </select>
                      </div>
                </div>
             
                  
                <div class="col-md-4" >
                      <!-- /.form-group -->
                     <div class="form-group" id="nonset1" style="display:none">
                       <label>State</label>
                       <input type="text" class="form-control" name="state" id="state" value="<?php echo $rows['state'];?>">
                          
                     </div>
                 </div>
                <div class="col-md-4">
                        <div class="form-group" id="nonset2" style="display:none">
                        <label>L. G. A.</label>
                        <input type="text" class="form-control" name="lga" id="lga" <?php echo $rows['lga'];?>>
                         
                      </div>
                </div>
             
              </div>
              <br>
              <h5>Property Address</h5>
              <div class="row">
             
                  <div class="col-md-3">
                         <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" id="address" value="<?php echo $rows['address'];?>">
                        </div>
                  </div>
                  
                <div class="col-md-3">
                     <div class="form-group">
                       <label>Estate name</label>
                       <input type="text" class="form-control" name="estname" id="estname" value="<?php echo $rows['estname'];?>">
                     </div>
                   
                </div>

                  <div class="col-md-3">
                      <div class="form-group">
                       <label>Property size (Sqm)</label>
                       <input type="text" class="form-control" name="psize" id="psize" value="<?php echo $rows['psize'];?>">
                     </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                       <label>Parking space</label>
                       <select type="text" class="form-control" name="pspace" id="pspace">
                            <option value="<?php echo $pspace;?>" selected="Selected"><?php echo $rows['pspace'];?></option>
                            <option value="1">Yes </option>
                            <option value="2"> No</option>
                        </select>
                     </div>
                   
                </div>
              </div>
            
                <h5> Property Status</h5>
           
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                            <label>Property type</label>
                        <select class="form-control" name="ptype" id="ptype" style="width: 100%;">
                            <option value="<?php echo $rows['ptype'];  ?>" selected="selected"><?php echo $ptype;?></option>
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
                      
                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Condition</label>
                        <select name="condition" class="nice-select form-control" id="condition">
                                                          <option Value ="<?php echo $rows['condition'];  ?>" selected="selected"><?php echo $condition;?></option>
                                                          <option value="1">Faily Used</option>
                                                          <option value="2">Newly Built</option>
                                                          <option value="3">Used</option>
                                                      </select>
                      </div>
                    
                  </div>

                  <div class="col-md-4">
                        <div class="form-group">
                        <label>Furnishing</label>
                        <select name="furnishing" class="nice-select form-control" id="furnishing">
                                                          <option Value ="<?php echo $rows['furnit'] ?>" selected="selected"> <?php echo $furnit; ?></option>
                                                          <option value="1">Semi Furnishing</option>
                                                          <option value="2">Furnished</option>
                                                          <option value="3">Not Furnished</option>
                                                      </select>
                      </div>
                    
                  </div>
            </div> 
            
            <h5> Interior Facilities</h5>
           
            <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                            <label>Bedrooms</label>
                        <input type="text" class="form-control" name="broom" id="broom" placeholder="1 - 200 " value =" <?php echo $rows['broom'] ?> ">
                   
                    </div>
                  </div>
                  
                <div class="col-md-4">
                     
                     <!-- /.form-group -->
                     <div class="form-group">
                       <label>Bathrooms</label>
                       <input type="text" class="form-control" name="batroom" id="batroom" placeholder="1 - 200 " value = "<?php echo $rows['batroom'] ?> ">
                     </div>
                   
                </div>

                <div class="col-md-4">
                      <div class="form-group">
                       <label>Toilets</label>
                       <input type="text" class="form-control" name="toilet" id="toilet" placeholder="1 - 200" value= "<?php echo $rows['toilet'] ?> ">
                     </div>
                   
                </div>
            </div> 

            <h5> Pricing / Negotiation</h5>
           
            <div class="row">
                  <div class="col-md-4">
                  <label>Price </label> 
                    <div class="input-group mb-3">
                             <div class="input-group-prepend">
                                <span class="input-group-text" style="text-decoration: line-through"><del>N</del></span>
                            </div>
                           
                        <input type="text" class="form-control" name="price" id="price" placeholder="Price in figure" value="<?php echo $rows['price'] ?>">
                   
                    </div>
                  </div>
                  
                <div class="col-md-4">

                     <div class="form-group">
                       <label>Negotiable</label>
                        <select type="text" class="form-control" name="negotiate" id="negotiate">
                            <option value="<?php echo $rows['negotiable'] ?>" selected="Selected"><?php echo $negotiable ; ?> </option>
                            <option value="1">Negotiable </option>
                            <option value="2"> Non Negotiable</option>
                        </select>
                     </div>
                   
                </div>
            </div> 
       
<br>
                <h4>Facilities</h4>
                
                <hr>

            <div class="row">
                   <div class="col-md-2">
                    <div class="form-group">
                    <label> 24 Hours Electricity</label> <br>   
                             <input type="checkbox" id="electricity">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                        <label> Air Conditioning</label> <br>   
                              <input type="checkbox" id="aricondition">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                        <label> Apartment</label> <br>   
                              <input type="checkbox" id="apartment">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                    <label> Balcony</label> <br>   
                              <input type="checkbox" id="balcony">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                    <label> Chandelier</label> <br>   
                              <input type="checkbox" id="chandelier">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                     <label> Dinning Areas </label> <br>   
                              <input type="checkbox" id="dinningarea">    
                    
                    </div>
                  </div>
                 
            </div> 

            <div class="row">
                   <div class="col-md-2">
                    <div class="form-group">
                    <label> Dishwasher</label> <br>   
                             <input type="checkbox" id="dishwasher">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                        <label> Hot Water</label> <br>   
                              <input type="checkbox" id="hotwater">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                        <label> Kitchen Cabinet</label> <br>   
                              <input type="checkbox" id="kitchencabinet">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                    <label> Microwave</label> <br>   
                              <input type="checkbox" id="microwave">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                    <label> Pop Ceiling</label> <br>   
                              <input type="checkbox" id="popceiling">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                     <label> Pre paid Meter </label> <br>   
                              <input type="checkbox" id="prepaidmeter">    
                    
                    </div>
                  </div>
             </div> 
            <div class="row">
                   <div class="col-md-2">
                    <div class="form-group">
                    <label> Refrigerator</label> <br>   
                             <input type="checkbox" id="refrigerator">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                        <label> Tiled Floor</label> <br>   
                              <input type="checkbox" id="tilefloor">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                        <label> TV</label> <br>   
                              <input type="checkbox" id="tv">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                    <label> Wardrobe</label> <br>   
                              <input type="checkbox" id="wardrobe">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                    <label> Wi-fi</label> <br>   
                              <input type="checkbox" id="wifi">    
                    
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                     <label> Kitchen Shelf </label> <br>   
                              <input type="checkbox" id="kitchenshelf">    
                    
                    </div>
                  </div>
            </div> 
            
            <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                          <br>
                        <input type="submit" onClick=" Postings()" class="btn btn-primary" value="Add listing">
                     </div>
                   
                  </div>
            </div>
            <div id="lres" class="text-center"></div>

        </form>

              </div>
             <div class="card-footer"> Product listing    </div>
        </div>
      </div>
    </section>
     
  </div>

 

  <?php include ("../links/footer.php"); ?> 
</div>


<script src="../plugins/jquery/jquery.min.js"></script>


<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>

<script>
function Postings()
{
  		
  			var fd = new FormData($("#mydata")[0]);

        var one = $('#one').val();
        var two = $('#two').val();
        var three = $('#three').val();
        var four = $('#four').val();
        var five = $('#five').val();
        var osixne = $('#six').val();
            var cate = $('#category').val();
            var catedesc = $('#description').val();
            var price = $('#price').val();
            var size = $('#psize').val();
            var address = $('#address').val();
            var country = $('#country').val();
            var state = $('#state').val();
  		
            var basename = one.replace(/\\/g,'/').replace(/.*\//, '');
            var basenamet = one.replace(/\\/g,'/').replace(/.*\//, '');
            var basenameth = one.replace(/\\/g,'/').replace(/.*\//, '');
            var basenamef = one.replace(/\\/g,'/').replace(/.*\//, '');
            var basenamefi = one.replace(/\\/g,'/').replace(/.*\//, '');
            var basenames = one.replace(/\\/g,'/').replace(/.*\//, '');
			var fileParts = $("#one").val().split(".");
 			 
		 
             if(cate !="" && catedesc !=""&& price !="" && size !="" && address !="" && basename !=""
             && basenamet !="" && basenameth !="" && basenamef !="" && basenamefi !="" && basenames !="")
            {
              
              $.ajax({
              url: '../assets/',
              type: 'post',
              data: fd,
              contentType: false,
              processData: false,
			        success: function(data)
                    {
                      $('#lres').html(data);
                     
                        if(data.includes("Good"))
                        {
                          $('#lres').html("<span style='padding:5px;color:green;'>Operation Successful</span>")
                             $(this).delay(1000).queue(function() {
                            location.href="add-listing";
                            $(this).dequeue();
                            });      
                        }    
                    }                
           });
            }
            else
            {
                $('#lres').html("<span style='padding:5px;color:#f00'> Upload at least 6 images and all fields required!</span>")
                            $(this).delay(2000).queue(function() {
                $('#lres').html("<span style='padding:5px;color:#fff'></span>")
                            $(this).dequeue();
                            });      
            }

			
}


function Change_country()
			{
				var country = document.getElementById("country").value
				
				if(country =="")
				{
          document.getElementById("localset1").style.display = 'none';
          document.getElementById("localset2").style.display = 'none';
          document.getElementById("nonset1").style.display = 'none';
          document.getElementById("nonset2").style.display = 'none';
          
				
 				}
				else if(country =="Nigeria")
				{
          document.getElementById("localset1").style.display = 'block';
          document.getElementById("localset2").style.display = 'block';
          document.getElementById("nonset1").style.display = 'none';
          document.getElementById("nonset2").style.display = 'none';
 				}
 				else
				{
          document.getElementById("localset1").style.display = 'none';
          document.getElementById("localset2").style.display = 'none';
          document.getElementById("nonset1").style.display = 'block';
          document.getElementById("nonset2").style.display = 'block';
				}
			}

function Change_state()
{

        var xmlhttp=new XMLHttpRequest();
				
				xmlhttp.open("GET", "nichcall.php?viewme="+ document.getElementById("state").value,false);
				xmlhttp.send(null);
        document.getElementById("lga").innerHTML = xmlhttp.responseText;
				
}

</script>
</body>
</html>
