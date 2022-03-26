<?php
error_reporting(0);
session_start();
include("../cpanel/link.php");
if (empty($_SESSION['LOGIN_STATE'])) {
  echo '<script> location.href="login";</script>';
  exit();
}


$_SESSION['US_mail'];
$_SESSION['US_fn'];
$_SESSION['US_ln'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Novazarc Properties | Admin - Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <?php include("../links/jsStyles.php"); ?>



</head>

<body class="hold-transition sidebar-mini layout-fixed" onload="searchdata()">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"> </i></a>
        </li>
      </ul>
    </nav>


    <?php include("../links/userLinks.php"); ?>
    <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style=" min-height: 550px;">

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h3 class="m-0">Add Listing</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../">Portal Home</a></li>

              </ol>
            </div>
          </div>
        </div>
      </div>


      <section class="content">
        <div class="container-fluid">
          <div class="card card-default">
            <div class="card-header"> </div>

            <div class="card-body">
              <form id="mydata" method="post" onSubmit="return false">


                <div id="part1">
                  <p> Note: Fields with astericks are compulsory </p>

                  <div class="row" id="moree">
                    <h3 class="card-title">Property Description</h3>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Category * </label>
                        <select class="form-control" id="category" name="category" style="width: 100%;">
                          <option Value="" selected="selected">Select</option>
                          <option value="7">Apartments</option>
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
                        <label>purpose * </label>
                        <select name="purpose" class="nice-select form-control" id="purpose" onChange="changeRentAndSale()">
                          <option Value="" selected="selected">Select</option>
                          <option value="1">For rent</option>
                          <option value="2">For sale</option>
                        </select>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Description * </label>
                        <textarea class="form-control" name="description" id="description" rows="4" style="width: 100%;" placeholder="Description here"></textarea>
                      </div>

                    </div>

                  </div>

                  <br>
                  <h5>Location</h5>
                  <div class="row">

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Country * </label>
                        <select class="form-control" name="country" id="country" onChange="Change_country()">
                          <option value="" selected="selected">Select</option>
                          <?php
                          $mo = mysqli_query($link, "SELECT * FROM country
                                  ORDER BY cname ASC
                                  ");
                          while ($row = mysqli_fetch_array($mo)) {
                          ?>
                            <option><?php echo $row['cname']; ?> </option>
                          <?php

                          }

                          ?>
                        </select>
                      </div>
                    </div>
                    <div style="display:none" id="agent" class="col-md-12">
                      <div class="col-md-4" id="agency">
                        <div class="form-group">
                          <label>Agency fee</label>
                          <input type="text" class="form-control" name="agent_fee" id="agent_fee" placeholder="Agency fee">
                        </div>
                      </div>
                      <div class="col-md-4" id="commission">
                        <div class="form-group">
                          <label>Commission fee</label>
                          <input type="text" class="form-control" name="commission_fee" id="commission_fee" placeholder="Commission fee">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Legal and agreement fee</label>
                          <input type="text" class="form-control" name="agreement_fee" id="agreement_fee" placeholder="Legal and agreement fee">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <!-- /.form-group -->
                      <div class="form-group" id="localset1" style="display:none">
                        <label>State * </label>
                        <select class="form-control" name="state" id="state" onChange="Change_state()">
                          <option value="" selected="selected">Select</option>
                          <?php
                          $mo = mysqli_query($link, "SELECT * FROM states
                                  ORDER BY state ASC
                                  ");
                          while ($row = mysqli_fetch_array($mo)) {

                          ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['state']; ?> </option>
                          <?php

                          }

                          ?>

                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group" id="localset2" style="display:none">
                        <label>L. G. A.</label>
                        <select class="form-control" name="lga" id="lga">
                          <option value="" selected="selected">Select</option>
                        </select>
                      </div>
                    </div>


                    <div class="col-md-4">
                      <!-- /.form-group -->
                      <div class="form-group" id="nonset1" style="display:none">
                        <label>State</label>
                        <input type="text" class="form-control" name="state" id="state" style="width: 100%;">

                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group" id="nonset2" style="display:none">
                        <label>L. G. A.</label>
                        <input type="text" class="form-control" name="lga" id="lga" style="width: 100%;">

                      </div>
                    </div>

                  </div>
                  <br>
                  <h5>Property Address </h5>
                  <div class="row">

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Address * </label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Property address">
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Estate name</label>
                        <input type="text" class="form-control" name="estname" id="estname" placeholder="Estate name">
                      </div>

                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Property dimension (Sqm) * </label>
                        <input type="text" class="form-control" name="psize" id="psize" placeholder="E.g. 123 X 134">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Parking space * </label>
                        <select type="text" class="form-control" name="pspace" id="pspace">
                          <option value="" selected="Selected">Select </option>
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
                        <label>Property type </label>
                        <select class="form-control" name="ptype" id="ptype" style="width: 100%;">
                          <option value="" selected="selected">Select</option>
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
                        <label>Condition * </label>
                        <select name="condition" class="nice-select form-control" id="condition">
                          <option Value="" selected="selected">Select</option>
                          <option value="1">Faily Used</option>
                          <option value="2">Newly Built</option>
                          <option value="3">Used</option>
                        </select>
                      </div>

                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Furnishing * </label>
                        <select name="furnishing" class="nice-select form-control" id="furnishing">
                          <option Value="" selected="selected">Select</option>
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
                        <label>Bedrooms * </label>
                        <input type="text" class="form-control" name="broom" id="broom" placeholder="1 - 200 ">

                      </div>
                    </div>

                    <div class="col-md-4">

                      <!-- /.form-group -->
                      <div class="form-group">
                        <label>Bathrooms * </label>
                        <input type="text" class="form-control" name="batroom" id="batroom" placeholder="1 - 200 ">
                      </div>

                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Toilets * </label>
                        <input type="text" class="form-control" name="toilet" id="toilet" placeholder="1 - 200 ">
                      </div>

                    </div>
                  </div>

                  <h5> Pricing / Negotiation</h5>

                  <div class="row">
                    <div class="col-md-4">
                      <label>Price * </label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="text-decoration: line-through"><del>N</del></span>
                        </div>

                        <input type="number" class="form-control" name="price" id="price" placeholder="Price in figure">

                      </div>
                    </div>

                    <div class="col-md-4">

                      <div class="form-group">
                        <label>Negotiable * </label>
                        <select type="text" class="form-control" name="negotiate" id="negotiate">
                          <option value="" selected="Selected">Select </option>
                          <option value="1">Negotiable </option>
                          <option value="2"> Non Negotiable</option>
                        </select>
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <br>
                        <input type="submit" onClick="Hide()" class="btn btn-primary" value="Next">
                      </div>

                    </div>
                  </div>


                </div>
                <br>

                <div id="part2" style="display: none">
                  <h4>Facilities</h4>

                  <hr>

                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> 24 Hours Electricity</label> <br>
                        <input type="checkbox" name="electricity" id="electricity" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Air Conditioning</label> <br>
                        <input type="checkbox" name="aircondition" id="aircondition" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Apartment</label> <br>
                        <input type="checkbox" name="apartment" id="apartment" value="yes">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Balcony</label> <br>
                        <input type="checkbox" name="balcony" id="balcony" value="yes">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Chandelier</label> <br>
                        <input type="checkbox" name="chandelier" id="chandelier" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Dinning Areas </label> <br>
                        <input type="checkbox" name="dinningarea" id="dinningarea" value="yes">

                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Dishwasher</label> <br>
                        <input type="checkbox" name="dishwasher" id="dishwasher" value="yes">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Hot Water</label> <br>
                        <input type="checkbox" name="hotwater" id="hotwater" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Kitchen Cabinet</label> <br>
                        <input type="checkbox" name="kitchencabinet" id="kitchencabinet" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Microwave</label> <br>
                        <input type="checkbox" name="microwave" id="microwave" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Pop Ceiling</label> <br>
                        <input type="checkbox" name="popceiling" id="popceiling" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Pre paid Meter </label> <br>
                        <input type="checkbox" name="prepaidmeter" id="prepaidmeter" value="yes">

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Refrigerator</label> <br>
                        <input type="checkbox" name="refrigerator" id="refrigerator" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Tiled Floor</label> <br>
                        <input type="checkbox" name="tilefloor" id="tilefloor" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> TV</label> <br>
                        <input type="checkbox" name="tv" id="tv" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Wardrobe</label> <br>
                        <input type="checkbox" name="wardrobe" id="wardrobe" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Wi-fi</label> <br>
                        <input type="checkbox" name="wifi" id="wifi" value="yes">

                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label> Kitchen Shelf </label> <br>
                        <input type="checkbox" name="kitchenshelf" id="kitchenshelf" value="yes">

                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <br>
                        <input type="submit" onClick=" Show()" class="btn btn-primary" value="Previous">
                      </div>

                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <br>
                        <input type="submit" onClick="Postings()" id="btnsave" class="btn btn-primary" value="Add listing">
                      </div>

                    </div>
                  </div>

                </div>

                <div id="lres" class="text-center"></div>


              </form>

            </div>
            <div class="card-footer"> Product listing </div>
          </div>

          <div class="card card-default" id="imagesload" style="display: none; min-height: 350px;">
            <div class="card-header"> Upload images</div>

            <div class="card-body">
              <p>an Ad should have minimum of 5 images.
              </p>
              <form method='post' id="myformdata" action='' onSubmit="return false;">
                <div class="row">

                  <div class="col-md-6">
                    <div class="form-group">
                      <p>
                        <input type="file" name="myfiles[]" id="myfiles" multiple>
                      </p>
                    </div>
                    <p id="wke"> </p>

                    <div class="form-group">
                      <br>
                      <input type="submit" onClick="Doneall()" id="btnsave" class="btn btn-primary" value="Done">
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div>

        </div>
      </section>

    </div>



    <?php include("../links/footer.php"); ?>
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
    function Postings() {

      var fd = new FormData($("#mydata")[0]);

      $('#btnsave').attr('disabled', true);
      $('#lres').html("<span style='padding:5px;color: green; font-size: 25px;'> Please wait... uploading your data. </span>")
      $.ajax({
        url: '../assets/',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(data) {
          $('#lres').html(data);

          if (data.includes("Good")) {

            document.getElementById("part2").style.display = 'none';
            document.getElementById("lres").style.display = 'none';
            document.getElementById("moree").style.display = 'none';
            document.getElementById("imagesload").style.display = 'block';


          } else {
            $('#btnsave').attr('disabled', false);
            document.getElementById("part2").style.display = 'block';
            document.getElementById("lres").style.display = 'block';
            document.getElementById("imagesload").style.display = 'none';
            document.getElementById("moree").style.display = 'block';
          }
        }
      });



    }


    function Change_country() {
      var country = document.getElementById("country").value

      if (country == "") {
        document.getElementById("localset1").style.display = 'none';
        document.getElementById("localset2").style.display = 'none';
        document.getElementById("nonset1").style.display = 'none';
        document.getElementById("nonset2").style.display = 'none';


      } else if (country == "Nigeria") {
        document.getElementById("localset1").style.display = 'block';
        document.getElementById("localset2").style.display = 'block';
        document.getElementById("nonset1").style.display = 'none';
        document.getElementById("nonset2").style.display = 'none';
      } else {
        document.getElementById("localset1").style.display = 'none';
        document.getElementById("localset2").style.display = 'none';
        document.getElementById("nonset1").style.display = 'block';
        document.getElementById("nonset2").style.display = 'block';
      }
    }

    function changeRentAndSale() {
      var purpose = document.getElementById("purpose").value
      var agent = document.getElementById("agency");
      var commission = document.getElementById("commission");
      
      if (purpose == "1") {
        document.getElementById("agent").style.display = 'block'
        agent.style.display = 'block';
        commission.style.display = 'none'
      } else if (purpose == "2") {
        document.getElementById("agent").style.display = 'block'
        agent.style.display = 'none';
        commission.style.display = 'block'
      }
    }

    function Change_state() {
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.open("GET", "nichcall.php?viewme=" + document.getElementById("state").value, false);
      xmlhttp.send(null);
      document.getElementById("lga").innerHTML = xmlhttp.responseText;
    }

    function Hide() {

      var cate = $('#category').val();
      var catedesc = $('#description').val();
      var price = $('#price').val();
      var size = $('#psize').val();
      var address = $('#address').val();
      var country = $('#country').val();
      var state = $('#state').val();



      if (cate != "" && catedesc != "" && price != "" && address != "" && size != "") {

        document.getElementById("part1").style.display = 'none';
        document.getElementById("part2").style.display = 'block';


      } else {
        $('#lres').html("<span style='padding:5px;color:#f00'> Fields with asterisks are required </span>")
        $(this).delay(4000).queue(function() {
          $('#lres').html("<span style='padding:5px;color:#fff'></span>")
          $(this).dequeue();
        });
      }





    }

    function Show() {

      document.getElementById("part1").style.display = 'block';
      document.getElementById("part2").style.display = 'none';

    }
  </script>
  <script>
    $(document).ready(function() {
      $('#myfiles').change(function() {
        //alert("Ok");
        var fd = new FormData($("#myformdata")[0]);
        $('#wke').html("<span style='padding:5px;color: green; font-size: 25px;'> Please wait... uploading your image. </span>")

        $.ajax({
          url: '../assets/image.php',
          method: 'POST',
          data: fd,
          contentType: false,
          processData: false,
          success: function(data) {

            if (data.includes("Network")) {

              $('#wke').html('Bad network. Image could not be uploaded.');
            } else if (data.includes("Done")) {
              $('#wke').html('Image uploaded. You can upload more images');
              $(this).delay(10).queue(function() {
                $(this).dequeue();
              });
              searchdata();
            }


          }
        });
      });

    });


    function searchdata() {
      var typ = 'searchdata';

      $.ajax({
        url: "fetchfeatures.php",
        data: {
          typ: typ
        },
        type: "POST",
        success: function(result) {
          $("#wke").html(result);
        }
      });
    }

    function Doneall() {
      location.href = "/novaz";
    }
  </script>
</body>

</html>